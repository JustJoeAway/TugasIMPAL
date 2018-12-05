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
  <div class="wrapper">
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #FFD700">
      <a class="navbar-brand" href="#"><h1>Bojongsoang University</h1></a>
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
              <a class="dropdown-item" href="<?php echo site_url('insertnilai_C');?>">Insert Nilai</a>
            </div>
          </li>
            <li class="nav-item dropdown">
           <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Jadwal
           </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="<?php echo site_url('Jadwal_C');?>">Jadwal Perkuliahan</a>
             <a class="dropdown-item" href="<?php echo site_url('insertjadwal_C');?>">Masukkan Jadwal Mahasiswa</a> 
              
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
            <div style="text-align: justify;"><p><h5><strong>Masukkan Jadwal</strong></h5>
              <table class="table table-bordered">
                <thead>
                 
                </thead>
                <form action="<?php echo base_url(). 'index.php/insertjadwal_C/add'; ?>" method="post">
    <table style="margin:20px auto;">
      <tr>
        <td>Hari</td>
        <td><input type="text" name="Hari"></td>
      </tr>
      <tr>
        <td>Matakuliah</td>
        <td><input type="text" name="Nama_M"></td>
      </tr>
      <tr>
        <td>Waktu</td>
        <td><input type="text" name="Waktu"></td>
      </tr>
      <tr>
        <td>Ruangan</td>
        <td><input type="text" name="Ruangan"></td>
      </tr>
      <tr>
        <td>SKS</td>
        <td><input type="text" name="SKS"></td>
      </tr><tr>
        <td>Kode Mata Kuliah</td>
        <td><input type="text" name="Kode_M"></td>
      </tr>
      <tr>
        <td></td>
        <td><input type="submit" value="Tambah"></td>
      </tr>
    </table>
  </form> 
                <tbody>
               
                    
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