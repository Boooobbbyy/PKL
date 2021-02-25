<?php

namespace App\Controllers;

use App\Models\PerusahaanModel;

class Web extends BaseController
{
    protected $perusahaanModel;

    public function __construct()
    {
        $this->perusahaanModel = new PerusahaanModel();

        if (session()->get('logged_in') != 1) {
            header("Location: /Login");
            exit;
        }
    }

    public function update($id)
    {
        $validated = $this->validate([
            'foto' => 'uploaded[foto]|mime_in[foto,image/jpg,image/jpeg,image/gif,image/png]|max_size[foto,4096]'
        ]);
        if ($validated == FALSE) {
            return redirect()->to(base_url('Admin/web'));
        } else {
            $web = $this->perusahaanModel->get()->getRowArray();
            $foto = $this->request->getFile('foto');


            if ($foto->getName() != $web['logo_pt']) {
                $file = ROOTPATH . 'public/assets/img/' . $web['logo_pt'];
                unlink($file);
                $foto->move(ROOTPATH . 'public/assets/img');
            }

            $data = [
                'logo_pt' => $foto->getName(),
                'nama_pt' => $this->request->getPost('judul'),
                'profile_pt' => $this->request->getPost('editor'),
                'no_telp' => $this->request->getPost('no_telp'),
                'email' => $this->request->getPost('email'),
                'tempat' => $this->request->getPost('tempat'),
            ];

            $this->perusahaanModel->update($id, $data);
            return redirect()->to(base_url('Admin/web'));
        }
    }
}
