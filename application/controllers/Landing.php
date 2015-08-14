<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landing extends CI_Controller {

	public function index()
	{
		$this->load->view('contacto');
	}
	public function customize()
	{
		$this->load->view('landing-presenciaweb-customize');
	}
	public function builder()
	{
		$this->load->view('landing-presenciaweb-builder');
	}
	public function thinkstock()
	{
		$this->load->view('landing-presenciaweb-thinkstock');
	}
	public function survmetrics()
	{
		$this->load->view('landing-presenciaweb-survmetrics');
	}
}
