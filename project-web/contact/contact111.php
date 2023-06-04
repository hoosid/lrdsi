<?php 
session_start();
include "../cont-data/contactt.php";
// $username = "root";
// $password = "";
// $bdd = new PDO("mysql:host=localhost; dbname=users1;",$username,$password);
if(!$_SESSION['mdp']){
    header('location :sec.php');
}
include "../cont-data/contactt.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="../espace1/Blida1.png" type="image/x-icon">
    <!-- bootstrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
   
    <link rel="stylesheet" href="contact111.css">
</head>
<body>

  
	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<i class='bx bxs-smile'></i>
			<span class="text">AdminBLIDA</span>
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a href="../contact/contact1.php">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">contact</span>
				</a>
			</li>
			<li>
				<a href="../espace1/admin.php">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">My Store</span>
				</a>
			</li>
			<li>
				<a href="contact111.php">
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
			<form action="#" method="post">
				<div class="form-input">
					<input type="search" placeholder="Search..." name="search">
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
							<a href="#">contact</a>
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
						<h3>Recent Orders</h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<table>
						<thead>
							<tr>
							<th>id</th>
                            <th>user</th>
                            <th>email</th>
                            <th>message</th>
        
							</tr>
						</thead>
						<tbody>
                        <?php 
						if(isset($_POST['search'])){
							$search=$_POST['search'];
							$sql="select * from  `contact` where id='$search' or usrename='$search' or email='$search'";
							$result=mysqli_query($con,$sql);
							if($result){
							if($num=mysqli_num_rows($result)>0){
							
								$row=mysqli_fetch_assoc($result);
								echo '<tbody> 
								<tr>
								  <td>'.$row['id'].'</td>
								  <td>'.$row['usrename'].'</td>
								  <td>'.$row['email'].'</td>
								  <td>'.$row['message'].'</td>
								</tr>
								</tbody>
								
								';
							}else{
								echo "<h2 style=color:red>Data not found</h2>";
							}
						
							}
						}else{
                     $users=$bdd->query('SELECT * FROM  contact');
                 while($use=$users->fetch()){
				 ?>
				 
             <tr>
			 <td><?php echo $use['id'] ?></td>
                <td><?php echo $use['usrename'] ?></td>
                <td><?php echo $use['email'] ?></td>
                <td><?php echo $use['message'] ?></td>
        
				<td>

            <a href="supp.php?usrename=<?=$use['usrename']; ?>"><button class="btn btn-danger">Delete</button></a>

        </td>
             </tr>

<?php
}}
?>
 
						</tbody>
					</table>
				</div>
				
				</div>
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	



    



  
</body>
</html>