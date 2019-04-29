<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_connexion extends CI_Controller {


    public function __construct()
    {
        parent::__construct();

        $this->load->model('M_connexion');
    }


    public function index(){

        $data['title'] = "Connexion";
        $page = $this->load->view('V_connexion', $data, true);
        $this->load->view('commun/V_template_nobutton', array('contenu' => $page));
    }
}