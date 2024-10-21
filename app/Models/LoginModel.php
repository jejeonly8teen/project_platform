<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{
    protected $table = 'admin';
    protected $allowedFields = ['username', 'password'];

    public function cek($data)
    {
        return $this->where(['username' => $data['username'], 'password' => $data['password']])->first();
    }
}
