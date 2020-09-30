<?php

require "connexion_bdd.php"; // Inclusion de notre bibliothèque de fonctions
$db = connexionBase(); // Appel de la fonction de connexion
// declaration des variables
$reference = $_POST["reference"];//1
$categorie = $_POST["categorie"];//2
$libelle = $_POST["libelle"];//3
$description = $_POST["description"];//4
$prix = $_POST["prix"];//5
$stock = $_POST["stock"];//6
$couleur = $_POST["couleur"];//7
$photo = $_POST["photo"];//8
$dateAjout = $_POST["dateAjout"];//9
$bloque = $_POST["bloque"];//10


if (isset ($_POST ["pro_ref"]) AND isset($_POST["pro_libelle"]) AND isset($_POST["pro_description"]) AND isset($_POST["pro_prix"]) AND isset($_POST["pro_stock"]) AND isset($_POST["pro_couleur"]) AND isset($_POST["pro_photo"])AND isset($_POST["pro_d_ajout"])AND isset($_POST["pro_bloque"])
&& !empty($_POST["pro_ref"]) && !empty($_POST["pro_libelle"])&& !empty($_POST["pro_description"]) && !empty($_POST["pro_prix"])&& !empty($_POST["pro_stock"])&& !empty($_POST["pro_couleur"])&& !empty($_POST["pro_photo"])&& !empty($_POST["pro_d_ajout"])&& !empty($_POST["pro_bloque"]))
{

    

 
// preparation de la requete d'insertion
$requete = $db->prepare('INSERT INTO produits VALUES(NULL,:reference,:categorie,:libelle,:descriptions,:prix,:stock,:couleur,:produit_bloque,:dateAjout,:photo)');

// on lie chaque marqueur à une valeur

$requete->bindParam(':reference', $reference, PDO::PARAM_STR);
$requete->bindParam(':categorie', $categorie, PDO::PARAM_INT);
$requete->bindParam(':libelle', $libelle, PDO::PARAM_STR);
$requete->bindParam(':description', $description, PDO::PARAM_STR);
$requete->bindParam(':prix', $prix, PDO::PARAM_INT);
$requete->bindParam(':stock', $stock, PDO::PARAM_STR);
$requete->bindParam(':couleur', $couleur, PDO::PARAM_STR);
$requete->bindParam(':produit_bloque', $bloque, PDO::PARAM_STR);
$requete->bindParam(':dateAjout', $dateAjout, PDO::PARAM_INT);
$requete->bindParam(':photo', $photo, PDO::PARAM_STR);

// éxécution de la requete préparé

$requete->execute();
}


else
{
    echo 'echec de l\'insertion';
}




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Insertion des produits</h1>


    <!-- <p><?php echo $message; ?></p> -->
</body>
</html>