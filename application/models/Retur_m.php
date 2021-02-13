<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Retur_m extends CI_Model {

    public function get($id = null)
    {
        $this->db->from('tb_retur');
        if($id != null) {
            $this->db->where('id_retur', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function tambah($post) 
    {
        $param['id_barang'] = $post['barang'];
        $param['kode_barang'] = $post['kode_barang'];
        $param['nama_barang'] = $post['nama_barang'];
        $param['kondisi'] = $post['kondisi'];
        $param['qty'] = $post['qty'];
        $param['toko'] = $post['toko'];
        $param['kurir'] = $post['kurir'];
        $param['tanggal'] = $post['tanggal'];
        $param['id_user'] = $this->session->userdata('userid');
        
        $this->db->insert('tb_retur', $param);
    }

    public function hapus($id)
	{
        $this->db->where('id_retur', $id);
        $this->db->delete('tb_retur');
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