<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_arsip extends Model
{
    protected $table      = 'tbl_arsip';
    protected $primaryKey = 'id_arsip';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['no_arsip', 'nama_arsip', 'deskripsi', 'file_arsip'];

    public function all_data()
    {
        return $this->db->table('tbl_arsip')
            ->join('tbl_dep', 'tbl_dep.id_dep = tbl_arsip.id_dep', 'left')
            ->join('tbl_user', 'tbl_user.id_user = tbl_arsip.id_user', 'left')
            ->join('tbl_kategori', 'tbl_kategori.id_kategori = tbl_arsip.id_kategori', 'left')
            ->orderBy('id_arsip', 'ASC')
            ->get()
            ->getResultArray();
    }

    // your function to paginate
    // public function all_data(int $nb_page)
    // {
    //     return $this->select()
    //         ->join('tbl_dep', 'tbl_dep.id_dep = tbl_arsip.id_dep')
    //         ->join('tbl_user', 'tbl_user.id_user = tbl_arsip.id_user')
    //         ->join('tbl_kategori', 'tbl_kategori.id_kategori = tbl_arsip.id_kategori')
    //         ->paginate($nb_page);
    // }


    // public function all_data_user(int $nb_page)
    // {
    //     return $this->select()
    //         ->join('tbl_dep', 'tbl_dep.id_dep = tbl_user.id_dep')
    //         ->paginate($nb_page);
    // }

    public function detail_data($id_arsip)
    {
        return $this->db->table('tbl_arsip')
            ->join('tbl_dep', 'tbl_dep.id_dep = tbl_arsip.id_dep', 'left')
            ->join('tbl_user', 'tbl_user.id_user = tbl_arsip.id_user', 'left')
            ->join('tbl_kategori', 'tbl_kategori.id_kategori = tbl_arsip.id_kategori', 'left')
            ->where('id_arsip', $id_arsip)
            ->get()
            ->getRowArray();
    }

    // public function add($data)
    // {
    //     $this->db->table('tbl_arsip')->insert($data);
    // }
    public function add($data)
    {
        $query = $this->db->table('tbl_arsip')->insert($data);
        return $query;
    }

    public function edit($data)
    {
        $this->db->table('tbl_arsip')
            ->where('id_arsip', $data['id_arsip'])
            ->update($data);
    }

    public function delete_data($data)
    {
        $this->db->table('tbl_arsip')
            ->where('id_arsip', $data['id_arsip'])
            ->delete($data);
    }

    public function search($keyword)
    {
        // $builder = $this->table('tbl_kategori');
        // $builder->like('nama_kategori', $keyword);
        // return $builder;

        return $this->table('tbl_arsip')->like('nama_arsip', $keyword)->orLike('deskripsi');
    }
}
