
<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Jardintou accueil</title>
</head>
<body>
<div class="container-fluid">
    <!-- <div class="container-fluid"> 
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-8"></div> 
            <div class="col-12 col-sm-12 col-md-12 col-lg-4"></div>
        </div> -->
          
<!-- logo+tout jardin -->
            <div class="row">
                <div class="col-12 col-md-6 "> 
                    <img src="public/images/logo/jarditou_logo2.png" class="img-fluid" alt="Image responsive">
                </div>
                <div class="col-12 col-md-6">      
                  <h1 class="text-right mt-3"><strong>Tout le jardin</strong></h1>
                </div> 
            </div>
<!-- navigation -->
        
           
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="index.php">Jarditou.com</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                      <a class="nav-link" href="index.php">Accueil </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="tableau.php">Tableau</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="contact.php">Contact</a>                    
                    </li>
                  </ul>
                  <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Votre promotion" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Rechercher</button>
                  </form>
                </div>
              </nav>
            <!--banniere promotion  -->
            <div class="row">
                <div class="col-12 col-md-12" >
                <img   src="public/images/logo/promotion.jpg" class="img-fluid w-100 " alt="Image responsive">
                </div>
            </div>
         

<!-- formulaire -->
<form id="formu" name="formu" action="" method="post">

<?php
echo '<div class=" col-12" >';
?>
  <!-- référence -->
<div class="form-group">
    <label for="reference">Référence : </label>
    <input type="text" name="reference" class="form-control" id="reference" aria-describedby="">
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
</div>
  <!-- catégorie -->
<div class="form-group">
    <label for="categorie">Catégorie : </label>
    <input type="text" name="categorie" class="form-control" id="categorie" aria-describedby="">
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
</div>
<!-- libéllé -->
<div class="form-group">
    <label for="libelle">Libéllé : </label>
    <input type="text" name="libelle" class="form-control" id="libelle" aria-describedby="">
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
</div>
<!-- description -->
<div class="form-group">
    <label for="description">Description</label>
    <textarea class="form-control" name="description" id="description" rows="3"></textarea>
</div>
<!-- Prix -->
<div class="form-group">
  <label for="reference">Prix :</label>                  
  <input type="text" name="prix" class="form-control" id="nom" aria-describedby="">           
</div>
<!-- stock -->
<div class="form-group">
    <label for="stock">Stock : </label>
    <input type="text" name="stock" class="form-control" id="stock" aria-describedby="">
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
</div>
<!-- couleur -->
<div class="form-group">
    <label for="couleur">Couleur : </label>
    <input type="text" name="couleur" class="form-control" id="couleur" aria-describedby="">
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
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
<label class="form-check-label" for="boutonRadio">Non</label>
  <input class="form-check-input" type="radio" name="bloque" id="bloque" value="Null" >
  </div>
  </div>
 
  <!--Date d'ajout  -->
  <div fieldset="form-group">
    <label for="dateAjout">Date d'ajout : </label>
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
    <input type="file" class="form-control-file" id="telechargerPhoto">
  </div>
</form>

<?php
// require "connexion_bdd.php"; // Inclusion de notre bibliothèque de fonctions
// $db = connexionBase(); // Appel de la fonction de connexion
// // $pro_id = $_GET["id"];


//   $requete = $bd->prepare('INSERT INTO produits (pro_ref,pro_libelle,pro_description) VALUES(:new_pro_ref,:new_pro_libelle,:new_pro_description)');
//   $requete->execute(array(
//                           ':new_pro_ref' => $new_pro_ref,
//                           ':new_pro_libelle' => $new_pro_libelle,
//                           ':new_pro_description' => $new_pro_description));
//   echo "produit ajouté à la liste" ;                     
  
require "connexion_bdd.php"; // Inclusion de notre bibliothèque de fonctions
$db = connexionBase(); // Appel de la fonction de connexion

if (isset ($_POST ['pro_ref']) AND isset($_POST['pro_libelle']) AND isset($_POST['pro_description']) AND isset($_POST['pro_prix']) AND isset($_POST['pro_stock']) AND isset($_POST['pro_couleur']) AND isset($_POST['pro_photo']) AND isset($_POST['pro_d_ajout']) AND isset($_POST['pro_bloque']))
{
$requete = $bd->exec('INSERT INTO produits(pro_ref,pro_libelle,pro_description,pro_prix,pro_stock,pro_couleur,pro_photo,pro_d_ajout,pro_bloque)
                    VALUES ('.$pro_ref','.$pro_libelle','.$pro_description','.$pro_prix','.$pro_stock','.$pro_couleur','.$pro_photo','.$pro_photo','.$pro_d_ajout','.$pro_bloque')');
  
}


?>





<div mt-2 >
<!-- bouton retour/envoyer -->
<a href="index.php" class="btn btn-dark" role="bouton " >Retour</a>
<a href="detail.php" class="btn btn-warning" role="bouton " >Envoyer</a>
</div>

<br>

<?php

include("footer.php");

?>



