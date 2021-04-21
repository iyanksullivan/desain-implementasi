<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/login_style.css">
    <title>Login | SehatSlurr</title>
</head>
<body>
	<nav class = "navbar navbar-expand-lg navbar-dark" style="background-color: #475496">
     <a style="position: relative; left: 45%; font-family: Open Sans; color: white" class="navbar-brand">SehatSlurr Account Login</a>
     <a style="position: relative; color: white;" class="navbar-item ml-auto" href="<?= base_url()?>">Back to Frontpage</a>   
    </nav>
    <h2 style="text-align: center; font-family: Spencer; margin-top: 20px">Account Login</h2>
        <form class="login" action="" method="post">
            <div class="form-group">
              <label for="exampleInputEmail1">Username</label>
              <input type="text" class="form-control" name="username" placeholder="Masukkan Username">
              <small class="form-text text-danger"><?= form_error('username') ?>.</small>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" name="password" placeholder="Masukkan Password">
              <small class="form-text text-danger"><?= form_error('password') ?>.</small>
            </div>

            <button type="submit" name="login" class="btn btn-secondary">Masuk</button>

            <div class="text-center p-t-45 p-b-4" style="margin-top: 40px">
                <span class="txt1">
                    Lupa
                </span>

                <a href="#" class="txt2 hov1">
                    Password?
                </a>
            </div>

            <div class="text-center">
                <span class="txt1">
                    Belum punya akun?
                </span>

                <a href="<?= base_url('ControllerUser/register'); ?>" class="txt2 hov1">
                    Daftar sekarang!
                </a>
            </div>
        </form>
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>        


</body>
</html>