<!DOCTYPE html>
<html>

<head>
	<title>Cart</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
		integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="<?= base_url(); ?>/assets/css/cartstyle.css">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
		integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
		integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
	</script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
		integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
	</script>
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #005082">
		<a class="navbar-brand" href="<?= base_url()?>">SehatSlurr</a>
		<div class="navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
						data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Kategori
					</a>
					<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
						<li class="dropdown-submenu">
							<a id="dropdownMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
								aria-expanded="false" class="dropdown-item">Baby Care</a>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
								<li class="nav-item"><a href="#">Bayi</a></li>
							</ul>

							<a id="dropdownMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
								aria-expanded="false" class="dropdown-item">Oral Care</a>

							<a id="dropdownMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
								aria-expanded="false" class="dropdown-item">Diet</a>

							<a id="dropdownMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
								aria-expanded="false" class="dropdown-item">Hair Care</a>
						</li>
					</ul>
				</li>
				<div class="search-container">
					<form class="form-inline my-2 my-lg-0">
						<input class="form-control ml-sm-5" type="search" placeholder="Search the Store..."
							aria-label="Search" style="width: 300px">
						<div class="butCari">
							<button type="submit" id="search" class="btn btn-primary btn-sm"
								style="background-color: #005082; font-family: Arial">Cari</button>
						</div>
					</form>
				</div>
			</ul>
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="nav-link" href="#" ><img
							src="assets/account_circle-24px.svg"> Account</a>
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

	<div class="JudulKart">
		<h2>Keranjang Belanja</h2>
	</div>

	<div class="container-fluid" id="kart-barang">
		<div class="row">
			<div class="col-lg-4" id="kotak-foto">

			</div>
			<div class="product-kart">
				<h4><b>Nama Barang</b></h4>
				<div><b>Keterangan</b></div>
				<div class="info-kart">Jumlah</div>
				<input type="text" name="jumlah" placeholder="jumlah..." id="field">
				<div class="info-kart">Catatan untuk penjual: </div>
				<textarea class="form-control rounded-0" rows="4"></textarea>
			</div>
			<div class="kotak-transaksi">
				<div class="kotak-biaya">
					<h6><b>Transaksi</b></h6>
				</div>
				<div class="total-buy">
					<div class="row-duit">
						<p id="total-harga"><b>total pembelian</b></p>
						<p>jumlah*barang</p>
						<p id="total-harga"><b>Total Pembayaran</b></p>
						<b>total bayar</b>
					</div>
				</div>
			</div>
			<button type="submit" class="btn btn-secondary btn-lg" id="fix-beli"><b>Beli Sekarang</b></button>

</body>

</html>