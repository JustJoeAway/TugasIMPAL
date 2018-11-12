<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
  a {
      text-decoration: none;
      display: inline-block;
      padding: 8px 16px;
  }

  a:hover {
      background-color: #ddd;
      color: black;
  }

  .previous {
      background-color: #f1f1f1;
      color: black;
  }

  .next {
      background-color: #4CAF50;
      color: white;
  }
  </style>
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
      <p align="center"><img src="<?php echo base_url();?>Asset/feb.png" class=class="img-fluid img-thumbnail" alt="FIF"></p>
      <div style="text-align: center;"><h5><strong>Farewell Party untuk Penghuni Asrama Berlangsung Seru</strong></h5>
          <div style="text-align: justify;"><p><h7>BANDUNG, TEL – U – Lebih dari seribu mahasiswa Telkom University angkatan 2013 meramaikan acara Dormitory Farewell Party 2014 yang digelar di Telkom University Convention Hall Jumat (6/6). Acara ini diselenggarakan oleh Career Development Center (CDC) Telkom University di penghujung masa huni asrama Telkom University untuk mahasiswa baru tahun ajaran 2013/2014.
          <br>Bekerjasama dengan Tuvendo, Farewell Party diisi oleh penampilan Beatbox dan Perkusi dari mahasiswa Tel-U. Para peserta undangan juga disuguhi penampilan dari Saung Angklung Udjo dan pertunjukkan musik dari Makaya Band yang menambah serunya acara ini. “Ini adalah puncak dari program-program CDC untuk mahasiswa baru Tel-U. Setelah sebelumnya diawali dengan Welcome Party di tahun 2013, pengembangan psikologi, penanaman nasionalisme dan patriotisme, hingga outbond bagi penghuni asrama,” ungkap Asisten Manajer Pengembangan softskill CDC Telkom University, Sri Utami.
          <br>Hadir dalam acara ini Ketua Telkom Foundation, Johni Girsang, M.Sc., Wakil Rektor IV Bidang Penelitian, Pengabdian Masyarakat dan Kemahasiswaan, Dr. M. Yahya. Arwiyah, M.H., serta Kepala Bidang CDC Tel-U, Wawan Anwar.Dalam sambutannya, Johni Girsang mengatakan, proses pendewasaan adalah hal yang pasti tejadi dan harus dilalui oleh setiap orang terutama di lingkungan Telkom Foundation. “Kalian itu adalah intan di dasar lautan. Proses pendewasaan akan kalian alami di sini dan nantinya kalian akan menjadi intan yang berharga,” katanya.
          <br>Sejalan dengan Johni Girsang, M. Yahya Arwiyah juga menyebutkan bahwa mahasiswa baru Tel-U jangan sampai kehilangan karakternya. “Apa yang sudah kalian dapatkan di asrama harus tetap dilanjutkan. Malam ini adalah penanda bahwa proses yang sudah kalian lalui di asrama akan bermanfaat bagi pengembangan diri kalian nantinya,” ucap Yahya. Para mahasiswa yang akan meninggalkan asrama ini mengaku mendapatkan pengalaman berharga selama tinggal di asrama. “Kami dapet banyak temen baru, bisa internetan gratis, pokoknya asik dan menyenangkan deh,” kata Tyonk, Indah, Hani, dan Nia, mahasiswi Manajemen Informatika dan Manajemen Pemasaran angkatan 2013. (Purel/DH)</h7></p>
          </div>
          <div class="btn-group">
            <div style="text-align: center;">
              <a href="#" class="previous" >&laquo; Previous</a>
              <a href="#" class="next">Next &raquo;</a>
            </div>
          </div>
          <br>
          <br>
      </div>
      </div>
    </div>   
    <br>
</body>
</html>