<?php

namespace App\Controllers;

class Service extends BaseController
{
    public function konsultan()
    {
        return view('service/service1');
    }
    public function kompetensi()
    {
        return view('service/service2');
    }
    public function arsitektur()
    {
        return view('service/service3');
    }
    public function mitra()
    {
        return view('service/service4');
    }

    public function perencanaan()
    {
        return view('service/service5');
    }

    public function pelayanan()
    {
        return view('service/service6');
    }
}
