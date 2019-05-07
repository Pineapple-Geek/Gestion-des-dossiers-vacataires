<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_lettre extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data['title'] = "Lettre d'engagement - Fiche de renseignement personnel";
		$page = $this->load->view('V_lettre', $data, true);
        $this->load->view('commun/V_template', array('contenu' => $page));
	}
    public function validation()
    {
        // Action 1
        $IntAction1 = $this->input->post('IntAction1');
        $CentreProduct1 = $this->input->post('CentreProduct1');
        $DateDebut1 = $this->input->post('DateDebut1');
        $Etablissement1 = $this->input->post('Etablissement1');
        $HeureEnseignement1 = $this->input->post('HeureEnseignement1');
        $HeurePeripherique1 = $this->input->post('HeurePeripherique1');
        $Niveau1 = $this->input->post('Niveau1');
        $DateFin1 = $this->input->post('DateFin1');
        $Ville1 = $this->input->post('Ville1');
        $TauxHoraire1 = $this->input->post('TauxHoraire1');

        $_SESSION["lettre1"] = array("Action" => 1, "Intitule_Action" => $IntAction1, "Niveau" => $Niveau1, "Centre" => $CentreProduct1, "Date_Debut" => $DateDebut1, "Date_Fin" => $DateFin1, "Lieu" => $Etablissement1, "Ville" => $Ville1, "Heure_Enseignement" => $HeureEnseignement1, "Heure_Peripherique" => $HeurePeripherique1, "Taux" => $TauxHoraire1);

        //Action 2
        if ($this->input->post('IntAction2') != null) {
            $IntAction2 = $this->input->post('IntAction2');
            $CentreProduct2 = $this->input->post('CentreProduct2');
            $DateDebut2 = $this->input->post('DateDebut2');
            $Etablissement2 = $this->input->post('Etablissement2');
            $HeureEnseignement2 = $this->input->post('HeureEnseignement2');
            $HeurePeripherique2 = $this->input->post('HeurePeripherique2');
            $Niveau2 = $this->input->post('Niveau2');
            $DateFin2 = $this->input->post('DateFin2');
            $Ville2 = $this->input->post('Ville2');
            $TauxHoraire2 = $this->input->post('TauxHoraire2');
            $_SESSION["lettre2"] = array("Action" => 2, "Intitule_Action" => $IntAction2, "Niveau" => $Niveau2, "Centre" => $CentreProduct2, "Date_Debut" => $DateDebut2, "Date_Fin" => $DateFin2, "Lieu" => $Etablissement2, "Ville" => $Ville2, "Heure_Enseignement" => $HeureEnseignement2, "Heure_Peripherique" => $HeurePeripherique2, "Taux" => $TauxHoraire2);
        }

        // Action 3
        if ($this->input->post('IntAction3') != null) {
            $IntAction3 = $this->input->post('IntAction3');
            $CentreProduct3 = $this->input->post('CentreProduct3');
            $DateDebut3 = $this->input->post('DateDebut3');
            $Etablissement3 = $this->input->post('Etablissement3');
            $HeureEnseignement3 = $this->input->post('HeureEnseignement3');
            $HeurePeripherique3 = $this->input->post('HeurePeripherique3');
            $Niveau3 = $this->input->post('Niveau3');
            $DateFin3 = $this->input->post('DateFin3');
            $Ville3 = $this->input->post('Ville3');
            $TauxHoraire3 = $this->input->post('TauxHoraire3');
            $_SESSION["lettre3"] = array("Action" => 3, "Intitule_Action" => $IntAction3, "Niveau" => $Niveau3, "Centre" => $CentreProduct3, "Date_Debut" => $DateDebut3, "Date_Fin" => $DateFin3, "Lieu" => $Etablissement3, "Ville" => $Ville3, "Heure_Enseignement" => $HeureEnseignement3, "Heure_Peripherique" => $HeurePeripherique3, "Taux" => $TauxHoraire3);

        }
        redirect('C_piece', 'refresh');
    }
}
