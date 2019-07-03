
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

if(isset($_POST['suivant'])){
session_start();  
$_SESSION["marque"] = $marque;
$_SESSION["modele"] = $modele;
$_SESSION["etat"] = $etat;
$_SESSION["carnet"] = $carnet;
$_SESSION["date_MenC"] = $date_MenC;
$_SESSION["kilometrage"] = $kilometrage;
$_SESSION["carburant"] = $carburant;
$_SESSION["boite_vitesse"] = $boite_vitesse;
$_SESSION["motorisation"] = $motorisation;
$_SESSION["couleur"] = $couleur;
$_SESSION["form_type"] = "voiture";
header( 'Location: /contact-voiture.php' ) ;
}


  
?>

