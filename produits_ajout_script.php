<?php

// require "connexion_bdd.php"; // Inclusion de notre bibliothèque de fonctions
// $db = connexionBase(); // Appel de la fonction de connexion
// // declaration des variables
// $reference = valid_donnees($_POST["reference"]);//1
// $categorie = valid_donnees($_POST["categorie"]);//2
// $libelle = valid_donnees($_POST["libelle"]);//3
// $description = valid_donnees($_POST["description"]);//4
// $prix = valid_donnees($_POST["prix"]);//5
// $stock = valid_donnees($_POST["stock"]);//6
// $couleur = valid_donnees($_POST["couleur"]);//7
// $photo = valid_donnees($_POST["photo"]);//8
// $dateAjout = valid_donnees($_POST["dateAjout"]);//9
// $bloque = valid_donnees($_POST["bloque"]);//10


// function valid_donnees($donnees)
// {
//     $donnees = trim($donnees); // trim == supprimer les espaces inutiles
//     $donnees = stripslashes($donnees); //stripslashes == supprimer les antislashes 
//     $donnees = htmlspecialchars($donnees); //htmlspecialchars == échapper certains caractères spéciaux comme les chevrons « < » et « > » en les transformant en entités HTML
//     return $donnees;
// }

// //verification
// // ^[0-9]*$ = chaine numérique
// // ^[0-9A-Za-z]+$ = alphanumérique

// // if (isset ($_POST ["pro_ref"])) && (isset ($_POST ["pro_cat_id"])) && (isset($_POST["pro_libelle"]))&& isset($_POST["pro_description"]) && isset($_POST["pro_prix"]) && isset($_POST["pro_stock"]) && isset($_POST["pro_couleur"]) && isset($_POST["pro_photo"])&& isset($_POST["pro_d_ajout"])&& isset($_POST["pro_bloque"])
// // && !empty($_POST["pro_ref"]) && !empty($_POST["pro_cat_id"]) && !empty($_POST["pro_libelle"])&& !empty($_POST["pro_description"]) && !empty($_POST["pro_prix"])&& !empty($_POST["pro_stock"])&& !empty($_POST["pro_couleur"])&& !empty($_POST["pro_photo"])&& !empty($_POST["pro_d_ajout"])&& !empty($_POST["pro_bloque"]))
// // {
// //     echo 'le produit a été ajouté';
// // }

// if (!empty($categorie)
// && preg_match("^[0-9]*$",$categorie)
// && strlen($categorie) <= 50)
// {

//     try{
//             // preparation de la requete d'insertion
// $pdoStat = $db->prepare('INSERT INTO produits(pro_cat_id, pro_ref, pro_libelle, pro_description, pro_prix, pro_stock, pro_couleur,pro_photo , pro_d_ajout,pro_bloque )   
// VALUES(:categorie,:reference,:libelle,:descrip,:prix,:stock,:couleur,:photo,:dateAjout,:produit_bloque)'); // ici ton :description a un s

// // on lie chaque marqueur à une valeur

// $pdoStat->bindParam(':categorie', $categorie,PDO::PARAM_INT);
// $pdoStat->bindParam(':reference', $reference,PDO::PARAM_STR);
// $pdoStat->bindParam(':libelle', $libelle,PDO::PARAM_STR);
// $pdoStat->bindParam(':descrip', $description, PDO::PARAM_STR); // ici ton ;description n'en a pas du coup pas de correspondance entre les deux
// $pdoStat->bindParam(':prix', $prix,PDO::PARAM_INT);
// $pdoStat->bindParam(':stock', $stock,PDO::PARAM_INT);
// $pdoStat->bindParam(':couleur', $couleur,PDO::PARAM_STR);
// $pdoStat->bindParam(':photo', $photo,PDO::PARAM_STR);
// $pdoStat->bindParam(':dateAjout', $dateAjout);
// $pdoStat->bindParam(':produit_bloque', $bloque);


// // éxécution de la requete préparé

// $pdoStat->execute();

// //Redirection vers le tableau
// header("Location:tableau.php");

//     }
//     catch(PDOException $e){
//         echo 'Erreur : '.$e->getMessage();
//     }
// }
// else{
//     header("Location:produits_ajout.php");
// }








// // } 


// autre tentative

require "connexion_bdd.php"; // Inclusion de notre bibliothèque de fonctions
$db = connexionBase(); // Appel de la fonction de connexion
// declaration des variables
$reference = valid_donnees($_POST["reference"]);//1
$categorie = valid_donnees($_POST["categorie"]);//2
$libelle = valid_donnees($_POST["libelle"]);//3
$description = valid_donnees($_POST["description"]);//4
$prix = valid_donnees($_POST["prix"]);//5
$stock = valid_donnees($_POST["stock"]);//6
$couleur = valid_donnees($_POST["couleur"]);//7
$photo = valid_donnees($_POST["photo"]);//8
$dateAjout = valid_donnees($_POST["dateAjout"]);//9
$bloque = valid_donnees($_POST["bloque"]);//10


function valid_donnees($donnees)
{
    $donnees = trim($donnees); // trim == supprimer les espaces inutiles
    $donnees = stripslashes($donnees); //stripslashes == supprimer les antislashes 
    $donnees = htmlspecialchars($donnees); //htmlspecialchars == échapper certains caractères spéciaux comme les chevrons « < » et « > » en les transformant en entités HTML
    return $donnees;
}


if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    //verification du formulaire
    if (isset ($_POST ["pro_ref"]) AND ($_POST ["pro_cat_id"]) AND (($_POST["pro_libelle"]) AND ($_POST["pro_description"]) AND ($_POST["pro_prix"]) AND ($_POST["pro_stock"]) AND ($_POST["pro_couleur"]) AND ($_POST["pro_photo"]) AND ($_POST["pro_d_ajout"]) AND($_POST["pro_bloque"]))
    && (!empty($_POST["pro_ref"]) && ($_POST["pro_cat_id"]) && ($_POST["pro_libelle"]) && ($_POST["pro_description"]) && ($_POST["pro_prix"] )&& ($_POST["pro_stock"])&& ($_POST["pro_couleur"]) && ($_POST["pro_photo"]) && ($_POST["pro_d_ajout"]) && ($_POST["pro_bloque"]))) 
    && preg_match 
    {
       
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

//Redirection vers le tableau
        header("Location:tableau.php");
        die();


    }
    else
    {
        header("Location:produits_ajout.php");
    }

}







 

?>