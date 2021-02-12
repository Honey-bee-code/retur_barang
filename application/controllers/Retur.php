<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Retur extends CI_Controller {

	public function index()
	{
		tidak_login();
		$this->template->load('template', 'retur/retur_data');
	}

	public function tambah()
	{
		$this->template->load('template', 'retur/retur_form_tambah');
	}

}
