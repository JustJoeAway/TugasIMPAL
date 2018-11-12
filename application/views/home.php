<!DOCTYPE html>
<html>
<head>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 70%;
      margin: auto;
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
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
      <li data-target="#myCarousel" data-slide-to="5"></li>
      <li data-target="#myCarousel" data-slide-to="6"></li>
      <li data-target="#myCarousel" data-slide-to="7"></li>
    </ol>
    <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="<?php echo base_url();?>Asset/SLIDER0.jpg" alt="Wisuda" class="img-fluid img-thumbnail" align="center">
            <div class="carousel-caption">
              <h3>Pengumuman Wisuda November 2018</h3>
              <p>Pengumuman Pembagian Sesi Wisuda November 2018.</p>
            </div>
        </div>
        <div class="item">
          <img src="<?php echo base_url();?>Asset/SLIDER1.png" alt="ILCF" class="img-fluid img-thumbnail" align="center">
            <div class="carousel-caption">
              <h3>ILCF 2018 Free Online Competition</h3>
              <p>Hallo TelUTizen, buat yang mau ikutan INTERNATIONAL LANGUAGE & CULTURE FESTIVAL (ILCF) FREE ONLINE COMPETITION bisa cek disini ya bit.ly/THE7thILCF. </p>
            </div>
        </div>
        <div class="item">
          <img src="<?php echo base_url();?>Asset/SLIDER2.jpg" alt="UjianFEB" class="img-fluid img-thumbnail" align="center">
            <div class="carousel-caption">
              <h3>Hasil Ujian Khusus FEB 1718-2</h3>
              <p>Dengan ini diinformasikan kepada selulurah mahasiswa Hasil Ujian Khusus Semester Genap Tahun Akademik 2017-2018 Fakultas Ekonomi dan Binis - Universitas Telkom .</p>
            </div>
        </div>
        <div class="item">
          <img src="<?php echo base_url();?>Asset/SLIDER3.jpg" alt="UjianFRI"class="img-fluid img-thumbnail" align="center">
            <div class="carousel-caption">
              <h3>[REVISI] Jadwal Ujian Khusus Mahasiswa Angkatan 2016 Fakultas Rekayasa Industri</h3>
              <p>[REVISI] Jadwal Ujian Khusus Mahasiswa Angkatan 2016 Program Studi S1 Teknik Industri dan S1 Sistem Informasi Fakultas Rekayasa Industri .</p>
            </div>
        </div>
        <div class="item">
          <img src="<?php echo base_url();?>Asset/SLIDER4.jpg" alt="Wisuda2"class="img-fluid img-thumbnail" align="center">
            <div class="carousel-caption">
              <h3>Pengumuman Wisuda November 2018</h3>
              <p>Pengumuman Pembagian Sesi Wisuda November 2018.</p>
            </div>
        </div>
        <div class="item">
          <img src="<?php echo base_url();?>Asset/SLIDER5.jpg" alt="Magang"class="img-fluid img-thumbnail" align="center">
            <div class="carousel-caption">
              <h3>PENGUMUMAN PROGRAM MAGANG DI PT. KRAKATAU STEEL</h3>
              <p>PROGRAM MAGANG BERSERTIFIKAT BUMN BATCH - 2 DI PT. KRAKATAU STEEL</p>
            </div>
        </div>
        <div class="item">
          <img src="<?php echo base_url();?>Asset/SLIDER6.jpg" alt="Klinik"class="img-fluid img-thumbnail" align="center">
            <div class="carousel-caption">
              <h3>Klinik THC Telkom University</h3>
              <p>Telah Hadir di Business Center Klinik THC Telkom University</p>
            </div>
        </div>
        <div class="item">
          <img src="<?php echo base_url();?>Asset/SLIDER7.jpg" alt="Korupsi" class="img-fluid img-thumbnail" align="center">
            <div class="carousel-caption">
              <h3>AYOO, DAFTARKAN KARYA TERBAIKMU DI KOMPETISI PROPAGANDA ANTIKORUPSI 2018</h3>
              <p>Kompetisi Propaganda Antikorupsi 2018 kembali digelar. Tunjukkan bahwa kamu generasi antikorupsi dan buat jejak integritasmu sekarang!.. Kompetisi ini gratis, khusus untuk mahasiswa/i, dosen, maupun karyawan</p>
            </div>
        </div>
      </div>
      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
      </div>
  </div>
  <div class="container">
    <br>
    <div class="card">
    <br>
      <div class="col-sm-12">
      <img src="<?php echo base_url();?>Asset/fif.png" class="float-left mr-3" alt="FIF">
      <div style="text-align: justify;"><p><h5><strong> FIF Dean Gave Award to the Best Student</strong></h5>
          <h7>BANDUNG, TEL-U - Dean Faculty of Informatics Telkom University (FIF Tel-U) Dr Maman Abdurohman ST, MT provided a number of awards to FIF students who received some prizes at both national and international competitions. Various kinds of championships, followed by FIF students included 11 national events such as Indonesia Cyber Army in 2015, National and Regional Hackaton Bandung 2.0.</h7></p>
          <div class="btn-group">
              <a type="button" class="btn btn-sm btn-outline-secondary" href="<?php echo site_url('Home/Artikel1');?>">Tampilkan Artikel</a>
          </div>
          <br>
          <br>
      </div>
      </div>
    </div>   
    <br>
    <div class="card">
    <br>
      <div class="col-sm-12">
      <img src="<?php echo base_url();?>Asset/fri.png" class="float-left mr-3" alt="FRI">
      <div style="text-align: justify;"><p><h5><strong> FRI Telkom University Borong Prestasi</strong></h5>
          <h7>BANDUNG, Telkom University - Tim PandaBoo Developers Fakultas Rekayasa Industri (FRI) yang beranggotakan Nikmah, Citra, dan Januar berhasil meraih juara 2 Business Plan Competition Universitas Muhammadyah Yogyakarta 2017 pada 15 April 2017 lalu. Mahasiswa FRI Telkom University Fadli Anugrah Emas, Fitri Fauziyah dan Kevindion juga mendapat juara 1 di lomba Widyatama Tech Event.</h7></p>
          <div class="btn-group">
              <a type="button" class="btn btn-sm btn-outline-secondary" href="<?php echo site_url('Home/Artikel2');?>">Tampilkan Artikel</a>
          </div>
          <br>
          <br>
      </div>
      </div>
    </div>
    <br>
    <div class="card">
    <br>
      <div class="col-sm-12">
      <img src="<?php echo base_url();?>Asset/fte.png" class="float-left mr-3" alt="FTE">
      <div style="text-align: justify;"><p><h5><strong> Penghargaan International Student Award kategori Highly Commended - Postgraduate Coursework</strong></h5>
          <h7>Selamat kepada Juni Hezi Romansyah (Alumni Teknik Telekomunikasi) karna telah meraih penghargaan International Student Award kategori Highly Commended – Postgraduate Coursework di Adelaide, Australia.
          Juni Hezi Romansyah dan dua orang lainnya berhasil meraih predikat terbaik.</h7></p>
          <div class="btn-group">
              <a type="button" class="btn btn-sm btn-outline-secondary" href="<?php echo site_url('Home/Artikel3');?>">Tampilkan Artikel</a>
          </div>
          <br>
          <br>
      </div>
      </div>
    </div> 
    <br>
    <div class="card">
    <br>
      <div class="col-sm-12">
      <img src="<?php echo base_url();?>Asset/feb.png" class="float-left mr-3" alt="FEB">
      <div style="text-align: justify;"><p><h5><strong> Farewell Party untuk Penghuni Asrama Berlangsung Seru</strong></h5>
          <h7>BANDUNG, TEL-U - Lebih dari seribu mahasiswa Telkom University angkatan 2013 meramaikan acara Dormitory Farewell Party 2014 yang digelar di Telkom University Convention Hall Jumat (6/6). Acara ini diselenggarakan oleh Career Development Center (CDC) Telkom University di penghujung masa huni asrama Telkom University untuk mahasiswa baru tahun ajaran 2013/2014.</h7></p>
          <div class="btn-group">
              <a type="button" class="btn btn-sm btn-outline-secondary" href="<?php echo site_url('Home/Artikel4');?>">Tampilkan Artikel</a>
          </div>
          <br>
          <br>
      </div>
      </div>
    </div>
    <br>
    <div class="card">
    <br>
      <div class="col-sm-12">
      <img src="<?php echo base_url();?>Asset/fit.png" class="float-left mr-3" alt="FIT">
      <div style="text-align: justify;"><p><h5><strong> Sharing Knowledge : Dasar-dasar Database MySql dan PL/SQL</strong></h5>
          <h7>Sharing knowledge menjadi salah satu agenda kegiatan rutin yang diadakan tiga minggu sekali oleh Unit Laboratorium Fakultas Ilmu Terapan dan dilaksanakan oleh Asisten Llaboratorium sesuai dengan bidang dari masing-masing Kelompok Keahlian yang ada di Fakultas Ilmu Terapan, Universitas Telkom. Sharing knowledge pertama di periode 2018/2019 ini dilaksanakan pada hari Sabtu, 29 September 2018.</h7></p>
          <div class="btn-group">
              <a type="button" class="btn btn-sm btn-outline-secondary" href="<?php echo site_url('Home/Artikel5');?>">Tampilkan Artikel</a>
          </div>
          <br>
          <br>
      </div>
      </div>
    </div>
    <br>
    <div class="card">
    <br>
      <div class="col-sm-12">
      <img src="<?php echo base_url();?>Asset/fkb.png" class="float-left mr-3" alt="FKB">
      <div style="text-align: justify;"><p><h5><strong> Pengabdian Masyarakat Dosen Fakultas Komunikasi dan Bisnis</strong></h5>
          <h7>BANDUNG, TEL-U - Dosen-dosen Universitas Telkom, dari FKB dan FIK melakukan kegiatan dengan mengambil tema Program Pemberdayaan Keluarga Untuk Meningkatkan Kesejahteraan Masyarakat Melalui Penguatan Kelompok Usaha. Kegiatan tersebut dilaksanakan di Desa Karamat Mulya Kecamatan Soreang Kabupaten Bandung. Kegiatan dilaksanakan selama dua hari, tanggal 30 & 31 Agustus 2018.</h7></p>
          <div class="btn-group">
              <a type="button" class="btn btn-sm btn-outline-secondary" href="<?php echo site_url('Home/Artikel6');?>">Tampilkan Artikel</a>
          </div>
          <br>
          <br>
      </div>
      </div>
    </div>
  </div>
</body>
</html>