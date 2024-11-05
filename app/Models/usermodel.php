<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'tbl_user'; // Nama tabel di database
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'nama_user',
        'email',
        'no_hp',
        'password',
        'level'
    ];

    public function jumlahUser()
    {
        return $this->countAll();
    }
}
