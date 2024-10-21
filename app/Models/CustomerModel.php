<?php

namespace App\Models;

use CodeIgniter\Model;

class CustomerModel extends Model
{
  protected $table = 'customer';
  protected $primaryKey = 'nik';
  protected $allowedFields = ['nik', 'nama_customer', 'no_hp', 'email'];
}
