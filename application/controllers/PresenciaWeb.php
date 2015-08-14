<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PresenciaWeb extends CI_Controller {

	public function index()
	{
		$this->load->view('presencia-web');
	}
}
