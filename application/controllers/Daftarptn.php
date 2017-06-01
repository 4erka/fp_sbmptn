<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftarptn extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
        $this->load->helper('form');
        $this->load->database();
	}

	public function index()
	{
		$daftarptn = $this->db->query('SELECT ptn_id, ptn_nama, ptn.wil_id, ptn.pl_id, pl_nama
			FROM ptn
			INNER JOIN panlok ON ptn.pl_id = panlok.pl_id');
		$resDaftarptn = array(
                'daftarptn' => $daftarptn->result()
            );
		$this->load->view('header');
		$this->load->view('navbar');
		$this->load->view('daftarptn', $resDaftarptn);
		$this->load->view('footer');
	}

}
