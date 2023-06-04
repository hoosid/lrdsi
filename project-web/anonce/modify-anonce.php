<?php 
include "../cont-data/contactt.php";
$id1=$_GET['titre'];
if (isset($_POST['envoi'])){

    $titre = $_POST['titre'];
    $description = $_POST['description'];
    $mail =$_POST['mail'];
   
    $sql = "UPDATE `anonce` SET titre='$titre', info='$description',link='$mail' WHERE titre='$id1'"; 
    $result = mysqli_query($con, $sql);

    if($result){
        header('Location: anonce.php');
        exit;
    } else {
        die(mysqli_error($con));
    }
}
?><!DOCTYPE html>
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
    <h1>Update</h1>
    <form action="" method="post">
        <input type="text" name="titre" id="" placeholder="type">
        
        <!-- <textarea name="mail" id="" cols="30" rows="10" placeholder="mail"></textarea> -->
        <input type="text" name="mail" id="" cols="30" rows="10" placeholder="Link">

        <textarea name="description" id="x5" cols="30" rows="10" placeholder="description"></textarea>
      
        <input type="submit" id="aaa" value="click" name="envoi"> 
       
        

    </form>

    <style>
    #x5{
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