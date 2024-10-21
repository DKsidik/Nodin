<?php

namespace App\Controllers;

class Home extends BaseController
{
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
}
