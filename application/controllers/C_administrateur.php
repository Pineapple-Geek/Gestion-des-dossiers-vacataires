<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_administrateur extends CI_Controller {

    public function menu()
    {
        $data['title'] = "Menu administrateur";
        $page = $this->load->view('V_administrateur', $data, true);
        $this->load->view('commun/V_template', array('contenu' => $page));
    }
}