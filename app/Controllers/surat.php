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
    public function external()
    {
        $userModel = new UserModel();
        $user = $userModel->find();
        $suratModel = new SuratModel();
        $jumlahSurat = $suratModel->jumlahsurat();
        $today = date("Y-m-d");
        // print_r($today);
        $data = [
            'content' => 'surat/buat_external',
            'nama' => session()->get('nama_user'),
            'user' => $user,
            'jumlah_surat' => $jumlahSurat,
            'today' => $today
        ];
        echo view('layout_u/u_wrapper', $data);
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
            'pengaju' => 'required',
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
            'jenis_surat' => $this->request->getPost('jenis'),
            'pengaju' => $this->request->getPost('pengaju'),
            'tgl_buat' => $this->request->getPost('tgl_buat'),
            'status' => 'disposisi',
        ];

        $suratmodel->insert($suratData);
        print_r($suratData);

        // Redirect ke halaman preview dengan ID surat yang baru disimpan
        session()->setFlashdata('pesan', 'Surat Telah dibuat');
        return redirect()->to('Home/buat');
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

    public function print_surat($id)
    {
        $suratModel = new SuratModel();

        // Ambil data surat berdasarkan ID
        $surat = $suratModel->where('id', $id)->first();

        // Format ulang tanggal jika tersedia
        if (isset($surat['tanggal'])) {
            $dateObj = \DateTime::createFromFormat('Y-m-d', $surat['tanggal']);
            $formattedDate = $dateObj->format('d F Y'); // Format: d F Y (contoh: 10 December 2023)

            // Ganti nama bulan menjadi bahasa Indonesia
            $bulanIndonesia = [
                'January' => 'Januari',
                'February' => 'Februari',
                'March' => 'Maret',
                'April' => 'April',
                'May' => 'Mei',
                'June' => 'Juni',
                'July' => 'Juli',
                'August' => 'Agustus',
                'September' => 'September',
                'October' => 'Oktober',
                'November' => 'November',
                'December' => 'Desember'
            ];
            $surat['tanggal'] = strtr($formattedDate, $bulanIndonesia);
        }

        // Kirim data ke view
        $data = [
            'surat' => $surat
        ];
        return view('surat/cetak_surat', $data);
    }


    public function print_surat_internal($id)
    {
        $suratModel = new SuratModel();
        $surat = $suratModel->where('id', $id)->first();

        // Format ulang tanggal jika tersedia
        if (isset($surat['tanggal'])) {
            $dateObj = \DateTime::createFromFormat('Y-m-d', $surat['tanggal']);
            $formattedDate = $dateObj->format('d F Y'); // Format d F Y (contoh: 10 December 2023)

            // Ganti nama bulan menjadi bahasa Indonesia
            $bulanIndonesia = [
                'January' => 'Januari',
                'February' => 'Februari',
                'March' => 'Maret',
                'April' => 'April',
                'May' => 'Mei',
                'June' => 'Juni',
                'July' => 'Juli',
                'August' => 'Agustus',
                'September' => 'September',
                'October' => 'Oktober',
                'November' => 'November',
                'December' => 'Desember'
            ];
            $surat['tanggal'] = strtr($formattedDate, $bulanIndonesia);
        }

        // Kirim data ke view
        $data = [
            'surat' => $surat
        ];
        return view('surat/surat_internal', $data);
    }


    public function info_surat()
    {
        // print_r(session()->get());
        $suratModel = new SuratModel();
        $jumlahSurat = $suratModel->jumlahsurat();
        $suratModel = new SuratModel();
        $userLogin = session()->get('nama_user');
        $surat = $suratModel->where('pembuat', $userLogin)->findAll();
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
        echo view('layout/v_wrapper', $data);
    }

    public function e_surat($id)
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
            'content' => 'surat/e_surat',
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
            'no_surat' => $this->request->getPost('no_surat'),
            'status' => $this->request->getPost('status'),
            'catatan' => $this->request->getpost('catatan')
        ];

        $suratModel->update($id, $data); // Update data berdasarkan ID

        session()->setFlashdata('pesan', 'Surat Telah dibuat');
        // return redirect()->to('surat/edit_surat');
        return redirect()->to(base_url('surat/edit_surat/' . $id));
    }

    public function up_surat($id)
    {
        helper('form');
        $suratModel = new SuratModel();

        $data = [
            'kepada' => $this->request->getPost('kepada'),
            'pengaju' => $this->request->getPost('pengaju'),
            'sifat' => $this->request->getPost('sifat'),
            'hal' => $this->request->getPost('hal'),
            'tembusan' => $this->request->getPost('tembusan'),
            'lampiran' => $this->request->getPost('lampiran'),
            'tanggal' => $this->request->getPost('tanggal'),
            'isi' => $this->request->getPost('isi'),
            'status' => 'disposisi'

        ];

        $suratModel->update($id, $data); // Update data berdasarkan ID

        session()->setFlashdata('pesan', 'Surat Telah dibuat');
        // return redirect()->to('surat/edit_surat');
        return redirect()->to(base_url('surat/e_surat/' . $id));
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

    public function hapus($id)
    {
        $suratModel = new SuratModel(); // Ganti dengan model Anda
        session()->setFlashdata('pesan', 'Surat Telah di Hapus');
        if ($suratModel->delete($id)) {
            return redirect()->to('surat/info_surat')->with('message', 'Data deleted successfully');
        } else {
            return redirect()->to('surat/info_surat')->with('error', 'Failed to delete data');
        }
    }
}
