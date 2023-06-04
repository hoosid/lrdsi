<?php 
include "../cont-data/contactt.php";
$id1 = $_GET['id_art'];

if (isset($_POST['envoi'])){
    $titre = $_POST['titre'];
    $description = $_POST['description'];
    $journal = $_POST['journal'];
    $autheur = $_POST['autheur'];
    $date = $_POST['date'];

    if ($_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $image = base64_encode(file_get_contents($_FILES['image']['tmp_name']));
        $sql = "UPDATE `article` SET `titre`=?, `description`=?, `journal`=?, `autheur`=?, `date`=?, `image`=? WHERE `id_art`=?";
        $stmt = $con->prepare($sql);
        $stmt->bind_param("ssssssi", $titre, $description, $journal, $autheur, $date, $image, $id1);
    } else {
        $sql = "UPDATE `article` SET `titre`=?, `description`=?, `journal`=?, `autheur`=?, `date`=? WHERE `id_art`=?";
        $stmt = $con->prepare($sql);
        $stmt->bind_param("sssssi", $titre, $description, $journal, $autheur, $date, $id1);
    }

    if (!empty($titre) && !empty($description) && !empty($journal) && !empty($autheur) && !empty($date) && !empty($id1)) {
        $result = $stmt->execute();

        if ($result) {
            header('Location: ajoute-article.php');
            exit;
        } else {
            die($stmt->error);
        }
    } else {
        echo "Some fields are empty. Please fill in all the required fields.";
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
    <title>Document</title>
</head>
<body>
<div class="page">
    <h1>Update</h1>
<form action="" method="post" enctype="multipart/form-data"> 
<input type="text" name="titre" id="" placeholder="type">
      
     
        <input type="file" name="image" placeholder="image"/>

        <input type="text" name="date" id="" placeholder="date">

          
        <textarea name="description" id="x7" cols="30" rows="10" placeholder="description"></textarea>
        
        <textarea name="journal" id="x7" cols="30" rows="10" placeholder="journal"></textarea>
       
        <textarea name="autheur" id="x7" cols="30" rows="10" placeholder="autheurs"></textarea>
      
        <input type="submit" id="aaa"  value="click" name="envoi">
    

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
