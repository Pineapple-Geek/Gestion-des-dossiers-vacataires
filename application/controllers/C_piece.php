<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class C_piece extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     * 	 */
    public $errorCheck = false;

    function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }

    public function index() {

        $data['title'] = "Pièces jointes - Fiche de renseignement personnel";
        $page = $this->load->view('V_piece', $data, true);
        $pagescript = $this->load->view('commun/V_scriptmain', $data, true);
        $this->load->view('commun/V_template', array('contenu' => $page , 'scripts' => $pagescript));
    }

    public function upload_file() {

        $this->data['title'] = "Pièces jointes - Fiche de renseignement personnel";
        $this->data['notification'] = '';
        if ($this->input->post('Suivant')) {
            if (!file_exists('./uploads/' . $_SESSION["identite"]["Nom"] . '_' . $_SESSION["identite"]["Prenom"])) {
                mkdir('./uploads/' . $_SESSION["identite"]["Nom"] . '_' . $_SESSION["identite"]["Prenom"], 0755);
            }

            $this->load->model('M_formulaire');
            $Soussigne = $this->input->post('Soussigne');
            $Date = $this->input->post('Date');

            $this->M_formulaire->insert_BDD('identite',$_SESSION["identite"]);
            $ID = $this->M_formulaire->get_id_by_name($_SESSION["identite"]["Nom"]);

            $idContrat = array('Identite_id_Identite' => $ID[0]['id_Identite']);
            $Contrat = $_SESSION["contrat"] + $idContrat;
            $this->M_formulaire->insert_BDD('contrat',$Contrat);

            $Lettre1 = $_SESSION["lettre1"] + $idContrat;
            $this->M_formulaire->insert_BDD('lettre',$Lettre1);

            if (isset($_SESSION["lettre2"]))
            {
                $Lettre2 = $_SESSION["lettre2"] + $idContrat;
                $this->M_formulaire->insert_BDD('lettre',$Lettre2);
            }

            else if (isset($_SESSION["lettre3"]))
            {
                $Lettre3 = $_SESSION["lettre3"] + $idContrat;
                $this->M_formulaire->insert_BDD('lettre',$Lettre3);
            }

            $Signature = array("Sousigne"=>$Soussigne, "Date"=>$Date, "Identite_id_Identite"=>$ID[0]['id_Identite']);
            $this->M_formulaire->insert_BDD('signature',$Signature);

            $config['upload_path'] = './uploads/' . $_SESSION["identite"]["Nom"] . '_' . $_SESSION["identite"]["Prenom"];
            $config['allowed_types'] = 'jpg|jpeg|png|pdf';
            $config['max_size'] = 5000;

            $this->load->library('upload', $config);

            $this->lets_upload('userfile1');
            $this->lets_upload('userfile2');
            $this->lets_upload('userfile3');
            $this->lets_upload('userfile4');
            if (isset($_SESSION["contrat"])){
                  if (in_array('Enseignant', $_SESSION["contrat"])){
                      $this->lets_upload('userfile5');
            }}



            $Document1 = array("Type"=>"RIB", "Chemin"=>'./uploads/' . $_SESSION["identite"]["Nom"] . '_' . $_SESSION["identite"]["Prenom"] . '/' . $_FILES["userfile1"]["name"], "Identite_id_Identite"=>$ID[0]['id_Identite']);
            $Document2 = array("Type"=>"ASS", "Chemin"=>'./uploads/' . $_SESSION["identite"]["Nom"] . '_' . $_SESSION["identite"]["Prenom"] . '/' . $_FILES["userfile2"]["name"], "Identite_id_Identite"=>$ID[0]['id_Identite']);
            $Document3 = array("Type"=>"CI", "Chemin"=>'./uploads/' . $_SESSION["identite"]["Nom"] . '_' . $_SESSION["identite"]["Prenom"] . '/' . $_FILES["userfile3"]["name"], "Identite_id_Identite"=>$ID[0]['id_Identite']);
            $Document4 = array("Type"=>"CV", "Chemin"=>'./uploads/' . $_SESSION["identite"]["Nom"] . '_' . $_SESSION["identite"]["Prenom"] . '/' . $_FILES["userfile4"]["name"], "Identite_id_Identite"=>$ID[0]['id_Identite']);
            if (isset($_SESSION["contrat"])){
                if (in_array('Enseignant', $_SESSION["contrat"])){
                    $Document5 = array("Type"=>"CA", "Chemin"=>'./uploads/' . $_SESSION["identite"]["Nom"] . '_' . $_SESSION["identite"]["Prenom"] . '/' . $_FILES["userfile5"]["name"], "Identite_id_Identite"=>$ID[0]['id_Identite']);

                }}


            $this->M_formulaire->insert_BDD('document',$Document1);
            $this->M_formulaire->insert_BDD('document',$Document2);
            $this->M_formulaire->insert_BDD('document',$Document3);
            $this->M_formulaire->insert_BDD('document',$Document4);
            if (isset($_SESSION["contrat"])){
                if (in_array('Enseignant', $_SESSION["contrat"])){
                    $this->M_formulaire->insert_BDD('document',$Document5);
                }}


            $Verification = array("Etat"=>"0", "Status"=>"0", "Type"=>"", "Description"=>"", "Identite_id_Identite"=>$ID[0]['id_Identite']);
            $this->M_formulaire->insert_BDD('verification',$Verification);
        }
        if ($this->errorCheck == true) {
            $page = $this->load->view('V_fail', $this->data, true);
        } else {
            $page = $this->load->view('V_success', $this->data, true);
            session_destroy();
        }
        $pagescript = $this->load->view('commun/V_scriptmain', $data, true);
        $this->load->view('commun/V_template_nobutton', array('contenu' => $page, 'scripts' => $pagescript));
    }

    public function lets_upload($field_name) {    // this function does the uploads
        if (!$this->upload->do_upload($field_name)) {    // ** do_upload() is a member function of upload class, and it is responsible for the uploading files with the given configuration in the config array
            $this->errorCheck = true;    // now if there's is some error in uploading files, then errors are stored in the member variable 'data'
        } else {
            $upload_data = $this->upload->data();    // if succesful, then infomation about the uploaded file is stored in the $upload_data variable
        }
    }
}
