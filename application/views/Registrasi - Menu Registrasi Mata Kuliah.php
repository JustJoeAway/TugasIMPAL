<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <title></title>
</head>
<body  topmargin="0" leftmargin="0" marginwidth="0" marginheight="0" background="latar.jpg">
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
              <a class="dropdown-item" href="#">Lihat Nilai</a>
            </div>
          </li>
            <li class="nav-item dropdown">
           <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Jadwal
           </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Jadwal Perkuliahan</a>
              <a class="dropdown-item" href="#">Jadwal Ujian</a>
              <a class="dropdown-item" href="#">Absensi</a>
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
                <a class="dropdown-item" href="#">Log Out</a>
              </div>
            </li>
          </ul>
      </div>
    </nav>
  </div>
<div class="container">
    <br>
    <div class="card">
    <br>
      <div class="col-sm-12">
      <div style="text-align: center;"><h5><strong>RENCANA STUDI SEMESTER GANJIL 2018/2019</strong></h5><br>
          <div style="text-align: left;">
          <p><h7> Mahasiswa       : Salwa Salsabila/1301164070
          <br> Kelas            : IF 40-04
          <br> Desen Wali       : Shinta Yulia Puspitasari, M.T.
          <br> Jenis Registrasi : 
          <br> Keterangan       :
          <br>
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>Mata Kuliah</th>
                <th>SKS</th>
                <th>Kelas/Kelas Peminatan</th>        
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>CSH3A4 - Jaringan Komputer</td>
                <td>4</td>
                <td>IF 40-04/IF 40-04</td>
              </tr>
              <tr>
                <td>CCH3F3 - Kecerdasan Buatan</td>
                <td>3</td>
                <td>IF 40-04/IF 40-04</td>
              </tr>
              <tr>
                <td>CSH3B3 - Interaksi Manusia dan Komputer A</td>
                <td>3</td>
                <td>IF 40-04/IF 40-04</td>
              </tr>
              <tr>
                <td>CSH3A3 - Sistem Operasi A</td>
                <td>3</td>
                <td>IF 40-04/IF 40-04</td>
              </tr>
              <tr>
                <td>CSH3G2 - Konsep Teknologi</td>
                <td>2</td>
                <td>IF 40-04/IF 40-04</td>
              </tr>
              <tr>
                <td>CSH3E3 - Implementasi dan Pengujian Perangkat Lunak</td>
                <td>3</td>
                <td>IF 40-04/IF 40-04</td>
              </tr>
              <tr>
                <td>Total SKS</td>
                <td>18</td>
                <td></td>
              </tr>
            </tbody>
          </table>
          <br><strong> Status Terakhir : Anda Telah Menyelesaikan Proses Registrasi</strong>
          <br>
          <div class="btn-group">
            <div style="text-align: center;">
              <button type="button" class="btn btn-sm btn-outline-secondary">Cetak KSM</button>
            </div>
          </div>
      </div>
      </div>
    </div>   
    <br>
  </div>
  <br>
</body>
</html>