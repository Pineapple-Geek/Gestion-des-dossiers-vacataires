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

        $_SESSION["identite"]= array("Civilite"=>$civilite,"Nom"=>$Nom,"Nom_Naissance"=>$NomNaiss,"Prenom"=>$Prenom,"Date_Naissance"=>$DateNaiss,"Lieu_Naissance"=>$LieuNaiss,"Departement"=>$DepNaiss,"Adresse"=>$Adresse,"Ville"=>$Ville,"Code_Postal"=>$CodeP,"Pays"=>$Pays,"N_Tel"=>$Tel,"N_Securite_sociale"=>$SecuSoc,"Adresse_Mail_Academique"=>$MailA,"Adresse_Mail_Perso"=>$MailP);
        
        $_SESSION["contrat"]= array("Intervenants"=>$intervenants,"Administratif"=>$Administratif,"Status"=>$Statut,"Categorie"=>$Categorie,"Etablissement"=>$EtaAf,"Ville_E"=>$VilleAf,"Code_Postal_E"=>$CodeAf);

        redirect('C_lettre','refresh');
	}
}
