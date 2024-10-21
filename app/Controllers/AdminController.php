<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\MemesanModel;
use App\Models\EventModel;
use App\Models\TiketModel;

class AdminController extends BaseController
{

    public function login()
    {
        return view('admin/loginpage');
    }

    public function authenticate()
    {

        $post = $this->request->getPost(['username', 'password']);
        $userModel = new UserModel();
        $cek = $userModel->cek($post);

        if ($cek > 0) {
            // Login berhasil
            session()->set('isLoggedIn', true);
            return redirect()->to('/admin/halaman_admin'); // Ganti "/admin/dashboard" dengan halaman admin yang sesuai
        } else {
            // Login gagal
            session()->setFlashdata('message', 'Username atau password salah.');
            return redirect()->to('/admin/login');
        }
    }


    public function logout()
    {
        session()->remove('isLoggedIn');
        return redirect()->to('/admin/login');
    }

    // Metode lain di sini...
    public function halamanAdmin()
    {
        $session = session();
        if ($session->has('isLoggedIn') && $session->get('isLoggedIn') === true) {
            $model = new MemesanModel();
            $data['memesan'] = $model->findAll();
            return view('/admin/halaman-admin', $data);
        } else {
            return redirect()->to('/admin/login');
        }
    }

    public function tambahEvent()
    {
        $session = session();
        if ($session->has('isLoggedIn') && $session->get('isLoggedIn') === true) {
            $model = new EventModel();
            $data['event'] = $model->findAll();
            return view('/admin/tambah-event', $data);
        } else {
            return redirect()->to('/admin/login');
        }
    }


    public function tambahTiket()
    {
        $session = session();
        if ($session->has('isLoggedIn') && $session->get('isLoggedIn') === true) {
            $model = new EventModel();
            $data['event'] = $model->findAll();
            return view('/admin/tambah-tiket', $data);
        } else {
            return redirect()->to('/admin/login');
        }
    }

    public function eventStore()
    {
        $eventModel = new EventModel();
        $lastEvent = $eventModel->getLastEvent();

        $lastEventId = $lastEvent ? intval($lastEvent['id_event']) : 100;
        $newEventId = $lastEventId + 1;

        $eventData = [
            'id_event' => strval($newEventId),
            'nama_event' => $this->request->getPost('nama_event'),
            'jadwal_club' => $this->request->getPost('jadwal_club'),
            'tempat_pertandingan' => "Stadion Maguwoharjo",
            'liga' => $this->request->getPost('liga'),
            'status' => 'tersedia'
            
        ];

        $gambarFile = $this->request->getFile('gambar');
        if ($gambarFile->isValid() && !$gambarFile->hasMoved()) {
            // Generate nama unik untuk file gambar
            $newName = $gambarFile->getName();

            // Pindahkan file gambar ke folder penyimpanan lokal
            $gambarFile->move(ROOTPATH . 'public/assets/img', $newName);

            // Simpan nama gambar ke dalam database
            $eventData['gambar'] = $newName;
        }

        
        $eventModel->insert($eventData);

        // Set flash message or perform other actions upon successful event creation

        return redirect()->to('/admin/tambah_event');
    }

    public function simpanTiket()
{
    $tiketModel = new TiketModel();

    // Mengambil tiket terakhir berdasarkan kode tiket secara descending
    $lastTiket = $tiketModel->orderBy('kode_tiket', 'DESC')->first();

    // Mengekstrak nomor dari kode tiket terakhir dan menambahkannya dengan 1
    $lastTiketNumber = $lastTiket ? intval(substr($lastTiket['kode_tiket'], 3)) : 0;
    $newTiketNumber = $lastTiketNumber + 1;

    // Menghasilkan kode tiket dengan format "TKTXXX"
    $newTiketCode = 'TKT' . sprintf("%03d", $newTiketNumber);

    $idEvent = $this->request->getPost('id_event');
    $hargaTiket = $this->request->getPost('harga_tiket');
    $hargaTiket2 = $this->request->getPost('harga_tiket2');
    

    $tiketData = [
        'kode_tiket' => $newTiketCode,
        'id_event' => $idEvent,
        'harga_tiket' => $hargaTiket,
        'harga_tiket2' => $hargaTiket2,
        
    ];

    $tiketModel->insert($tiketData);

    // Set flash message or perform other actions upon successful tiket creation

    return redirect()->to('/admin/tambah_tiket');
}
}
