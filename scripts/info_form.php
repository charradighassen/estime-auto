<?php
session_start();  
// get data formulaire finale
isset($_POST['email']) ? $email =$_POST['email'] :"";
isset($_POST['nom']) ? $nom =$_POST['nom'] :"";
isset($_POST['prenom']) ? $prenom =$_POST['prenom'] :"";
isset($_POST['telephone']) ? $telephone =$_POST['telephone'] :"";
isset($_POST['ville']) ? $ville =$_POST['ville'] :"";
isset($_POST['code_postal']) ? $code_postal =$_POST['code_postal'] :"";

if($_SESSION['form_type'] == "voiture"){
  $subject = "Demande rendez vous Estimation de Voiture"  ;
  $msg = "
    Nom & prenom :". $nom." ".$prenom."
    Tel :". $telephone."
    ville :". $ville."
    Code postal :". $code_postal."
    ------------------------------------------------------"."
    Marque :". $_SESSION['marque']."
    Modele :". $_SESSION['modele']."
    Etat :". $_SESSION['etat']."
    Carnet :". $_SESSION['carnet']."
    Date Mise en Circulation :". $_SESSION['date_MenC']."
    Kilometrage :". $_SESSION['kilometrage']."
    Carburant :". $_SESSION['carburant']."
    Boite vitesse :". $_SESSION['boite_vitesse']."
    Motorisation :". $_SESSION['motorisation']."
    Couleur :". $_SESSION['couleur']."
  ";
}else{
  $subject = " Demande rendez vous Estimation de Moto" ;
  $msg = "
    Nom & prenom :". $nom." ".$prenom."
    Tel :". $telephone."
    ville :". $ville."
    Code postal :". $code_postal."
    ------------------------------------------------------"."
    type :". $_SESSION['type']."
    Marque :". $_SESSION['marque']."
    Modele :". $_SESSION['modele']."
    cylindre :". $_SESSION['cylindre']."
    Carnet :". $_SESSION['carnet']."
    Date Mise en Circulation :". $_SESSION['date_MenC']."
    Kilometrage :". $_SESSION['kilometrage']."
    Etat :". $_SESSION['etat']."
  ";
}
if(isset($_POST['submit'])){
  mail($email,$subject,$msg);
}

 header( 'Location: /contact-'.$_SESSION['form_type'].'.php' ) ;
?>