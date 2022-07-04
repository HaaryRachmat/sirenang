<?php

namespace App\Controllers;

use App\Models\Model_user;
use App\Models\Model_dep;

class User extends BaseController
{
    public function __construct()
    {
        $this->Model_user = new Model_user();
        $this->Model_dep = new Model_dep();
        helper('form');
    }

    public function index()
    {
        $currentPage = $this->request->getVar('page_tbl_user') ? $this->request->getVar('page_tbl_user') : 1;

        $keyword = $this->request->getVar('keyword');

        if ($keyword) {
            $user = $this->Model_user->search($keyword);
        } else {
            $user = $this->Model_user->all_data();
        }

        $data = array(
            'title' => 'User',
            'user' => $this->Model_user->all_data(),
            // 'user' => $user,
            'pager' => $this->Model_user->pager,
            'isi' => 'user/v_index',
            'currentPage' => $currentPage,

        );
        return view('layout/v_wrapper', $data);
    }

    public function add()
    {
        // session();
        $data = array(
            'title' => 'Add User ',
            'validation' => \Config\Services::validation(),
            'dep' => $this->Model_dep->all_data(),
            'isi' => 'user/v_add',

        );
        return view('layout/v_wrapper', $data);
    }

    public function insert()
    {
        // if (
        //     $this->validate([
        //     'nama_user' => [
        //         'label'  => 'Nama User',
        //         'rules'  => 'required',
        //         'errors' => [
        //             'required' => '{field} Wajib Di Isi !!',
        //         ],
        //     ],
        //     'email' => [
        //         'label'  => 'E-mail',
        //         'rules'  => 'required|is_unique[tbl_user.email',
        //         'errors' => [
        //             'required' => '{field} Wajib Di Isi !!',
        //             'is_unique' => '{field} Sudah terdaftar, Masukkan {field} lain !!',
        //         ],
        //     ],
        //     'password' => [
        //         'label'  => 'Password',
        //         'rules'  => 'required|min_length[3]',
        //         'errors' => [
        //             'required' => '{field} Wajib Di Isi !!',
        //             'min_length' => '{field} Terlalu Pendek',
        //         ],
        //     ],
        //     'level' => [
        //         'label'  => 'level',
        //         'rules'  => 'required',
        //         'errors' => [
        //             'required' => '{field} Wajib Di Isi !!',
        //         ],
        //     ],
        //     'id_dep' => [
        //         'label'  => 'Departemen',
        //         'rules'  => 'required',
        //         'errors' => [
        //             'required' => '{field} Wajib Di Isi !!',
        //         ],
        //     ],
        //     'foto' => [
        //         'label'  => 'Foto',
        //         'rules'  => 'uploaded[foto]|max_size[foto,1024]|mime_in[foto,image/png,image/jpg,image/jpeg,image/gif]',
        //         'errors' => [
        //             'uploaded' => '{field} Wajib Di Isi !!',
        //             'max_size' => 'Ukuran {field} Max 1 mb!!',
        //             'mime_in' => 'Format {field} wajib PNG,JPEG,JPG,GIF!!',
        //         ],
        //     ],
        // ])) 

        if (!$this->validate([
            'nama_user' => [
                'label'  => 'Nama User',
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} Wajib Di Isi !!',
                ],
            ],

            // 'email' => [
            //     'label'  => 'E-mail',
            //     'rules'  => 'required|is_unique[tbl_user.email]|valid_email',
            //     'errors' => [
            //         'required' => '{field} Wajib Di Isi !!',
            //         'is_unique' => '{field} Sudah terdaftar, Masukkan {field} lain !!',
            //         'valid_email' => '{field} Tidak Valid'
            //     ],
            // ],
            'email' => [
                'label'  => 'NIP',
                'rules'  => 'required|is_unique[tbl_user.email]',
                'errors' => [
                    'required' => '{field} Wajib Di Isi !!',
                    'is_unique' => '{field} Sudah terdaftar, Masukkan {field} lain !!',
                ],
            ],

            'password' => [
                'label'  => 'Password',
                'rules'  => 'required|min_length[3]',
                'errors' => [
                    'required' => '{field} Wajib Di Isi !!',
                    'min_length' => '{field} Terlalu Pendek',
                ],
            ],

            // 'foto' => [
            //     'label'  => 'Password',
            //     'rules'  => 'uploaded[foto]|mime_in[foto, image/png, image/jpg, image/jpeg]|max_size[foto,4096]',
            //     'errors' => [
            //         'uploaded' => '{field} Wajib Di Isi !!',
            //     ],
            // ],



        ])) {
            // Jika tidak valid

            $validation = \Config\Services::validation();
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to(base_url('user/add'))->withInput()->with('validation', $validation);
        } else {
            // mengambil file foto yg akan di upload
            $foto = $this->request->getFile('foto');

            // random nama file foto
            $nama_file = $foto->getRandomName();

            // Jika valid
            $model = new Model_user();
            $data = array(
                'nama_user'  => $this->request->getPost('nama_user'),
                'email'  => $this->request->getPost('email'),
                'password'  => $this->request->getPost('password'),
                'level'  => $this->request->getPost('level'),
                'id_dep'  => $this->request->getPost('id_dep'),
                'foto'  => $nama_file,
            );

            $foto->move('foto', $nama_file); //direktori upload file
            $model->add($data);
            session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan');
            return redirect()->to(base_url('user'));





            // gak jalan karna di email kurang kurung siku
            // session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            // return redirect()->to(base_url('user/add'))->withInput();
        }
    }

    public function edit($id_user)
    {
        // session();
        $data = array(
            'title' => 'Edit User ',
            'validation' => \Config\Services::validation(),
            'dep' => $this->Model_dep->all_data(),
            'user' => $this->Model_user->detail_data($id_user),
            'isi' => 'user/v_edit',

        );
        return view('layout/v_wrapper', $data);
    }

    public function update($id_user)
    {
        if (!$this->validate([
            'nama_user' => [
                'label'  => 'Nama User',
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} Wajib Di Isi !!',
                ],
            ],

            'password' => [
                'label'  => 'Password',
                'rules'  => 'required|min_length[3]',
                'errors' => [
                    'required' => '{field} Wajib Di Isi !!',
                    'min_length' => '{field} Terlalu Pendek',
                ],
            ],

            // Aneh Tidak Bisa Validasi Foto
            // 'foto' => [
            //     'label'  => 'Password',
            //     'rules'  => 'mime_in[foto, image/png, image/jpg, image/jpeg]|max_size[foto,2048]',
            //     'errors' => [
            //         'max_size' => '{field} Maksimal 4MB !!',
            //         'mime_in' => '{field} harus png,jpg,jpeg',
            //     ],
            // ],


        ])) {
            // Jika tidak valid

            $validation = \Config\Services::validation();
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to(base_url('user/edit/' . $id_user))->withInput()->with('validation', $validation);
        } else {
            $foto = $this->request->getFile('foto');
            $model = new Model_user();

            if ($foto->getError() == 4) {
                $data = array(
                    'id_user' => $id_user,
                    'nama_user'  => $this->request->getPost('nama_user'),
                    'password'  => $this->request->getPost('password'),
                    'level'  => $this->request->getPost('level'),
                    'id_dep'  => $this->request->getPost('id_dep'),
                );
                $model->edit($data);
            } else {
                // Hapus Foto Lama
                $user = $this->Model_user->detail_data($id_user);
                if ($user['foto'] != "") {
                    unlink('foto/' . $user['foto']);
                }

                // random nama file foto
                $nama_file = $foto->getRandomName();

                $data = array(
                    'id_user' => $id_user,
                    'nama_user'  => $this->request->getPost('nama_user'),
                    'password'  => $this->request->getPost('password'),
                    'level'  => $this->request->getPost('level'),
                    'id_dep'  => $this->request->getPost('id_dep'),
                    'foto'  => $nama_file,
                );

                $foto->move('foto', $nama_file); //direktori upload file
                $model->edit($data);
            }

            session()->setFlashdata('pesan', 'Data Berhasil Di Update');
            return redirect()->to(base_url('user'));
        }
    }

    public function delete($id_user)
    {
        // Hapus Foto Lama
        $user = $this->Model_user->detail_data($id_user);
        if ($user['foto'] != "") {
            unlink('foto/' . $user['foto']);
        }

        $model = new Model_user();
        $data = array(
            'id_user' => $id_user,
        );
        $model->delete($data);
        session()->setFlashdata('pesan', 'Data Berhasil Di Hapus');
        return redirect()->to(base_url('user'));
    }
}
