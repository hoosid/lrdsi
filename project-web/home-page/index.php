<?php 
include "../cont-data/contactt.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../espace1/Blida1.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <title>la boratoire de recharche </title>
    <style>
    .the-new1{
    text-align:center;
 }

    .page2{

width: 80%;
height: 50px;
background-color: rgb(255, 255, 255);
display: flex;
align-items: center;
justify-content: space-between;

position: absolute;
top: -30px;
left: 50%;
margin-left: -40%;
padding: 30px;
box-shadow: 0px 0px 10px 0px rgba(0, 0, 0,28%) ;
}

.page2 > ul{
display: flex;
justify-content: space-between;

}
ul {
list-style: none; 
align-items: center;
}
.sous-ul{
position: relative;
}
.sous-menu {
    opacity: 0;
    top: 50px;
    position: absolute;
    background-color: #eee;
    width: 150px;
 left: -8px;
     border: 2px #b9b7b7 solid;

}
.sous-menu li{     
    padding: 5px;
    
}
.sous-menu li:hover{
    color: rgb(255, 255, 255);
    background-color: rgb(54, 77, 139);
}
.sous-ul:hover .sous-menu {
opacity: 1;
}
.page2 > ul> li {
padding: 10px 15px;
margin: 0 3px;


}


.page2 > ul a{
color: rgb(13, 13, 74);
font-weight: 600;
text-decoration: none;
text-transform: uppercase;
}

.page2>ul> li:hover{
color: rgb(255, 255, 255);
background-color: rgb(54, 77, 139);
border-radius: 20px;

}
.page2 > ul a:hover{
color: white;

}
.log:hover{ 
color: rgba(29, 29, 30, 0.44);
background-color: #e7e6ecd6;
}
.log{
padding: 10px 20px;
background-color: rgb(3, 41, 145);

color: white;
border-radius: 20px;
text-decoration: none;
margin: 0 20px;
font-size: 20px;
}
.the-new1 h2{
    padding-top:20px;
    font-size:50px;
}
.the-new{ 
    margin: 50px 0 ;
    width: 570px;
    height: 200px;
    text-align: center;
    background-color:#dadadac5;
    position: relative;
    right: 10000px;
    overflow: auto;
    padding: 10px;
}
.sdd0{
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;

    text-align: start;
    color:red; 
}
.sdd1{
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;

    text-align: start;
    color:black;
}
.sdd2{
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;

    text-align: start;
    color:black;

}
.page-final {
    width: 100%;
    height: 300px;
    background-color:#213555;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    gap: 15px;
    color: #F9E0BB;
}
.page-final a{
    text-decoration: none;
    color:#F9E0BB;

}
.page-final h3{
    font-size: 20px;
    text-align: center;
}
.page-final ul{
    display: flex;
    gap: 10px;

}
.page-final li{
    padding: 7px;
    border: white 2px solid;
    border-radius: 20px;
}
</style>
</head>
<body>

       <header>
      <img src="1680966344837.jpg" alt="">
        <div>
        <div>
        <img src="" alt="">
        <h3>Écrivez-nous:</h3>
        <p>info@gmail.com</p>
     </div> 
        <div>
        <img src="" alt="">
        <h3>Heures d'ouverture:</h3>
        <p>Lun-ven 9h00-18h00</p>
     </div>
     <div>
        <img src="" alt="">
        <h3>Appelez-nous au :</h3>
        <p>+1 0147 55554</p>
     </div>
 </div>
     </header>
<div class="page0">
<div class="page1">
<video autoplay loop muted plays-inline class="video" >
    <source src="video.mp4" type="video/mp4">
</video>

<?php   
 $query="SELECT * FROM anonce";
$r=mysqli_query($con,$query);    
if ($r && mysqli_num_rows($r) > 0){
?>
<h2>Informatiques is a beautiful gift to humanity.</h2>
<h2>We should not distort it.</h2>
<div class="the-new">

    <?php
$query="SELECT * FROM anonce";
$r=mysqli_query($con,$query);

    while ($row = mysqli_fetch_assoc($r)) {
        echo "<h3 class='sdd0'>" . $row['titre'] . "</h3>";
        echo "<p class='sdd1'>" . $row['info'] . "</p>";
        echo "<h4 class='sdd2'>" . $row['link'] . "</h4>";
    }
 } else {?>
 <div class="the-new1">
 <h2>Informatiques is a beautiful gift to humanity.</h2>
<h2>We should not distort it.</h2>
<?php }?>

<!-- hna that ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
</div>

</div>

<div class="page2">
    <ul>
        <li><a href="index.php" id="ss">Accuil</a></li>
        <li><a href="../formation/formation.php">Formation</a></li>
        <li><a href="../presentation/presentation.php">presentation</a></li>
    
        <li class="sous-ul"><a href="#">Recherche</a>
        
            <ul class="sous-menu">
                <li><a href="../equipe/equip.php" >Equipes</a></li>
                <li><a href="../project1/pub.php">Projets</a></li>  
                <li><a href="../article1/pub1.php" >Publications</a></li>  
                <li><a href="../membres/members.php">Membres</a></li>
          </ul>
        
        
        </li>
        <li><a href="../contact/contact1.php" target="_blank">Contact </a></li>
    </ul>
     <a class="log" href="../login-admin/login.php" >Login</a>
</div>


<div class="page3 reveal">
<div>
    <img src="img5.jpg" alt="">
    <h3>Information Laboratoire</h3>
    <div class="go">
<a href="../member/Member.php">Membres et équipes</a>
<a href="../article1/pub1.php">Publications et soutenances</a>
</div>
</div>
<div>
    <img src="atelier-recherche-developpement.jpg" alt="">
    <h3>Domaines R&D</h3>
    <div class="go">
    <a href="">Intelligence Computationnelle</a>
    <a href="">Big Data et Systèmes Décisionnels</a>
    <a href="">Reconnaissance Des Formes et Applications</a>
    <a href="">Sécurité De Systèmes Informatiques et Raisonnement</a>
</div>
</div>
<div>
    <img src="projet_icon.jpg" alt="">
    <h3>Projets</h3>
 <div class="go reveal">
        <a href="">Projets Nationaux de Recherche (PNR)</a>
    <a href="">Projets Cnepru </a>
    <a href="">Projets de coopération internationale</a>
</div>
</div>
<div>
    <img src="Contact.jpg" alt="">
    <h3>Contact</h3>
     <div class="go">
<p>BP 270, Route de Soumâa 09000 - Blida
mail : contact@lrdsi.dz</p>
  </div>
</div>


</div>
</div>

<div class="page4">
 
<div class="page4-1 reveal">
    <div>
        <img src="img5.jpg" alt="">
        <h3>Presentation</h3>       
        <p>Le laboratoire de Recherche pour le Développement des Systèmes Informatisés (LRDSI) de l’université Saad Dahlab –Blida1, a été agréé en mai 2002 pour accompagner le département d’informatique créé en 1999, dans ses activités pédagogiques et scientifiques.</p>
        <a href="">view more</a>
        </div>
        <div>
         <img src="Formation-informatique.png" alt="">
         <h3>Formation</h3>
        <p>La formation à et par la recherche est une mission importante du laboratoire LRDSI. Ses membres sont impliqués dans différentes formations dispensées au sein du département d’informatique.</p>
        <a href="">view more</a>
        </div>
        <div>
       <img src="projet-innovation-610x380.jpg" alt="">
       <h3>Projets</h3>
     <p>Un projet est une entreprise temporaire initiée dans le but de fournir un produit, un service ou un résultat unique. Temporaire signifie que tout projet a un début et une fin déterminés.</p>
       <a href="">view more</a>
        </div>
</div>
</div>
<div>
    <span class="up "><a href="#ss"><img src="../home-page/up-arrow.png" alt=""></a> </span>
</div>
<div class="page-final reveal">
        <h3>LABORATOIRE DE RECHERCHE POUR LE DEVELOPPEMENT <br> DES SYSTEMES INFORMATISES</h3>
        <h4>Université Saad Dahlab - Blida 1  |  Faculté des Sciences  </h4>
        <h4>http://www.univ-blida.dz </h4>


        <ul>
        <li><a href="../home-page/index.php">accueil</a></li>
            <li><a href="../presentation/presentation.php">présentation</a></li>
            <li><a href="../equipe/equip.php">equipes</a></li>
            <li><a href="../formation/formation.php">formation</a></li>
            <li ><a  href="../contact/contact1.php">contact</a></li>

        </ul>
        <ul>
            <li><a href="../project1/pub.php">projects</a></li>
            <li><a href="../article1/pub1.php">publication</a></li>
            <li><a href="../membres/members.php">membres</a></li>
            
        </ul>
        <a href="../mention/mention.php"> Copyright ©2020 All rights reserved to LRDSI</a>
        
    </div>
<!-- <div class="page-final">
  <h3>  LABORATOIRE DE RECHERCHE POUR LE DEVELOPPEMENT DES SYSTEMES INFORMATISES</h3>
   <h4> Université Saad Dahlab - Blida 1  |  Faculté des Sciences  </h4>
   <h4> http://www.univ-blida.dz</h4> 
   <a href=""> Copyright ©2020 All rights reserved to LRDSI</a> -->
</div><script src="main.js"></script>
</body>

</html>