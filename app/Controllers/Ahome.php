<?php

namespace App\Controllers;


class Ahome extends BaseController
{


    public function index()
    {
        $data['title'] = "PT Arsi Enarcon | Admin";
        $data['slug'] = "Home";
        $data['validation'] = \config\services::validation();

        echo view('layout/header', $data);
        echo view('layout/mobile_sidebar');
        echo view('layout/desktop_sidebar');
        echo view('layout/topbar');
        echo view('compro/ahome');
        echo view('layout/footer');
    }
}
