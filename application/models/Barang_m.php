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
        $param['id_user'] = $this->session->userdata('userid');
        $this->db->insert('tb_barang', $param);
    }

    public function tambah_banyak($post) 
    {
        $total = $this->input->post('total');

        for ($i=1; $i <= $total; $i++) {
            $param['kode_barang'] = $post['kode-'.$i];
            $param['nama_barang'] = $post['nama-'.$i];
            $param['id_user'] = $this->session->userdata('userid');
            $this->db->insert('tb_barang', $param);
        }
    }

    public function hapus($id)
	{
        $this->db->where('id_barang', $id);
        $this->db->delete('tb_barang');
    }

    public function edit($post)
    {
        $param['kode_barang'] = $post['kode'];
        $param['nama_barang'] = $post['nama'];
        $param['id_user'] = $this->session->userdata('userid');
        $this->db->where('id_barang', $post['id']);
        $this->db->update('tb_barang', $param);
    }

    function tambah_qty($data) 
    {
        $qty = $data['qty'];
        $id = $data['barang'];
        $sql = "UPDATE tb_barang SET qty = qty + '$qty' WHERE id_barang = '$id'";
        $this->db->query($sql);
    }

    function kurang_qty($data) 
    {
        $qty = $data->qty;
        $id = $data->id_barang;
        $sql = "UPDATE tb_barang SET qty = qty - '$qty' WHERE id_barang = '$id'";
        $this->db->query($sql);
    }

    

}