<?php
try {
	if(isset($_POST['submit'])){
		isset($_POST['email']) ? $email =$_POST['email'] :"";
    	isset($_POST['nom']) ? $nom =$_POST['nom'] :"";
    	isset($_POST['sujet']) ? $sujet =$_POST['sujet'] :"";
    	isset($_POST['message']) ? $message =$_POST['message'] :"";
    	  // $to="benlassouedkhaled@gmail.com";
  		$to="charradighassen04@gmail.com";
	    $headers = "from ".$email;
	    mail($to,$sujet,$message,$headers);
	}
} catch (Exception $e) {
	
}

?>