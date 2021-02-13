<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        tidak_login();
        // $this->load->model('barang_m');
        $this->load->library('form_validation');         
    }

	public function all()
	{
		tidak_login();
		$this->template->load('template', 'barang/barang_data'); 
	}

	public function tambah()
	{
		
		$this->form_validation->set_rules('kurir', 'Yang bawa barang', 'required');
		$this->form_validation->set_rules('barang', 'Barang', 'required');
		$this->form_validation->set_rules('toko', 'Toko', 'required');
		$this->form_validation->set_rules('qty', 'Quantity', 'required|greater_than[0]', 
		array('greater_than' =>'Jumlah %s minimal 1'));
		$this->form_validation->set_rules('kondisi[]', 'Kondisi', 'required');

        $this->form_validation->set_message('required', '%s masih kosong, silahkan isi');

        $this->form_validation->set_error_delimiters('<span class="help-block">', '</span>');

        if($this->form_validation->run() == FALSE) {
            $this->template->load('template', 'barang/barang_form_tambah');
        } else {
            $post = $this->input->post(null, TRUE);
           
			$this->retur_m->tambah($post);
			if($this->db->affected_rows() > 0){
				echo "<script>alert('Data berhasil disimpan')</script>";
			}
			echo "<script>window.location='" .site_url('user'). "'</script>";
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
