<?php


class FilrougeDAO extends CI_model
{

function liste () {

			$requete = $this->db->query('SELECT * FROM Client');
			return $requete->result();	
		
		}

function find ($id) {
				
				$requete = $this->db->query("SELECT * from Client where IdentifiantClient= ?", array($id));
				return $requete->row();
		}

		function update ($data) {
		
			$IdentifiantClient = $data["IdentifiantClient"];
			$PrenomDuClient = $data["PrenomDuClient"];
			$NomDuClient = $data["NomDuClient"];
			$AdresseDuClient = $data["AdresseDuClient"];
			$ComplementAdresse = $data["ComplementAdresse"];
			$CodePostalDuClient = $data["CodePostalDuClient"];
			$VilleDuClient = $data["VilleDuClient"];
			$AdresseMailDuClient = $data["AdresseMailDuClient"];
			$MotDePasse = $data["MotDePasse"];
			$Pays = $data["Pays"];
			$str = "UPDATE Client SET PrenomDuClient=?, NomDuClient=?, AdresseDuClient=?, ComplementAdresse=?, CodePostalDuClient=?,VilleDuClient=?, AdresseMailDuClient=?, MotDePasse=?, Pays=? where IdentifiantClient =".$IdentifiantClient;
			$this->db->query($str, array($PrenomDuClient, $NomDuClient, $AdresseDuClient, $ComplementAdresse ,$CodePostalDuClient,$VilleDuClient,$AdresseMailDuClient, $MotDePasse, $Pays));
		}

		function insert ($data) {
			// $PrenomDuClient = $data["PrenomDuClient"];
			// $NomDuClient = $data["NomDuClient"];
			// $AdresseDuClient = $data["AdresseDuClient"];
			// $ComplementAdresse = $data["ComplementAdresse"];
			// $CodePostalDuClient = $data["CodePostalDuClient"];
			// $VilleDuClient = $data["VilleDuClient"];
			// $AdresseMailDuClient =$data["AdresseMailDuClient"];
			// $MotDePasse = $data["MotDePasse"];
			// $Pays = $data["Pays"];
   //          $sql = "INSERT into Client (PrenomDuClient,NomDuClient,AdresseDuClient,ComplementAdresse,CodePostalDuClient,VilleDuClient,AdresseMailDuClient,MotDePasse,Pays) values (?,?,?,?,?,?,?,?,?)";
			$data["MotDePasse"] = password_hash($data["MotDePasse"],PASSWORD_DEFAULT);
			$sql = $this->db->insert_string("Client", $data);
            $this->db->query($sql);
           
		}

		function delete ($id) {

			$this->db->query("DELETE from Client where IdentifiantClient= ?", array($id));

           
		}

}
?>