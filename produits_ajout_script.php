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

//verification
if (isset ($_POST ["pro_ref"]) && (isset ($_POST ["pro_cat_id"]) && isset($_POST["pro_libelle"]) && isset($_POST["pro_description"]) && isset($_POST["pro_prix"]) && isset($_POST["pro_stock"]) && isset($_POST["pro_couleur"]) && isset($_POST["pro_photo"])&& isset($_POST["pro_d_ajout"])&& isset($_POST["pro_bloque"])
&& !empty($_POST["pro_ref"]) && !empty($_POST["pro_cat_id"]) && !empty($_POST["pro_libelle"])&& !empty($_POST["pro_description"]) && !empty($_POST["pro_prix"])&& !empty($_POST["pro_stock"])&& !empty($_POST["pro_couleur"])&& !empty($_POST["pro_photo"])&& !empty($_POST["pro_d_ajout"])&& !empty($_POST["pro_bloque"]))
{
    $d = $_POST ;

    switch (0) 
    {
        case strlen(trim($d["pro_ref"])):
            $error = true ;
            $erreur["type"] = "alert";
            $erreur["content"] = "le champs référence est obligatoire";
            break;

        case strlen(trim($d["pro_cat_id"])):
            $error = true ;
            $erreur["type"] = "alert";
            $erreur["content"] = "le champs catégorie est obligatoire";
            break;

        case strlen(trim($d["pro_libelle"])):
            $error = true ;
            $erreur["type"] = "alert";
            $erreur["content"] = "le champs libéllé est obligatoire";
            break;
                
        case strlen(trim($d["pro_prix"])):
            $error = true ;
            $erreur["type"] = "alert";
            $erreur["content"] = "le champs prix est obligatoire";
            break;
                    
        case strlen(trim($d["pro_stock"])):
            $error = true ;
            $erreur["type"] = "alert";
            $erreur["content"] = "le champs stock est obligatoire";
            break;
        
        case strlen(trim($d["pro_d_ajout"])):
            $error = true ;
            $erreur["type"] = "alert";
            $erreur["content"] = "le champs date d'ajout est obligatoire";
            break;
        
       
    }

if (isset($erreur))
{
    echo '<div id="notification" class='.$erreur["type].'">'.$erreur["content"].'</div>;
}
}
// preparation de la requete d'insertion
$pdoStat = $db->prepare('INSERT INTO produits(pro_cat_id, pro_ref, pro_libelle, pro_description, pro_prix, pro_stock, pro_couleur,pro_photo , pro_d_ajout,pro_bloque )   
                        VALUES(:categorie,:reference,:libelle,:descrip,:prix,:stock,:couleur,:photo,:dateAjout,:produit_bloque)'); // ici ton :description a un s

// on lie chaque marqueur à une valeur

$pdoStat->bindParam(':categorie', $categorie,PDO::PARAM_INT);
$pdoStat->bindParam(':reference', $reference,PDO::PARAM_STR);
$pdoStat->bindParam(':libelle', $libelle,PDO::PARAM_STR);
$pdoStat->bindParam(':descrip', $description, PDO::PARAM_STR); // ici ton ;description n'en a pas du coup pas de correspondance entre les deux
$pdoStat->bindParam(':prix', $prix,PDO::PARAM_INT);
$pdoStat->bindParam(':stock', $stock,PDO::PARAM_INT);
$pdoStat->bindParam(':couleur', $couleur,PDO::PARAM_STR);
$pdoStat->bindParam(':photo', $photo,PDO::PARAM_STR);
$pdoStat->bindParam(':dateAjout', $dateAjout);
$pdoStat->bindParam(':produit_bloque', $bloque);


// éxécution de la requete préparé

$pdoStat->execute();

// if (isset ($_POST ["pro_ref"]) && isset($_POST["pro_libelle"]) && isset($_POST["pro_description"]) && isset($_POST["pro_prix"]) && isset($_POST["pro_stock"]) && isset($_POST["pro_couleur"]) && isset($_POST["pro_photo"])&& isset($_POST["pro_d_ajout"])&& isset($_POST["pro_bloque"])
// && !empty($_POST["pro_ref"]) && !empty($_POST["pro_libelle"])&& !empty($_POST["pro_description"]) && !empty($_POST["pro_prix"])&& !empty($_POST["pro_stock"])&& !empty($_POST["pro_couleur"])&& !empty($_POST["pro_photo"])&& !empty($_POST["pro_d_ajout"])&& !empty($_POST["pro_bloque"]))
// {





 
var_dump($_POST); 
