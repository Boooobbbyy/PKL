<?php

namespace App\Controllers;

class SuratMasuk extends BaseController
{
    public function index()
    {
        $data = [
            'title' => "SMAP - Surat Masuk",
            'head' => "Arsip Surat"
        ];

        return view('admin/smasuk/index', $data);
    }
}
