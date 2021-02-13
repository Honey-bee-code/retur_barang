<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang_m extends CI_Model {

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
        $param['kode_barang'] = $post['kode'];
        $param['nama_barang'] = $post['nama'];
        $param['nama_toko'] = $post['toko'];
        $param['id_user'] = $this->session->userdata('userid');
        $this->db->insert('tb_barang', $param);
    }

    public function hapus($id)
	{
        $this->db->where('id_barang', $id);
        $this->db->delete('tb_barang');
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