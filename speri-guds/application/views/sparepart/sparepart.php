<!doctype html>
<html lang="en">
  <head>
    <!-- YANG INI YANG DAFTAR SparepartNYA!!!! -->
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
      <a class="navbar-brand text-white" href="#">Welcome Admin! | <b>Speri-guds</b></a>
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
        <h3><i class="fas fa-users mr-2"></i>DAFTAR SPAREPART</h3><hr>
        <div class="pull-right"><a class="btn btn-sm btn-success" data-toggle="modal" data-target="#modal_add_new">Tambah Sparepart</a></div> 
        <br>
        <table class="table table-striped table-bordered">
          <thead>
            <tr>
              <th scope="col">Kode</th>
              <th scope="col">Nama</th>
              <th scope="col">Jenis</th>
              <th scope="col">Manufaktur</th>
              <th scope="col">Jumlah</th>
              <th scope="col">Harga</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>

          <tbody>  
          <?php
      
            // echo count($sparepart);
            ?>
            
            <tr><?php foreach ($sparepart as $spare) :?>
              <th scope="row"><?= $spare['KODE'] ?></th>            
              <td><?= $spare['NAMA'] ?></td>
              <td><?= $spare['JENIS'] ?></td>
              <td><?= $spare['MANUFAKTUR'] ?></td>
              <td><?= $spare['JUMLAH'] ?></td>
              <td><?= $spare['HARGA'] ?></td>
              <td>
                <a href="<?php echo site_url('ControllerSparepart/detail/'.$spare['KODE']);?>"><i class="fas fa-file-alt bg-success text-white p-2 rounded" data-toggle="tooltip" title="Detail"></i></i></a> 
                <a href="<?php echo site_url('ControllerSparepart/update/'.$spare['KODE']);?>"><i class="fas fa-edit bg-success text-white p-2 rounded" data-toggle="tooltip" title="Edit"></i></a>
                <a href="<?php echo site_url('ControllerSparepart/delete/'.$spare['KODE']);?>"><i class="fas fa-trash bg-danger text-white p-2 rounded" data-toggle="tooltip" title="Hapus"></i></i></a>
              </td>
            </tr>                         
            <?php endforeach ?>            
          </tbody>

        <!-- MODAL BUAT ADD Sparepart JGN DI APUS -->
        <div class="modal fade" id="modal_add_new" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel">Tambah Sparepart</h3>
            </div>
            <?php echo form_open_multipart('ControllerSparepart/create'); ?>
                <div class="modal-body">
 
                  <div class="form-group">
                      <label class="control-label col-xs-3" >Kode</label>
                      <div class="col-xs-8">
                          <input name="kode" class="form-control" type="text" placeholder="Kode..." required>
                      </div>
                  </div>  

                  <div class="form-group">
                        <label class="control-label col-xs-3" >Nama Sparepart</label>
                        <div class="col-xs-8">
                            <input name="nama" class="form-control" type="text" placeholder="Nama Sparepart..." required>
                        </div>
                    </div>
 
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Jenis</label>
                        <div class="col-xs-8">
                            <input name="jenis" class="form-control" type="text" placeholder="Jenis Sparepart..." required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Manufaktur</label>
                        <div class="col-xs-8">
                            <input name="manufaktur" class="form-control" type="text" placeholder="Manufaktur Sparepart..." required>
                        </div>
                    </div>
 
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Jumlah</label>
                        <div class="col-xs-8">
                            <input name="jumlah" class="form-control" type="text" placeholder="Jumlah Sparepart..." required>
                        </div>
                    </div>
 
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Harga</label>
                        <div class="col-xs-8">
                            <input name="harga" class="form-control" type="text" placeholder="Harga..." required>
                        </div>
                    </div>

                    <!-- <div class="form-group">
                        <label class="control-label col-xs-3" >Foto Sparepart</label>
                        <div class="col-xs-8">
                            <input name="foto" class="form-control" type="file">
                        </div>
                    </div> -->
 
                </div>
 
                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button class="btn btn-info">Simpan</button>
                </div>
            
            <?php echo form_close();  ?>
            </div>
            </div>
        </div>

        </table>
        <footer class="sticky-footer bg-white mt-5">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Speri-guds 2021</span>
          </div>
        </div>
      </footer>

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