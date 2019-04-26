<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_administrateur extends CI_Model {
    public function __construct() {
        parent::__construct(); // Call the CI_Model constructor

    }
    public function select_all(){
        $query = $this->db->select('*')
            ->from('identite', 'utilisateur')
            ->get();
        return $query->result_array(); //conversion en tableau PH
    }

}
