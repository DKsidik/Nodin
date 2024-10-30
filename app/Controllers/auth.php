<?php

namespace App\Controllers;

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
                    'matches' => '{field} Password Tidak Sama !!'
                ]
            ],

        ])) {
            //valid
            $data = [
                'nama_user' => $this->request->getPost('nama_user'),
                'email' => $this->request->getPost('email'),
                'no_hp' => $this->request->getPost('no_hp'),
                'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
                'level' => 3
            ];
            $this->M_auth->sv_register($data);
            session()->setFlashdata('pesan', 'Register Telah Berhasil');
            return redirect()->to(base_url('Auth/register'))->withInput();
        } else {
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to(base_url('Auth/register'))->withInput();
        }
    }
}
