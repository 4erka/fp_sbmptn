<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengumuman extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
        $this->load->helper('form');
        $this->load->database();
	}

    public function index() {
        $this->load->view('header');
		$this->load->view('navbar');
		$this->load->view('pengumuman_masuk');
		$this->load->view('footer');
    }

    public function pengumuman() {
        $kap_kode = $this->input->post('inp_kap_kode');
        $kap_pin = $this->input->post('inp_kap_pin');
        $query = $this->db->get_where('kodeaksespendaftaran', array('kap_kode' => $kap_kode, 'kap_pin' => $kap_pin ));
        foreach($query->result_array() AS $row) {
            $id = $row['ps_id'];
        }
        $peserta = $this->db->get_where('peserta', array('ps_id' => $id));
        foreach($peserta->result_array() AS $row) {
        	$ps_nama = $row['ps_nama'];
            $diterima = $row['ps_diterima'];
            $ps_tanggal_lahir = $row['ps_tanggal_lahir'];
        }
        $pilihan = $this->db->query('SELECT* FROM pilihanpeserta where ps_id = '.$id);
        foreach ($pilihan->result_array() as $row)
        {
        	if($diterima == 1) $pilihan = $row['pilihan1'];
            else if($diterima == 2) $pilihan = $row['pilihan2'];
            else if($diterima == 3) $pilihan = $row['pilihan3'];
            else $pilihan = 0;
        }
        $diterimares = $this->db->query('SELECT ptn_nama, pro_nama, pro_id
            FROM prodi
            INNER JOIN ptn ON ptn.ptn_id = prodi.ptn_id
            WHERE pro_id = '.$pilihan);
        foreach($diterimares->result_array() AS $row) {
            $ptn_nama = $row['ptn_nama'];
            $pro_nama = $row['pro_nama'];
            $pro_id = $row['pro_id'];
        }
        $data = array(
            'id' => $id,
            'ptn_nama' => $ptn_nama,
            'pro_nama' =>$pro_nama,
            'pro_id' => $pro_id,
            'ps_nama' => $ps_nama,
            'ps_tanggal_lahir' => $ps_tanggal_lahir,
        );
        if ($query !== FALSE && $peserta !== FALSE && $pilihan !== FALSE && $diterimares !== FALSE)
        {
            // Run your code
            if ($query->num_rows() == 1) {
            	if($diterima != 0){
            		$this->load->view('header');
                	$this->load->view('navbar');
                	$this->load->view('pengumuman', $data);
                	$this->load->view('footer');
            	}
            	else {
            		echo "sayang sekali";
            	}
            }
            else {
                $this->load->view('header');
                $this->load->view('navbar');
                $this->load->view('pengumuman_masuk');
                $this->load->view('footer');
            }
        }
        else {
        	echo "spgorkgospkgr";
            $this->load->view('header');
            $this->load->view('navbar');
            $this->load->view('pengumuman_masuk');
            $this->load->view('footer');
        }
    }
}