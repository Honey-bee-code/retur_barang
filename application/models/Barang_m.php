<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_m extends CI_Model {

    public function get($id = null)
    {
        $this->db->from('tb_barang');
        if($id != null) {
            $this->db->where('id_barang', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function tambah($post) 
    {
        $param['nama'] = $post['nama'];
        $param['username'] = $post['username'];
        $param['password'] = sha1($post['password']);
        $param['alamat'] = $post['alamat'];
        $param['level'] = $post['level'];
        $param['photo'] = $post['photo'];
        $this->db->insert('tb_barang', $param);
    }

    public function hapus($id)
	{
        $this->db->where('id_user', $id);
        $this->db->delete('user');
    }

    public function edit($post)
    {
        $param['nama'] = $post['nama'] ;
        $param['username'] = $post['username'];
        if(!empty($post['password'])){
            $param['password'] = sha1($post['password']);
        }
        $param['alamat'] = $post['alamat'];
        $param['level'] = $post['level'];

        if($post['photo'] != null) {
            $param['photo'] = $post['photo'];
        }
        $this->db->where('id_user', $post['userid']);
        $this->db->update('user', $param);
    }

}