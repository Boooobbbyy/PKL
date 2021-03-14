<?php

namespace App\Controllers;

class SuratKeluar extends BaseController
{
    public function index()
    {
        $data = [
            'title' => "SMAP - Surat Keluar",
            'head' => "Arsip Surat"
        ];

        return view('admin/skeluar/index', $data);
    }
}
