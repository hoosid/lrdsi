<?php 
session_start();
include "../cont-data/contactt.php";
// $username = "root";
// $password = "";
// $bdd = new PDO("mysql:host=localhost; dbname=users1;",$username,$password);
if(!$_SESSION['mdp']){
    header('location :sec.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="icon" href="../espace1/Blida1.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link rel="stylesheet" href="admin.css">
   

  
	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<i class='bx bxs-smile'></i>
			<span class="text">AdminBLIDA</span>
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a href="../login-admin/login.php">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">admin</span>
				</a>
			</li>
			<li>
				<a href="admin.php">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">My Store</span>
				</a>
			</li>
			<li>
				<a href="../contact/contact111.php">
					<i class='bx bxs-doughnut-chart' ></i>
					<span class="text">contact</span>
				</a>
			</li>
			<li>
			<a href="../article1/ajoute-article.php">
					<i class='bx bxs-message-dots' ></i>
					<span class="text">article</span>
				</a>
			</li>
			<li>
				<a href="../membres/ajoute-membres.php">
					<i class='bx bxs-group' ></i>
					<span class="text">membres</span>
				</a>
			</li>
			<li>
				<a href="../project1/ajoute-project.php">
					<i class='bx bxs-group' ></i>
					<span class="text">project</span>
				</a>
			</li>
			<li><a href="../anonce/anonce.php">
					<i class='bx bxs-message-dots' ></i>
					<span class="text">anonce</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			
			<li>
				<a href="https://www.google.com/" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<a href="#" class="nav-link">Categories</a>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			
			<a href="#" class="profile">
			<img src="../espace1/Blida1.png">
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>LRDSI</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">admin</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="../home-page/index.php">Home</a>
						</li>
					</ul>
				</div>
				
			</div>
				</li>
				
			</ul>


			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Admin</h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<div>

					<h3>Bienvenue<h3>
						<P>----------</p>
						
					<h4> dans un espace dédié à administrateur Veuillez faire attention à remplir les informations privées car elles seront publiées sur le site d'origine. De plus, toute erreur peut être commise. Il existe des boutons qui vous aident à supprimer le défaut spécifique. Vous avez deux choses, soit mettre à jour les informations, soit rajouter des informations après la suppression. J'espère que j'aurai bénéficié de cette petite préface. Je vous souhaite bonne chance pour remplir les informations. Toute demande ou défaut au niveau du site,
					 vous pouvez nous contacter via un e-mail spécifique au site.  Merci.</h4>
					
					</div>
				</div>
				
				</div>
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="script.js"></script>

    



  <a href="mombre.php">afficher tout les membre</a><br>
   <a href="publier-article.php">Publier un nouvelle article</a><br>
   <a href="article.php">afficher tout les article</a><br>

  
</body>
</html>