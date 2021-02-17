<?php

namespace App\Controllers;

use App\Models\VideoModel;
use App\Models\PortofolioModel;

class Admin extends BaseController
{
    protected $videoModel;

    public function __construct()
    {
        $this->videoModel = new VideoModel();
        $this->portofolioModel = new PortofolioModel();
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

    public function dp()
    {
        $data['title'] = "PT Arsi Enarcon | Admin";
        $data['slug'] = "pegawai";
        $data['validation'] = \config\services::validation();

        echo view('layout/header', $data);
        echo view('layout/mobile_sidebar');
        echo view('layout/desktop_sidebar');
        echo view('layout/topbar');
        echo view('admin/datapegawai', $data);
        echo view('layout/footer');
    }

    public function home()
    {
        $data['title'] = "PT Arsi Enarcon | Admin";
        $data['slug'] = "home";
        $data['validation'] = \config\services::validation();

        echo view('layout/header', $data);
        echo view('layout/mobile_sidebar');
        echo view('layout/desktop_sidebar');
        echo view('layout/topbar');
        echo view('compro/home', $data);
        echo view('layout/footer');
    }

    public function videos()
    {
        $data['title'] = "PT Arsi Enarcon | Admin";
        $data['slug'] = "videos";
        $data['videos'] = $this->videoModel->getVideos();
        $data['validation'] = \config\services::validation();

        echo view('layout/header', $data);
        echo view('layout/mobile_sidebar');
        echo view('layout/desktop_sidebar');
        echo view('layout/topbar');
        echo view('compro/videos', $data);
        echo view('layout/footer');
    }

    public function portofolio()
    {
        $data['title'] = "PT Arsi Enarcon | Admin";
        $data['slug'] = "portofolio";
        $data['portofolio'] = $this->portofolioModel->findAll();
        $data['validation'] = \config\services::validation();

        echo view('layout/header', $data);
        echo view('layout/mobile_sidebar');
        echo view('layout/desktop_sidebar');
        echo view('layout/topbar');
        echo view('compro/portofolio', $data);
        echo view('layout/footer');
    }

    public function news()
    {
        $data['title'] = "PT Arsi Enarcon | Admin";
        $data['slug'] = "news";
        $data['validation'] = \config\services::validation();

        echo view('layout/header', $data);
        echo view('layout/mobile_sidebar');
        echo view('layout/desktop_sidebar');
        echo view('layout/topbar');
        echo view('compro/news', $data);
        echo view('layout/footer');
    }
}
