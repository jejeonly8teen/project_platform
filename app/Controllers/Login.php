<?php

namespace App\Controllers;

use App\Models\LoginModel;

class Login extends BaseController
{
    protected $model;

    public function __construct()
    {
        $this->model = new LoginModel();
    }

    public function index()
    {
        $data = [
            'login' => $this->model->findAll()
        ];
    }
    public function Login()
    {
        $session = session();
        if ($session->has('pengguna')) {
            $item = $session->get('pengguna');
            if ($item == 'login') {
                return view('admin/halaman-admin');
            } else {
                return view('admin/loginpage');
            }
        }
    }
    public function check()
    {
        $post = $this->request->getPost(['username', 'password']);
        $cek = $this->model->cek($post);
        if ($cek > 0) { // untuk mengecek apakah username dan password sesuai yg diinginkan
            $session = session();
            $session->set('pengguna', $post['username']);
            return redirect()->to(base_url('halaman-admin'));
        } else {
            return view('login/fail');
        }
    }
    public function logout()
    {
        $session = session();
        $session->remove('pengguna');
        return view('login/loginpage');
    }
}
