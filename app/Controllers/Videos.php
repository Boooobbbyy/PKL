<?php

namespace App\Controllers;

use App\Models\VideoModel;

class Videos extends BaseController
{
    protected $videoModel;

    public function __construct()
    {
        $this->videoModel = new VideoModel();
        if (session()->get('logged_in') != 1) {
            header("Location: /Login");
            exit;
        }
    }

    public function index()
    {
        $data['title'] = "PT Arsi Enarcon | Admin";
        $data['slug'] = "videos";
        $data['validation'] = \config\services::validation();

        echo view('layout/header', $data);
        echo view('layout/mobile_sidebar');
        echo view('layout/desktop_sidebar');
        echo view('layout/topbar');
        echo view('compro/addvideos', $data);
        echo view('layout/footer');
    }

    public function save()
    {
        $rules = [
            'judul' => 'required',
            'link' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Email harus diisi'
                ]
            ],
            'editor' => 'required'
        ];

        if ($this->validate($rules)) {
            $link = $this->request->getPost('link');
            if (strpos($link, '=')) {
                $link = "https://www.youtube.com/embed/" . explode("=", $link)[1];
            }
            $data = [
                'judul' => $this->request->getPost('judul'),
                'link' => $link,
                'deskripsi' => $this->request->getPost('editor'),
                'date_uploaded' => time()
            ];
            $this->videoModel->insert($data);
            session()->setFlashdata('msg', 'Berhasil Ditambahkan');

            return redirect()->to('/Admin/videos');
        } else {
            $validator = \Config\Services::validation();
            return redirect()->to('/Admin/videos')->withInput()->with('validation', $validator);
        }
    }

    public function delete($id)
    {
        $this->videoModel->delete($id);
        return redirect()->to('/Admin/videos');
    }
}
