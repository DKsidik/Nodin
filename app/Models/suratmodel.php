<?php

namespace App\Models;

use CodeIgniter\Model;

class SuratModel extends Model
{
    protected $table = 'surat_db'; // Nama tabel di database
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'kepada',
        'pembuat',
        'sifat',
        'hal',
        'tembusan',
        'lampiran',
        'tanggal',
        'isi'
    ];

    public function jumlahsurat()
    {
        return $this->countAll();
    }
}
