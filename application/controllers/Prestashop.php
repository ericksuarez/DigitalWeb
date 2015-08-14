<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prestashop extends CI_Controller {

	public function index()
	{
		$this->load->view('prestashop');
	}
        
	public function landing()
	{
		$this->load->view('landing-prestashop');
	}
        
}
