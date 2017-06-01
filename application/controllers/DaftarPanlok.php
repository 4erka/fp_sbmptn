<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DaftarPanlok extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
        $this->load->helper('form');
        $this->load->database();
	}

	public function index()
	{
		$daftarpanlok = $this->db->query('SELECT*
			FROM panlok');
		$resDaftarpanlok = array(
                'daftarpanlok' => $daftarpanlok->result()
            );
		$this->load->view('header');
		$this->load->view('navbar');
		$this->load->view('daftarpanlok', $resDaftarpanlok);
		$this->load->view('footer');
	}

}
