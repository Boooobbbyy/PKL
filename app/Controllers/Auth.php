<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function index()
    {
        if (session()->get('logged_in') == 1) {
            header("Location: /Admin");
            exit;
        }

        $data['title'] = "PT Arsi Enarcon | Login";
        $data['validation'] = \config\services::validation();

        return view('auth/index', $data);
    }

    public function login()
    {
        $username      = $this->request->getPost('username');
        $password   = $this->request->getPost('password');

        $row = $this->userModel->getLogin($username);

        if ($row == NULL) {
            return redirect()->to('/Login')->withInput()->with('pesan', 'Username Belum terdaftar');
        }
        if (password_verify($password, $row->password)) {
            $data = [
                'id' => $row->id,
                'username' => $username,
                'logged_in' => 1
            ];
            session()->set($data);

            return redirect()->to(base_url('Admin'));
        } else {
            session()->setFlashdata('pesan', 'Password Salah');
            return redirect()->to(base_url('Login'));
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/Login');
    }
}
