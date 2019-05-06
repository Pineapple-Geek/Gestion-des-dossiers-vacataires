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
    public function retour()
    {
        redirect('C_identite','refresh');
    }
    public function validation()
    {
        $IntAction = $this->input->post('IntAction');
        $CentreProduct = $this->input->post('CentreProduct');
        $DateFin = $this->input->post('DateFin');
        $Etablissement = $this->input->post('Etablissement');
        $HeureEnseignement = $this->input->post('HeureEnseignement');
        $HeurePeripherique = $this->input->post('HeurePeripherique');
        $Niveau = $this->input->post('Niveau');
        $DateFin = $this->input->post('DateFin');
        $Ville = $this->input->post('Ville');
        $TauxHoraire = $this->input->post('TauxHoraire');

        $GLOBALS["lettre"]= array("Intitule_Action"=>$IntAction,"Centre"=>$CentreProduct,"Date_Fin"=>$DateFin,"Lieu"=>$Etablissement,"Heure_Enseignement"=>$HeureEnseignement,"Heure_Peripherique"=>$HeurePeripherique,"Niveau"=>$Niveau,"Date_Fin"=>$DateFin,"Ville"=>$Ville,"Taux"=>$TauxHoraire );
        redirect('C_piece','refresh');
    }
}
