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
            // return redirect()->to
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
        return redirect()->to('Home/buat');
    }

    // Method untuk menampilkan preview surat
    // public function preview($id)
    // {
    //     $suratModel = new SuratModel();
    //     $surat = $suratModel->find($id);

    //     if (!$surat) {
    //         throw new \CodeIgniter\Exceptions\PageNotFoundException('Surat tidak ditemukan');
    //     }

    //     return view('surat/cetak_surat', ['surat' => $suratModel]);
    // }

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

    public function print_surat($id)
    {
        $suratModel = new SuratModel();
        $data = [
            'surat' => $suratModel->where('id', $id)->first()
        ];
        return view('surat/cetak_surat', $data);
    }

    public function print_surat_internal($id)
    {
        $suratModel = new SuratModel();
        $data = [
            'surat' => $suratModel->where('id', $id)->first()
        ];
        return view('surat/surat_internal', $data);
    }

    public function info_surat()
    {
        $suratModel = new SuratModel();
        $jumlahSurat = $suratModel->jumlahsurat();
        $suratModel = new SuratModel();
        $surat = $suratModel->find();
        $userModel = new UserModel();
        $user = $userModel->find();
        // print_r($surat);
        $data = [
            'content' => 'surat/info_surat',
            'nama' => session()->get('nama_user'),
            'surat' => $surat,
            'jumlah_surat' => $jumlahSurat,
            'user' => $user
        ];
        echo view('layout_u/u_wrapper', $data);
    }

    public function edit_surat($id)
    {
        helper('form');
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
        }

        $userModel = new UserModel();
        $user = $userModel->find();
        $suratModel = new SuratModel();
        $surat = $suratModel->find($id);
        $jumlahSurat = $suratModel->jumlahsurat();

        $data = [
            'content' => 'surat/edit_surat',
            'nama' => session()->get('nama_user'),
            'user' => $user,
            'jumlah_surat' => $jumlahSurat,
            'surat' => $surat,

        ];
        echo view('layout_u/u_wrapper', $data);
    }

    public function update_surat($id)
    {
        helper('form');
        $suratModel = new SuratModel();

        $data = [
            'kepada' => $this->request->getPost('kepada'),
            'pembuat' => $this->request->getPost('pembuat'),
            'sifat' => $this->request->getPost('sifat'),
            'no_surat' => $this->request->getPost('no_surat'),
            'hal' => $this->request->getPost('hal'),
            'tembusan' => $this->request->getPost('tembusan'),
            'lampiran' => $this->request->getPost('lampiran'),
            'tanggal' => $this->request->getPost('tanggal'),
            'isi' => $this->request->getPost('isi')
        ];

        $suratModel->update($id, $data); // Update data berdasarkan ID

        session()->setFlashdata('pesan', 'Surat Telah dibuat');
        // return redirect()->to('surat/edit_surat');
        return redirect()->to(base_url('surat/edit_surat/' . $id));
    }




    public function delete($id)
    {
        $suratModel = new SuratModel(); // Ganti dengan model Anda
        session()->setFlashdata('pesan', 'Surat Telah di Hapus');
        if ($suratModel->delete($id)) {
            return redirect()->to('surat/infosurat')->with('message', 'Data deleted successfully');
        } else {
            return redirect()->to('surat/infosurat')->with('error', 'Failed to delete data');
        }
    }
}
