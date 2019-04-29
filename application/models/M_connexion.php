<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_connexion extends CI_Model {

    public function __construct() {
        parent::__construct(); // Call the CI_Model constructor
        $this->load->database(); //Connexion à la BDD
    }

    public function verif_connexion($pridUser) {
        $query = $this->db->select('*')
            ->from('utilisateur')
            ->where('login', $pridUser)
            ->get();
        return $query->result_array(); //conversion en tableau PHP
    }

}