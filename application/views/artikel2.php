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
      <a class="navbar-brand" href="<?php echo site_url('Home');?>"><h1>Bojongsoang University</h1></a>
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
      <p align="center"><img src="<?php echo base_url();?>Asset/fri.png" class=class="img-fluid img-thumbnail" alt="FRI"></p>
      <div style="text-align: center;"><h5><strong> FRI Telkom University Borong Prestasi</strong></h5>
          <div style="text-align: justify;"><p><h7>BANDUNG, Telkom University –  Tim PandaBoo Developers Fakultas Rekayasa Industri (FRI) yang beranggotakan Nikmah, Citra, dan Januar berhasil meraih juara 2 Business Plan Competition Universitas Muhammadyah Yogyakarta 2017 pada 15 April 2017 lalu. Selain prestasi tersebut Mahasiswa FRI Telkom University Fadli Anugrah Emas, Fitri Fauziyah dan Kevindion juga mendapat juara 1 di lomba Widyatama Tech Event, kategori aplikasi mobile yang berlangsung di Kampus Universitas Widyatama, Bandung pada 23 April 2017.
          <br>Pada ajang Vocomfest (Vocational Computer Festival) 2017 yang berlangsung 16 April 2017 lalu di Universitas Gajah Mada (UGM) Yogyakarta, Vocomfest merupakan salah satu acara terbesar yang diselenggarakan oleh Himpunan Mahasiswa Ilmu Komputer dan Sistem Informasi SV UGM. Mengangkat tema “Creating Smart Citizen for Social Welfare with Technology” Pada acara ini tim Notice Telkom University berhasil meraih menjadi favorite apps Mobile Apps Development Competition.
          <br>Pihak kemahasiswaan Fakultas Rekayasa Industri Telkom University Faishal Mufied Al Anshary, S.Kom., M.Sc mengatakan selain 3 prestasi tersebut 1 lagi prestasi yang diraih oleh mahasiswa FRI di bulan April ini yakni Dani Aji dan yulian berhasil meraih juara 3 Indonesia Islamic business plan competition 2017 yang berlangsung sejak Februari dan diumumkan pada 16 April 2017 lalu di Politeknik Elektronika Negeri Surabaya (PENS) “seluruh prestasi mahasiswa yang sudah diraih sepanjang April ini merupakan kebanggaan bagi FRI, karena bisa membawa nama baik FRI khususnya Telkom University” ucapnya. Faishal berharap agar mahasiswa Telkom University bisa terus berkompetisi baik secara Nasional dan Internasional agar bisa terus mengharumkan nama baik almamater. “selain itu saya berharap agar mahasiswa Telkom Unviersity juga bisa mewariskan semangat kompetisi kepada adik kelas nya agar selalu ada regenerasi dalam setiap kompetisi” ucap Faishal.</h7></p>
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