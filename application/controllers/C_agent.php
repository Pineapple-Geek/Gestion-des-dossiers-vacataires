<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_agent extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();

        $this->load->model('M_administrateur');
    }


    public function index()
    {

        $data['title'] = "Menu agent";
        $page = $this->load->view('V_agent', $data, true);
        $this->load->view('commun/V_template_user', array('contenu' => $page));
    }
}