<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_administrateur extends CI_Controller {


    public function __construct()
    {
        parent::__construct();

        $this->load->model('M_administrateur');
    }


    public function index()
    {
        $array_resultat = $this->M_administrateur->select_all();
        $data['liste'] = $array_resultat;
        $data['title'] = "Menu administrateur";
        $page = $this->load->view('V_administrateur', $data, true);
        $this->load->view('commun/V_template_nobutton', array('contenu' => $page));
    }

    public function creation()
    {
        $data['title'] = "Création d'un nouveau compte";
        $page = $this->load->view('V_ajout_compte', $data, true);
        $this->load->view('commun/V_template_nobutton', array('contenu' => $page));

    }

    public function validation(){
        $passwordhash = password_hash($this->input->post("Password"), PASSWORD_DEFAULT);
        $formulaire = array(
            'login' =>$this->input->post('login'),
            'password' => $passwordhash,
            'Nom'=>$this->input->post('Nom'),
            'Prenom'=>$this->input->post('Prénom'),
            'type'=>$this->input->post('type')
        );
        $this->M_administrateur->create_account($formulaire);

        $array_resultat = $this->M_administrateur->select_all();
        $data['liste'] = $array_resultat;
        $data['title'] = "Menu administrateur";
        $page = $this->load->view('V_administrateur', $data, true);
        $this->load->view('commun/V_template_nobutton', array('contenu' => $page));

    }

    public function modification($primd)
    {
        $array_resultat = $this->M_administrateur->select_compte_by_id($primd);
        $data['liste'] = $array_resultat;

        $data['title'] = "Modification du compte";
        $page = $this->load->view('V_modification_compte', $data, true);
        $this->load->view('commun/V_template_nobutton', array('contenu' => $page));
    }

    public function modification_valider($id)
    {
        $formulaire = array(
            'login' =>$this->input->post('login'),
            'password' => $this->input->post('Password'),
            'Nom'=>$this->input->post('Nom'),
            'Prenom'=>$this->input->post('Prénom'),
            'type'=>$this->input->post('type')
        );
        $this->M_administrateur->update_account($formulaire, $id);
        $array_resultat = $this->M_administrateur->select_all();
        $data['liste'] = $array_resultat;

        $data['title'] = "Modification du compte";
        $page = $this->load->view('V_administrateur', $data, true);
        $this->load->view('commun/V_template_nobutton', array('contenu' => $page));
    }

    public function suppression($primd)
    {
        $this->M_administrateur->delete_account($primd);
        $array_resultat = $this->M_administrateur->select_all();
        $data['liste'] = $array_resultat;
        $data['title'] = "Menu administrateur";
        $page = $this->load->view('V_administrateur', $data, true);
        $this->load->view('commun/V_template_nobutton', array('contenu' => $page));
    }
}