<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_administrateur extends CI_Model {
    public function __construct() {
        parent::__construct(); // Call the CI_Model constructor
        $this->load->database();
    }
    public function select_all(){
        $query = $this->db->select('*')
            ->from('utilisateur')
            ->where('type', 'Agent de paie')
            ->get();
        return $query->result_array(); //conversion en tableau PH
    }

}
