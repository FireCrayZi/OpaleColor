<?php

session_start();
include 'inc/header.php';

?>
  
  <style>
    #contact{
      color:#AE2431;
    }

</style>
  
 <?php if(array_key_exists('errors', $_SESSION)): ?> 
 <div role="alert"> 
  <div class="bg-red text-white font-bold rounded-t px-4 py-2">
  <?= implode('<br>', $_SESSION['errors']);?>
  </div>
  <!-- ERREUR -->
  </div>
</div>
<?php  endif; ?>

  <?php if(array_key_exists('success', $_SESSION)): ?>
  <div role="alert">
  <div class="bg-green text-white font-bold rounded-t px-4 py-2">
  Votre email a bien été envoyé
  <!-- SUCCESS -->
            </div>
        <?php endif; ?>

<!-- FORMULAIRE -->
<div class="contactbord">
     <div class="erreur">  
 <div class="formcontact">
<form class="form-horizontal" action="formulaire.php" method="post" name="contact">
<fieldset>
    <legend class="legend">Nous contacter</legend>
    <div class="form-group">
        <div class="col-3 col-sm-12">
        <label class="formlabel">Nom:</label>
        </div>
        <div class="col-9 col-sm-12">                                                   <!-- Recuperation du champ si erreur -->
        <input class="forminput" type="text" id="" placeholder="Nom" name="nom" value="<?= isset($_SESSION['inputs']['nom']) ? $_SESSION['inputs']['nom'] : ''; ?>" required> 
        </div>
</div>

    <div class="form-group">
        <div class="col-3 col-sm-12">
        <label class="formlabel">Prénom:</label>
        </div>
        <div class="col-9 col-sm-12">                                                      <!-- Recuperation du champ si erreur -->
        <input class="forminput" type="text" id="" placeholder="Prenom" name="prenom"  value="<?= isset($_SESSION['inputs']['prenom']) ? $_SESSION['inputs']['prenom'] : ''; ?>" required>
        </div>
    </div>

     <div class="form-group">
        <div class="col-3 col-sm-12">
        <label class="formlabel">Vous êtes:</label>
        </div>
        <div class="col-9 col-sm-12">                                                                               <!-- Recuperation du champ si erreur -->
        <input class="forminput" type="text" id="" placeholder="Societe/Association/Particulier" name="activite" value="<?= isset($_SESSION['inputs']['nom']) ? $_SESSION['inputs']['nom'] : ''; ?>" required>
        </div>
</div>

    <div class="form-group">
        <div class="col-3 col-sm-12">
        <label class="formlabel">Email:</label>
        </div>
        <div class="col-9 col-sm-12">                                                           <!-- Recuperation du champ si erreur -->
        <input class="forminput" type="email" id="" placeholder="email" name="email" value="<?= isset($_SESSION['inputs']['email']) ? $_SESSION['inputs']['email'] : ''; ?>" required>
        </div>
    </div>

        <div class="form-group">
        <div class="col-3 col-sm-12">
        <label class="formlabel">Téléphone:</label>
        </div>
        <div class="col-9 col-sm-12">                                                               <!-- Recuperation du champ si erreur -->
        <input class="forminput" type="tel" id=""  placeholder="téléphone" name="telephone" value="<?= isset($_SESSION['inputs']['telephone']) ? $_SESSION['inputs']['telephone'] : ''; ?>" required>
        </div>
    </div>
    
        <div class="form-group">
        <div class="col-3 col-sm-12">
            <label class="formlabel" for="input-example-3">Message:</label>
        </div>
        <div class="col-9 col-sm-12">                                                                                               <!-- Recuperation du champ si erreur -->
            <textarea class="textarea" type="textarea" id="" placeholder="Votre message" rows="10" cols="40" name="message" required><?= isset($_SESSION['inputs']['message']) ? $_SESSION['inputs']['message'] : ''; ?></textarea>    
        </div>
        </div>

        <div class="form-group">
        <div class="col-3 col-sm-12">
            <input type="submit" value="Envoyer" class="envoyer"/>
        </div>
        </div>   
         

</fieldset>
</form>
</div>

<div class="contact2">
<fieldset  class="fieldset">
    <legend class="legend">Bureaux & Showroom</legend>
        <h4 class="ads">Notre adresse</h4>
            <p class="coo">P.A. La Judocienne</p>
            <p class="coo">62170 Saint-Josse</p>
            <p class="coo">Tél: 03 21 84 01 39</p>
            <p class="coo">Mail: opale-color@wanadoo.fr</p>
     <div class="map"><!-- Carte -->
                <iframe class="iframe"width="425" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.openstreetmap.org/export/embed.html?bbox=1.6016006469726565%2C50.44843222370322%2C1.6973876953125002%2C50.4796297196224&amp;layer=mapnik&amp;marker=50.46403354423154%2C1.6494941711425781" style="border: 1px solid black"></iframe><br/><small><a href="https://www.openstreetmap.org/?mlat=50.4640&amp;mlon=1.6495#map=14/50.4640/1.6495&amp;layers=N">Afficher une carte plus grande</a></small>
    </div>

</fieldset>

</div>
            
</div>
</div>
</div>





<?php
//  On supprime les erreurs/les envoies/ et le retour de champ 

unset($_SESSION['inputs']);
unset($_SESSION['errors']);
unset($_SESSION['success']);
include 'inc/footer.php';

?>