<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_piece extends CI_Controller {

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
		$data['title'] = "Pièces jointes - Fiche de renseignement personnel";
		$page = $this->load->view('V_piece', $data, true);
        $this->load->view('commun/V_template', array('contenu' => $page));
	}
}