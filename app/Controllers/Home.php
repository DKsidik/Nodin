<?php

namespace App\Controllers;

use App\Models\Searchmodel;
use App\Models\UserModel;
use App\Models\SuratModel;

class Home extends BaseController
{
    public function index()
    {
        // print_r(session()->get());
        // $nama = session()->get('nama_user');
        $suratModel = new SuratModel();
        $jumlahSurat = $suratModel->jumlahsurat();
        $data = [
            'content' => 'admin/v_dashboard',
            'role' => 'Tata usaha',
            'nama' => session()->get('nama_user'),
            'jumlah_surat' => $jumlahSurat,

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
        $userModel = new UserModel();
        $user = $userModel->find();

        $data = [
            'content' => 'surat/suratbuat',
            'nama' => session()->get('nama_user'),
            'user' => $user
        ];
        echo view('layout/v_wrapper', $data);
    }

    public function v_superadmin()
    {
        // print_r(session()->get());
        // $nama = session()->get('nama_user');
        $suratModel = new SuratModel();
        $jumlahSurat = $suratModel->jumlahsurat();
        $data = [
            'content' => 'admin/sa_dashboard',
            'role' => 'Super Admin',
            'nama' => session()->get('nama_user'),
            'jumlah_surat' => $jumlahSurat
        ];
        echo view('layout_sa/sa_wrapper', $data);
    }

    public function infouser()
    {
        // print_r(session()->get());
        // $nama = session()->get('nama_user');
        $userModel = new UserModel();
        $user = $userModel->find();
        $data = [
            'content' => 'user/info',
            'role' => 'super Admin',
            'nama' => session()->get('nama_user'),
            // 'jumlah_user' => $jumlahUser,
            'user' => $user
        ];
        // print_r($user);
        echo view('layout_sa/sa_wrapper', $data);
    }

    public function home1()
    {
        // print_r(session()->get());
        // $nama = session()->get('nama_user');
        $userModel = new UserModel();
        $user = $userModel->find();
        $UserModel = new UserModel();
        $jumlahUser = $UserModel->jumlahUser();
        $data = [
            'content' => 'admin/sa_dashboard',
            'role' => 'super Admin',
            'nama' => session()->get('nama_user'),
            // 'jumlah_user' => $jumlahUser,
            'user' => $user,
            'jumlah_user' => $jumlahUser,
        ];
        // print_r($user);
        echo view('layout_sa/sa_wrapper', $data);
    }

    public function buat_akun()
    {
        helper('form');

        $data = [
            'content' => 'user/buat_akun',
            'nama' => session()->get('nama_user'),

        ];
        echo view('layout_sa/sa_wrapper', $data);
    }


    public function edit_akun()
    {
        $data = [

            'content' => 'user/edit_akun',
            'nama' => session()->get('nama_user'),


        ];
        echo view('layout_sa/sa_wrapper', $data);
    }

    public function v_profile()
    {
        $data = [

            'content' => 'user/v_profile',
            'nama' => session()->get('nama_user'),


        ];
        echo view('layout_sa/sa_wrapper', $data);
    }

    public function home3()
    {
        // print_r(session()->get());
        // $nama = session()->get('nama_user');
        // $userModel = new UserModel();
        // $user = $userModel->find();
        // $UserModel = new UserModel();
        // $jumlahUser = $UserModel->jumlahUser();
        $data = [
            'content' => 'admin/u_dashboard',
            'role' => 'User',
            'nama' => session()->get('nama_user'),

            // 'jumlah_user' => $jumlahUser,
            // 'user' => $user,
            // 'jumlah_user' => $jumlahUser,
        ];
        // print_r($user);
        echo view('layout_u/u_wrapper', $data);
    }
}
