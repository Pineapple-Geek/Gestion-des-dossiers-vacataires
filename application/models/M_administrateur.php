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

    public function select_compte_by_id($id)
    {
        $query = $this->db->select('*')
            ->from('utilisateur')
            ->where('idUtilisateur', $id)
            ->get();
        return $query->result_array(); //conversion en tableau PH
    }

    public function create_account($prm){
        $this->db->insert('utilisateur', $prm);
    }

    public function update_account($prm,$id)
    {
        $this->db->where('idUtilisateur', $id);
        $this->db->update('utilisateur', $prm);
    }

    public function delete_account($id)
    {
        $this->db->delete('utilisateur', array('idUtilisateur' => $id));
    }

}
