<?php

namespace App\Models;

use CodeIgniter\Model;

class TiketModel extends Model
{
    protected $table = 'tiket';
    protected $primaryKey = 'id_event';
    protected $allowedFields = [
        'kode_tiket',
        'id_event',
        'harga_tiket',   
    ];

    public function getTiketById($id)
    {
      return $this->where(['id_event'=>$id])->first();
    }
}
