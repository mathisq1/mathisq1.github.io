<?php

$nom=$_GET['Nom'];
$email = $_GET['email'];
$message = $_GET ['message'];
$message = strip_tags($message);
$ful= "Je suis".$nom."<br> mon adresse e mail est".$email."<br> Voici mon message".$message;

$dest="querne.mathis@laposte.net";
$contact = "Demande de contact";

mail($dest,$contact,$ful);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Votre message a ete envoyer</h2>
    
</body>
</html>