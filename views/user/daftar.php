<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/daftar_style.css">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" 
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" 
    crossorigin="anonymous">
    </script>   
    <title>Daftar | SehatSlurr</title>
</head>
<body>
  <nav class = "navbar navbar-expand-lg navbar-dark" style="background-color: #475496">
  <a style="position: relative; left: 45%; font-family: Open Sans; color: white" class="navbar-brand">SehatSlurr Account Register</a>  
  <a style="color: white" class="nav-item ml-auto" href="<?= base_url()?>">Back to Frontpage</a>
  </nav>
    <div class="form">
        <p>Daftar akun baru sekarang!</p>
        <form action="" method="post">
            <input type="text" id="nama" name="nama" placeholder="Nama Lengkap">
            <input type="text" id="email" name="username" placeholder="Username">
            <input type="text" id="alamat" name="alamat" placeholder="Alamat">       
            <input type="password" id="password" name="password" value="" placeholder="Password">
            <input type="password" id="konfirmasi" name="konfirmasi" value="" placeholder="Konfirmasi Password">
            <button type="submit" class="btn btn-default">Daftar</button>
        </form>
    </div>
    <div class="row">
        <div class="col-md-3">
          <a class="btn btn-default" href="" role="button">
            <img width="25px" src="assets/google.svg" />
            Daftar Dengan Google
          </a>
        </div>
    </div>
    <div class="row-2">
        <div class="col-md-3">
          <a class="btn btn-default" href="" role="button">
            <img width="25px" src="assets/facebook.svg" />
            Daftar Dengan Facebook
          </a>
        </div>
    </div>



</body>
</html>