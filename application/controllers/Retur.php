<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Retur extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        tidak_login();
		$this->load->model('retur_m');
		$this->load->model('barang_m');
        $this->load->library('form_validation');         
    }

	public function index()
	{
		$this->template->load('template', 'retur/retur_data');
	}

	public function get($id = null)
    {
        $this->db->from('tb_retur');
        if($id != null) {
            $this->db->where('id_retur', $id);
        }
        $query = $this->db->get();
        return $query;
	}

	public function tambah()
	{
		
		$this->form_validation->set_rules('kurir', 'Yang bawa barang', 'required');
		$this->form_validation->set_rules('barang', 'Barang', 'required');
		$this->form_validation->set_rules('toko', 'Toko', 'required');
		$this->form_validation->set_rules('qty', 'Quantity', 'required|greater_than[0]', 
		array('greater_than' =>'Jumlah %s minimal 1'));
		$this->form_validation->set_rules('kondisi', 'Kondisi', 'required');

        $this->form_validation->set_message('required', '%s masih kosong, silahkan isi');

        $this->form_validation->set_error_delimiters('<span class="help-block">', '</span>');

        if($this->form_validation->run() == FALSE) {
            $this->template->load('template', 'retur/retur_form_tambah');
        } else {
            $post = $this->input->post(null, TRUE);
           
			$this->retur_m->tambah($post);
			$this->barang_m->tambah_qty($post);
			if($this->db->affected_rows() > 0){
				echo "<script>alert('Data berhasil disimpan')</script>";
			}
			echo "<script>window.location='" .site_url('retur'). "'</script>";
        }
	}

	public function hapus($id)
    {
        $data = $this->get($id)->row();
		$this->retur_m->hapus($id);
		$this->barang_m->kurang_qty($data);
		if($this->db->affected_rows() > 0){
            echo "<script>alert('Data berhasil dihapus')</script>";
        }
        echo "<script>window.location='" .site_url('retur'). "'</script>";
        
	}

	// public function edit($id)
    // {
    //     $this->form_validation->set_rules('kurir', 'Yang bawa barang', 'required');
	// 	$this->form_validation->set_rules('barang', 'Barang', 'required');
	// 	$this->form_validation->set_rules('toko', 'Toko', 'required');
	// 	$this->form_validation->set_rules('qty', 'Quantity', 'required|greater_than[0]', 
	// 	array('greater_than' =>'Jumlah %s minimal 1'));
	// 	$this->form_validation->set_rules('kondisi', 'Kondisi', 'required');

    //     $this->form_validation->set_message('required', '%s masih kosong, silahkan isi');

    //     $this->form_validation->set_error_delimiters('<span class="help-block">', '</span>');

    //     if($this->form_validation->run() == FALSE) {
	// 		$query = $data['row'] = $this->retur_m->get($id);
    //         if($query->num_rows() > 0){
    //             $data['row'] = $query->row();
	// 			$this->template->load('template', 'retur/retur_form_edit', $data);
	// 		} else {
	// 			echo "<script>alert('Data tidak ditemukan');";
	// 			echo "window.location='" .site_url('retur'). "';</script>";
	// 		}
    //     } else {
    //         $post = $this->input->post(null, TRUE);
           
	// 		$this->retur_m->edit($post);
	// 		$this->barang_m->tambah_qty($post);
	// 		if($this->db->affected_rows() > 0){
	// 			echo "<script>alert('Data berhasil disimpan')</script>";
	// 		}
	// 		echo "<script>window.location='" .site_url('retur'). "'</script>";
    //     }
	// }
	
	public function data_json()
	{
		// DB table to use
		$table = 'tb_retur';
		
		// Table's primary key
		$primaryKey = 'id_retur';
		
		// Array of database columns which should be read and sent back to DataTables.
		// The `db` parameter represents the column name in the database, while the `dt`
		// parameter represents the DataTables column identifier. In this case simple
		// indexes
		$columns = array(
			
			array( 'db' => '',   			'dt' => 0 ),
			array( 'db' => 'tanggal',   	'dt' => 1 ),
			array( 'db' => 'kode_barang',	'dt' => 2 ),
			array( 'db' => 'nama_barang',	'dt' => 3 ),
			array( 'db' => 'kondisi', 		'dt' => 4 ),
			array( 'db' => 'qty',       	'dt' => 5 ),
			array( 'db' => 'toko',      	'dt' => 6 ),
			array( 'db' => 'kurir',     	'dt' => 7 ),
			array( 'db' => 'id_retur',  	'dt' => 8 ),

		);
		
		// SQL server connection information
		$sql_details = array(
			'user' => $this->db->username,
			'pass' => $this->db->password,
			'db'   => $this->db->database,
			'host' => $this->db->hostname
		);
		
		
		/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
		* If you just want to use the basic configuration for DataTables with PHP
		* server-side, there is no need to edit below this line.
		* File ssp.class.php dipindahkan ke librarry
		*/
		
		
		echo json_encode(
			SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns )
		);
	}

}
