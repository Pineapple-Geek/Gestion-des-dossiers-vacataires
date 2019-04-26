<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class C_login extends CI_Controller {

    private $data = [];

    public function index() {
        $this->load->view('V_login', $this->data);
    }

    // fonction pour crypter le mot de passe
    public function changePass($password) {
        $passwordhash = password_hash($password, PASSWORD_DEFAULT);
        redirect($passwordhash);
    }

    public function login() {
        $this->load->model('M_login');
        $newLogin = $this->input->post('login');
        $newPassword = $this->input->post('password');
        $result = $this->M_login->verif_login($newLogin);
        if(count($result)!=0){
            $user=$result[0];
            if(password_verify($newPassword, $user["Password"])){

                $_SESSION["loginok"]= array("idUser"=>$user["idUser"], "Pseudo"=>$user["Pseudo"], "Login" => $user["Login"],"Avatar" => $user["Avatar"], "Email" => $user["Email"]);
            }
        }
        redirect('C_accueil','refresh');
    }

    public function logout() {
        session_destroy();
        redirect('C_accueil','refresh');
    }
}