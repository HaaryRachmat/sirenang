<?php

namespace App\Controllers;

use App\Models\Model_dep;

class Dep extends BaseController
{
    public function __construct()
    {
        $this->Model_dep = new Model_dep();
        helper('form');
    }

    public function index()
    {
        $currentPage = $this->request->getVar('page_tbl_dep') ? $this->request->getVar('page_tbl_dep') : 1;

        $keyword = $this->request->getVar('keyword');

        if ($keyword) {
            $dep = $this->Model_dep->search($keyword);
        } else {
            $dep = $this->Model_dep->all_data();
        }

        $data = array(
            'title' => 'Departemen',
            // 'dep' => $this->Model_dep->all_data(),
            'dep' => $dep,
            'pager' => $this->Model_dep->pager,
            'isi' => 'v_dep',
            'currentPage' => $currentPage,

        );
        return view('layout/v_wrapper', $data);
    }

    // public function add()
    // {
    //     $data = array('nama_dep' => $this->request->getPost());
    //     $this->Model_dep->add($data);
    //     session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan');
    //     return redirect()->to(base_url('dep'));
    // }

    public function add()
    {
        $model = new Model_dep();
        $data = array(
            'nama_dep'  => $this->request->getPost('nama_dep'),
        );
        $model->add($data);
        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan');
        return redirect()->to(base_url('dep'));
    }

    public function edit($id_dep)
    {
        $model = new Model_dep();
        $data = array(
            'id_dep' => $id_dep,
            'nama_dep'  => $this->request->getPost('nama_dep'),
        );
        $model->edit($data);
        session()->setFlashdata('pesan', 'Data Berhasil Di Update');
        return redirect()->to(base_url('dep'));
    }

    public function delete($id_dep)
    {
        $model = new Model_dep();
        $data = array(
            'id_dep' => $id_dep,
        );
        $model->delete($data);
        session()->setFlashdata('pesan', 'Data Berhasil Di Hapus');
        return redirect()->to(base_url('dep'));
    }
}
