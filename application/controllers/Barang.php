<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        tidak_login();
        $this->load->model('barang_m');
        $this->load->library('form_validation');         
    }

	public function index()
	{
		tidak_login();
		$data['row'] = $this->barang_m->get();
		$this->template->load('template', 'barang/barang_data', $data); 
	}

	public function get($id = null)
    {
        $this->db->from('tb_barang');
        if($id != null) {
            $this->db->where('id_barang', $id);
        }
        $query = $this->db->get();
        return $query;
	}

	public function tambah()
	{
		
		$this->form_validation->set_rules('kode', 'Kode barang', 'required|is_unique[tb_barang.kode_barang]');
		$this->form_validation->set_rules('nama', 'Nama Barang', 'required');
		$this->form_validation->set_rules('toko', 'Toko', 'required');

        $this->form_validation->set_message('required', '%s masih kosong, silahkan isi');

		$this->form_validation->set_error_delimiters('<span class="help-block">', '</span>');
		$this->form_validation->set_message('is_unique', '{field} sudah dipakai, silahkan coba yang lain');

        if($this->form_validation->run() == FALSE) {
            $this->template->load('template', 'barang/barang_form_tambah');
        } else {
            $post = $this->input->post(null, TRUE);
           
			$this->barang_m->tambah($post);
			if($this->db->affected_rows() > 0){
				echo "<script>alert('Data berhasil disimpan')</script>";
			}
			echo "<script>window.location='" .site_url('barang'). "'</script>";
        }
	}

	public function hapus($id)
    {
        // $id = $this->input->post('id');
        
        $user = $this->barang_m->get($id)->row();
		
        $this->barang_m->hapus($id);
        // $error = $this->db->error();
		if($this->db->affected_rows() > 0){
            echo "<script>alert('Data berhasil dihapus')</script>";
        }
        echo "<script>window.location='" .site_url('barang'). "'</script>";
        
	}
	
	public function edit($id)
    {
        $this->form_validation->set_rules('kode', 'Kode barang', 'required|callback_cek_kode');
		$this->form_validation->set_rules('nama', 'Nama Barang', 'required');
		$this->form_validation->set_rules('toko', 'Toko', 'required');

        $this->form_validation->set_message('required', '%s masih kosong, silahkan isi');

		$this->form_validation->set_error_delimiters('<span class="help-block">', '</span>');

        if($this->form_validation->run() == FALSE) {
			$query = $data['row'] = $this->barang_m->get($id);
            if($query->num_rows() > 0){
                $data['row'] = $query->row();
				$this->template->load('template', 'barang/barang_form_edit', $data);
			} else {
				echo "<script>alert('Data tidak ditemukan');";
				echo "window.location='" .site_url('user'). "';</script>";
			}
        } else {
            $post = $this->input->post(null, TRUE);
           
			$this->barang_m->edit($post);
			if($this->db->affected_rows() > 0){
				echo "<script>alert('Data berhasil disimpan')</script>";
			}
			echo "<script>window.location='" .site_url('barang'). "'</script>";
        }
	}

    function cek_kode(){
        $post = $this->input->post(null, TRUE);
        $clean = addslashes($post['kode']);
        $query = $this->db->query("SELECT * FROM tb_barang WHERE kode_barang = '$clean' AND id_barang != '$post[id]'");
        if($query->num_rows() > 0){
            $this->form_validation->set_message('cek_kode', '{field} ini sudah dipakai, silahkan ganti');
            return FALSE;
        } else {
            return TRUE;
        }
    } 

	public function good()
	{
		tidak_login();
		$this->template->load('template', 'barang/barang_good');
	}

	public function bad()
	{
		tidak_login();
		$this->template->load('template', 'barang/barang_bad');
	}
}
