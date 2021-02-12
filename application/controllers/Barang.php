<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

	public function all()
	{
		tidak_login();
		$this->template->load('template', 'barang/barang_data');
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
