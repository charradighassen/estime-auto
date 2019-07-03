<?php
session_start();  
var_dump($_SESSION);
// get data formulaire finale
isset($_POST['email']) ? $email =$_POST['email'] :"";
isset($_POST['nom']) ? $nom =$_POST['nom'] :"";
isset($_POST['prenom']) ? $prenom =$_POST['prenom'] :"";
isset($_POST['telephone']) ? $telephone =$_POST['telephone'] :"";
isset($_POST['ville']) ? $ville =$_POST['ville'] :"";
isset($_POST['code_postal']) ? $code_postal =$_POST['code_postal'] :"";



$subject =  $_SESSION['form_type'] == "voiture" ? "Demande rendez vous Estimation de Voiture" : " Demande rendez vous Estimation de Moto" ;
$msg = "
  marque :". $_SESSION['marque']."
";
mail($email,$subject,$msg);
// var_dump($_POST);
// var_dump($_SESSION);
// require './classes/class.phpmailer.php';
// $mail = new PHPMailer;
// if($_SESSION['form_type'] == "voiture"){
//   // send voiture email
// }else{
//   // send moto email 
// }
?>