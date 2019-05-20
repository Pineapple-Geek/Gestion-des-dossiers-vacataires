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
            ->where ('verification.Etat', 0)
            ->get();
        return $query->result_array(); //conversion en tableau PH
    }
    public function select_dossier_by_nom($primd)
    {
        $query = $this->db->select('*')
            ->from('identite,verification')
            ->where('identite.Nom',$primd)
            ->where ('verification.Identite_id_Identite = identite.id_Identite')
            ->get();
        return $query->result_array(); //conversion en tableau PHP
    }

    public function update_by_id($primd,$ErrorStat,$TypeE,$DescE)
    {
        $tableau = array(
            'Etat' => 1,
            'Status' => $ErrorStat,
            'Type' => $TypeE,
            'Description' => $DescE
        );

        $query = $this->db->where('Identite_id_Identite', $primd)
                          ->update('verification', $tableau);
        return $query; //conversion en tableau PHP
    }

}