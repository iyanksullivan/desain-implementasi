<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/update_style.css">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" 
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" 
    crossorigin="anonymous">
    </script>   
    <title>Update Akun SehatSlurr</title>
</head>
<body>
  <nav class = "navbar navbar-expand-lg navbar-dark" style="background-color: #475496">
  <a style="position: relative; left: 45%; color: white" class="navbar-brand">SehatSlurr Account Update</a>  
  <a style="color: white" class="nav-item ml-auto" href="<?= base_url()?>">Back to Frontpage</a>
  </nav>  
    <div class="form">
        <p>Update Data Akun</p>        
        <form action="" method="post">
            <input type="text" id="nama" name="nama" placeholder="Nama Lengkap" value="<?php echo $user['nama'] ?>"> 
            <input type="text" id="alamat" name="alamat" placeholder="alamat"  value="<?php echo $user['alamat'] ?>">
            <input type="text" id="username" name="username" placeholder="Username"  value="<?php echo $user['username'] ?>" readonly>
            <input type="password" id="password" name="password" placeholder="Password"  value="<?php echo $user['password'] ?>">
            <input type="password" id="konfirmasi" name="re-password" placeholder="Konfirmasi Password">
            <button type="submit" class="btn btn-default">Update</button>
        </form>
    </div>

</body>
</html>