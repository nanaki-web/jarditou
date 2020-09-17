

<?php

include("header.php");

?>
<?php    
require "connexion_bdd.php"; // Inclusion de notrebibliothèque de fonctions

$db = connexionBase(); // Appel de la fonction deconnexion
$pro_id = $_GET["id"];

$requete = "SELECT * FROM produits WHERE pro_id=".$pro_id;

$result = $db->query($requete);

// Renvoi de l'enregistrement sous forme d'un objet
$produit = $result->fetch(PDO::FETCH_OBJ);

?>





<?php
echo '<div class="row">';
 echo '<div class="text-center col-12" >';

echo'<img src="public/images/produits/png/'.$produit->pro_id.'.png" class="img-fluid" alt="Image responsive">';
echo "</div>";
?>
<?php

// echo '<div class="row">';
 echo '<div class=" col-12" >';
?>





<!-- reference -->
<div class="form-group">
  <label for="reference">Référence :</label>                  
   <input type="text" name="reference" class="form-control" id="nom" placeholder="barb002" >           
</div>
<!-- catégorie -->
<div class="form-group">
  <label for="reference">Catégorie :</label>                  
  <input type="text" name="categorie" class="form-control" id="nom" placeholder="Barbecues" >           
</div>
<!-- libéllé -->
<div class="form-group">
    <label for="reference">Libellé :</label>                  
    <input type="text" name="libelle" class="form-control" id="nom" placeholder="Arthos" >           
</div>
<!-- description -->
<div class="form-group"></div>
  <label for="sujet">Description:</label>
  <textarea class="form-control" id="sujet" rows="2" placeholder="Thalassius vero ea tempestate praefectus praetorio praesens ipse quoque adrogantis ingenii, considerans incitationem eius ad multorum augeri discrimina," ></textarea>
</div>
<?php

// echo '<div class="row">';
 echo '<div class=" col-12" >';
?>
<!-- prix -->
<div class="form-group">
  <label for="reference">Prix :</label>                  
  <input type="text" name="prix" class="form-control" id="nom" placeholder="249.99" >           
</div>
<!-- stock -->
<div class="form-group">
  <label for="reference">stock :</label>                  
  <input type="text" name="stock" class="form-control" id="nom" placeholder="0" >           
</div>
<!-- couleur -->
<div class="form-group">
  <label for="reference">Couleur :</label>                  
  <input type="text" name="couleur" class="form-control" id="nom" placeholder="noir" >           
</div>
<!--  -->
<div class="form-group">
<p>produit bloqué :</p>
<fieldset class="form-group">
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="produit_bloque" id="produit_bloque" value="oui" >
    <label class="form-check-label" for="inlineRadio1">Oui </label>
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="produit_bloque" id="produit_bloque" value="non" checked>
    <label class="form-check-label" for="inlineRadio2">Non</label>      
  </div>
<!-- date d'ajout -->
<div class="form-group">
  <label for="reference">Date d'ajout :</label>                  
  <input type="text" name="Date_d_ajout" class="form-control" id="date" placeholder="2016-06-14" >           
</div>
<!-- date de modification -->
<div class="form-group">
  <label for="reference">Date de modification :</label>                  
  <input type="text" name="Date_de_modification" class="form-control" id="date" placeholder="2016-06-14" >           
</div>

  <!-- bouton envoyer/annuler -->
  <a href="#" class="btn btn-dark" role="bouton " >Retour</a>
  <a href="#" class="btn btn-warning" role="bouton " >Modifier</a>
  <a href="#" class="btn btn-danger" role="bouton " >Supprimer</a>

  <?php

// echo '<div class="row">';
 echo '<div class=" col-12" >';
?>


<?php
  echo "</div> ";
  echo "</div> ";
  ?>
<?php

include("footer.php");

?>
 