<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset = "utf-8">
  	
  	<script src=<?= base_url("js/jquery.js")?>></script>
  	<script src=<?= base_url("js/bootstrap.js")?>></script>
  	<link rel="stylesheet" type="text/css" href= <?= base_url('css/bootstrap.css')?>>
  	<link rel="stylesheet" type="text/css" href= <?= base_url('Filrouge.css')?>>
	
</head>
<body>
<div class="container coupe">
	<div class="row">
		<div id="global">
	 	
		 	<img id="bande" src=<?= base_url('images/HEADER/bande.png')?> />
		 	<img id="logo" class="hidden-sm hidden-xs" src=<?= base_url('images/HEADER/logovillagegreen.png')?> />
		 	  <div id="textadmin"><a href="#" id="admin" rel="popover" data-toggle="popover" data-placement="bottom" data-popover-content="#contenuadmin">Administrateur</a></div>
		 	  		<div id="contenuadmin" class="hide">
		 	  		  <p>Console administrateur</p>
		 	  		  	<form id="form1">
							<input id="email" type="text" name="email" placeholder="Adresse E-mail" />
							<br>
							<br>
							<input id="motdepasse" type="text" name="motdepasse" placeholder="Mot de passe" />
							<br>
							<br>
							<a id="formulaireadmin" class="btn btn-success">Connexion</a>
							<a id="deco" class="btn btn-danger">Déconnexion</a>
						</form>
					</div>
				 		<div id="textinfo"><a href="#">Infos</a></div>
							 			<div id="textespaceclient">
										<a id="client" href="#" rel="popoveradmin" data-toggle="popover" data-placement="bottom" data-popover-content="#popupbottom">Espace Client</a>
									</div>

							 		  <div id="popupbottom" class="hide">
							 		  	<div id="modal-gauche">
							 		  		<p>Etes-vous déja clients chez nous ?</p>
											<input id="placement" type="text" name="adressemail" placeholder="Adresse E-mail"></input>
											<br>
											<br>
											<input id="placement" type="text" name="motdepasse" placeholder="Mot de passe"></input>
											<br>
											<br>
											<input type="checkbox" name="connecte">Rester connecté</input>
											<br>
											<br>
											<img class="modalimage" id="connec" src=<?= base_url('images/MODAL/connexion.png')?> />
											<br>
											<br>
											<a id="motdepasseoublie" href="#">Vous avez oublié votre mot de passe ?</a>
											<br>
											<br>
										</div> <!--div modal gauche-->
									
										<div id="modal-droite">
											<p>N'êtes-vous pas encore client ?</p>
											<p>En tant que client Village Green<br>vous pouvez suivre vos envoies,<br>lire des tests produits exclusifs,<br>évaluer des produits, déposer<br>des petites annonces, gérer<br>vos chèques-cadeaux, devenir	<br>partenaire et bien plus encore.</p>
											<a id="formulaire" class="btn">
											<img id="connec" src=<?= base_url('images/MODAL/inscription.png')?> />
											</a>
											<br>
											<br>
											<a id="info" href="#">Plus d'informations</a>
										</div>

									</div>
		 				<a href="#"><img id="imagepanier" src=<?= base_url('images/HEADER/panier.png')?> /></a>
		 					<img id="imagelangue" src=<?= base_url('images/HEADER/pays.png')?> />
		 					<div id="textligne2" class="text-justify">
		 						<a data-toggle="dropdown" class="dropdown-toggle" href="#">Produits</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		 						<a data-toggle="dropdown" class="dropdown-toggle" href="#">Service </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		 						<a data-toggle="dropdown" class="dropdown-toggle" href="#">Aide </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		 						<a data-toggle="dropdown" class="dropdown-toggle" href="#">A propos</a>
		 					</div>
		 						
		 						<div id="textligne3">
		 							
		 							<a id="guitbass" href="#" rel="popoverguit" data-toggle="popover" data-placement="bottom" data-popover-content="#test">Guit/Bass</a>
									<div id="test" class="hide">Guitare électrique<br>Guitare accoustique & électro-accoustique<br>Guitare Classique<br>Basse électrique<br>Basse accoustique<br>Basse semi-accoustique<br>Ukulélés<br>Autres instruments à corde pincées</div>&nbsp;
									<a id="Batteries" href="#" rel="popoverguit" data-toggle="popover" data-placement="bottom" data-popover-content="#test">Batteries</a>
									<div id="test" class="hide">Guitare électrique<br>Guitare accoustique & électro-accoustique<br>Guitare Classique<br>Basse électrique<br>Basse accoustique<br>Basse semi-accoustique<br>Ukulélés<br>Autres instruments à corde pincées</div>&nbsp;
									<a id="Clavier" href="#" rel="popoverguit" data-toggle="popover" data-placement="bottom" data-popover-content="#test">Clavier</a>
									<div id="test" class="hide">Guitare électrique<br>Guitare accoustique & électro-accoustique<br>Guitare Classique<br>Basse électrique<br>Basse accoustique<br>Basse semi-accoustique<br>Ukulélés<br>Autres instruments à corde pincées</div>&nbsp;
									<a id="Studio" href="#" rel="popoverguit" data-toggle="popover" data-placement="bottom" data-popover-content="#test">Studio</a>
									<div id="test" class="hide">Guitare électrique<br>Guitare accoustique & électro-accoustique<br>Guitare Classique<br>Basse électrique<br>Basse accoustique<br>Basse semi-accoustique<br>Ukulélés<br>Autres instruments à corde pincées</div>&nbsp;
									<a id="Sono" href="#" rel="popoverguit" data-toggle="popover" data-placement="bottom" data-popover-content="#test">Sono</a>
									<div id="test" class="hide">Guitare électrique<br>Guitare accoustique & électro-accoustique<br>Guitare Classique<br>Basse électrique<br>Basse accoustique<br>Basse semi-accoustique<br>Ukulélés<br>Autres instruments à corde pincées</div>&nbsp;
									<a id="Eclairage" href="#" rel="popoverguit" data-toggle="popover" data-placement="bottom" data-popover-content="#test">Eclairage</a>
									<div id="test" class="hide">Guitare électrique<br>Guitare accoustique & électro-accoustique<br>Guitare Classique<br>Basse électrique<br>Basse accoustique<br>Basse semi-accoustique<br>Ukulélés<br>Autres instruments à corde pincées</div>&nbsp;
									<a id="DJ" href="#" rel="popoverguit" data-toggle="popover" data-placement="bottom" data-popover-content="#test">DJ</a>
									<div id="test" class="hide">Guitare électrique<br>Guitare accoustique & électro-accoustique<br>Guitare Classique<br>Basse électrique<br>Basse accoustique<br>Basse semi-accoustique<br>Ukulélés<br>Autres instruments à corde pincées</div>&nbsp;
									<a id="Cases" href="#" rel="popoverguit" data-toggle="popover" data-placement="bottom" data-popover-content="#test">Cases</a>
									<div id="test" class="hide">Guitare électrique<br>Guitare accoustique & électro-accoustique<br>Guitare Classique<br>Basse électrique<br>Basse accoustique<br>Basse semi-accoustique<br>Ukulélés<br>Autres instruments à corde pincées</div>&nbsp;
									<a id="Accessoires" href="#" rel="popoverguit" data-toggle="popover" data-placement="bottom" data-popover-content="#test">Accessoires</a>
									<div id="test" class="hide"></div>&nbsp;
	 							 	 						
		 						</div>

		</div> <!-- div global -->

				

							<div id="modal_index" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" >
				 	 			<div class="modal-dialog modal-lg" role="document">
									<div class="modal-content" id="contenu_modal_index">
					 		 ...
									</div>
				  				</div>
							</div>

		<div id="listeBox1"></div>
 	
		 	<div class="row" id="sixiemepub">
		 	 		<a href="http://www.facebook.com" target="_blank" id="imagefb">
		 				<img src="<?= base_url('images/FOOTER/facebook.png')?>"  title="FACEBOOK">
		 			</a>
		 			<a href="http://www.twitter.com" target="_blank" id="imagetw">
		 				<img  src=<?= base_url('images/FOOTER/twitter.png')?> title="TWITTER"/>
		 			</a>
		 			
		 			<div id="tailletexte">Recevez <span id="couleurtext">nos offres exclusives</span></div>
		 			<div id="taillebis">Suivez-nous <span id="couleurbis">par ici!</span></div>

		 			<div class="form-group" id="textbox">
		 			<input type="text" class="form-control" name="textbox" placeholder="Votre adresse e-mail">
		 			</div>
		 			<div id="valider">
		 			<input class="btn " type="submit" name="valider" id="couleurvalider">
		 			</div>
		 					 						
		 			
		 	</div>
		 	 
		

	</div> <!--div row -->
</div> <!--div container -->

</body>
</html>

<script>
	$(document).ready(function() {
	  	$.ajax({ 
			url: "<?= site_url("Filrouge/home") ?>",
			success: function(data) {
				$("#listeBox1").html(data);
				
		 	},
	  	});
	});


	$(function(){
		$('[rel="popover"]').popover({
			container:'body',
			html: true,
			content: function () {
				var clone = $($(this).data('popover-content')).clone(true).removeClass('hide');
				return clone;
			}
		}).click(function(e) {
			e.preventDefault();
		});
	});	

	$(function(){
		$('[rel="popoverguit"]').popover({
			container:'body',
			html: true,
			content: function () {
				var clone = $($(this).data('popover-content')).clone(true).removeClass('hide');
				return clone;
			}
		}).click(function(e) {
			e.preventDefault();
		});
	});	

	$(function(){
		$('[rel="popoveradmin"]').popover({
			container:'body',
			html: true,
			content: function () {
				var clone = $($(this).data('popover-content')).clone(true).removeClass('hide');
				return clone;
			}
		}).click(function(e) {
			e.preventDefault();
		});
	});	

	$("#formulaire").click(function() {
		$.ajax({
			url: "<?= site_url('Filrouge/inscription') ?>",
				success: function(data) {
					$("#listeBox1").html(data);
					$("#client").popover("hide");
					$("#admin").popover("hide");

				},
			});
	 });

	$("#formulaireadmin").click(function() {
		var donnees = $($('form')[1]).serialize();
		$.ajax({
			url: "<?= site_url('Authentification/login') ?>",
			method: "POST",
			data: donnees,

				success: function(data) {
					if (data == "ko") {
						alert("Erreur d'identifiant/mot de passe administrateur")
						$("#listeBox1").load("<?= site_url("Filrouge/home") ?>")
					}
					else
					{
						$("#listeBox1").load("<?= site_url('Filrouge/admin') ?>");
						$("#admin").popover("hide");
						$("#client").popover("hide");
					}
				},
			});
	 });
	$("#deco").click(function() {
		$.ajax({
			url: "<?= site_url('Authentification/logout') ?>",
			success: function(data) {
				$("#listeBox1").load("<?= site_url("Filrouge/home") ?>")
				$("#admin").popover("hide");
				$("#client").popover("hide");
			}
		});
	});

</script>

