<?php


class AuthentificationDAO extends CI_model
{

	function check ($email, $motdepasse) {

		$requete = $this->db->query("SELECT AdresseMailDuClient , MotDePasse , Role from Client where AdresseMailDuClient=?", array($email));
		$ligne = $requete->row();
		if ($ligne) {
			if (password_verify($motdepasse, $ligne->MotDePasse)) {
				return $ligne;
			}
		}
		return false;
	}

}
