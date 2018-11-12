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
      <p align="center"><img src="<?php echo base_url();?>Asset/artikel5.png" class=class="img-fluid img-thumbnail" alt="FIF"></p>
      <div style="text-align: center;"><h5><strong>Sharing Knowledge : Dasar-dasar Database MySql dan PL/SQL</strong></h5>
          <div style="text-align: justify;"><p><h7>Sharing knowledge menjadi salah satu agenda kegiatan rutin yang diadakan tiga minggu sekali oleh Unit Laboratorium Fakultas Ilmu Terapan dan dilaksanakan oleh Asisten Llaboratorium sesuai dengan bidang dari masing-masing Kelompok Keahlian yang ada di Fakultas Ilmu Terapan, Universitas Telkom. Sharing knowledge pertama di periode 2018/2019 ini dilaksanakan pada hari Sabtu, 29 September 2018.
          <br>Sharing knowledge yang pertama ini mengusung materi seputar database dan lebih menekankan pada pengenalan dasar-dasar database MySql yang biasanya digunakan dalam membangun sebuah aplikasi. Pada sharing knowledge ini dihadiri sebanyak 12 orang peserta dari prodi Teknik Informatika, Manajemen Informatika, Teknik Telekomunikasi dan Komputerisasi Akutansi. Acara dimulai pukul 10.15 WIB dengan penyampaian materi yang dibawakan oleh Ken Diva Gusti Arirang dari Asisten Laboratorium Komputer. Di awal sesi pemateri menjelaskan mengenai pengolahan data-data dalam database (data manipulation language) menggunakan MySql seperti proses “SELECT” data, “GROUP FUNCTION” dan “JOIN” dengan menggunakan data yang sudah tersedia di dalam SQL yaitu skema HR.
          <br>Setelah penjabaran materi, dilanjutkan dengan praktik yang dilakukan oleh peserta dan dipandu oleh pemateri. Peserta cukup antusias dengan melontarkan beberapa pertanyaan yang saat itu kurang dimengerti ketika praktik langsung. Beberapa kali pemateri juga menawarkan untuk menjelaskan kembali apabila memang terdapat penjelasan yang kurang paham. Materi dasar-dasar database MySql ini berlangsung selama 2 jam dan untuk materi pertama diakhiri dengan makan siang besama.
          <br>Selepas istirahat, acara kembali dilanjutkan pada pukul 12.30 WIB dengan materi kedua yaitu pengenalan dasar-dasar Pemrograman Prosedural Structured Query Language (PL/SQL) yang dibawakan oleh Ade Handiyanto yang juga dari Asisten Laboratorium Komputer. Dimulai dengan penyampaian 4 materi utama diantaranya, materi pertama mengenai Pengenalan Anonymous Block yang mencakup mengenai anonymous block, variable, identifiers dan Tipe Data.  Materi Kedua mengenai Struktur Percabangan mencakup penggunaan “IF”, “ELSE”, “ELSIF” dan “CASE EXPRESSION”. Materi Ketiga Mengenai Struktur Perulangan, Materi keempat mengenai Cursor Implisit dan Eksplisit. Pada saat peyampaian, pemateri langsung mengajak peserta untuk mempraktikan materi-materi tersebut, hal ini dilakukan supaya materi yang disampaikan mudah diingat dan dimengerti oleh peserta. Pemateri juga ikut turun langsung membimbing peserta yang menghadapi kesulitan, seperti ditemukannya error saat menjalankan database tersebut. Memang pada awalnya terlihat beberapa audiens yang bingung, namun setelah diberikan arahan dan penjelasan ulang, peserta akhirnya dapat memahami materi tersebut. Materi kedua berakhir pukul 14.30 WIB dengan respon peserta yang cukup antusias dan mengikuti kegiatan dengan baik sampai selesai.</h7></p>
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