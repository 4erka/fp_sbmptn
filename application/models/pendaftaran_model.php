<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
/**
 * @name: Login model
 * @author: Imron Rosdiana
 */
class Pendaftaran_model extends CI_Model
{
 
    function __construct() {
        parent::__construct();
        $this->load->database();
    }
 
    public function validate_user($data) {
        $this->db->where('kap_kode', $data['kap_kode']);
        $this->db->where('kap_pin', $data['kap_pin']);
        return $this->db->get('kodeaksespendaftaran')->row();
    }
 
    function __destruct() {
        $this->db->close();
    }
}