<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_agent extends CI_Model
{
    public function __construct()
    {
        parent::__construct(); // Call the CI_Model constructor
        $this->load->database();
    }
    public function select_all()
    {
        $query = $this->db->select('*')
            ->from('identite,verification')
            ->where ('verification.Identite_id_Identite = identite.id_Identite')
            ->where ('verification.Etat', 1)
            ->get();
        return $query->result_array(); //conversion en tableau PH
    }


}