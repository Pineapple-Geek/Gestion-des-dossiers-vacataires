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
        $pagescript = $this->load->view('commun/V_scriptmain', $data, true);
        $this->load->view('commun/V_template_nobutton', array('contenu' => $page, 'scripts' => $pagescript));
    }
    public function connexion() {
        $newLogin = $this->input->post('login');
        $newPassword = $this->input->post('mdp');
        $result = $this->M_connexion->verif_connexion($newLogin);
        if(count($result)!=0){
            $user=$result[0];
            if(password_verify($newPassword, $user["password"])){

                $_SESSION["loginok"]= array("idUtilisateur"=>$user["idUtilisateur"], "login"=>$user["login"], "password" => $user["password"],"Nom" => $user["Nom"], "Prenom" => $user["Prenom"], "type" => $user["type"]);
                if ($user["type"] === "Agent de paie")
                {
                    redirect('C_agent','refresh');
                }
                else
                {
                    redirect('C_administrateur','refresh');
                }
            }
            else{
                redirect('C_connexion','refresh');
            }
        }
        else{
            redirect('C_connexion','refresh');
        }
        
        
    }
    public function deconnexion(){
        session_destroy();
        redirect('C_identite','refresh');
    }
}