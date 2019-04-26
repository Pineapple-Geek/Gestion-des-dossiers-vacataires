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
}