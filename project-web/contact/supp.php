<?php
session_start();
include "../cont-data/contactt.php";

if (isset($_GET['usrename']) && !empty($_GET['usrename'])) {
    $getid = $_GET['usrename'];

    $recupid = $bdd->prepare('SELECT * FROM contact WHERE usrename = ?');
    $recupid->execute(array($getid));

    if ($recupid->rowCount() > 0) {
        $bannirid = $bdd->prepare('DELETE FROM contact WHERE usrename = ?');
        $bannirid->execute(array($getid));
        header('Location: contact111.php');
        exit();
    } else {
        echo "Aucun identifiant n'a été trouvé.";
    }
} else {
    echo "Le nom d'utilisateur n'a pas été récupéré.";
}
?>
