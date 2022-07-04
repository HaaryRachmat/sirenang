<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_user extends Model
{
    protected $table      = 'tbl_user';
    protected $primaryKey = 'id_user';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['nama_user'];

    public function all_data()
    {
        return $this->db->table('tbl_user')
            ->join('tbl_dep', 'tbl_dep.id_dep = tbl_user.id_dep', 'left')
            ->orderBy('id_user', 'ASC')
            ->get()
            ->getResultArray();
    }

    // your function to paginate
    // public function all_data(int $nb_page)
    // {
    //     return $this->select()
    //         ->join('tbl_dep', 'tbl_dep.id_dep = tbl_user.id_dep')
    //         ->paginate($nb_page);
    // }

    public function detail_data($id_user)
    {
        return $this->db->table('tbl_user')
            ->join('tbl_dep', 'tbl_dep.id_dep = tbl_user.id_dep', 'left')
            ->where('id_user', $id_user)
            ->get()
            ->getRowArray();
    }

    // public function add($data)
    // {
    //     $this->db->table('tbl_user')->insert($data);
    // }
    public function add($data)
    {
        $query = $this->db->table('tbl_user')->insert($data);
        return $query;
    }

    public function edit($data)
    {
        $this->db->table('tbl_user')
            ->where('id_user', $data['id_user'])
            ->update($data);
    }

    public function delete_data($data)
    {
        $this->db->table('tbl_user')
            ->where('id_user', $data['id_user'])
            ->delete($data);
    }

    public function search($keyword)
    {
        // $builder = $this->table('tbl_kategori');
        // $builder->like('nama_kategori', $keyword);
        // return $builder;

        return $this->table('tbl_user')->like('nama_user', $keyword);
    }
}
