<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_connexion extends CI_Model
{
    public function __construct()
    {
        parent::__construct(); // Call the CI_Model constructor
        $this->load->database();
    }
}