<?php

namespace App\Controllers;

use App\Models\SuratModel;
use App\Models\UserModel;

class surat extends BaseController
{
    public function surat()
    {
        $suratModel = new SuratModel();
        $jumlahSurat = $suratModel->jumlahsurat();
        $data = [
            'content' => 'surat/buat-surat',
            'nama' => session()->get('nama_user'),
            'jumlah_surat' => $jumlahSurat

        ];
        echo view('layout/v_wrapper', $data);
    }

    public function infosurat()
    {
        $suratModel = new SuratModel();
        $jumlahSurat = $suratModel->jumlahsurat();
        $suratModel = new SuratModel();
        $surat = $suratModel->find();
        $userModel = new UserModel();
        $user = $userModel->find();
        // print_r($surat);
        $data = [
            'content' => 'surat/v_surat',
            'nama' => session()->get('nama_user'),
            'surat' => $surat,
            'jumlah_surat' => $jumlahSurat,
            'user' => $user
        ];
        echo view('layout/v_wrapper', $data);
    }

    public function cetak_surat()
    {
        if (!$this->validate([
            'kepada' => 'required',
            'pembuat' => 'required',
            'sifat' => 'required',
            'hal' => 'required',
            'tembusan' => 'permit_empty',
            'lampiran' => 'required',
            'tanggal' => 'required',
            'isi' => 'required'
        ])) {
            // return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        // Menyimpan data ke database
        $suratmodel = new SuratModel();
        $suratData = [
            'kepada' => $this->request->getPost('kepada'),
            'pembuat' => $this->request->getPost('pembuat'),
            'sifat' => $this->request->getPost('sifat'),
            'hal' => $this->request->getPost('hal'),
            'tembusan' => $this->request->getPost('tembusan'),
            'lampiran' => $this->request->getPost('lampiran'),
            'tanggal' => $this->request->getPost('tanggal'),
            'isi' => $this->request->getPost('isi'),
        ];

        $suratmodel->insert($suratData);
        print_r($suratData);

        // Redirect ke halaman preview dengan ID surat yang baru disimpan
        session()->setFlashdata('pesan', 'Surat Telah dibuat');
        return redirect()->to('surat/infosurat');
    }

    // Method untuk menampilkan preview surat
    public function preview($id)
    {
        $suratModel = new SuratModel();
        $surat = $suratModel->find($id);

        if (!$surat) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Surat tidak ditemukan');
        }

        return view('surat/cetak_surat', ['surat' => $suratModel]);
    }

    public function masuk()
    {
        $suratModel = new SuratModel();
        $jumlahSurat = $suratModel->jumlahsurat();
        $suratModel = new SuratModel();
        $surat = $suratModel->find();
        $userModel = new UserModel();
        $user = $userModel->find();
        // print_r($surat);
        $data = [
            'content' => 'surat/suratmasuk',
            'nama' => session()->get('nama_user'),
            'surat' => $surat,
            'jumlah_surat' => $jumlahSurat,
            'user' => $user
        ];
        echo view('layout/v_wrapper', $data);
    }
}
