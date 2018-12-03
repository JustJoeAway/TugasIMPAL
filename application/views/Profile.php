<!DOCTYPE html>
<html>
<head>
	<title>Profil</title>
	<link rel="stylesheet" type="text/css" href="css/home.css"o>
	<link rel="stylesheet" type="text/css" href="css/demo.css">
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  	<link rel="stylesheet" type="text/css" href="assets/icon/font/css/open-iconic-bootstrap.css">
  	<link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">
  	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
	<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <link href="s/creative.min.css" rel="stylesheet">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
 </head>
<body  topmargin="0" leftmargin="0" marginwidth="0" marginheight="0" background="latar.jpg">
  <div class="wrapper">
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
	<div class="row">
		<div class="col-sm-4 col-sm-pull-8">
		<br><h4 align="center">Profil </h4>
		 <br>
		 <h5 align="center"><a href="#O1">Edit Profil</a></h5>
		 <h5 align="center"><a href="#O3">Pengaturan Akun</a></h5>
		 <h5 align="center"><a href="#O3">Foto</a></h5>
		</div>
        <div class="col-sm-8 col-sm-push-4">
		<div class="container">
		<br> <br> <br/>
		   <div id="accordion">
		    <div class="card">
		      <div class="card-header">
		        <a class="card-link" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
		        <h5 id="O1"> Edit Profil</h5></p>
				        </a>
				      </div>
				      <div id="collapseOne" class="collapse show">
				        <div class="card-body">
				          <div class="container">		
								<form class="form-horizontal">
									<strong> <p> Data Perkuliahan </p> </strong>
									<div class="form-group">
										<label class="control-label col-sm-4" for="event">NIM	</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" placeholder="">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-4" for="event">Kelas	</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" placeholder="">
										</div>
									</div>					
									<div class="form-group">
										<label class="control-label col-sm-4" for="event">Dosen Wali	</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" placeholder="">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-4" for="lokasi">Program Studi</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" placeholder="">
										</div>
									</div>	
									<div class="form-group">									
										<label class="control-label col-sm-4" for="tahunang">Tahun Angkatan</label>
										<div class="col-sm-10">
											<div class="dropdown">
											    <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Pilih Tahun
											    <span class="caret"></span></button>
											    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
											      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">2015</a></li>
											      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">2016</a></li>
											      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">2017</a></li>
											      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">2018</a></li>
											      <li role="presentation" class="divider"></li>
											      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Lainnnya</a></li>
											    </ul>
											</div>
										</div>
									</div>
									<strong> <p> Data Pribadi </p> </strong>	
									<div class="form-group">
										<label class="control-label col-sm-4" for="lokasi">Nama Lengkap</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" placeholder="">
										</div>
									</div>			
									<div class="form-group">
										<label class="control-label col-sm-2" for="tempatlahir">Tempat Lahir</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" placeholder="">
										</div>
									</div>	
									<div class="form-group">
										<label class="control-label col-sm-2" for="tgllahir">Tanggal Lahir</label>
										<div class="col-sm-10">
							                <div class='input-group date' id='datetimepicker1'>
							                    <input type='date' class="form-control" />
							                </div>
							            </div>
									<script type="text/javascript">
									    $(function () {
									    $('#datetimepicker1').datetimepicker();
									    });
									</script>										
									</div>	
									<div class="form-group">
										<label class="control-label col-sm-4" for="lokasi">Alamat Bandung</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" placeholder="">
										</div>
									</div>		
									<div class="form-group">
										<label class="control-label col-sm-4" for="lokasi">Kab/Kota Bandung</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" placeholder="">
										</div>
									</div>	
									<div class="form-group">
										<label class="control-label col-sm-4" for="lokasi">Kode Pos Bandung</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" placeholder="">
										</div>
									</div>	
									<div class="form-group">
										<label class="control-label col-sm-2" for="lokasi">Alamat Asal</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" placeholder="">
										</div>
									</div>	
									<div class="form-group">
										<label class="control-label col-sm-2" for="lokasi">Provinsi Asal</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" placeholder="">
										</div>
									</div>	
									<div class="form-group">
										<label class="control-label col-sm-4" for="lokasi">Kota/Kab Asal</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" placeholder="">
										</div>
									</div>	
									<div class="form-group">
										<label class="control-label col-sm-4" for="lokasi">Kode Pos Asal</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" placeholder="">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-4" for="lokasi">Jenis Kelamin</label>
										<div class="col-sm-10">
											<div class="dropdown">
											    <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Pilih Jenis Kelamin
											    <span class="caret"></span></button>
											    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
											      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Laki-laki</a></li>
											      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Perempuan</a></li>
											     </ul>
											</div>
										</div>
									</div>										
									<div class="form-group">
										<label class="control-label col-sm-4" for="lokasi">Golongan Darah</label>
										<div class="col-sm-10">
											<div class="dropdown">
											    <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Pilih Golongan Darah
											    <span class="caret"></span></button>
											    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
											      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">A</a></li>
											      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">B</a></li>
											      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">O</a></li>
											      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">AB</a></li>
											     </ul>
											</div>
										</div>
									</div>										
									<div class="form-group">
										<label class="control-label col-sm-4" for="lokasi">Agama</label>
										<div class="col-sm-10">
											<div class="dropdown">
											    <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Pilih Agama
											    <span class="caret"></span></button>
											    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
											      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">ISLAM</a></li>
											      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">KRISTEN</a></li>
											      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">KATHOLIK</a></li>
											      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">HINDU</a></li>
											      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">BUDDHA</a></li>
											     </ul>
											</div>
										</div>
									</div>										
									<div class="form-group">
										<label class="control-label col-sm-4" for="lokasi">No.KTP</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" placeholder="">
										</div>
									</div>																			
									<strong> <p> Data Ijazah </p> </strong>								
									<div class="form-group">
										<label class="control-label col-sm-4" for="lokasi">Nama Lengkap di Ijazah</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" placeholder="">
										</div>
									</div>										
									<div class="form-group">
										<label class="control-label col-sm-4" for="lokasi">Tempat Lahir di Ijazah</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" placeholder="">
										</div>
									</div>										
									<div class="form-group">
										<label class="control-label col-sm-4" for="lokasi">Tanggal Lahir di Ijazah</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" placeholder="">
										</div>
									</div>
									<strong> <p> Data Rekening Bank </p> </strong>
									<div class="form-group">
										<label class="control-label col-sm-4" for="lokasi">No Rekening Bank</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" placeholder="">
										</div>
									</div>	
									<div class="form-group">
										<label class="control-label col-sm-4" for="lokasi">Nama Bank</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" placeholder="">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-4" for="lokasi">Nama Pemilik Akun</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" placeholder="">
										</div>
									</div>	
									<strong> <p> Data Keluarga </p> </strong>								
									<div class="form-group">
										<label class="control-label col-sm-4" for="lokasi">Nama Ayah</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" placeholder="">
										</div>
									</div>										
									<div class="form-group">
										<label class="control-label col-sm-4" for="lokasi">Nama Ibu</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" placeholder="">
										</div>
									</div>																													
									<left>
										<h2><button type="submit" class="btn btn-danger">SIMPAN</button></h2>
									</left>
									</form>		
							</div>

				        </div>
				      </div>
				    </div>
				    <div class="card">
				      <div class="card-header">
				        <a class="collapsed card-link" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
				        <h5 id="O2"> Pengaturan Akun</h5></p>
				      </a>
				      </div>
				      <div id="collapseTwo" class="collapse">
				        <div class="card-body">
				        	<div class="container">		
								<form class="form-horizontal">
									<div class="form-group">
										<label class="control-label col-sm-4" for="event"><strong>Kata Sandi Saat Ini :</strong></label>
										<div class="col-sm-10">
											<input type="password" class="form-control" placeholder="">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-4" for="event"><strong>Kata Sandi Baru :</strong></label>
										<div class="col-sm-10">
											<input type="password" class="form-control" placeholder="">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-4" for="event"><strong>Ulangi Kata Sandi :</strong></label>
										<div class="col-sm-10">
											<input type="password" class="form-control" placeholder="">
										</div>
									</div>						
								</form>
							</div>
				        </div>
				      </div>
				    </div>
				    <div class="card">
				      <div class="card-header">
				        <a class="collapsed card-link" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
				        <h5 id="O3"> Foto</h5></p>
				        </a>
				      </div>
				      <div id="collapseThree" class="collapse">
				        <div class="card-body">
				          <div class="container">		
								<form class="form-horizontal">
									<div class="form-group">
									<div class="form-group">
										<label class="control-label col-sm-2" for="lokasi">Foto Profil</label>
										<div class="col-sm-10">
											<img src="default.jpg" class="img-thumbnail" width="200px" height="300px" align="center">
										</div>
									</div>

									</div>	
								</form>
						  </div>
				  		</div>		         
		        	  </div>
		      		</div>
		      		</div>		         
		        </div>
		 <center>
			<h4><button type="submit" class="btn btn-danger">SIMPAN</button></h4>
		</center>
		</div>
		</div>
	</div>
</body>
</html>