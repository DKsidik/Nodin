<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function login()
    {
        $data = [
            'content' => 'loginpage/login' // pastikan file login.php ada di folder Views/loginpage/
        ];

        // Memuat template AdminLTE dengan loginpage/login sebagai kontennya
        echo view('layout/v_header');
        echo view($data['content']);
    }

    public function index()
    {
        $data = [
            'content' => 'admin/v_dashboard'
        ];
        echo view('layout/v_wrapper', $data);
    }
    public function surat()
    {
        $data = [
            'content' => 'surat/buat-surat'
        ];
        echo view('layout/v_wrapper', $data);
    }

    public function buat()
    {
        $data = [
            'content' => 'surat/suratbuat'
        ];
        echo view('layout/v_wrapper', $data);
    }
}
