<?php

namespace App\Controllers;

class Portofolio extends BaseController
{
    public function index()
    {
        $data = [
            'title' => "SMAP - Portofolio",
            'head' => "Portofolio"
        ];

        return view('admin/portofolio/index', $data);
    }
}
