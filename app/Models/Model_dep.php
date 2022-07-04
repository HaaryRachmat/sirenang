<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_dep extends Model
{
    protected $table      = 'tbl_dep';
    protected $primaryKey = 'id_dep';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['nama_dep'];

    public function all_data()
    {
        return $this->db->table('tbl_dep')
            ->orderBy('id_dep', 'ASC')
            ->get()
            ->getResultArray();
    }

    // public function add($data)
    // {
    //     $this->db->table('tbl_dep')->insert($data);
    // }
    public function add($data)
    {
        $query = $this->db->table('tbl_dep')->insert($data);
        return $query;
    }

    public function edit($data)
    {
        $this->db->table('tbl_dep')
            ->where('id_dep', $data['id_dep'])
            ->update($data);
    }

    public function delete_data($data)
    {
        $this->db->table('tbl_dep')
            ->where('id_dep', $data['id_dep'])
            ->delete($data);
    }

    public function search($keyword)
    {
        // $builder = $this->table('tbl_kategori');
        // $builder->like('nama_kategori', $keyword);
        // return $builder;

        return $this->table('tbl_dep')->like('nama_dep', $keyword);
    }
}
