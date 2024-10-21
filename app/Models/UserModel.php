<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'admin';
   
    protected $allowedFields = ['username', 'password'];
   

    public function getUserByUsername($username)
    {
        return $this->where('username', $username)->first();
    }

    public function cek($data)
    {
        return $this->where(['username' => $data['username'], 'password' => $data['password']])->first();
    }
}
