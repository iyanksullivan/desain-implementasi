<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Place your kit's code here -->
    <script src="https://kit.fontawesome.com/7cbc74049d.js" crossorigin="anonymous"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/admin.css">

    <title>Halaman Admin</title>
  </head>
  <body>
      <nav class="navbar navbar-expand-lg navbar-light bg-primary fixed-top">
      <a class="navbar-brand text-white" href="#">Welcome Admin! | <b>SehatSlurrr</b></a>
        <form class="form-inline my-2 my-lg-0 ml-auto">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Temukan..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>
        <div class="icon ml-4">
          <h5>
            <i class="fas fa-envelope mr-3" data-toggle="tooltip" title="Inbox"></i>
            <i class="fas fa-bell mr-3" data-toggle="tooltip" title="Notification"></i>
            <a href="<?=site_url('ControllerAdm/logout')?>"><i class="fas fa-sign-out-alt bg-primary mr-3 text-white" data-toggle="tooltip" title="Sign Out"></i></a>
          </h5>
        </div>
      </div>
    </nav>
    <div class="row no-gutters mt-5">
      <div class="col-xl-2 bg-dark mt-2 pr-3 pt-4">
          <ul class="nav flex-column ml-3 mb-5">
              <li class="nav-item">
                <a class="nav-link active text-white" href="<?=site_url('ControllerAdm/index')?>"><i class="fas fa-tachometer-alt mr-2"></i>Dashboard</a><hr class="bg-secondary">
              </li>
              <!-- <li class="nav-item">
                <a class="nav-link text-white" href="<?=site_url('ControllerUser/daftarUser')?>"><i class="fas fa-users mr-2"></i>Daftar User</a><hr class="bg-secondary">
              </li> -->
              <li class="nav-item">
                <a class="nav-link text-white" href="<?=site_url('ControllerSparepart/daftarSparepartAdmin')?>"><i class="fas fa-pills mr-2"></i>Daftar Sparepart</a><hr class="bg-secondary">
              </li> 
              <li class="nav-item">
                <a class="nav-link text-white" href="#"><i class="fas fa-cog mr-2"></i>Pengaturan</a><hr class="bg-secondary">
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="<?=site_url('ControllerAdm/update')?>"><i class="fas fa-user-cog mr-2"></i>Edit Profile</a><hr class="bg-secondary">
              </li>
            </ul>
      </div>
      <div class="col-xl-10 p-5 pt-2">
        <h3><i class="fas fa-tachometer-alt mr-2"></i> DASHBOARD</h3><hr>

        <div class="row text-white mb-3">
          <div class="card bg-info ml-5" style="width: 18rem;">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-users mr-2"></i>
              </div>
              <h5 class="card-title">Jumlah User</h5>
              <div class="display-4">100</div>
              <a href="user.php"><p class="card-text text-white">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></p></a>
            </div>
          </div>

          <div class="card bg-success ml-5" style="width: 18rem;">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-pills mr-2"></i>
              </div>
              <h5 class="card-title">Jumlah Obat</h5>
              <div class="display-4">1524</div>
              <a href="obat.php"><p class="card-text text-white">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></p></a>
            </div>
          </div>

          <!-- <div class="card bg-warning ml-5" style="width: 18rem;">
            <div class="card-body">

              <h5 class="card-title">Nama Admin</h5>
              <p class="card-text">Penjelasan singkat tentang si admin ini. Terserah lah mau di isi apa yang penting ke isi</p>
              <a href=""><p class="card-text text-white">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></p></a>
            </div>
          </div> -->

        </div>
        <h3><i class="fas fa-user mt-5 mr-2"></i>Profil Admin</h3><hr>

        <div class="card mb-3" style="max-width: 540px;">
          <div class="row no-gutters">
            <!-- <div class="col-md-4">
              <img src="<?php echo base_url(); ?>assets/fotoadmin/<?php echo $admin['foto'] ?>" class="card-img" alt="...">
            </div> -->
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title"><?php echo $admin['nik'] ?></h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
          </div>
        </div>
          <footer class="sticky-footer bg-white mt-5">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright &copy; SehatSlurr 2019</span>
            </div>
          </div>
        </footer>
      </div>
    </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script type="text/javascript" src="js/admin.js"></script>
  </body>
</html>