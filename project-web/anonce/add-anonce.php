<?php 
session_start();
$username = "root";
$password = "";
$bdd = new PDO("mysql:host=localhost; dbname=users1;",$username,$password);
if(!$_SESSION['mdp']){
    header('location :sec.php');
}
if(isset($_POST['envoi'])){
if (!empty($_POST['titre']) and  !empty($_POST['description']) and !empty($_POST['mail'])){
$titre =htmlspecialchars($_POST['titre']); //pour ne entré pas des scripte comme code html
$description =nl2br(htmlspecialchars($_POST['description']));//nl2br pour sout de ligne on scripte
$mail =htmlspecialchars($_POST['mail']);

$inserarticle =$bdd->prepare('INSERT INTO `anonce`( `titre`, `info`, `link`) VALUES (?,?,?)');
 $inserarticle->execute(array($titre , $description,$mail));

// echo "l'article a bien été envoiyé";
header('location:anonce.php');
}else{
    echo "Veuillez compléter tous les champs...";
}


}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../membres/add-mombre.css">
    <link rel="icon" href="../espace1/Blida1.png" type="image/x-icon">
    <title>Document</title>
</head>
<body>
<div class="page">
    <h1>Add</h1>
    <form action="" method="post">
        <input type="text" name="titre" id="" placeholder="type">
        <input type="text" name="mail" id="" cols="30" rows="10" placeholder="Link">

        <textarea name="description" id="x7" cols="30" rows="10" placeholder="description"></textarea>

        <input type="submit" id="aaa" value="click" name="envoi"> 

        <style>
    #x7{
        height:50px;
    }

    textarea{
    width: 92%;
    outline: none;
    border: 1px  solid #fff;
    padding:  12px 20px;
    margin-bottom: 10px;
    border-radius: 20px;
    background-color: #e4e4e4;
}
textarea:focus{
    border: 1px solid rgb(192, 192, 192);
}
  
    </style>
</body>
</html>