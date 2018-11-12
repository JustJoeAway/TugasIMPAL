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
      <p align="center"><img src="<?php echo base_url();?>Asset/artikel6.jpeg" class=class="img-fluid img-thumbnail" alt="FIF"></p>
      <div style="text-align: center;"><h5><strong>Pengabdian Masyarakat Dosen Fakultas Komunikasi dan Bisnis</strong></h5>
          <div style="text-align: justify;"><p><h7>Dosen-dosen Universitas Telkom, dari Fakultas Komunikasi & Bisnis, dan Fakultas Industri Kreatif melakukan kegiatan dengan mengambil tema Program Pemberdayaan Keluarga Untuk Meningkatkan Kesejahteraan Masyarakat Melalui Penguatan Kelompok Usaha. Kegiatan tersebut dilaksanakan di Desa Karamat Mulya Kecamatan Soreang Kabupaten Bandung. Kegiatan dilaksanakan selama dua hari, tanggal 30 & 31 Agustus 2018.
          <br>Kegiatan tersebut dilaksanakan dalam rangka Pengabdian Kepada Masyarakat, yang dilatarbelakangi oleh potensi yang dimiliki masyarakat Desa Karamat Mulya. Dimana di desa tersebut banyak kain perca hasil limbah pembuatan gamis, yang dapat dimanfaatkan menjadi barang yang bernilai tinggi. Menurut  Asaas Putra, salah satu Dosen Fakultas Komunikasi dan Bisnis, “Program ini dilaksanakan dalam rangka mensinergikan potensi Dosen- Dosen dalam bidang Komunikasi, Bisnis serta Industri Kreatif dengan resources yang ada pada masyarakat Desa Karamat Mulya” . Lanjutnya lagi “Pada pelatihan ini diajarkan bagaimana membuat kain perca yang tadinya hanya dijual begitu saja sebagai limbah, kemudian dicoba untuk direkayasa sedemikian rupa dengan memberi value, kemudian dipacking dan selanjutnya dipromosikan sehingga nilai jual kain tersebut menjadi  lebih. Selanjutnya pada bagian hilir, yaitu bidang promosi masyarakat juga diajarkan bagaimana memanfaatkan jaringan internet dengan membangun website khusus yang dikelola oleh masyarakat. Intinya, mensinergikan potensi dari hulu hingga ke hilir“.
          <br>Kegiatan yang berlangsung dua hari ini diisi dengan pelatihan peningkatan keterampilan produksi, pemasaran, dan pengelolaan badan usaha. Dimana para pematerinya di isi oleh para dosen Telkom University dari Prodi Ilmu Komunikasi, Prodi Administrasi Bisnis, Prodi Desain Produk, Prodi Desain Komunikasi Visual.</h7></p>
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