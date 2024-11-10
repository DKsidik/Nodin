<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'tbl_user'; // Nama tabel di database
    protected $primaryKey = 'id_user';
    protected $allowedFields = [
        'nama_user',
        'email',
        'no_hp',
        'password',
        'level',
        'image'
    ];

    public function jumlahUser()
    {
        return $this->countAll();
    }
}
