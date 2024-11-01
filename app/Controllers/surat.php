<?php

namespace App\Controllers;

class surat extends BaseController
{
    public function surat()
    {
        $data = [
            'content' => 'surat/buat-surat',
            'nama' => session()->get('nama_user')
        ];
        echo view('layout/v_wrapper', $data);
    }

    public function infosurat()
    {
        $data = [
            'content' => 'surat/v_surat',
            'nama' => session()->get('nama_user')
        ];
        echo view('layout/v_wrapper', $data);
    }
}
