<?php

namespace App\Controllers;

class Profile extends BaseController
{
    public function index()
    {
        $data = [
            'title' => "SMAP - Profile",
            'head' => "Profile"
        ];

        return view('admin/profile/index', $data);
    }

    public function submit()
    {
        $request = \Config\Services::request();
        if ($request->isAJAX()) {
            $validation = \Config\Services::validation();
            $valid = $this->validate([
                'nama_web' => [
                    'label' => 'Nama website',
                    'rules' => 'required|alpha_numeric_space',
                    'errors' => [
                        'required' => '{field} tidak boleh kosong',
                        'alpha_numeric_space' => 'Tidak boleh mengandung karakter unik',
                    ]
                ],
                'deskripsi' => [
                    'label' => 'Deskripsi',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} tidak boleh kosong',
                    ]
                ],
                'visi' => [
                    'label' => 'Visi',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} tidak boleh kosong',
                    ]
                ],
                'misi' => [
                    'label' => 'Misi',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} tidak boleh kosong',
                    ]
                ],
                'instagram' => [
                    'label' => 'Instagram',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} tidak boleh kosong',
                    ]
                ],
                'facebook' => [
                    'label' => 'Facebook',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} tidak boleh kosong',
                    ]
                ],
                'whatsapp' => [
                    'label' => 'Whatsapp',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} tidak boleh kosong',
                    ]
                ],
                'email' => [
                    'label' => 'Email',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} tidak boleh kosong',
                    ]
                ],
                'alamat' => [
                    'label' => 'Alamat',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} tidak boleh kosong',
                    ]
                ],
            ]);
            if (!$valid) {
                $msg = [
                    'error' => [
                        'nama_web'      => $validation->getError('nama_web'),
                        'deskripsi'     => $validation->getError('deskripsi'),
                        'visi'          => $validation->getError('visi'),
                        'misi'          => $validation->getError('misi'),
                        'instagram'     => $validation->getError('instagram'),
                        'facebook'      => $validation->getError('facebook'),
                        'whatsapp'      => $validation->getError('whatsapp'),
                        'email'         => $validation->getError('email'),
                        'alamat'        => $validation->getError('alamat'),
                    ]
                ];
            } else {
                $simpandata = [
                    'nama_web'     => $request->getVar('nama_web'),
                    'deskripsi'    => $request->getVar('deskripsi'),
                    'visi'         => $request->getVar('visi'),
                    'misi'         => $request->getVar('misi'),
                    'instagram'    => $request->getVar('instagram'),
                    'facebook'     => $request->getVar('facebook'),
                    'whatsapp'     => $request->getVar('whatsapp'),
                    'email'        => $request->getVar('email'),
                    'alamat'       => $request->getVar('alamat'),
                ];
                $konfigurasi_id = $request->getVar('konfigurasi_id');
                $this->konfigurasi->update($konfigurasi_id, $simpandata);
                $msg = [
                    'sukses' => 'Data berhasil diupdate'
                ];
            }
            echo json_encode($msg);
        }
    }

    public function formuploadlogo()
    {
        $request = \Config\Services::request();
        if ($request->isAJAX()) {
            $konfigurasi_id = $request->getVar('konfigurasi_id');
            $list =  $this->konfigurasi->find($konfigurasi_id);
            $data = [
                'title' => 'Upload Logo Website',
                'list'  => $list,
                'konfigurasi_id' => $list['konfigurasi_id']
            ];
            $msg = [
                'sukses' => view('auth/konfigurasi/uploadlogo', $data)
            ];
            echo json_encode($msg);
        }
    }

    public function douploadlogo()
    {
        $request = \Config\Services::request();
        if ($request->isAJAX()) {

            $konfigurasi_id = $request->getVar('konfigurasi_id');

            $validation = \Config\Services::validation();

            $valid = $this->validate([
                'logo' => [
                    'label' => 'Upload Logo',
                    'rules' => 'uploaded[logo]|mime_in[logo,image/png,image/jpg,image/jpeg]|is_image[logo]',
                    'errors' => [
                        'uploaded' => 'Masukkan gambar',
                        'mime_in' => 'Harus gambar!'
                    ]
                ]
            ]);
            if (!$valid) {
                $msg = [
                    'error' => [
                        'logo' => $validation->getError('logo')
                    ]
                ];
            } else {

                //check
                $cekdata = $this->konfigurasi->find($konfigurasi_id);
                $fotolama = $cekdata['logo'];
                if ($fotolama != 'default.png') {
                    unlink('img/konfigurasi/logo/' . $fotolama);
                    unlink('img/konfigurasi/logo/thumb/' . 'thumb_' . $fotolama);
                }

                $filegambar = $request->getFile('logo');

                $updatedata = [
                    'logo' => $filegambar->getName(),
                ];

                $this->konfigurasi->update($konfigurasi_id, $updatedata);

                \Config\Services::image()
                    ->withFile($filegambar)
                    ->fit(250, 250, 'center')
                    ->save('img/konfigurasi/logo/thumb/' . 'thumb_' .  $filegambar->getName());
                $filegambar->move('img/konfigurasi/logo');
                $msg = [
                    'sukses' => 'Gambar berhasil diupload!',
                ];
            }
            echo json_encode($msg);
        }
    }

    public function formuploadicon()
    {
        $request = \Config\Services::request();
        if ($request->isAJAX()) {
            $konfigurasi_id = $request->getVar('konfigurasi_id');
            $list =  $this->konfigurasi->find($konfigurasi_id);
            $data = [
                'title' => 'Upload Icon Website',
                'list'  => $list,
                'konfigurasi_id' => $list['konfigurasi_id']
            ];
            $msg = [
                'sukses' => view('auth/konfigurasi/uploadicon', $data)
            ];
            echo json_encode($msg);
        }
    }

    public function douploadicon()
    {
        $request = \Config\Services::request();
        if ($request->isAJAX()) {

            $konfigurasi_id = $request->getVar('konfigurasi_id');

            $validation = \Config\Services::validation();

            $valid = $this->validate([
                'icon' => [
                    'label' => 'Upload Icon',
                    'rules' => 'uploaded[icon]|mime_in[icon,image/png,image/jpg,image/jpeg]|is_image[icon]',
                    'errors' => [
                        'uploaded' => 'Masukkan gambar',
                        'mime_in' => 'Harus gambar!'
                    ]
                ]
            ]);
            if (!$valid) {
                $msg = [
                    'error' => [
                        'icon' => $validation->getError('icon')
                    ]
                ];
            } else {

                //check
                $cekdata = $this->konfigurasi->find($konfigurasi_id);
                $fotolama = $cekdata['icon'];
                if ($fotolama != 'default.png') {
                    unlink('img/konfigurasi/icon/' . $fotolama);
                    unlink('img/konfigurasi/icon/thumb/' . 'thumb_' . $fotolama);
                }

                $filegambar = $request->getFile('icon');

                $updatedata = [
                    'icon' => $filegambar->getName(),
                ];

                $this->konfigurasi->update($konfigurasi_id, $updatedata);

                \Config\Services::image()
                    ->withFile($filegambar)
                    ->fit(250, 250, 'center')
                    ->save('img/konfigurasi/icon/thumb/' . 'thumb_' .  $filegambar->getName());
                $filegambar->move('img/konfigurasi/icon');
                $msg = [
                    'sukses' => 'Gambar berhasil diupload!',
                ];
            }
            echo json_encode($msg);
        }
    }
}
