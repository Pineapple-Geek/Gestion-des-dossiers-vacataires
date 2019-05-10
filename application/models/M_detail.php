<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_detail extends CI_Model
{
    public function __construct()
    {
        parent::__construct(); // Call the CI_Model constructor
        $this->load->database();
    }

    public function select_all($table,$id,$idname)
    {
        $query = $this->db->select('*')
            ->from($table)
            ->where ($table . '.' . $idname . ' = ' . $id)
            ->get();
        return $query->result_array(); //conversion en tableau PH
    }

}