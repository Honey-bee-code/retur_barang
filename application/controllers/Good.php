<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Good extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        tidak_login();
        $this->load->model('retur_m');
    }

	public function index()
	{
		$data['row'] = $this->retur_m->get_good();
		$this->template->load('template', 'laporan/barang_good', $data); 
	}


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
