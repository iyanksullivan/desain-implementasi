<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="<?= base_url(); ?>/assets/css/dataakun.css">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" 
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" 
    crossorigin="anonymous">
    </script>
	<title>View data akun user</title>
</head>
<body>
	<nav class = "navbar navbar-expand-lg navbar-dark" style="background-color: #475496">
  	<a style="position: relative; left: 45%; color: white" class="navbar-brand">Sehatslurr User Account</a>  
  	</nav>

  	<div class="akun-container">	  
  		<p>Data Akun User</p>
  		
  		<div class="fullname"><?php echo $user['nama']; ?></div>
  		<div class="uname"><?php echo $user['username']; ?></div>
  		<div class="address"><?php echo $user['alamat'] ?></div>
  		<div class="pass"><?php echo $user['password'] ?></div>

  		<div class="row-but">
  				<a class="btn btn-default" href="<?= base_url() ?>" role="button" id="return-but">
            	
            	Return to Frontpage
          		</a>      
				  <a class="btn btn-default" href="<?php echo site_url('ControllerUser/logout/');?>" role="button" id="return-but">
            	
            	Logout
          		</a>                 		
  		</div>
  		<div class="row-but">
          		<a class="btn btn-default" href="<?php echo site_url('ControllerUser/update');?>" role="button" id="return-but">
            	
            	Edit account
          		</a>
  		
          		<a class="btn btn-default" href="<?php echo site_url('ControllerUser/delete/'.$user['username']);?>" role="button" id="return-but">
            	
            	Delete account
          		</a>
  		</div>
  	</div>
</body>
</html>