  
<?php
if(isset($_POST['suivant'])){
isset($_POST['type']) ? $type =$_POST['type'] :"";
isset($_POST['marque']) ? $marque =$_POST['marque'] :"";
isset($_POST['cylindre']) ? $cylindre =$_POST['cylindre'] :"";
isset($_POST['modele']) ? $modele =$_POST['modele'] :"";
isset($_POST['carnet']) ? $carnet =$_POST['carnet'] :"";
isset($_POST['date_MenC']) ? $date_MenC =$_POST['date_MenC'] :"";
isset($_POST['kilometrage']) ? $kilometrage =$_POST['kilometrage'] :"";
isset($_POST['etat']) ? $etat =$_POST['etat'] :"";

session_start();  
$_SESSION["type"] = $type;
$_SESSION["marque"] = $marque;
$_SESSION["cylindre"] = $cylindre;
$_SESSION["modele"] = $modele;
$_SESSION["carnet"] = $carnet;
$_SESSION["date_MenC"] = $date_MenC;
$_SESSION["kilometrage"] = $kilometrage;
$_SESSION["etat"] = $etat;
$_SESSION["form_type"] = "moto";
session_write_close();
header( 'Location: /contact-moto.php' ) ;
}


  
?>

