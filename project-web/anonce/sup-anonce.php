<?php 
session_start();
include "../cont-data/contactt.php";
// $username = "root";
// $password = "";
// $bdd = new PDO("mysql:host=localhost; dbname=users1;",$username,$password);
if(isset($_GET['titre']) and !empty($_GET['titre'])){    //virefier si idantifer a uter enter
    $getid=$_GET['titre'];
    $recupid=$bdd->prepare('SELECT * FROM anonce WHERE titre =?');
    $recupid->execute(array($getid));
    if($recupid->rowCount()>0){
   
   $bannirid=$bdd->prepare('DELETE FROM anonce WHERE  titre=?');
   $bannirid->execute(array($getid));
   header('location:anonce.php');



}else {
    echo "Aucun idantifer n'a été trouvé";
}
}else{
    echo "user name n'a pas ete recuperé";
}


?>