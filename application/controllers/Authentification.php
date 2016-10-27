<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authentification extends CI_Controller {

	public function login()
	{
		if ($this->input->post()) {
			$AdresseMailDuClient = $this->input->post("email");
			$motdepasse = $this->input->post("motdepasse");

			if($ligne = $this->AuthentificationDAO->check($AdresseMailDuClient, $motdepasse)) {
					$_SESSION["connecte"] = $ligne;
					echo "ok";
			}
			else {
				unset($_SESSION["connecte"]);
				echo "ko";
			}

		}

	    else {
	    	$this->load->view("login");
	    }
	}

	public function logout()
	{
		unset($_SESSION["connecte"]);
	}

}