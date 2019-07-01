<!--save this code by the name of processing-script.php-->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
<?php

// commun variables 
isset($_POST['marque']) ? $marque =$_POST['marque'] :"";
isset($_POST['modele']) ? $modele =$_POST['modele'] :"";
isset($_POST['etat']) ? $etat =$_POST['etat'] :"";
isset($_POST['carnet']) ? $carnet =$_POST['carnet'] :"";
isset($_POST['date_MenC']) ? $date_MenC =$_POST['date_MenC'] :"";
isset($_POST['kilometrage']) ? $kilometrage =$_POST['kilometrage'] :"";
// get data formulaire estimation for car


isset($_POST['carburant']) ? $carburant =$_POST['carburant'] :"";
isset($_POST['boite_vitesse']) ? $boite_vitesse =$_POST['boite_vitesse'] :"";
isset($_POST['motorisation']) ? $motorisation =$_POST['motorisation'] :"";
isset($_POST['couleur']) ? $couleur =$_POST['couleur'] :"";

// for moto 

isset($_POST['type_moto']) ? $type_moto =$_POST['type_moto'] :"";
isset($_POST['cylindre']) ? $cylindre =$_POST['cylindre'] :"";

// get data formulaire finale
isset($_POST['email']) ? $email =$_POST['email'] :"";
isset($_POST['nom']) ? $nom =$_POST['nom'] :"";
isset($_POST['prenom']) ? $prenom =$_POST['prenom'] :"";
isset($_POST['telephone']) ? $telephone =$_POST['telephone'] :"";
isset($_POST['ville']) ? $ville =$_POST['ville'] :"";
isset($_POST['code_postal']) ? $code_postal =$_POST['code_postal'] :"";


session_start();  

$_SESSION["marque"] = "ghassen";
echo ($_SESSION["marque"]);
?>
</body>
</html>
