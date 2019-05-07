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
        $this->load->view('commun/V_template', array('contenu' => $page));
    }

    public function upload_file() {
        $this->data['title'] = "Pièces jointes - Fiche de renseignement personnel";
        $this->data['notification'] = '';
        if ($this->input->post('Suivant')) {
            if (!file_exists('./uploads/' . $_SESSION["identite"]["Nom"] . '_' . $_SESSION["identite"]["Prenom"])) {
                mkdir('./uploads/' . $_SESSION["identite"]["Nom"] . '_' . $_SESSION["identite"]["Prenom"], 0755);
            }

            $config['upload_path'] = './uploads/' . $_SESSION["identite"]["Nom"] . '_' . $_SESSION["identite"]["Prenom"];
            $config['allowed_types'] = 'jpg|jpeg|png|pdf';
            $config['max_size'] = 5000;

            $this->load->library('upload', $config);

            $this->lets_upload('userfile1');
            $this->lets_upload('userfile2');
            $this->lets_upload('userfile3');
            $this->lets_upload('userfile4');
        }
        if ($this->errorCheck == true) {
            $page = $this->load->view('V_fail', $this->data, true);
        } else {
            $page = $this->load->view('V_success', $this->data, true);
            session_destroy();
        }
        $this->load->view('commun/V_template_nobutton', array('contenu' => $page));
    }

    public function lets_upload($field_name) {    // this function does the uploads
        if (!$this->upload->do_upload($field_name)) {    // ** do_upload() is a member function of upload class, and it is responsible for the uploading files with the given configuration in the config array
            $this->errorCheck = true;    // now if there's is some error in uploading files, then errors are stored in the member variable 'data'
        } else {
            $upload_data = $this->upload->data();    // if succesful, then infomation about the uploaded file is stored in the $upload_data variable
        }
    }

}
