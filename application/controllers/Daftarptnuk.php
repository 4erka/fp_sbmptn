<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftarptnuk extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
        $this->load->helper('form');
        $this->load->database();
	}

	public function index()
	{
		$daftarptnuk = $this->db->query('SELECT ptnuk.ptn_id, ptn_nama, ptnuk_jenis, ptnuk_alamat
			FROM ptnuk
			INNER JOIN ptn ON ptn.ptn_id = ptnuk.ptn_id');
		$resDaftarptnuk = array(
                'daftarptnuk' => $daftarptnuk->result()
            );
		$this->load->view('header');
		$this->load->view('navbar');
		$this->load->view('daftarptnuk', $resDaftarptnuk);
		$this->load->view('footer');
	}

}
