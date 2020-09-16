
<?php


// validation nom
if (!empty($_POST["nom"])) 
{
    $bool = preg_match('/^[A-Za-z]+$/', $_POST["nom"]);
    echo "pregmatch : ".$bool."<br>";
    echo "nom: ".$_POST["nom"]."<br>";
} 
else
{
    echo "Le nom doit être renseigné"."<br>";
}
// validation prenom
if (!empty($_POST["prenom"])) 
{
    $bool = preg_match('/^[A-Za-z]+$/', $_POST["prenom"]);
    echo "pregmatch : ".$bool."<br>";
    echo "prénom: ".$_POST["prenom"]."<br>";
} 
else
{
    echo "Le prénom doit être renseigné"."<br>";
}
// validation sexe
if (!empty($_POST["sexe"])) 
{
    $sexe = $_POST["sexe"];    
    echo "sexe: ".$_POST["sexe"]."<br>";
} 
else
{
    echo "Le sexe doit être coché"."<br>";
}
// validation date de naissance
if (!empty($_POST["date"])) 
{
    $bool = preg_match('/^[0-9]{4}-[0-9][0-9]?-[0-9][0-9]?$/', $_POST["date"]);
    echo "pregmatch : ".$bool."<br>";
    echo "date: ".$_POST["date"]."<br>";
} 
else
{
    echo "La date de naissance doit être renseigné"."<br>";
}


if (!empty($_POST["ville"])) 
{
     $bool = preg_match('/^[A-Za-z]+$/', $_POST["ville"]);
     echo "pregmatch : ".$bool."<br>";
     echo "ville: ".$_POST["ville"]."<br>";
} 
else
{
    echo "La ville doit être renseigné"."<br>";
}
// validation cgu
if (!empty($_POST["traitement_informatique"])) 
{
      
    echo "traitement_informatique: ".$_POST["traitement_informatique"]."<br>";
} 
else
{
    echo "Le  doit être coché <br>";
}
?>
