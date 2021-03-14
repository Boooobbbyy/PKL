<?php

namespace App\Controllers;

class Proyek extends BaseController
{
    public function index()
    {
        $data = [
            'title' => "SMAP - Proyek",
            'head' => "Proyek"
        ];

        return view('admin/proyek/index', $data);
    }
}
