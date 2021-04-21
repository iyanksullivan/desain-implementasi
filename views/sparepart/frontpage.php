<?php 
	include 'dbh.php';
 ?>

<!DOCTYPE html>
<html>

<style>
	.tabel-kotak{
		border : none;
 	 	width: 600px;
  		border-collapse: collapse;
  		margin-left:auto;
  		margin-right: auto;
  			 
  		color: black; 
  		font-family:sans-serif; 
  		font-size:15px;
	}
	td{
		background-color: #e9e9e9;
		padding: 10px;
	}
	th {
  		padding: 10px;
  		background: #869AFF;
	}
</style>

<head>

	<title>SehatSlurr official Webpage</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
		integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="<?= base_url(); ?>/assets/css/stylefp.css">
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
		integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
	</script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
		integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
	</script>
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #475496">
		<a class="navbar-brand" href="<?= base_url()?>">SehatSlurr</a>
		<div class="navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
						aria-haspopup="true" aria-expanded="false">Kategori
					</a>
					<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
						<li class="dropdown-submenu">
							<a id="dropdownMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
								aria-expanded="false" class="dropdown-item">Paracetamol</a>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
								<li class="nav-item"><a href="#">Bayi</a></li>
							</ul>

							<a id="dropdownMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
								aria-expanded="false" class="dropdown-item">Antibiotik</a>

							<a id="dropdownMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
								aria-expanded="false" class="dropdown-item">Obat Pencernaan</a>

							<a id="dropdownMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
								aria-expanded="false" class="dropdown-item">Vitamin</a>
						</li>
					</ul>
				</li>
				<div class="search-container">
					<form class="form-inline my-2 my-lg-0">
						<input class="form-control ml-sm-5" type="search" placeholder="Search the Store..." aria-label="Search"
							style="width: 300px">
						<div class="butCari">
							<button type="submit" id="search" class="btn btn-primary btn-sm"
								style="background-color: #475496; font-family: Arial">Cari</button>
						</div>
					</form>
				</div>
			</ul>
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="nav-link" href="<?=site_url('ControllerUser/detailUser')?>"><img src="assets/account_circle-24px.svg">
						Account</a>
				</li>
				<li>
					<a class="nav-link" href=""><img src="assets/favorite-24px.svg">Wishlist</a>
				</li>
				<li>
					<a class="nav-link" href="<?=site_url('ControllerObat/keranjang')?>"><img
							src="assets/shopping_cart-24px.svg">Cart</a>
				</li>
			</ul>
		</div>
	</nav>

	<div class="carousel slide" data-ride="carousel" id="carouselctrl">
		<h1 style="text-align: center; font-family: Spencer">Our Products</h1>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="assets/images/parasetamol.jpg" id="carpic" alt="first slide">
				<h3 style="text-align: center; font-family: Spencer">Paracetamol</h3>
			</div>
			<div class="carousel-item">
				<img src="assets/images/anti.jpg" id="carpic" alt="second slide">
				<h3 style="text-align: center; font-family: Spencer">Antibiotik</h3>
			</div>
			<div class="carousel-item">
				<img src="assets/images/pencernaan.jpg" id="carpic" alt="second slide">
				<h3 style="text-align: center; font-family: Spencer">Obat Pencernaan</h3>
			</div>
			<div class="carousel-item">
				<img src="assets/images/vitamin.jpg" id="carpic" alt="second slide">
				<h3 style="text-align: center; font-family: Spencer">Vitamin</h3>
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselctrl" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselctrl" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div> 
	<div id="Midkonten">
		<table class="tabel-kotak">
		<?php
			$sql = "SELECT * FROM obat LIMIT 5";
			$result = mysqli_query($conn, $sql);
			if (mysqli_num_rows($result) > 0) {
				echo "<tr><th>Nama</th><th>Jenis</th><th>Harga</th><th>Foto</th></tr>";
				while ($row = mysqli_fetch_assoc($result)) {
					echo "<tr>
					<td>".$row["nama"]."</td>
					<td>".$row["jenis"]."</td>
					<td>".$row["harga"]."</td>
					<td>";echo "<img width='100' height='65' src=".base_url()."assets/fotoobat/".$row["foto"]."></td>
					</tr>";
				}
			}else{
				echo "Tidak ada Obat";
			}
		?>
		</table>
	</div>
	<button class="show-obat">Show More Obat</button>
	</body> 
	<script>
		$(document).ready(function(){
			var obatCount = 5;
			$("button").click(function(){
				obatCount = obatCount + 5;
				$("#Midkonten").load("load-more.php", {
					obatNewCount: obatCount
				});
			});
		});
	</script>
	</html>