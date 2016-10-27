  <?php
          if($lien)
          {
      ?>
            <fieldset class="form-group">
           	  <label>Prénom : </label> 
              <div class="panel panel-default">
                <div class="panel-body">
                  <?php echo $lien->PrenomDuClient ?>
                </div>
              </div>
            
            <label>Nom : </label> 
            <div class="panel panel-default">
              <div class="panel-body">
                <?php echo $lien->NomDuClient ?>
              </div>
            </div>
            
            <label>Adresse :</label> 
            <div class="panel panel-default">
              <div class="panel-body"> 
                <?php echo $lien->AdresseDuClient ?>
              </div>
            </div>

            <label>ComplementAdresse : </label> 
            <div class="panel panel-default">
              <div class="panel-body">
                <?php echo $lien->ComplementAdresse ?>
              </div>
            </div>

            <label>Pays : </label> 
            <div class="panel panel-default">
              <div class="panel-body">
                <?php echo $lien->Pays ?>
              </div>
            </div>

            <label>E-mail : </label> 
            <div class="panel panel-default">
              <div class="panel-body">
                <?php echo $lien->AdresseMailDuClient ?>
              </div>
            </div>

            <label>Ville : </label> 
            <div class="panel panel-default">
              <div class="panel-body">
                <?php echo $lien->VilleDuClient ?>
              </div>
            </div>

            <label>CP : </label> 
            <div class="panel panel-default">
              <div class="panel-body">
                <?php echo $lien->CodePostalDuClient ?>
              </div>
            </div>
            </fieldset>
        <?php
          }
          else 
            {
             echo "Identifiant inexistant";
            }
        ?>

                   

      <a class="btn btn-danger btn-lg btn-suppr" data-id="<?= $lien->IdentifiantClient ?>"> Supprimer
      </a>
      <a class="btn btn-primary btn-lg btn-modif" data-id="<?= $lien->IdentifiantClient ?>"> Modifier
      </a>
      <br>
      <br>
      <a class="btn btn-warning btn-lg btn-retour" >Retour a la liste</a>
      <br>
      <div><br></div> 

   
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

$(".btn-modif").click(function() {
      $.ajax({ 
      url: "<?= site_url("Filrouge/modif/") ?>" + $(this).data("id"),
          success: function(data) {
            $("#contenu_modal_index").html(data);
            $("#modal_index").modal("show");
          },
      });
  });

$(".btn-suppr").click(function() {
      $.ajax({ 
      url: "<?= site_url("Filrouge/suppr/") ?>" + $(this).data("id"),
          success: function(data) {
            $("#contenu_modal_index").html(data);
            $("#modal_index").modal("show");
          },
      });
  });
</script>