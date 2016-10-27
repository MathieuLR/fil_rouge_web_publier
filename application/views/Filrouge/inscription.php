<div id="bodypremier">
	<div class="containerinscription">
					
				<form id="form_ajout">

					<div id="titre" align="center"><h2>Créez vos identifiants</h2>
					</div>
						<div class="form-group" id="placeemail">

							    <div id="email">E-mail<span class="red"> *</span>
							    </div>
								<div>
									<input	type="text" name="AdresseMailDuClient" id ="boxemail" class="form-control">
								</div> <div id="existant" style="color: red;" hidden="hidden">Cette adresse existe déjà</div>
						</div>
							<div class="form-group">
								<div class="row">
									<div class="col-xs-6"  id="placempd">
										<div id="mpd">Créez votre mot de passe<span class="red"> *</span>
										</div>
										<input type="password" name="MotDePasse" id="boxmpd" class="form-control">
										</div>
							<div class="col-xs-6">
							<div class="form-group" id="placeconfirmmpd">
								<div id="confirmmpd">Confirmation mot de passe<span class="red"> *</span>
								</div>
									<input type="password" id="boxconfirmmpd" class="form-control">	
									<div id="verifmpd" style="color: red;" hidden="hidden">Différent du mot de passe</div>
								</div>
							</div>
						</div>											

						<div id="bodydeuxieme">
							<div id="titre2" align="center"><h2>Remplissez le formulaire</h2>
							</div>

							<div class="row">
								<div class="col-xs-6" id="formul">
										<div class="form-group" id="placeprenom">
								    		<div id="prenom">Prénom<span class="red"> *</span>
								    		</div>
											<div>
												<input	type="text" name="PrenomDuClient" id ="boxprenom" class="form-control">
											</div>
										</div>	

										<div class="form-group" id="placenom">
								    		<div id="prenom">Nom<span class="red"> *</span>
								    		</div>
											<div>
												<input	type="text" name="NomDuClient" id ="boxnom" class="form-control">
											</div>
										</div>	

										<div class="form-group" id="placeadresse">
								    		<div id="prenom">Adresse<span class="red"> *</span>
								    		</div>
											<div>
												<input	type="text" name="AdresseDuClient" id ="boxadresse" class="form-control">
											</div>
										</div>	

										<div class="form-group" id="placecomplement">
								    		<div id="prenom">Complément d'adresse
								    		</div>
											<div>
												<input	type="text" name="ComplementAdresse" id ="boxcomplement" class="form-control">
											</div>
										</div>	

										<div class="form-group" id="placecp">
								    		<div id="prenom">Code Postal<span class="red"> *</span>
								    		</div>
											<div>
												<input	type="text" name="CodePostalDuClient" id ="boxcp" class="form-control">
												<div id="verifcp" style="color: red;" hidden="hidden">Code Postal invalide</div>
											</div>
										</div>	

										<div class="form-group" id="placeville">
								    		<div id="prenom">Ville<span class="red"> *</span>
								    		</div>
											<div>
												<input	type="text" name="VilleDuClient" id ="boxville" class="form-control">
											</div>
										</div>	

										<div class="form-group" id="placepays">
								    		<div id="prenom">Pays<span class="red"> *</span>
								    		</div>
											<div>
												<input	type="text" name="Pays" id ="boxpays" class="form-control">
												<br>
					 							<br>
											</div>
									
								</div>	
							</div>

							<div class="col-xs-6" id="grat">
								<div class="form-group" id="pub">
								<br>
									<div id="titrepub">Vos numéros de téléphone</div>
										<div id="portable">Numéro de Portable<span class="red"> *</span>
								    	</div>
											<div>
												<input	type="text" id ="boxportable" class="form-control">
												<br>
											</div>
										<div id="fixe">Numéro de téléphone fixe
								    	</div>
											<div>
												<input	type="text" id ="boxfixe" class="form-control">
											</div>
											<div id="pubbody"></div>
											<div id="titresms">Suivez vos<br>commandes<br>par SMS</div>
											
								</div>
							</div>
							<div class="col-xs-12">
								<div id="btninscription" class="text-center">
				 					<input class="btn btn-warning btn-ajout" type="button" name="valider" value="valider">
				 					<div id="verifchamps" style="color: red;" hidden="hidden">Merci de remplir correctement tous les champs avec une *</div>
				 				</div>
							</div>
						</div> <!-- row -->
				
						

							<div id="bodytroisieme">
									
			 						<div id="pubfin">
			 							<img src="<?= base_url('images/BODY/pubinscription.png')?> " />
			 						</div>

			 				</div><!--div bodytroisieme-->
					
				</form>
			
		
	</div> <!--div containerinscription-->
</div> <!--div bodypremier-->
<script>
$(".btn-ajout").click(function() {
	if ($("#boxnom").hasClass("correct") && $("#boxprenom").hasClass("correct") && $("#boxcp").hasClass("correct") && $("#boxville").hasClass("correct") && $("#boxpays").hasClass("correct") && $("#boxadresse").hasClass("correct") && $("#boxmpd").hasClass("goodmail") && $("#boxconfirmmpd").hasClass("goodmail") && $("#boxemail").hasClass("correct")) {
		$.post({ 
			url: "<?= site_url("Filrouge/ajout/") ?>",
			data: $("#form_ajout").serialize(),
			success: function(data) {

				$("#listeBox1").load("<?= site_url("Filrouge/home") ?>");
				$("#verifchamps").hide();
							
		 	},
	  	});
	}
     else 
     {
     	 $("#verifchamps").show();
     }
  });


var regnom = new RegExp("^[a-zàáâäçèéêëìíîïñòóôöùúûüA-Z]+[ -']?[[a-zàáâäçèéêëìíîïñòóôöùúûü]+[- ']?]*[a-zàáâäçèéêëìíîïñòóôöùúûüA-Z]+$");
$("#boxnom").on("input", function(){
	if (regnom.test($("#boxnom").val())){
		$("#boxnom").addClass("correct");

	}
	else{
		$("#boxnom").addClass("error");
		$("#boxnom").removeClass("correct");
	}
});


$("#boxprenom").on("input", function(){
	if (regnom.test($("#boxprenom").val())){
		$("#boxprenom").addClass("correct");
	}
	else{
		$("#boxprenom").addClass("error");
		$("#boxprenom").removeClass("correct");
	}
});

var regchiffre = new RegExp("^[1-9]+$");
$("#boxcp").on("input", function(){
	if (regchiffre.test($("#boxcp").val())){
		$("#boxcp").addClass("correct");
		$("#verifcp").hide();

	}
	else{
		$("#boxcp").addClass("error");
		$("#boxcp").removeClass("correct");
		$("#verifcp").show();
	}
});

$("#boxville").on("input", function(){
	if (regnom.test($("#boxville").val())){
		$("#boxville").addClass("correct");

	}
	else{
		$("#boxville").addClass("error");
		$("#boxville").removeClass("correct");
	}
});

$("#boxpays").on("input", function(){
	if (regnom.test($("#boxpays").val())){
		$("#boxpays").addClass("correct");

	}
	else{
		$("#boxpays").addClass("error");
		$("#boxpays").removeClass("correct");
	}
});
var regadresse = new RegExp("^[a-zàáâäçèéêëìíîïñòóôöùúûüA-Z0-9 --'']+$");

$("#boxadresse").on("input", function(){
	if (regadresse.test($("#boxadresse").val())){
		$("#boxadresse").addClass("correct");

	}
	else{
		$("#boxadresse").addClass("error");
		$("#boxadresse").removeClass("correct");
	}
});

$("#boxcomplement").on("input", function(){
	if (regadresse.test($("#boxcomplement").val())){
		$("#boxcomplement").addClass("correct");

	}
	else{
		$("#boxcomplement").addClass("error");
		$("#boxcomplement").removeClass("correct");
	}
});

$("#boxconfirmmpd").on("input", function(){
	
	if($("#boxmpd").val() == $("#boxconfirmmpd").val())
		{		
			$("#boxmpd").addClass("goodmail");
			$("#boxconfirmmpd").addClass("goodmail");
			$("#boxmpd").removeClass("badmail");
			$("#boxconfirmmpd").removeClass("badmail");
			$("#verifmpd").hide();
	}
	else
	{		
		$("#boxmpd").addClass("badmail");
		$("#boxconfirmmpd").addClass("badmail");
		$("#boxmpd").removeClass("goodmail");
		$("#boxconfirmmpd").removeClass("goodmail");
		$("#verifmpd").show();

	}

});


function VerifMail(){
    var adressemail = encodeURIComponent($("#boxemail").val()); //encodeURIComponent : codigniter n'accepte pas les champs avc @, permet de l'encoder

    $.get('<?= site_url("Filrouge/checkmail/") ?>'+adressemail, function(resultat) { //appel de la fct checkmail qui existe ds le controller
        
        if (resultat == "ok"){
        	$("#boxemail").addClass("error");
        	$("#boxemail").removeClass("correct");
            $("#existant").show();
        }

    else{


        var regmail = new RegExp("([\\w-\\.]+)@{1}((?:[\\w\\d\\-]{1,70})|([\\w\\d\\-]+\\.[\\w\\d\\-]{1,70}))\\.(([a-zA-Z]{2,4})(\\.[a-zA-Z]{2,3})?)$")

        if (regmail.test($("#boxemail").val()))
        {
        	$("#boxemail").addClass("correct");
        	$("#existant").hide();
        	console.log("ok c cool")
        }
        else{
			$("#boxemail").addClass("error");
			$("#boxemail").removeClass("correct");
			$("#existant").hide();
		} 
	}
	});
};

$("#boxemail").blur(VerifMail);


</script>
		