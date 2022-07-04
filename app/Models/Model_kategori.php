<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_kategori extends Model
{
    protected $table      = 'tbl_kategori';
    protected $primaryKey = 'id_kategori';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['nama_kategori'];

    public function all_data()
    {
        return $this->db->table('tbl_kategori')
            ->orderBy('id_kategori', 'ASC')
            ->get()
            ->getResultArray();
    }

    // public function add($data)
    // {
    //     $this->db->table('tbl_kategori')->insert($data);
    // }
    public function add($data)
    {
        $query = $this->db->table('tbl_kategori')->insert($data);
        return $query;
    }

    public function edit($data)
    {
        $this->db->table('tbl_kategori')
            ->where('id_kategori', $data['id_kategori'])
            ->update($data);
    }

    public function delete_data($data)
    {
        $this->db->table('tbl_kategori')
            ->where('id_kategori', $data['id_kategori'])
            ->delete($data);
    }

    public function search($keyword)
    {
        // $builder = $this->table('tbl_kategori');
        // $builder->like('nama_kategori', $keyword);
        // return $builder;

        return $this->table('tbl_kategori')->like('nama_kategori', $keyword);
    }
}
