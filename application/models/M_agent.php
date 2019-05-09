<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_agent extends CI_Model
{
    public function __construct()
    {
        parent::__construct(); // Call the CI_Model constructor
        $this->load->database();
    }
    public function select_identite()
    {
        $query = $this->db->select('*')
            ->from('identite')
            ->get();
        return $query->result_array(); //conversion en tableau PH
    }

    public function select_verification()
    {
        $query = $this->db->select('*')
            ->from('verification')
            ->get();
        return $query->result_array(); //conversion en tableau PH
    }

}