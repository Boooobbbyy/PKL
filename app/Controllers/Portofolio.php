<?php

namespace App\Controllers;

use App\Models\PortofolioModel;

class Portofolio extends BaseController
{
    protected $portofolioModel;

    public function __construct()
    {
        $this->portofolioModel = new PortofolioModel();
        if (session()->get('logged_in') != 1) {
            header("Location: /Login");
            exit;
        }
    }

    public function index()
    {
        $data['title'] = "PT Arsi Enarcon | Admin";
        $data['slug'] = "portofolio";
        $data['validation'] = \config\services::validation();

        echo view('layout/header', $data);
        echo view('layout/mobile_sidebar');
        echo view('layout/desktop_sidebar');
        echo view('layout/topbar');
        echo view('compro/addportofolio', $data);
        echo view('layout/footer');
    }

    public function save()
    {
        if ($this->request->getMethod() !== 'post') {
            return redirect()->to(base_url('Portofolio'));
        }
        $validated = $this->validate([
            'porto' => 'uploaded[porto]|mime_in[porto,image/jpg,image/jpeg,image/gif,image/png]|max_size[porto,4096]'
        ]);
        if ($validated == FALSE) {
            return $this->index();
        } else {
            $foto = $this->request->getFile('porto');
            $foto->move(ROOTPATH . 'public/uploads/porto');

            $data = [
                'foto' => $foto->getName(),
                'date_uploaded' => time() + 3600 * 7
            ];


            $this->portofolioModel->insert($data);
            return redirect()->to(base_url('Admin/portofolio'));
        }
    }

    public function delete($id)
    {
        $portofolio = $this->portofolioModel->where('id', $id)->get()->getRowArray();
        $file = ROOTPATH . 'public/uploads/porto/' . $portofolio['foto'];
        $this->portofolioModel->delete($id);
        unlink($file);
        return redirect()->to('/Admin/portofolio');
    }

    public function edit($id)
    {
        $data['title'] = "PT Arsi Enarcon | Admin";
        $data['slug'] = "portofolio";
        $data['portofolio'] = $this->portofolioModel->where('id', $id)->get()->getRowArray();
        $data['validation'] = \config\services::validation();

        echo view('layout/header', $data);
        echo view('layout/mobile_sidebar');
        echo view('layout/desktop_sidebar');
        echo view('layout/topbar');
        echo view('compro/addportofolio', $data);
        echo view('layout/footer');
    }

    public function update($id)
    {
        $validated = $this->validate([
            'porto' => 'uploaded[porto]|mime_in[porto,image/jpg,image/jpeg,image/gif,image/png]|max_size[porto,4096]'
        ]);
        if ($validated == FALSE) {
            return $this->index();
        } else {
            $portofolio = $this->portofolioModel->where('id', $id)->get()->getRowArray();
            $file = ROOTPATH . 'public/uploads/porto/' . $portofolio['foto'];
            unlink($file);
            $foto = $this->request->getFile('porto');
            $foto->move(ROOTPATH . 'public/uploads/porto');

            $data = [
                'foto' => $foto->getName(),
                'date_uploaded' => time() + 3600 * 7
            ];

            $this->portofolioModel->update($id, $data);
            return redirect()->to(base_url('Admin/portofolio'));
        }
    }
}
