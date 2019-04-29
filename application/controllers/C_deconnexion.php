<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_deconnexion extends CI_Controller
{
    public function index(){
        session_destroy();
        redirect('C_identite','refresh');
    }
}