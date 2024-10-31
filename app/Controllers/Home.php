<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        // print_r(session()->get());
        // $nama = session()->get('nama_user');
        $data = [
            'content' => 'admin/v_dashboard',
            'nama' => session()->get('nama_user')
        ];
        echo view('layout/v_wrapper', $data);
    }
    public function surat()
    {
        $data = [
            'content' => 'surat/buat-surat',
            'nama' => session()->get('nama_user')
        ];
        echo view('layout/v_wrapper', $data);
    }

    public function buat()
    {
        $data = [
            'content' => 'surat/suratbuat',
            'nama' => session()->get('nama_user')
        ];
        echo view('layout/v_wrapper', $data);
    }
}
