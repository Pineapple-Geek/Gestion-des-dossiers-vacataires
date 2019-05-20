<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_agent extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();

        $this->load->model('M_agent');
        $this->load->model('M_detail');
    }


    public function index()
    {
        $array_resultat = $this->M_agent->select_all();
        $data['liste'] = $array_resultat;


        $data['title'] = "Menu agent";
        $page = $this->load->view('V_agent', $data, true);
        $pagescript = $this->load->view('commun/V_scriptmain', $data, true);
        $this->load->view('commun/V_template_user', array('contenu' => $page, 'scripts' => $pagescript));
    }
    public function recherche($primd)
    {
        $array_resultat = $this->M_agent->select_dossier_by_nom($primd);
        $data['liste'] = $array_resultat;

        $data['title'] = "Menu agent";
        $page = $this->load->view('V_agent', $data, true);
        $pagescript = $this->load->view('commun/V_scriptmain', $data, true);
        $this->load->view('commun/V_template_user', array('contenu' => $page, 'scripts' => $pagescript));
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
        $pagescript = $this->load->view('commun/V_scriptagent', $data, true);
        $this->load->view('commun/V_template_user', array('contenu' => $page, 'scripts' => $pagescript));
    }

    public function validation($id)
    {
        $ErrorStat = $this->input->post('ErrorStat');
        $TypeE = $this->input->post('TypeE');
        $DescE = $this->input->post('DescE');

        $array_resultat = $this->M_agent->update_by_id($id,$ErrorStat,$TypeE,$DescE);

        if ($array_resultat == true)
        {
            echo "<script type='text/javascript'>alert('Le dossier a bien été validé!');</script>";
            redirect(site_url("C_agent"),'refresh');
        }
        else
        {
            echo "<script type='text/javascript'>alert('La validation du dossier a échoué!');</script>";
        }
    }
}