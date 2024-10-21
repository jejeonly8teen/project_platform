<?php

namespace App\Models;

use CodeIgniter\Model;

class MemesanModel extends Model
{
  protected $table = 'memesan';
  protected $primaryKey = 'no_invoice';
  protected $allowedFields = [
    'no_invoice',
    'kode_tiket',
    'nik',
    'tanggal_nota',
    'tribun',
    'harga_total',
    'jumlah_tiket',
  ];

  public function getLastInvoiceNumber()
    {
        $lastInvoice = $this->select('no_invoice')->orderBy('no_invoice', 'DESC')->first();

        if ($lastInvoice) {
            return $lastInvoice['no_invoice'];
        }

        return null;
    }

    public function simpan($record)
    {
        $this->insert([
            'no_invoice' => $record['no_invoice'],
            'kode_tiket' => $record['kode_tiket'],
            'nik' => $record['nik'],
            'tribun' => $record['tribun'],
            'harga_total' => $record['harga_total'],
            'jumlah_tiket' => $record['jumlah_tiket'],
        ]);
    }
}
