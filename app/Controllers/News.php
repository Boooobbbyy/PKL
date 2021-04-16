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


    public function fetch_data()
    {
        $request = \Config\Services::request();
        if ($request->isAJAX()) {
            $data = [
                'news' => $this->NewsModel->orderBy('tanggal', 'ASC')->get()->getResultArray()
            ];
            $msg = [
                'data' => view('admin/news/read', $data)
            ];

            echo json_encode($msg);
        } else {
            exit(view('error'));
        }
    }

    public function getJumlah()
    {
        $request = \Config\Services::request();
        if ($request->isAJAX()) {
            $data = [
                'jumlah' => $this->NewsModel->selectCount('id_news')->get()->getRowArray()
            ];
            $msg = [
                'data' => $data['jumlah']['id_news']
            ];

            echo json_encode($msg);
        } else {
            exit(view('error'));
        }
    }

    public function form_tambah()
    {
        $request = \Config\Services::request();
        if ($request->isAJAX()) {

            $jumlah = $this->NewsModel->selectCount('id_news')->get()->getRowArray();
            $jumlah = $jumlah['id_news'] + 1;
            $data['jumlah'] = $jumlah;

            $msg = [
                'data' => view('admin/news/create', $data)
            ];

            echo json_encode($msg);
        } else {
            exit(view('error'));
        }
    }

    public function simpan()
    {
        $request = \Config\Services::request();

        if ($request->isAJAX()) {
            $validation = \Config\Services::validation();
            $valid = $this->validate([
                'judul' => [
                    'label' => 'judul',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} tidak boleh kosong',

                    ]
                ],
                'desk' => [
                    'label' => 'desk',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} tidak boleh kosong',
                        'is_unique' => '{field} tersebut sudah ada'
                    ]
                ],
                'tanggal' => [
                    'label' => 'tanggal',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} tidak boleh kosong',

                    ]
                ],
                'link' => [
                    'label' => 'link',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} tidak boleh kosong',

                    ]
                ],
                'foto' => [
                    'label' => 'foto',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} tidak boleh kosong',

                    ]
                ],
            ]);
            if (!$valid) {
                $msg = [
                    'error' => [
                        'judul'     => $validation->getError('judul'),
                        'desk'    => $validation->getError('desk'),
                        'tanggal'  => $validation->getError('tanggal'),
                        'link'     => $validation->getError('link'),
                        'foto'    => $validation->getError('foto'),
                    ]
                ];
            } else {
                $simpandata = [
                    'judul'      => $request->getVar('judul'),
                    'desk'     => $request->getVar('desk'),
                    'tanggal'   => $request->getVar('tanggal'),
                    'link'      => $request->getVar('link'),
                    'foto'     => "default.png",
                ];

                $this->NewsModel->insert($simpandata);
                $msg = [
                    'sukses' => 'Data berhasil disimpan'
                ];
            }
            echo json_encode($msg);
        } else {
            exit(view('error'));
        }
    }

    public function form_edit()
    {
        $request = \Config\Services::request();
        if ($request->isAJAX()) {


            $id_news = $request->getVar('id');
            $row = $this->NewsModel->find($id_news);

            $data = [
                'id' => $row['id_news'],
                'judul' => $row['judul'],
                'desk' => $row['desk'],
                'link' => $row['link'],
                'tanggal' => $row['tanggal'],
                'foto' => $row['foto'],

            ];

            $msg = [
                'sukses' => view('admin/news/update', $data)
            ];

            echo json_encode($msg);
        } else {
            exit(view('error'));
        }
    }

    public function edit()
    {
        $request = \Config\Services::request();

        if ($request->isAJAX()) {
            $id_news = $request->getVar('id');



            $simpandata = [
                'judul'          => $request->getVar('judul'),
                'desk'         => $request->getVar('desk'),
                'link'          => $request->getVar('link'),
                'tanggal'       => $request->getVar('tanggal'),
                'foto' => "default.png"

            ];

            $id_news = $request->getVar('id');

            $this->NewsModel->update($id_news, $simpandata);

            $msg = [
                'sukses' => 'Data berhasil diupdate'
            ];

            echo json_encode($msg);
        } else {
            exit(view('error'));
        }
    }

    public function hapus()
    {
        $request = \Config\Services::request();

        if ($request->isAJAX()) {

            $id_news = $request->getVar('id');

            $this->NewsModel->delete($id_news);
            $msg = [
                'sukses' => 'Data berhasil dihapus'
            ];

            echo json_encode($msg);
        }
    }
}
