<?php

namespace App\Controllers;

use App\Models\EventModel;

class Event extends BaseController
{
  public function beliTiket($id)
  {

    $model = model(EventModel::class);
    $event = $model->getEventById($id);

    $modelTiket = model(TiketModel::class);
    $tiket = $modelTiket->getTiketById($id);

    $merge = array_merge($event, $tiket);
    $data = ['event' => $merge];
    return view('Tiket_Bola/beli_tiket', $data);
  }

  public function prosesPembelian()
  {
    $request = $this->request;
    $idEvent = $request->getPost('id_event');
    $nama = $request->getPost('nama');
    $nik = $request->getPost('nik');
    $noHp = $request->getPost('no_hp');
    $email = $request->getPost('email');
    $tribun = $request->getPost('tribun');
    $jumlah = $request->getPost('jumlah');

    // Lakukan validasi data

    // Simpan data ke database atau lakukan operasi lainnya

    // Tampilkan halaman konfirmasi atau redirect ke halaman lain
  }
}
