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
    <link rel="stylesheet" type="text/css" href="css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css/admin.css">

    <title>Halaman Admin</title>
  </head>
  <body>
      <nav class="navbar navbar-expand-lg navbar-light bg-primary fixed-top">
      <a class="navbar-brand text-white" href="#">Welcome Admin! | <b>Speri-Guds</b></a>
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
            <a href=""><i class="fas fa-sign-out-alt bg-primary mr-3 text-white" data-toggle="tooltip" title="Sign Out"></i></a>
          </h5>
        </div>
      </div>
    </nav>
    <div class="row no-gutters mt-5">
      <div class="col-xl-2 bg-dark mt-2 pr-3 pt-4 pr-5">
          <ul class="nav flex-column ml-3 mb-5">
              <li class="nav-item">
                <a class="nav-link active text-white" href="dashboard.php"><i class="fas fa-tachometer-alt mr-2"></i>Dashboard</a><hr class="bg-secondary">
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="user.php"><i class="fas fa-users mr-2"></i>Daftar User</a><hr class="bg-secondary">
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="sparepart.php"><i class="fas fa-tools mr-2"></i>Daftar Sparepart</a><hr class="bg-secondary">
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="#"><i class="fas fa-cog mr-2"></i>Pengaturan</a><hr class="bg-secondary">
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="editprofile.php"><i class="fas fa-user-cog mr-2"></i>Edit Profile</a><hr class="bg-secondary">
              </li>
            </ul>
      </div>
      <div class="col-xl-10 p-5 pt-2">
        <h3><i class="fas fa-users mr-2"></i>DAFTAR SPAREPART</h3><hr>

        <a href="insertSparepart.php" class="btn btn-primary mb-2 "><i class="fas fa-plus mr-2"></i>TAMBAH DATA SPAREPART</a>
        <table class="table table-striped table-bordered">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama</th>
              <th scope="col">Jenis</th>
              <th scope="col">Harga</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Tupai Kidal</td>
              <td>Tapigakidal</td>
              <td>Asgard</td>
              <td><a href="" class="btn btn-primary">Detail</a> 
                <a href="editSparepart.php"><i class="fas fa-edit bg-success text-white p-2 rounded" data-toggle="tooltip" title="Edit"></i></a>
                <a href="#modalDelete" data-toggle="modal" onclick=""><i class="fas fa-trash bg-danger text-white p-2 rounded" data-toggle="tooltip" title="Hapus"></i></i></a>
              </td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>@fat</td>
              <td><a href="" class="btn btn-primary">Detail</a> 
                <a href="editSparepart.php"><i class="fas fa-edit bg-success text-white p-2 rounded" data-toggle="tooltip" title="Edit"></i></a>
                <a href="#modalDelete" data-toggle="modal" onclick=""><i class="fas fa-trash bg-danger text-white p-2 rounded" data-toggle="tooltip" title="Hapus"></i></i></a>
              </td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Larry</td>
              <td>the Bird</td>
              <td>@twitter</td>
              <td><a href="" class="btn btn-primary">Detail</a> 
                <a href="editSparepart.php"><i class="fas fa-edit bg-success text-white p-2 rounded" data-toggle="tooltip" title="Edit"></i></a>
                <a href="#modalDelete" data-toggle="modal" onclick=""><i class="fas fa-trash bg-danger text-white p-2 rounded" data-toggle="tooltip" title="Hapus"></i></i></a>
              </td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>@fat</td>
              <td><a href="" class="btn btn-primary">Detail</a> 
                <a href="editSparepart.php"><i class="fas fa-edit bg-success text-white p-2 rounded" data-toggle="tooltip" title="Edit"></i></a>
                <a href="#modalDelete" data-toggle="modal" onclick=""><i class="fas fa-trash bg-danger text-white p-2 rounded" data-toggle="tooltip" title="Hapus"></i></i></a>
              </td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Larry</td>
              <td>the Bird</td>
              <td>@twitter</td>
              <td><a href="" class="btn btn-primary">Detail</a> 
                <a href="editSparepart.php"><i class="fas fa-edit bg-success text-white p-2 rounded" data-toggle="tooltip" title="Edit"></i></a>
                <a href="#modalDelete" data-toggle="modal" onclick=""><i class="fas fa-trash bg-danger text-white p-2 rounded" data-toggle="tooltip" title="Hapus"></i></i></a>
              </td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>@fat</td>
              <td><a href="" class="btn btn-primary">Detail</a> 
                <a href="editSparepart.php"><i class="fas fa-edit bg-success text-white p-2 rounded" data-toggle="tooltip" title="Edit"></i></a>
                <a href="#modalDelete" data-toggle="modal" onclick=""><i class="fas fa-trash bg-danger text-white p-2 rounded" data-toggle="tooltip" title="Hapus"></i></i></a>
              </td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Larry</td>
              <td>the Bird</td>
              <td>@twitter</td>
              <td><a href="" class="btn btn-primary">Detail</a> 
                <a href="editSparepart.php"><i class="fas fa-edit bg-success text-white p-2 rounded" data-toggle="tooltip" title="Edit"></i></a>
                <a href="#modalDelete" data-toggle="modal" onclick=""><i class="fas fa-trash bg-danger text-white p-2 rounded" data-toggle="tooltip" title="Hapus"></i></i></a>
              </td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>@fat</td>
              <td><a href="" class="btn btn-primary">Detail</a> 
                <a href="editSparepart.php"><i class="fas fa-edit bg-success text-white p-2 rounded" data-toggle="tooltip" title="Edit"></i></a>
                <a href="#modalDelete" data-toggle="modal" onclick=""><i class="fas fa-trash bg-danger text-white p-2 rounded" data-toggle="tooltip" title="Hapus"></i></i></a>
              </td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Larry</td>
              <td>the Bird</td>
              <td>@twitter</td>
              <td><a href="" class="btn btn-primary">Detail</a> 
                <a href="editSparepart.php"><i class="fas fa-edit bg-success text-white p-2 rounded" data-toggle="tooltip" title="Edit"></i></a>
                <a href="#modalDelete" data-toggle="modal" onclick=""><i class="fas fa-trash bg-danger text-white p-2 rounded" data-toggle="tooltip" title="Hapus"></i></i></a>
              </td>
            </tr>
          </tbody>
        </table>
        <footer class="sticky-footer bg-white mt-5">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Speri-Guds 2019</span>
          </div>
        </div>
      </footer>

        </div>
      </div>
    </div>

    <div class="modal fade" id="modalDelete">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Yakin akan menghapus data ini?</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-footer">
            <form>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
              <button type="submit" class="btn btn-primary">Hapus</button>
            </form>
              
          </div>
        </div>
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