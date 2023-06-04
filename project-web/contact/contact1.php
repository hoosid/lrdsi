<?php 

include "../cont-data/contactt.php" ;

if(isset($_POST['submit'])){
$username=$_POST['username'];       
$email=$_POST['email'];
$text=$_POST['text'];
$sql="INSERT INTO `contact`(`usrename`, `email`, `message`) 
VALUES ('$username','$email','$text')";
$res=mysqli_query($con,$sql);

}

?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../espace1/Blida1.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="yas">
<h1><span>N</span>o<span>u</span>s <span>c</span>o<span>n</span>t<span>a</span>c<span>t</span>e<span>r</span> </h1></div>
<div class="parti1"> 
  <div class="parti11" >
  <img src="ss1.png" alt="">
  <h3>téléphone </h3>
<a href="tel:+213(0)25272436" target="_blank">+213(0)25272436</a> 
</div>
  <div class="parti111" >
  <img src="ss2.png" alt="">
  <h3>adresse </h3>
 <a href="https://goo.gl/maps/9uHXZauo9wDU7uHp9"  target="_blank">BP270,Route de Soumaa 09100-Blida-Algérie</a></div>
  <div class="parti1111" >
  <img src="ss3.png" alt="">
  <h3>Mail </h3>
<a href="emailto:lrdsi@univ-blida.dz"  target="_blank">lrdsi@univ-blida.dz</a></div>
  <div class="parti11111">
    <img src="ss4.png" alt="">
    <h3>
      Fix 
    </h3>
<a href="tel:02355441975"  target="_blank">02355441975</a>
  </div>
</div>

<div class="maps">
  <div class="ma">

<h4 style="font-size: 25px;"> Nous sommes içi </h4>
<p>lun-ven8.30Am-SPM/ téléphone est déverrouillé 24/7</p>
<br>

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1320.9609210171618!2d2.8687072157831963!3d36.502379141706015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x128f0d465a043efb%3A0x3bbb980acd4f3e7c!2sIT%20Club!5e0!3m2!1sen!2sdz!4v1680856782809!5m2!1sen!2sdz" width="400" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
 </div><div class="input">
  <br>
<h4 style="font-size: 25px;"> Obtenez une évaluation de cas gratuit dés aujourd'hui!</h4>
<p>Disponible 24h/24!</p>

 
  

   
    <form action="contact1.php" method="post">
      <input type="text" name ="username" size="53" maxlength="265" placeholder="  votre nom" /> <br>      
          
          <input type="email"  name ="email" size="53"  maxlength="256"  placeholder="  votre mail"/>
       <br>
          <textarea name="text" cols="50" rows="5" placeholder="entrez votre message">
            
        </textarea>  <br>
        <button class="bt" name="submit"> Envoyer </button> 
    </form>
      </div>
</div>

<style>
    .bt{
    border: 1.5px solid rgb(21, 21, 21) ;
    /* background: linear-gradient(90deg ,hsl(206, 45%, 44%) ,#ffffff ); */
    background:rgb(39, 56, 209);;
    color: rgb(10, 10, 10);
    border-radius: 25px 25px 30px 30px;
    cursor: pointer;
    font-weight:bolder;
    padding: 0.6rem 0.7rem ;
    margin-left: 30px;
    
   }
</style>
</body>
</html>