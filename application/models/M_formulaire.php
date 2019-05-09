<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_formulaire extends CI_Model {

    public function __construct() {
        parent::__construct(); // Call the CI_Model constructor
        $this->load->database(); //Connexion à la BDD
    }
    
    public function insert_BDD($table,$formulaire) {
        $query = $this->db->insert($table,$formulaire);
        return true;
    }

    public function get_id_by_name($prmN) {
        $query = $this->db->select('id_Identite')
                ->from('identite')
                ->where('Nom',$prmN)
                ->get();
        return $query->result_array();
    }

}