<div id="bodypremier">
	<div class="containerinscription">
					
							<div class="panel panel-default">
  										<!-- Default panel contents -->
  								<div class="panel-heading"><span id="titreliste">Liste des Clients</span>
  								</div>
  										
  											<!-- Table -->
  											<table class="table" id="test">
  												<div class="row" align="center">
  													<div class="col-xs-2"><text id="nomcolone">Identifiant Client</text></div>
  													<div class="col-xs-2"><text id="nomcolone">Nom</text></div>
  													<div class="col-xs-2"><text id="nomcolone">Prénom</text></div>
  													<div class="col-xs-4"><text id="nomcolone">Adresse mail</text></div>
  													<div class="col-xs-2"><text id="nomcolone">Détail</text></div>
  												</div>
  											
  											 <?php foreach ($liste as $row): ?>

  											 	<tr align="center" class="clickable-row" data-id="<?php echo $row->IdentifiantClient;?>">
  											 		<td class="col-xs-2"><?php echo $row->IdentifiantClient;?></td>
  											 		<td class="col-xs-2"><?php echo $row->NomDuClient;?></td>
  											 		<td class="col-xs-2"><?php echo $row->PrenomDuClient;?></td>
  											 		<td class="col-xs-4"><?php echo $row->AdresseMailDuClient;?></td>
  											 		<td class="col-xs-2"><a class="btn btn-primary btn-details" data-id="<?php echo $row->IdentifiantClient;?>">Afficher le detail</a></td>
  											 	</tr>
  											 <?php endforeach; ?>  
  											
  											</table>
  							</div><!--paneldefaut-->
										

							
			 				<div id="modal_index" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" >
				 	 			<div class="modal-dialog modal-lg" role="document">
									<div class="modal-content" id="contenu_modal_index">
					 		 ...
									</div>
				  				</div>
							</div>

							<div id="listeBox1"></div>

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

$(".btn-details").click(function() {
	  	$.ajax({ 
			url: "<?= site_url("Filrouge/detail/") ?>" + $(this).data("id"),
			success: function(data) {
				$("#contenu_modal_index").html(data);
				$("#modal_index").modal("show");
		 	},
	  	});
	});

</script>
