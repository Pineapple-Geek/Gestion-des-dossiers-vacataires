<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_agent extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();

        $this->load->model('M_agent');
    }


    public function index()
    {
        $array_resultat = $this->M_agent->select_all();
        $data['liste'] = $array_resultat;


        $data['title'] = "Menu agent";
        $page = $this->load->view('V_agent', $data, true);
        $this->load->view('commun/V_template_user', array('contenu' => $page));
    }
    public function recherche($primd)
    {
        $array_resultat = $this->M_agent->select_dossier_by_nom($primd);
        $data['liste'] = $array_resultat;

        $data['title'] = "Menu agent";
        $page = $this->load->view('V_agent', $data, true);
        $this->load->view('commun/V_template_user', array('contenu' => $page));
    }

    public function detail($id)
    {
        $data['identite'] = $this->M_detail->select_all('identite', $id, 'id_Identite');
        $data['contrat'] = $this->M_detail->select_all('contrat', $id, 'Identite_id_Identite');
        $data['document'] = $this->M_detail->select_all('document', $id, 'Identite_id_Identite');
        $data['lettre'] = $this->M_detail->select_all('lettre', $id, 'Identite_id_Identite');
        $data['signature'] = $this->M_detail->select_all('signature', $id, 'Identite_id_Identite');

        $data['title'] = "Vérification";
        $page = $this->load->view('V_detail', $data, true);
        $this->load->view('commun/V_template_user', array('contenu' => $page));
    }
}