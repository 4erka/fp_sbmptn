<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftaran extends CI_Controller {

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
		$this->load->view('pendaftaran');
		$this->load->view('footer');
    }

    public function form_foto() {
        $kap_kode = $this->input->post('inp_kap_kode');
        $kap_pin = $this->input->post('inp_kap_pin');
        $query = $this->db->get_where('kodeaksespendaftaran', array('kap_kode' => $kap_kode, 'kap_pin' => $kap_pin ));
        foreach($query->result_array() AS $row) {
            $id = $row['kap_id'];
        }
        $data = array(
            'error' => ' ',
            'id' => $id,
            'dir' => ''
        );
        if ($query !== FALSE)
        {
            // Run your code
            if ($query->num_rows() == 1) {
                $this->load->view('header');
                $this->load->view('navbar');
                $this->load->view('formfoto', $data);
                $this->load->view('footer');
            }
            else {
                $this->load->view('header');
                $this->load->view('navbar');
                $this->load->view('pendaftaran');
                $this->load->view('footer');
            }
        }
    }

    public function do_upload($id){
        $config['upload_path']          = './uploads/';
        $config['file_name']            = ''.$id;
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 100;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('foto_peserta'))
        {
            $error = array(
                'error' => $this->upload->display_errors(),
                'id' => $id,
                'dir' => ''
            );
            $data['id']=$id;
            $this->load->view('header');
            $this->load->view('navbar');
            $this->load->view('formfoto', $error);
            $this->load->view('footer');
        }
        else
        {
            $error = array(
                'error' => 'Upload Foto Berhasil',
                'id' => $id,
                'dir' => $this->upload->data('orig_name')
            );
            $this->load->view('header');
            $this->load->view('navbar');
            $this->load->view('formfoto', $error);
            $this->load->view('footer');
        }
    }

    public function form_biodata($id){
        $data = array(
                'id' => $id,
            );
        $this->load->view('header');
        $this->load->view('navbar');
        $this->load->view('formbiodata', $data);
        $this->load->view('footer');
    }

    public function form_ptn($id){
        $ps_nama = $this->input->post('inp_nama');
        $ps_nisn = $this->input->post('inp_nisn');
        $ps_alamat = $this->input->post('inp_alamat');
        $ps_kabkot = $this->input->post('inp_kabupaten_kota');
        $ps_provinsi = $this->input->post('inp_provinsi');
        $ps_kode_pos = $this->input->post('inp_kodepos');
        $ps_telp = $this->input->post('inp_telepon_hp');
        $ps_email = $this->input->post('inp_email');
        $ps_tempat_lahir = $this->input->post('inp_tempat_lahir');
        $ps_tanggal_lahir = $this->input->post('inp_tanggal_lahir');
        $jk_id = $this->input->post('inp_kelamin');
        $kw_id = $this->input->post('inp_kewarganegaraan');
        $ps_nama_ayah = $this->input->post('inp_ayah');
        $ps_nama_ibu = $this->input->post('inp_ibu');
        $ps_nama_wali = $this->input->post('inp_wali');
        $ps_pendidikan_ayah = $this->input->post('inp_pendidikan_ayah');
        $ps_pendidikan_ibu = $this->input->post('inp_pendidikan_ibu');
        $ps_pendidikan_wali = $this->input->post('inp_pendidikan_wali');
        $ps_pekerjaan_ayah = $this->input->post('inp_pekerjaan_ayah');
        $ps_pekerjaan_ibu = $this->input->post('inp_pekerjaan_ibu');
        $ps_pekerjaan_wali = $this->input->post('inp_pekerjaan_wali');
        $ps_total_gaji = $this->input->post('inp_total_gaji');
        $ps_kebutuhan_khusus = $this->input->post('inp_kebutuhan_khusus');
        $data = array(
        // 'ps_id' => $id,
        'ps_nama' => $ps_nama,
        'ps_nisn' => $ps_nisn,
        'ps_alamat' => $ps_alamat,
        'ps_kabkot' => $ps_kabkot,
        'ps_provinsi' => $ps_provinsi,
        'ps_kode_pos' => $ps_kode_pos,
        'ps_telp' => $ps_telp,
        'ps_email' => $ps_email,
        'ps_tempat_lahir' => $ps_tempat_lahir,
        'ps_tanggal_lahir' => $ps_tanggal_lahir,
        'jk_id' => $jk_id,
        'kw_id' => $kw_id,
        'ps_nama_ayah' => $ps_nama_ayah,
        'ps_nama_ibu' => $ps_nama_ibu,
        'ps_nama_wali' => $ps_nama_wali,
        'ps_pendidikan_ayah' => $ps_pendidikan_ayah,
        'ps_pendidikan_ibu' => $ps_pendidikan_ibu,
        'ps_pendidikan_wali' => $ps_pendidikan_wali,
        'ps_pekerjaan_ayah' => $ps_pekerjaan_ayah,
        'ps_pekerjaan_ibu' => $ps_pekerjaan_ibu,
        'ps_pekerjaan_wali' => $ps_pekerjaan_wali,
        'ps_total_gaji' => $ps_total_gaji,
        'ps_kebutuhan_khusus' => $ps_kebutuhan_khusus,
        );
        $query = $this->db->insert('peserta', $data);
        $panlok = $this->db->query('SELECT pl_id, pl_nama FROM panlok ORDER BY pl_id');
        $subpanlok = $this->db->query('SELECT pl_id, spl_id, spl_nama FROM subpanlok ORDER BY spl_id');
        $ptn = $this->db->query('SELECT ptn_id, ptn_nama FROM ptn ORDER BY ptn_id');
        $prodi = $this->db->query('SELECT ptn_id, pro_id, pro_nama, uk_id FROM prodi ORDER BY ptn_id');
        $ptnuk = $this->db->query('SELECT ptnuk.ptn_id, ptn_nama, ptnuk_jenis, ptnuk_alamat, ptnuk_id
            FROM ptnuk
            INNER JOIN ptn ON ptn.ptn_id = ptnuk.ptn_id');
        $ids = array(
                'id' => $id,
                'panlok' => $panlok->result(),
                'subpanlok' => $subpanlok->result(),
                'ptn' => $ptn->result(),
                'prodi' => $prodi->result(),
                'ptnuk' => $ptnuk->result()
            );
        if ($query !== FALSE)
        {
            $this->load->view('header');
            $this->load->view('navbar');
            $this->load->view('formptn', $ids);
            $this->load->view('footer');
        }
        else {
            $this->load->view('header');
            $this->load->view('navbar');
            $this->load->view('formbiodata');
            $this->load->view('footer');
        }
    }

    public function form_ptn_submit($id){
        $spl_id = $this->input->post('inp_subpanlok');
        //echo $spl_id;
        $pilihan1 = $this->input->post('inp_pil1');
        $pilihan2 = $this->input->post('inp_pil2');
        $pilihan3 = $this->input->post('inp_pil3');
        $ujianket_or = $this->input->post('inp_uk1');
        $ujianket_sendes = $this->input->post('inp_uk2');
        $ujianket_sen = $this->input->post('inp_uk3');
        $ujianket_senmus = $this->input->post('inp_uk4');
        $ujianket_senta = $this->input->post('inp_uk5');
        $data = array(
            'spl_id' => $spl_id, 
            'pilihan1' => $pilihan1,
            'pilihan2' => $pilihan2,
            'pilihan3' => $pilihan3,
            'ujianket_or' => $ujianket_or,
            'ujianket_sendes' => $ujianket_sendes,
            'ujianket_sen' => $ujianket_sen,
            'ujianket_senmus' => $ujianket_senmus,
            'ujianket_senta' => $ujianket_senta,
            'ps_id' => $id
            );
        $ids = array(
            'id' => $spl_id,
            );
        $query = $this->db->insert('pilihanpeserta', $data);
        if ($query !== FALSE)
        {
            $this->load->view('header');
            $this->load->view('navbar');
            $this->load->view('formptn', $ids);
            $this->load->view('footer');
        }
        else {
            $this->load->view('header');
            $this->load->view('navbar');
            $this->load->view('formptn', $ids);
            $this->load->view('footer');
        }
        //$query = $this->db->query('SELECT pl_nama FROM panlok');
    }

    public function form_cetak($id){
        $query = $this->db->query('SELECT* FROM peserta WHERE ps_id = '.$id);
        $pilihan = $this->db->query('SELECT* FROM pilihanpeserta where ps_id = '.$id);
        foreach ($pilihan->result_array() as $row)
        {
            $pilihan1 = $row['pilihan1'];
            $pilihan2 = $row['pilihan2'];
            $pilihan3 = $row['pilihan3'];
        }
        $univ1 = $this->db->query('SELECT ptn_nama, pro_nama, pro_id
            FROM prodi
            INNER JOIN ptn ON ptn.ptn_id = prodi.ptn_id
            WHERE pro_id = '.$pilihan1);
        $univ2 = $this->db->query('SELECT ptn_nama, pro_nama, pro_id
            FROM prodi
            INNER JOIN ptn ON ptn.ptn_id = prodi.ptn_id
            WHERE pro_id = '.$pilihan2);
        $univ3 = $this->db->query('SELECT ptn_nama, pro_nama, pro_id
            FROM prodi
            INNER JOIN ptn ON ptn.ptn_id = prodi.ptn_id
            WHERE pro_id = '.$pilihan3);
        $ids = array(
                'id' => $id,
                'peserta' => $query->result(),
                'univ1' => $univ1->result(),
                'univ2' => $univ2->result(),
                'univ3' => $univ3->result(),
                );
        // $this->load->view('header');
        // $this->load->view('navbar');
        $this->load->view('formcetak', $ids);
        // $this->load->view('footer');
    }
}
