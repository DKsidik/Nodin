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
        'no_surat',
        'hal',
        'tembusan',
        'lampiran',
        'tanggal',
        'isi',
        'jenis_surat',
        'status',
        'catatan'
    ];

    public function jumlahsurat()
    {
        return $this->countAll();
    }

    public function getLatest()
    {
        return $this->orderBy('id', 'DESC')->first();
    }
}
