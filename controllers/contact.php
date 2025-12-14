<?php 

session_start();

if($_SERVER["REQUEST_METHOD"]==="GET"){
$content=__DIR__ ."/../views/contact.views.php";
include __DIR__ ."/../templates/Layout.php";
    
}
$error=["nom"=>"","message"=>"","email"=>""];
$succes="";

if($_SERVER["REQUEST_METHOD"]==="POST"){
$nom=trim($_POST["nom"]);
$message=trim($_POST["message"]);
$email=trim($_POST["email"]);
if(empty($nom)||!preg_match("/^[a-zA-Z-' ]{2,}$/",$nom)){
    $error["nom"]="vous avez un error au niveau de  champ nom soit tu oublie de rempli le champ ou tu frappe au nom ";
    
}
if(empty($message)){
    $error["message"]="vous avez un error au niveau de  champ eamil soit tu oublie de rempli le champ ou tu frappe au nom ";

}
if(empty($email)||!filter_var($email,FILTER_VALIDATE_EMAIL)){
    $error["email"]= "vous avez un error au niveau de  champ eamil soit tu oublie de rempli le champ ou tu frappe au email ";
}

if ($error['nom'] == "" && $error['email'] == "" && $error['message'] == "") {
    $succes = " votre message est envoyé ";
    $nom = $prenom = $email = $message = "";
    $_POST = [];
  }

$_SESSION["errors"] = $error;
$_SESSION["succes"] = $succes;





header("Location: /contact");
exit;
}


?>