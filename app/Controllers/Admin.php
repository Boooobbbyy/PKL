<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function __construct()
    {
        if (session()->get('logged_in') != 1) {
            header("Location: /Login");
            exit;
        }
    }

    public function index()
    {
        $data['title'] = "PT Arsi Enarcon | Admin";
        $data['slug'] = "dashboard";
        $data['validation'] = \config\services::validation();

        echo view('layout/header', $data);
        echo view('layout/mobile_sidebar');
        echo view('layout/desktop_sidebar');
        echo view('layout/topbar');
        echo view('admin/index', $data);
        echo view('layout/footer');
    }
}
