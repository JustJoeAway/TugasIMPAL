<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <title></title>
</head>
<body  topmargin="0" leftmargin="0" marginwidth="0" marginheight="0">
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #FFD700">
      <a class="navbar-brand" href="<?php echo site_url('Home');?>"><h3>Bojongsoang University</h3></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Joenavbar" aria-controls="Joenavbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="Joenavbar">
        <ul class="navbar-nav mr-auto"></ul>
        <ul class="navbar-nav navbar-right">
            <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('Home');?>">Beranda</a>
            <li class="nav-item dropdown">
           <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Nilai
           </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="<?php echo site_url('Nilai_C');?>">Lihat Nilai</a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="<?php echo site_url('insertnilai_C');?>">Insert Nilai</a>
            </div>
          </li>
            <li class="nav-item dropdown">
           <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Jadwal
           </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="<?php echo site_url('Jadwal_C');?>">Jadwal Perkuliahan</a>
              
        </div>
      </li>
            <li class="nav-item dropdown">
           <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Registrasi
           </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="<?php echo site_url('Registrasi');?>">Registrasi Mata Kuliah</a>
              <a class="dropdown-item" href="<?php echo site_url('Registrasi/Status');?>">Status Registrasi</a>
        </div>
      </li>
            <li class="nav-item dropdown">
           <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Pembayaran
           </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="<?php echo site_url('Pembayaran');?>">Detail Pembayaran</a>
              <a class="dropdown-item" href="<?php echo site_url('Pembayaran/Tagihan');?>">Tagihan</a>
              <a class="dropdown-item" href="<?php echo site_url('Pembayaran/Konfirmasi');?>">Konfirmasi Pembayaran</a>
              <a class="dropdown-item" href="<?php echo site_url('Pembayaran/Keterlambatan');?>">Keterlambatan Registrasi</a>
        </div>
      </li>
            <li class="nav-item">
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?php echo base_url();?>Asset/propil.png" width="30px" height="30px">
            Profile
            </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="<?php echo site_url('Profile');?>">Lihat Profile</a>
              <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?php echo site_url('Akun_C/logout');?>">Log Out</a>
              </div>
            </li>
          </ul>
      </div>
    </nav>
  </div>
  <div class="container">
    <h2>Jadwal</h2>
        <p>
        <div class="card">
          <div class="col-sm-12">
            <div style="text-align: justify;"><p><h5><strong>Jadwal Perkuliahan</strong></h5>
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Hari</th>
                    <th>Mata Kuliah</th>
                    <th>Ruangan</th>
                    <th>Jam</th> 
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                <?php foreach($query as $item): ?>
                  <tr>
                    <td><?php echo $item->Hari; ?></td>
                    <td><?php echo $item->Nama_M; ?></td>
                    <td><?php echo $item->Ruangan; ?></td>
                    <td><?php echo $item->Waktu; ?></td>
                    <td><button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#edit<?php echo $item->id; ?>"><i class="glyphicon glyphicon-pencil"></i></button></td>
                  </tr>
                <div id="edit<?php echo $item->id; ?>" class="modal fade" role="dialog">
                        <!--                    echo kan php dari foreach di atas dengan objek nim ke dalam id edit-->
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"></button>
                                    <h4 class="modal-title">Edit Data Mahasiswa</h4>
                                </div>
                                <?php echo form_open("Jadwal_C/edit"); ?>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label class="control-label" for="nim">ID</label>
                                        <input type="text" class="form-control" disabled value="<?php echo $item->id;?>" id="id">
                                        <input type="hidden" name="nim" class="form-control" value="<?php echo $item->id;?>" id="id" required>

                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="Indeks">Indeks</label>
                                        <input type="text" name="Indeks" class="form-control" value="<?php echo $item->Indeks;?>" id="Indeks" required>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" data-dismiss="modal" class="btn btn-danger">Close</button>
                                    <input type="submit" class="btn btn-primary" name="edit" value="Edit">
                                </div>
                                <?php echo form_close(); ?>
                            </div>
                        </div>
                    </div>
                  <?php endforeach; ?>
                </tbody>  
              </table><br><br>
            </div>
          </div> 
        </div><br>
      </div><br><br>
      </div>
    </div>
  </div>
</body>
</html>