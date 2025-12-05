<?php
 session_start();



if ($_SERVER['REQUEST_METHOD'] === 'GET') {
  $content = __DIR__ . '/../views/contact.views.php';

include __DIR__ . '/../templates/Layout.php';
  exit;
}

$errors = [];
$succes = " ";

$errors = array(
  'nom' => '',
  'email' => '',
  'message' => ''
);


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $nom = trim($_POST['nom']);
  $email = trim($_POST['email']);
  $message = trim($_POST['message']);


  if (empty($nom) || (!preg_match("/^[a-zA-Z-']{2,}$/", $nom))) {
    $errors['nom'] = "le nom est requis ou il faut contient des lettres selement sans espace";
    echo "test";
  }
  if (empty($email) || (!filter_var($email, FILTER_VALIDATE_EMAIL))) {
    $errors['email'] = "email est requis";

  }
  if (empty($message)) {
    $errors['message'] = "message  il faut remplir";
  }
  if ($errors['nom'] == "" && $errors['email'] == "" && $errors['message'] == "") {
    $succes = " votre message est envoyé ";
    $nom = $prenom = $email = $message = "";
    $_POST = [];
  }

  // $headers='From' .$
  // if(empty($errors)){
  //   mail($email,"contact form",$message,$headers);
  // }
}




$_SESSION['succes'] = $succes;
$_SESSION['errors'] = $errors;


header("Location: /contact");
exit;



?>