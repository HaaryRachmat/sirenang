<?php

namespace App\Controllers;

use App\Models\Model_kategori;

class Kategori extends BaseController
{
    public function __construct()
    {
        $this->Model_kategori = new Model_kategori();
        helper('form');
    }

    public function index()
    {
        $currentPage = $this->request->getVar('page_tbl_kategori') ? $this->request->getVar('page_tbl_kategori') : 1;

        $keyword = $this->request->getVar('keyword');


        if ($keyword) {
            $kategori = $this->Model_kategori->search($keyword);
        } else {
            $kategori = $this->Model_kategori;
        }


        $data = array(
            'title' => 'Kategori',
            'kategori' => $this->Model_kategori->all_data(),
            // 'kategori' => $kategori->paginate(10, 'tbl_kategori'),
            'pager' => $this->Model_kategori->pager,
            'isi' => 'v_kategori',
            'currentPage' => $currentPage,

        );
        return view('layout/v_wrapper', $data);
    }

    // public function add()
    // {
    //     $data = array('nama_kategori' => $this->request->getPost());
    //     $this->Model_kategori->add($data);
    //     session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan');
    //     return redirect()->to(base_url('kategori'));
    // }

    public function add()
    {
        $model = new Model_kategori();
        $data = array(
            'nama_kategori'  => $this->request->getPost('nama_kategori'),
        );
        $model->add($data);
        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan');
        return redirect()->to(base_url('kategori'));
    }

    public function edit($id_kategori)
    {
        $model = new Model_kategori();
        $data = array(
            'id_kategori' => $id_kategori,
            'nama_kategori'  => $this->request->getPost('nama_kategori'),
        );
        $model->edit($data);
        session()->setFlashdata('pesan', 'Data Berhasil Di Update');
        return redirect()->to(base_url('kategori'));
    }

    public function delete($id_kategori)
    {
        $model = new Model_kategori();
        $data = array(
            'id_kategori' => $id_kategori,
        );
        $model->delete($data);
        session()->setFlashdata('pesan', 'Data Berhasil Di Hapus');
        return redirect()->to(base_url('kategori'));
    }
}
