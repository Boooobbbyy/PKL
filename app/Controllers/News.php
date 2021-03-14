<?php

namespace App\Controllers;

class News extends BaseController
{
    public function index()
    {
        $data = [
            'title' => "SMAP - News",
            'head' => "News"
        ];

        return view('admin/news/index', $data);
    }
}
