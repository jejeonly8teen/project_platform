<?php

namespace App\Models;

use CodeIgniter\Model;

class EventModel extends Model
{
  protected $table = 'event';
  protected $primaryKey = 'id_event';
  protected $allowedFields = [
    'id_event',
    'nama_event',
    'jadwal_club',
    'tempat_pertandingan',
    'liga',
    'gambar',

  ];

  public function getEventById($id)
  {
    return $this->where(['id_event' => $id])->first();
  }

  public function getLastEvent()
    {
        return $this->orderBy('id_event', 'DESC')->first();
    }
}
