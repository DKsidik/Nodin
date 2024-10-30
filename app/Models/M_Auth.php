<?php

namespace App\models;

use CodeIgniter\Model;

class M_Auth extends Model
{
    public function sv_register($data)
    {
        $this->db->table('tbl_user')->insert($data);
    }
}
