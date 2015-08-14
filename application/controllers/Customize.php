<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customize extends CI_Controller {

	public function index()
	{
		$this->load->view('landing-presenciaweb-customize');
	}
}
