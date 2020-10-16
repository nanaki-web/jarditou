<?php
  session_start();
?>











<?php
include("connexion_bdd.php");
include("header.php");
?>

<body>

<p><span class="error">*remplir tout les champs </span></p>
<?php
if(array_key_exists('errors',$_SESSION)):?>
  <div class="alert alert-danger">
    <?= implode('<br>',$_SESSION['errors']);?>
  </div>
<?php unset($_SESSION['errors']); endif;?>
<!-- formulaire -->
<form id="formu" name="formu" action="produits_ajout_script.php" method="POST">

<?php
echo '<div class=" col-12" >';
?>
<!-- identifiant -->
<div class="form-group">
    <label for="identifiant">ID : </label>
    <input type="text" name="identifiant" class="form-control" id="id" disabled  placeholder="Identifiant">

</div>
  <!-- // reference -->

<div class="form-group">
    <label for="reference">Référence* : </label>
    <input type="text" name="reference" class="form-control"  id="reference" >
</div>
<span id="idReference"></span>

  <!-- catégorie -->
<div class="form-group">
    <label for="categorie">Catégorie * : </label>
    <input type="text" name="categorie" class="form-control"  id="categorie" >
    

</div>
<!-- libéllé -->
<div class="form-group">
    <label for="libelle">Libéllé *: </label>
    <input type="text" name="libelle" class="form-control" id="libelle" >
   
</div>
<!-- description -->
<div class="form-group">
    <label for="description">Description</label>
    <textarea class="form-control" name="description"  id="description" rows="3"></textarea>
</div>
<!-- Prix -->
<div class="form-group">
  <label for="reference">Prix *:</label>                  
  <input type="text" name="prix" class="form-control"  id="nom" >           
</div>
<!-- stock -->
<div class="form-group">
    <label for="stock">Stock: </label>
    <input type="text" name="stock" class="form-control" id="stock" >
    
</div>
<!-- couleur -->
<div class="form-group">
    <label for="couleur">Couleur : </label>
    <input type="text" name="couleur" class="form-control" id="couleur" >
   
</div>


<p>Produit bloqué :</p>
<div class="form-group">
<!-- bouton radio produit bloqué/oui /valeur=1-->
<div class="form-check form-check-inline">
<label class="form-check-label" for="boutonRadio">Oui </label>
  <input class="form-check-input" type="radio" name="bloque" id="bloque" value="1" >
</div>
<!-- bouton radio produit bloqué/non /valeur=Null-->
<div class="form-check form-check-inline">
<label class="form-check-label" for="boutonRadio" >Non</label>
  <input class="form-check-input" type="radio" name="bloque" id="bloque" value="Null" checked  >
  </div>
  </div>
 
  <!--Date d'ajout  -->
  <div fieldset="form-group">
    <label for="dateAjout">Date d'ajout *: </label>
    <input type="text" name="dateAjout" class="form-control" id="dateAjout" aria-describedby="">
    
</div>
<!-- Date de modification -->
<div class="form-group">
    <label for="dateModification">Date de modification : </label>
    <input type="text" name="dateModification" class="form-control" id="dateModification" disabled aria-describedby="">
   
</div>
<!-- photo télécharger  -->

<form>
  <div class="form-group">
    <label for="photo">Photo</label>
    <input type="file" name="photo" class="form-control-file" id="telechargerPhoto">
  </div>
</form>

<!-- importer un fichier .js -->
<script src = "public/js/produits_ajout.js" ></script>
</body>






<div mt-2 >
<!-- bouton retour/envoyer -->
<a href="index.php" class="btn btn-dark" role="bouton " >Retour</a>

<!-- --------------------------------------------------------------------------------------------------------- -->
<!-- tu n'as pas de bouton submit normal que l'envoi du formulaire sne se fasse pas  -->
<!-- --------------------------------------------------------------------------------------------------------- -->
<input class="btn btn-primary" id = " idEnvoyer " type="submit" value="envoyer">






</div>

<br>

 <?php

include("footer.php");

?>



