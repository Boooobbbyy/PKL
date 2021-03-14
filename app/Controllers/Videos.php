<?php

namespace App\Controllers;

class Videos extends BaseController
{
    public function index()
    {
        $data = [
            'title' => "SMAP - Videos",
            'head' => "Video"
        ];

        return view('admin/videos/index', $data);
    }
}
