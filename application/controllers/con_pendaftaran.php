<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class con_pendaftaran extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}

	public function index()
	{
		$this->load->view('header');
		$this->load->view('navbar');
		$this->load->view('pendaftaran');
		$this->load->view('footer');
	}

}