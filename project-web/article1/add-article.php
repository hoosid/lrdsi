<?php 
include "../cont-data/contactt.php";
session_start();
// $username = "root";
// $password = "";
// $bdd = new PDO("mysql:host=localhost; dbname=users1;", $username, $password);

if (!$_SESSION['mdp']) {
    header('Location: sec.php');
    exit;
}

if (isset($_POST['envoi'])) {
    if (!empty($_POST['titre']) && !empty($_POST['description']) && !empty($_POST['journal']) && !empty($_POST['autheur']) && !empty($_POST['date'])) {
        $titre = htmlspecialchars($_POST['titre']); //pour ne pas entrer des scripts comme du code HTML
        $description = nl2br(htmlspecialchars($_POST['description']));//nl2br pour soutenir les sauts de ligne
        $journal = htmlspecialchars($_POST['journal']);
        $autheur = htmlspecialchars($_POST['autheur']);
        $date = htmlspecialchars($_POST['date']);
        
        if ($_FILES['image']['error'] === UPLOAD_ERR_OK) {
            $image = base64_encode(file_get_contents($_FILES['image']['tmp_name']));
        
            $inserarticle = $bdd->prepare('INSERT INTO `article`(`titre`, `description`, `journal`, `autheur`, `date`, `image`) VALUES (?, ?, ?, ?, ?, ?)');
            $inserarticle->execute(array($titre, $description, $journal, $autheur, $date, $image));
        
            header('Location: ajoute-article.php');
            exit;
        } else {
            echo "Veuillez compléter tous les champs...";
        }
    } else {
        echo "Veuillez compléter tous les champs...";
    }
} else {
    echo "Veuillez compléter tous les champs...";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="../espace1/Blida1.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../membres/add-mombre.css">
    <title>Document</title>
</head>
<body>
<div class="page">
    <h1>Add</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="text" name="titre" id="x1" placeholder="type">
        
       

        <input type="file" name="image" placeholder="image"/>
     
        <input type="text" name="date" id="" placeholder="date">

        <textarea name="description" id="x7" cols="30" rows="10" placeholder="description"></textarea>
        
        <textarea name="journal" id="x7" cols="30" rows="10" placeholder="journal"></textarea>
       
        <textarea name="autheur" id="x7" cols="30" rows="10" placeholder="autheurs"></textarea>
        <input type="submit" id="aaa" value="click" name="envoi"> 
       
        

    </form>
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