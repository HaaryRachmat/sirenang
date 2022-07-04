<?php

namespace App\Controllers;

use App\Models\Model_arsip;
use App\Models\Model_kategori;

class Arsip extends BaseController
{
    public function __construct()
    {
        $this->Model_arsip = new Model_arsip();
        $this->Model_kategori = new Model_kategori();
        helper('form');
        helper('text');
    }

    // public function index1()
    // {
    //     $currentPage = $this->request->getVar('page_tbl_arsip') ? $this->request->getVar('page_tbl_arsip') : 1;

    //     $keyword = $this->request->getVar('keyword');


    //     if ($keyword) {
    //         $arsip = $this->Model_arsip->search($keyword);
    //     } else {
    //         $arsip = $this->Model_arsip->all_data(6);
    //     }

    //     $data = array(
    //         'title' => 'Arsip',
    //         // 'arsip' => $this->Model_arsip->all_data(),
    //         'arsip' => $arsip,
    //         'pager' => $this->Model_arsip->pager,
    //         'isi' => 'arsip/v_index',
    //         'currentPage' => $currentPage,

    //     );
    //     return view('layout/v_wrapper', $data);
    // }

    public function index()
    {
        $currentPage = $this->request->getVar('page_tbl_arsip') ? $this->request->getVar('page_tbl_arsip') : 1;

        $keyword = $this->request->getVar('keyword');

        if ($keyword) {
            $arsip = $this->Model_arsip->search($keyword);
        } else {
            $arsip = $this->Model_arsip->all_data();
        }
        // d($this->request->getVar('keyword'));

        $data = array(
            'title' => 'Arsip',
            // 'arsip' => $this->Model_arsip->all_data(),
            'arsip' => $arsip,
            'pager' => $this->Model_arsip->pager,
            'isi' => 'arsip/v_index',
            'currentPage' => $currentPage,

        );
        return view('layout/v_wrapper', $data);
    }

    public function add()
    {
        $data = array(
            'title' => 'arsip',
            'validation' => \Config\Services::validation(),
            'kategori' => $this->Model_kategori->all_data(),
            'isi' => 'arsip/v_add',

        );
        return view('layout/v_wrapper', $data);
    }

    public function insert()
    {
        if (!$this->validate([
            'nama_arsip' => [
                'label'  => 'Nama Arsip',
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} Wajib Di Isi !!',
                ],
            ],

            'deskripsi' => [
                'label'  => 'Deskripsi',
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} Wajib Di Isi !!',
                ],
            ],

            'id_kategori' => [
                'label'  => 'Kategori',
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} Wajib Di Isi !!',
                ],
            ],

            'file_arsip' => [
                'label'  => 'File',
                'rules'  => 'uploaded[file_arsip]|ext_in[file_arsip,pdf,doc,docx,xlsx]|max_size[file_arsip,2048]',
                'errors' => [
                    'uploaded' => '{field} Wajib Di Isi !!',
                    'max_size' => '{field} Maksimal 2 MB !!',
                    'ext_in' => 'Ekstensi {field} Wajib .pdf, .doc, .docx, .xlsx !!'
                ],
            ],




        ])) {
            // Jika tidak valid

            $validation = \Config\Services::validation();
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to(base_url('arsip/add'))->withInput()->with('validation', $validation);
        } else {
            // mengambil file foto yg akan di upload
            $file_arsip = $this->request->getFile('file_arsip');

            // random nama file foto
            $nama_file = $file_arsip->getRandomName();

            // mengambil Ukuran File
            $ukuran_file = $file_arsip->getSize('kb');

            // Jika valid
            $model = new Model_arsip();
            $data = array(
                'id_kategori'  => $this->request->getPost('id_kategori'),
                'no_arsip'  => $this->request->getPost('no_arsip'),
                'nama_arsip'  => $this->request->getPost('nama_arsip'),
                'deskripsi'  => $this->request->getPost('deskripsi'),
                'tgl_upload'  => date('Y-m-d'),
                'tgl_update'  => date('Y-m-d'),
                'id_dep'  => session()->get('id_dep'),
                'id_user'  => session()->get('id_user'),
                'file_arsip'  => $nama_file,
                'ukuran_file'  => $ukuran_file,
            );

            $file_arsip->move('file_arsip', $nama_file); //direktori upload file
            $model->add($data);
            session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan');
            return redirect()->to(base_url('arsip'));





            // gak jalan karna di email kurang kurung siku
            // session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            // return redirect()->to(base_url('user/add'))->withInput();
        }
    }

    //  edit
    public function edit($id_arsip)
    {
        $data = array(
            'title' => 'arsip',
            'validation' => \Config\Services::validation(),
            'kategori' => $this->Model_kategori->all_data(),
            'arsip' => $this->Model_arsip->detail_data($id_arsip),
            'isi' => 'arsip/v_edit',

        );
        return view('layout/v_wrapper', $data);
    }

    public function update($id_arsip)
    {
        if (!$this->validate([
            'nama_arsip' => [
                'label'  => 'Nama Arsip',
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} Wajib Di Isi !!',
                ],
            ],

            'deskripsi' => [
                'label'  => 'Deskripsi',
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} Wajib Di Isi !!',
                ],
            ],

            'id_kategori' => [
                'label'  => 'Kategori',
                'rules'  => 'required',
                'errors' => [
                    'required' => '{field} Wajib Di Isi !!',
                ],
            ],

            'file_arsip' => [
                'label'  => 'File',
                'rules'  => 'ext_in[file_arsip,pdf,doc,docx,xlsx]|max_size[file_arsip,2048]',
                'errors' => [
                    'max_size' => '{field} Maksimal 2 MB !!',
                    'ext_in' => 'Ekstensi {field} Wajib .pdf, .doc, .docx, .xlsx !!'
                ],
            ],




        ])) {
            // Jika tidak valid
            $validation = \Config\Services::validation();
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to(base_url('arsip/edit' . $id_arsip))->withInput()->with('validation', $validation);
        } else {
            // Jika valid
            // mengambil file foto yg akan di upload
            $file_arsip = $this->request->getFile('file_arsip');
            $model = new Model_arsip();

            if ($file_arsip->getError() == 4) {
                // Jika File tidak diganti
                $data = array(
                    'id_arsip' => $id_arsip,
                    'id_kategori'  => $this->request->getPost('id_kategori'),
                    'no_arsip'  => $this->request->getPost('no_arsip'),
                    'nama_arsip'  => $this->request->getPost('nama_arsip'),
                    'deskripsi'  => $this->request->getPost('deskripsi'),
                    'tgl_update'  => date('Y-m-d'),
                    'id_dep'  => session()->get('id_dep'),
                    'id_user'  => session()->get('id_user'),
                );
                $model->edit($data);
            } else {
                // Jika File diganti
                // Hapus Foto Lama
                $arsip = $this->Model_arsip->detail_data($id_arsip);
                if ($arsip['file_arsip'] != "") {
                    unlink('file_arsip/' . $arsip['file_arsip']);
                }
                // random nama file  
                $nama_file = $file_arsip->getRandomName();

                // mengambil Ukuran File
                $ukuran_file = $file_arsip->getSize('kb');

                // Jika valid
                $model = new Model_arsip();
                $data = array(
                    'id_arsip' => $id_arsip,
                    'id_kategori'  => $this->request->getPost('id_kategori'),
                    'no_arsip'  => $this->request->getPost('no_arsip'),
                    'nama_arsip'  => $this->request->getPost('nama_arsip'),
                    'deskripsi'  => $this->request->getPost('deskripsi'),
                    'tgl_update'  => date('Y-m-d'),
                    'id_dep'  => session()->get('id_dep'),
                    'id_user'  => session()->get('id_user'),
                    'file_arsip'  => $nama_file,
                    'ukuran_file'  => $ukuran_file,
                );

                $file_arsip->move('file_arsip', $nama_file); //direktori upload file
                $model->edit($data);
            }
            session()->setFlashdata('pesan', 'Data Berhasil Di Update');
            return redirect()->to(base_url('arsip'));
        }
    }

    public function delete($id_arsip)
    {
        // Hapus Foto Lama
        $arsip = $this->Model_arsip->detail_data($id_arsip);
        if ($arsip['file_arsip'] != "") {
            unlink('file_arsip/' . $arsip['file_arsip']);
        }

        $model = new Model_arsip();
        $data = array(
            'id_arsip' => $id_arsip,
        );
        $model->delete($data);
        session()->setFlashdata('pesan', 'Data Berhasil Di Hapus');
        return redirect()->to(base_url('Arsip'));
    }

    public function viewpdf($id_arsip)
    {

        $arsip = $this->Model_arsip->detail_data($id_arsip);
        // d($this->request->getVar('keyword'));

        $data = array(
            'title' => 'View Arsip',
            'arsip' => $this->Model_arsip->detail_data($id_arsip),
            // 'arsip' => $arsip,
            'isi' => 'arsip/v_viewpdf',
        );
        return view('layout/v_wrapper', $data);
    }
    function download($id)
    {
        $file = new Model_arsip();
        $data = $file->find($id);
        return $this->response->download('file_arsip/' . $data['file_arsip'], null);
    }

    public function download1($nama_file)
    {
        // return $this->response->download($nama_file, null);
    }
}
