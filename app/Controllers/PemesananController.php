<?php

namespace App\Controllers;

use App\Models\EventModel;
use App\Models\CustomerModel;
use App\Models\MemesanModel;

class PemesananController extends BaseController
{
  public function beliTiket($id)
  {

    $model = model(EventModel::class);
    $event = $model->getEventById($id);

    $datetime = new \DateTime($event['jadwal_club']);
    $formattedDate = $datetime->format('d M Y H:i');
    $event['jadwal_club'] = $formattedDate;

    $modelTiket = model(TiketModel::class);
    $tiket = $modelTiket->getTiketById($id);

    $merge = array_merge($event, $tiket);
    $data = ['event' => $merge];

    return view('Tiket_Bola/beli_tiket', $data);
  }

  public function prosesPembelian()
  {
    $nama = $this->request->getPost('nama');
    $nik = $this->request->getPost('nik');
    $no_hp = $this->request->getPost('nomor_hp');
    $email = $this->request->getPost('email');

    $kodeTiket = $this->request->getPost('kode_tiket');
    $tribun = $this->request->getPost('tribun');
    $harga_tiket = $this->request->getPost('harga_tiket');
    $jumlah_pemesanan = $this->request->getPost('jumlah_tiket');

    // Simpan data ke tabel customer
    $customerModel = new CustomerModel();
    $existingCustomer = $customerModel->where('nik', $nik)->first();

    if ($existingCustomer === null) {
      // Jika NIK belum ada, simpan data ke tabel customer
      $customerData = [
        'nik' => $nik,
        'nama_customer' => $nama,
        'no_hp' => $no_hp,
        'email' => $email
      ];
      $customerModel->insert($customerData);
    }

    // Simpan data ke tabel memesan
    $memesanModel = new MemesanModel();
    $no_invoice = $this->generateInvoiceNumber(); // Generate nomor invoice
    $harga_total = $harga_tiket * $jumlah_pemesanan; // Hitung harga total
    $memesanData = [
      'no_invoice' => $no_invoice,
      'kode_tiket' => $kodeTiket,
      'nik' => $nik,
      'tribun' => $tribun,
      'harga_total' => $harga_total,
      'jumlah_tiket' => $jumlah_pemesanan
    ];
    $memesanModel->simpan($memesanData);

    // Set pesan sukses
    $successMessage = 'Data pemesanan berhasil disimpan. Nomor invoice: ' . $no_invoice;

    // Redirect ke halaman sukses
    return view('Tiket_Bola/success');
  }

  private function generateInvoiceNumber()
  {
    $memesanModel = new MemesanModel();

    // Mengambil nomor invoice terakhir dari database
    $lastInvoice = $memesanModel->getLastInvoiceNumber();

    if ($lastInvoice) {
        // Jika sudah ada nomor invoice sebelumnya
        $lastNumber = (int) substr($lastInvoice, -4);
        $newNumber = str_pad($lastNumber + 1, 4, '0', STR_PAD_LEFT);
    } else {
        // Jika belum ada nomor invoice sebelumnya
        $newNumber = '0001';
    }

    return $newNumber;
  }

  public function success()
  {
    return view('Tiket_Bola/success');
  }

  
}
