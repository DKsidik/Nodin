<?php

namespace App\models;

use CodeIgniter\Model;

class M_Auth extends Model
{
    protected $table = 'tbl_user'; // Ganti 'users' dengan nama tabelmu

    public function sv_register($data)
    {
        $this->db->table('tbl_user')->insert($data);
    }

    public function login($email, $password)
    {
        // Ambil data pengguna berdasarkan email
        $user = $this->where('email', $email)->first();

        // Cek apakah pengguna ditemukan dan password sesuai (jika password di-hash)
        if ($user && password_verify($password, $user['password'])) {
            return $user; // Mengembalikan data pengguna jika sesuai
        }
        return false; // Mengembalikan false jika tidak cocok
    }
}
