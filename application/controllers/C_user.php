<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class C_user extends CI_Controller {

    private $data = [];

    public function index() {
        $this->load->view('V_register', $this->data);
    }

    // fonction pour crypter le mot de passe
    public function changePass($password) {
        $passwordhash = password_hash($password, PASSWORD_DEFAULT);
        redirect($passwordhash);
    }

    public function register() {
        $this->load->model('M_user');
        $passwordhash = password_hash($this->input->post("password"), PASSWORD_DEFAULT);
        $article = array("Login" => $this->input->post("login"),
            "Password" => $passwordhash,
            "Pseudo" => $this->input->post("pseudo"),
            "Email" => $this->input->post("email"),
            "Avatar" => $this->input->post("avatar"));

        $this->M_user->add_user($article);
        redirect('C_accueil', 'refresh');
    }

}
