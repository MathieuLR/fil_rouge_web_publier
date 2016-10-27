
<form id="form_suppr">

					<div id="titre" align="center"><h2>Liste des clients</h2>
					</div>
													
							<div class="row">
								<div class="col-xs-6" id="formul">
										<div class="form-group" id="placeprenom">
								    		<div id="prenom">Prénom
								    		</div>
											<div>
												<input	type="text" name="PrenomDuClient" id ="boxprenom" class="form-control" value="<?=$lien->PrenomDuClient?>">
											</div>
										</div>	

										<div class="form-group" id="placenom">
								    		<div id="prenom">Nom
								    		</div>
											<div>
												<input	type="text" name="NomDuClient" id ="boxnom" class="form-control" value="<?=$lien->NomDuClient?>">
											</div>
										</div>	

										<div class="form-group" id="placeadresse">
								    		<div id="prenom">Adresse
								    		</div>
											<div>
												<input	type="text" name="AdresseDuClient" id ="boxadresse" class="form-control" value="<?=$lien->AdresseDuClient?>">
											</div>
										</div>	

										<div class="form-group" id="placecomplement">
								    		<div id="prenom">Complément d'adresse
								    		</div>
											<div>
												<input	type="text" name="ComplementAdresse" id ="boxcomplement" class="form-control" value="<?=$lien->ComplementAdresse?>">
											</div>
										</div>	
																	
										<div class="form-group" id="placepays">
								    		<div id="prenom">Pays
								    		</div>
											<div>
												<input	type="text" name="Pays" id ="boxpays" class="form-control" value="<?=$lien->Pays?>">
												<br>
					 							<br>
											</div>
									
								</div>	
							</div>

							<div class="col-xs-6" id="formul">
										<div class="form-group" id="placeprenom">
								    		<div id="email">E-mail
								    		</div>
											<div>
												<input	type="text" name="AdresseMailDuClient" class="form-control" value="<?=$lien->AdresseMailDuClient?>">
											</div> 
											<div id="existant" style="color: red;" hidden="hidden">Cette adresse existe déjà  </div>
										</div>
										<div class="form-group" id="placenom">
								    		<div id="mpd">Mot de passe
								    		</div>
											<div>
												<input type="password" name="MotDePasse" class="form-control" value="<?=$lien->MotDePasse?>">
											</div>
										</div>	

										
										<div class="form-group" id="placecomplement">
								    		<div id="prenom">Numéro de téléphone
								    		</div>
											<div>
												<input	type="text" name="ComplementAdresse" id ="boxcomplement" class="form-control">
											</div>
										</div>	

										<div class="form-group" id="placeville">
								    		<div id="prenom">Ville
								    		</div>
											<div>
												<input	type="text" name="VilleDuClient" id ="boxville" class="form-control" value="<?=$lien->VilleDuClient?>">
											</div>
										</div>	

										<div class="form-group" id="placecp">
								    		<div id="prenom">Code Postal
								    		</div>
											<div>
												<input	type="text" name="CodePostalDuClient" id ="boxcp" class="form-control" value="<?=$lien->CodePostalDuClient?>">
												<div id="verifcp" style="color: red;" hidden="hidden">Code Postal invalide</div>
											</div>
										</div>
											
								</div>	
							</div>
						    <div>
				 				<a class="btn btn-warning btn-retour" id="boutonretour">Retour a la liste</a>
				 			</div>
				 			<br>
				 			<br>
				 			<div>
				 				<input class="btn btn-danger btn-suppr" type="button" value="Supprimer" id="boutonmodif">
				 			</div>						
<script>
$(".btn-retour").click(function() {
      $.ajax({ 
        url: "<?= site_url("Filrouge/admin/") ?>",
          success: function(data) {
            $("#listeBox1").html(data);
            $("#modal_index").modal("hide");
          },
      });
  });

$(".btn-suppr").click(function() {
		if (confirm('Voulez vous supprimer le formulaire ?')) {
		$.post({ 
			url: "<?= site_url("Filrouge/suppr/$lien->IdentifiantClient") ?>",
			data: $("#form_suppr").serialize(),
			success: function(data) {

				$("#listeBox1").load("<?= site_url("Filrouge/admin/") ?>");
			    $("#modal_index").modal("hide");
				
		 	},
	  	});
	}
      
  });
</script>
