<?php


// // ^[0-9]*$ = chaine numérique
// // ^[0-9A-Za-z]+$ = alphanumérique

// // if (isset ($_POST ["pro_ref"])) && (isset ($_POST ["pro_cat_id"])) && (isset($_POST["pro_libelle"]))&& isset($_POST["pro_description"]) && isset($_POST["pro_prix"]) && isset($_POST["pro_stock"]) && isset($_POST["pro_couleur"]) && isset($_POST["pro_photo"])&& isset($_POST["pro_d_ajout"])&& isset($_POST["pro_bloque"])
// // && !empty($_POST["pro_ref"]) && !empty($_POST["pro_cat_id"]) && !empty($_POST["pro_libelle"])&& !empty($_POST["pro_description"]) && !empty($_POST["pro_prix"])&& !empty($_POST["pro_stock"])&& !empty($_POST["pro_couleur"])&& !empty($_POST["pro_photo"])&& !empty($_POST["pro_d_ajout"])&& !empty($_POST["pro_bloque"]))




// je ne comprend pas pkoi l'insertion et la regex ne fonctionne pas .


// //verification

require "connexion_bdd.php"; // Inclusion de notre bibliothèque de fonctions
$db = connexionBase(); // Appel de la fonction de connexion
// declaration des variables
$reference = $_POST["reference"];//1
$categorie = $_POST["categorie"];//2
$libelle = $_POST["libelle"];//3
$description = $_POST["description"];//4
$prix = $_POST["prix"];//5
$stock = $_POST["stock"];//6
$couleur =$_POST["couleur"];//7
$photo = $_POST["photo"];//8
$dateAjout =$_POST["dateAjout"];//9
$bloque = $_POST["bloque"];//10


// function valid_donnees($donnees)
// {
//     $donnees = trim($donnees); // trim == supprimer les espaces inutiles
//     $donnees = stripslashes($donnees); //stripslashes == supprimer les antislashes 
//     $donnees = htmlspecialchars($donnees); //htmlspecialchars == échapper certains caractères spéciaux comme les chevrons « < » et « > » en les transformant en entités HTML
//     return $donnees;
// }



   
    
        $errors= [];
        if (!array_key_exists ('reference',$_POST)|| $_POST ['reference'] == '' || preg_match("[a-zA-Z0-9_-]",$_POST["reference"]))
        {
            $errors['reference']= "La référence doit être renseigné";   
        }
        if (!array_key_exists ('categorie',$_POST) || $_POST ['categorie'] == '' )
        {
            $errors['categorie']= "La catégorie doit être renseigné";   
        }
        if (!array_key_exists ('libelle',$_POST) || $_POST ['libelle'] == ''|| preg_match("[a-zA-Z0-9àêéïù ]",$_POST['libelle']))
        {
            $errors['libelle']= "Le libéllé doit être renseigné";   
        }
        if (!array_key_exists ('prix',$_POST) || $_POST ['prix'] == ''|| preg_match("([0-9]{1,4})([.])(([0-9]){2})",$_POST["prix"]))
        {
            $errors['prix']= "Le prix doit être renseigné et mettre un prix avec 2 chiffres après le point";   
        }

        // var_dump ($errors);
        // die();

        if(!empty($errors))
        {
            session_start();
            $_SESSION['errors'] = $errors;
            header("Location:produits_ajout.php");
        }
        else
        {
            try 
            {
                // preparation de la requete d'insertion sans injection sql
            $pdoStat = $db->prepare('INSERT INTO produits(pro_cat_id, pro_ref, pro_libelle, pro_description, pro_prix,pro_stock, pro_couleur,pro_photo,pro_d_ajout,pro_bloque )   
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
               
                // Libération de la connexion au serveur de BDD
                $pdoStat->closeCursor();

           }
        //    // Gestion des erreurs
            catch (Exception $e) 
            {

                echo "La connexion à la base de données a échoué ! <br>";
                echo "Merci de bien vérifier vos paramètres de connexion ...<br>";
                echo "Erreur : " . $e->getMessage() . "<br>";
                echo "N° : " . $e->getCode();
                die("Fin du script");
            }
             //Redirection vers le tableau
             header("Location:tableau.php");
             exist;
        }           
 ?>