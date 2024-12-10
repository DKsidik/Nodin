<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\M_Auth;

class Auth extends BaseController
{
    protected $M_auth;
    public function __construct()
    {
        helper('form');
        $this->M_auth = new M_Auth();
    }

    public function register()
    {
        $data = [
            'content' => 'loginpage/v_register'
        ];

        // Memuat template AdminLTE dengan loginpage/login sebagai kontennya
        echo view('layout/v_header');
        echo view($data['content']);
    }

    public function sv_register()
    {
        if ($this->validate([
            'nama_user' => [
                'label' => 'Username',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi'
                ]
            ],

            'email' => [
                'label' => 'Email',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi'
                ]
            ],

            'no_hp' => [
                'label' => 'No.Handphone',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi'
                ]
            ],
            'level' => [
                'label' => 'Role Akun',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi'
                ]
            ],

            'password' => [
                'label' => 'Password',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi'
                ]
            ],
            'repassword' => [
                'label' => 'Retype password',
                'rules' => 'required|matches[password]',
                'errors' => [
                    'required' => '{field} Wajib Diisi !!',
                    'matches' => '{field} Password Tidak Sesuai'
                ]
            ],

        ])) {
            //valid
            $data = [
                'nama_user' => $this->request->getPost('nama_user'),
                'email' => $this->request->getPost('email'),
                'no_hp' => $this->request->getPost('no_hp'),
                'level' => $this->request->getPost('level'),
                'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
                'image' => "avatar.png",
            ];
            $this->M_auth->sv_register($data);
            session()->setFlashdata('pesan', 'Register Telah Berhasil');
            return redirect()->to(base_url('Home/infouser'))->withInput();
        } else {
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to(base_url('Home/infouser'))->withInput();
        }
    }

    public function login()
    {
        $data = [
            'content' => 'loginpage/login' // pastikan file login.php ada di folder Views/loginpage/
        ];

        // Memuat template AdminLTE dengan loginpage/login sebagai kontennya
        echo view('layout/v_header');
        echo view($data['content']);
    }

    public function ceklogin()
    {
        // Logika login
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $cek = $this->M_auth->login($email, $password);

        if ($cek) {
            // Login berhasil
            session()->set('log', true);
            session()->set('nama_user', $cek['nama_user']);
            session()->set('email', $cek['email']);
            session()->set('level', $cek['level']);
            session()->set('no_hp', $cek['no_hp']);
            if ($cek['level'] == 1) {
                return redirect()->to(base_url('home/home1'));
            } elseif ($cek['level'] == 2) {
                return redirect()->to(base_url('home'));
            } elseif ($cek['level'] == 3) {
                return redirect()->to(base_url('home/home3'));
            } else {
                echo "role id lu ga kedaftar kocak";
            }
        } else {
            // Login gagal
            session()->setFlashdata('pesan', ' <span style="color: red;">Login Gagal, Email atau Password Tidak Sesuai</span>');
            return redirect()->to(base_url('Auth/login'));
        }
    }

    public function logout()
    {
        // Hapus semua data session
        session()->destroy();

        // Redirect ke halaman login
        return redirect()->to(base_url('auth/login'));
    }

    public function edit_akun($id)
    {
        helper('form');

        $userModel = new UserModel();

        // Data untuk update
        $data = [
            'nama_user' => $this->request->getPost('user_name'),
            'email' => $this->request->getPost('email'),
            'no_hp' => $this->request->getPost('no_hp'),
            'level' => $this->request->getPost('level'),
        ];

        // Update data berdasarkan ID
        $userModel->update($id, $data);


        // Redirect kembali ke halaman profil atau halaman lainnya dengan pesan sukses
        // return redirect()->to('/user/profile/' . $id)->with('pesan', 'Data berhasil diperbarui.');
        session()->setFlashdata('pesan', 'Data Berhasil Di Ubah');
        return redirect()->to(base_url('Home/edit_akun/' . $id));
    }
}
