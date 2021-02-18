<?php

namespace App\Controllers;

use App\Models\NewsModel;

class News extends BaseController
{
    protected $newsModel;
    public function __construct()
    {
        $this->newsModel = new NewsModel();
        if (session()->get('logged_in') != 1) {
            header("Location: /Login");
            exit;
        }
    }

    public function index()
    {
        $data['title'] = "PT Arsi Enarcon | Admin";
        $data['slug'] = "news";
        $data['validation'] = \config\services::validation();

        echo view('layout/header', $data);
        echo view('layout/mobile_sidebar');
        echo view('layout/desktop_sidebar');
        echo view('layout/topbar');
        echo view('compro/addnews', $data);
        echo view('layout/footer');
    }

    public function save()
    {
        $validated = $this->validate([
            'foto' => 'uploaded[foto]|mime_in[foto,image/jpg,image/jpeg,image/gif,image/png]|max_size[foto,4096]'
        ]);
        if ($validated == FALSE) {
            return $this->index();
        } else {
            $foto = $this->request->getFile('foto');

            $data = [
                'judul' => $this->request->getPost('judul'),
                'slug' => str_replace(" ", "-", trim($this->request->getPost('judul'))),
                'deskripsi' => $this->request->getPost('editor'),
                'foto' => $foto->getName(),
                'date_uploaded' => time() + 3600 * 7,
                'uploader' => session()->get('username')
            ];

            $foto->move(ROOTPATH . 'public/uploads/news');
            $this->newsModel->insert($data);
            return redirect()->to(base_url('Admin/news'));
        }
    }

    public function delete($id)
    {
        $news = $this->newsModel->where('id', $id)->get()->getRowArray();
        $file = ROOTPATH . 'public/uploads/news/' . $news['foto'];
        $this->newsModel->delete($id);
        unlink($file);
        return redirect()->to('/Admin/news');
    }

    public function edit($id)
    {
        $data['title'] = "PT Arsi Enarcon | Admin";
        $data['slug'] = "news";
        $data['news'] = $this->newsModel->where('id', $id)->get()->getRowArray();
        $data['validation'] = \config\services::validation();

        echo view('layout/header', $data);
        echo view('layout/mobile_sidebar');
        echo view('layout/desktop_sidebar');
        echo view('layout/topbar');
        echo view('compro/addnews', $data);
        echo view('layout/footer');
    }

    public function update($id)
    {
        $news = $this->newsModel->where('id', $id)->get()->getRowArray();
        $file = ROOTPATH . 'public/uploads/news/' . $news['foto'];
        $foto = $this->request->getFile('foto');

        $data = [
            'judul' => $this->request->getPost('judul'),
            'slug' => str_replace(" ", "-", trim($this->request->getPost('judul'))),
            'deskripsi' => $this->request->getPost('editor'),
            'foto' => $foto->getName(),
            'date_uploaded' => time() + 3600 * 7,
            'uploader' => session()->get('username')
        ];

        unlink($file);
        $foto->move(ROOTPATH . 'public/uploads/news');
        $this->newsModel->update($id, $data);
        return redirect()->to(base_url('Admin/news'));
    }
}
