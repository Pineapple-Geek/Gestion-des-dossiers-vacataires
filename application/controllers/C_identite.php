<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_identite extends CI_Controller {

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
		$data['title'] = "Identité / Contrat et statut - Fiche de renseignement personnel";
		$page = $this->load->view('V_identite', $data, true);
        $this->load->view('commun/V_template', array('contenu' => $page));
	}

	public function validation()
	{
		$civilite = $this->input->post('civilite');
       	$Nom = $this->input->post('Nom');
       	$NomNaiss = $this->input->post('NomNaiss');
       	$Prenom = $this->input->post('Prenom');
       	$DateNaiss = $this->input->post('DateNaiss');
       	$LieuNaiss = $this->input->post('LieuNaiss');
       	$DepNaiss = $this->input->post('DepNaiss');
       	$Adresse = $this->input->post('Adresse');
       	$Ville = $this->input->post('Ville');
       	$CodeP = $this->input->post('CodeP');
       	$Pays = $this->input->post('Pays');
       	$Tel = $this->input->post('Tel');
       	$SecuSoc = $this->input->post('SecuSoc');
       	$MailA = $this->input->post('MailA');
       	$MailP = $this->input->post('MailP');
       	$intervenants = $this->input->post('intervenants');
       	$Administratif = $this->input->post('Administratif');
       	$Statut = $this->input->post('Statut');
       	$Categorie = $this->input->post('Categorie');
       	$EtaAf = $this->input->post('EtaAf');
       	$VilleAf = $this->input->post('VilleAf');
       	$CodeAf = $this->input->post('CodeAf');

        $_SESSION["identite"]= array("civilite"=>$civilite,"Nom"=>$Nom,"NomNaiss"=>$NomNaiss,"Prenom"=>$Prenom,"DateNaiss"=>$DateNaiss,"LieuNaiss"=>$LieuNaiss,"DepNaiss"=>$DepNaiss,"Adresse"=>$Adresse,"Ville"=>$Ville,"CodeP"=>$CodeP,"Pays"=>$Pays,"Tel"=>$Tel,"SecuSoc"=>$SecuSoc,"MailA"=>$MailA,"MailP"=>$MailP,"intervenants"=>$intervenants,"Administratif"=>$Administratif,"Statut"=>$Statut,"Categorie"=>$Categorie,"EtaAf"=>$EtaAf,"VilleAf"=>$VilleAf,"CodeAf"=>$CodeAf );

        redirect('C_lettre','refresh');
	}
}
