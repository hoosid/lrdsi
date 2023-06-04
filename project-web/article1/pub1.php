<?php 
include "../cont-data/contactt.php";
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../espace1/Blida1.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="pub1.css">
   
    <title>Document</title>
   <style>
    .select-box{
    margin: 20px;
    position :relative;
    width: 450px;
    height: 90px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    border-radius: 20px;
    box-shadow: 0px 0px 10px 0px rgba(0, 0, 0,28%) ;
    padding: 20px;
    gap:10px;
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
.ss li{
list-style: none;
}
   </style>
</head>
<body>
    <header id="ss">
        <img src="1680966344837.jpg" alt="">
             <ul>
                 <li><a href="../home-page/index.php">Accuil</a></li>
                 <li><a href="../formation/formation.php">Formation</a></li>
                 <li><a href="../presentation/presentation.php">presentation</a></li>
                 
                 <li class="soso"><a href="#">Recherche</a>
                     <ul class="sous-menu">
                 <li><a href="../equipe/equipe.php" >Equipes</a></li>
                 <li><a href="../project1/pub.php" >Projets</a></li>          
                 <li><a href="../article1/pub1.php" >Publications</a></li>  
                 <li><a href="../membres/members.php">Membres</a></li>
                   </ul>
                 </li>
                 <li><a href="../contact/contact1.php" target="_blank">Contact </a></li>
             </ul>
             
        
 
     </header>
     <div class="zwa9">
        <div class="p1"> <h1>Puplication</h1>
    <p>Bienvenue, commençons</p></div>
        <div class="p2"><img src="../article1/iStock-179243711.jpg" alt=""></div>
    </div>
     <form action="" method="post">
    <div class="select-box">
<label for="utilise">puplication</label>
<input type="search" name="search" id="x7" placeholder="search ...">
        </div>
   </form>

   
    <div class="container">
        <!-- hadi li tstokiha f bas de doni //////////////////////////////////////////////////////////////////////////////////////////////////// -->

        
        <?php 
if (isset($_POST['search'])) {
    $search = $_POST['search'];
    if ($search == "all") {
        $query = "SELECT * FROM article";
        $r = mysqli_query($con, $query);
        
        if (mysqli_num_rows($r) > 0) {
            while ($row = mysqli_fetch_assoc($r)) {
?>
                <div class="item-container">
                    <div class="img-container">
                        <!-- mana -->
                    <?php echo '<img src="data:image;base64,' . $row['image'] . '">'; ?>
                    </div>
                    <div class="body-container">
                        <div class="overlay"></div>
                        <div class="event-info">
                            <p class="title"><?php echo $row['description']; ?> </p>
                            <div class="separator"></div>
                            <p class="info"><span><?php echo $row['titre']; ?></span></p>
                            <div class="additional-info">
                                <p class="info">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <span>journal:</span><?php echo $row['journal']; ?>
                                </p>
                                <p class="info">
                                    <i class="far fa-calendar-alt"></i>
                                    <span>Date:</span><?php echo $row['date']; ?>
                                </p>
                                <p class="info description">
                                    <span>Auteurs:</span><?php echo $row['autheur']; ?>
                                    <!-- <span>more...</span> -->
                                </p>
                            </div>
                        </div>
                        <button class="action">Accéder</button>
                    </div>
                </div>
<?php 
            }
        } else {
            echo "Aucun enregistrement trouvé.";
        }
    } else {
        if ($search) {
            $query = "SELECT * FROM article WHERE journal='$search' or titre='$search' or autheur='$search' or date='$search' or description='$search'";
            $r = mysqli_query($con, $query);
            
            if (mysqli_num_rows($r) > 0) {
                while ($row = mysqli_fetch_assoc($r)) {
?>
                    <div class="item-container">
                        <div class="img-container">
                        <?php echo '<img src="data:image;base64,' . $row['image'] . '">'; ?>
                        </div>
                        <div class="body-container">
                            <div class="overlay"></div>
                            <div class="event-info">
                                <p class="title"><?php echo $row['description']; ?> </p>
                                <div class="separator"></div>
                                <p class="info"><span><?php echo $row['titre']; ?></span></p>
                                <div class="additional-info">
                                    <p class="info">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <span>journal:</span><?php echo $row['journal']; ?>
                                    </p>
                                    <p class="info">
                                        <i class="far fa-calendar-alt"></i>
                                        <span>Date:</span><?php echo $row['date']; ?>
                                    </p>
                                    <p class="info description">
                                        <span>Auteurs:</span><?php echo $row['autheur']; ?>
                                        <!-- <span>more...</span> -->
                                    </p>
                                </div>
                            </div>
                            <button class="action">Accéder</button>
                        </div>
                    </div>
<?php
                }
            } else {
                echo "Aucun enregistrement trouvé.";
            }
        } 
    }
} else {
    
    $query = "SELECT * FROM article";
    $r = mysqli_query($con, $query);
    
    if (mysqli_num_rows($r) > 0) {
        while ($row = mysqli_fetch_assoc($r)) {

?>
  <div class="item-container">
                    <div class="img-container">
                    <?php echo '<img src="data:image;base64,' . $row['image'] . '">'; ?>
                    </div>
                    <div class="body-container">
                        <div class="overlay"></div>
                        <div class="event-info">
                            <p class="title"><?php echo $row['description']; ?> </p>
                            <div class="separator"></div>
                            <p class="info"><span><?php echo $row['titre']; ?></span></p>
                            <div class="additional-info">
                                <p class="info">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <span>journal:</span><?php echo $row['journal']; ?>
                                </p>
                                <p class="info">
                                    <i class="far fa-calendar-alt"></i>
                                    <span>Date:</span><?php echo $row['date']; ?>
                                </p>
                                <p class="info description">
                                    <span>Auteurs:</span><?php echo $row['autheur']; ?>
                                    <!-- <span>more...</span> -->
                                </p>
                            </div>
                        </div>
                        <button class="action">Accéder</button>
                    </div>
                </div>

                <?php 
        }}}
                ?>
    </div>
   

    <div class="page-final reveal">
        <h3>LABORATOIRE DE RECHERCHE POUR LE DEVELOPPEMENT <br> DES SYSTEMES INFORMATISES</h3>
        <h4>Université Saad Dahlab - Blida 1  |  Faculté des Sciences  </h4>
        <h4>http://www.univ-blida.dz </h4>


        <ul class="ss">
        <li><a href="../home-page/index.php">accueil</a></li>
            <li><a href="../presentation/presentation.php">présentation</a></li>
            <li><a href="../equipe/equip.php">equipes</a></li>
            <li><a href="../formation/formation.php">formation</a></li>
            <li ><a  href="../contact/contact1.php">contact</a></li>

        </ul>
        <ul class="ss">
        <li><a href="../project1/pub.php">projects</a></li>
            <li><a href="../article1/pub1.php">publication</a></li>
            <li><a href="../membres/members.php">membres</a></li>
            
        </ul>
        <a href="../mention/mention.php"> Copyright ©2020 All rights reserved to LRDSI</a>
        
    </div>




          <style>
            *{
                scroll-behavior: smooth;
            }
    .zwa9{
    height: 300px;
    display: flex;
    width: 100%;

}
.p1{
    width: 75%;
    height: 100%;
    background-color: #18537a;
    border-right: 6px #ffff00b4  solid;
    padding:30px ;
}
.p1 h1{
    font-size: 40px;
    color: white;
    margin-left: -600px;

}
.p1 p{
    color: white;
    font-size: 20px;
    margin: 20px;
}

.p2{

    height: 100%;
   
}
.p2 img{
    height: 100%;
}
#x7{
    width: 500px;
    height: 50px;
    padding: 20px;
    font-size: 20px;
    border-radius: 10px;
}
/*botton scroll css*/
.up{
    height: 40px;
    width: 40px;
    position: fixed;
    bottom: 10px;
    right: -40px;
    background-color: blue;
    border-radius: 40px;
    transition: 0.2s;
    cursor: pointer;
}

.up a img{
    height: 40px;
    width: 40px; 
}
.up.show{
    right: 10px;
}

</style>
<div>
    <span class="up "><a href="#ss"><img src="../home-page/up-arrow.png" alt=""></a> </span>
</div>
<script >/* pour scroll fluide */
let span = document.querySelector(".up");
window.addEventListener('scroll', function() {
  // console.log(window.scrollY);
  if (window.scrollY >= 900) {
    console.log(this.screenY);
    span.classList.add("show");
  } else {
    span.classList.remove("show");
  }
});
</script>
</body>
</html>