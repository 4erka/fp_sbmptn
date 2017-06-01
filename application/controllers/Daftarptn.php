<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftarptn extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}

	public function index()
	{
		$daftarptn = $this->db->query('SELECT* FROM ptn');
		$resDaftarptn = array
                'daftarptn' => $daftarptn->result()
            );
		$this->load->view('header');
		$this->load->view('navbar');
		$this->load->view('daftarptn', $resDaftarptn);
		$this->load->view('footer');
	}

}
