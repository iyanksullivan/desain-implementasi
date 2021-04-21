<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/product_style.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>        
    <title>Document</title>
</head>
<body>

    <nav class = "navbar navbar-expand-lg navbar-dark" style="background-color: #005082">
        <a class = "navbar-brand" href="#">SehatSlurr</a>
              <div class = "navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                      <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Kategori
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                  <li class="dropdown-submenu">
                  <a id="dropdownMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">Baby Care</a>
    
                  <a id="dropdownMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">Oral Care</a>
                </ul>
                      </li>
                      <div class="search-container">
                          <form class="form-inline my-2 my-lg-0">
                                  <input class="form-control ml-sm-5" type="search" placeholder="Search the Store..." aria-label="Search" style="width: 300px">
                                  <div class="butCari">
                          <button type="submit" id="search" class="btn btn-primary btn-sm" style="background-color: #005082; font-family: Arial">Cari</button> 
                      </div>     						
                           </form>
                       </div>
                  </ul>
                  <ul class="navbar-nav ml-auto">
                      <li class="nav-item">
                          <a class="nav-link" href="login.html">Account</a>
                      </li>
                      <li>
                          <a class="nav-link" href="">Wishlist</a>
                      </li>
                      <li>
                          <a class="nav-link" href="">Cart</a>
                      </li>
                  </ul>
              </div>
    </nav>
    <div class="nama-product">
        <h1>Nama Product</h1>
    </div>
    <div class="container-jumlah">
        <form>
            <div class="row">
              <div class="col">
                <span>Jumlah : </span>
                <input type="number" class="form-control" placeholder="jumlah">
              </div>
        </form>
        <h2>Harga Product</h2>
        <h6>per 1 item</h6>
        <button type="submit" class="btn btn-secondary">Masukkan ke Keranjang</button>
    </div>
    <div class="container-barang">
        <div class="container-statistik">
            <div id="carouselctrl" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                <li data-target="#carouselctrl" data-slide-to="0" class="active"></li>
                <li data-target="#carouselctrl" data-slide-to="1"></li>
                <li data-target="#carouselctrl" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(45).jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(47).jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(45).jpg" alt="Third slide">
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
        </div>
    </div>
</body>
</html>