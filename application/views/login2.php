<?php

if ($this->session->flashdata('alert')=='sukses_daftar'){
    echo "<script>alert('Sukses Daftar');</script>";
}else if ($this->session->flashdata('alert')=='gagal_login'){
    echo "<script>alert('Username / Password Salah!');</script>";
}
//disini tampilkan flashdata dari controller
?>
<!DOCTYPE html>
<html>
<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<title></title>
</head>
<body>
<?php $atribut = array(
                'class' => 'login100-form validate-form p-l-55 p-r-55 p-t-178'
            );?>
            <?php
            echo form_open("Akun_C/cek_login",$atribut);
            //            isi dengan form_open ke controller Akun_C dengan method cek_login

            ?>
	<body>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>Asset/logincss.css">
	<div id="login">
		<div class="upper">
		<form>
			<table border="0" width="110%">
			<tr>
				<td width="50%" rowspan="3"><h1>Bojongsoang University</h1></td>
				<td width="18%" style="font-size:10pt">Email</td>
				<td width="15%" style="font-size:10pt">Password</td>
			</tr>
			<tr>
				<td><input type="text" name="user_email" placeholder="example@hotmail.com"></td>
				<td><input type="Password" name="user_password" placeholder="&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;"></td>
				<td><input type="submit" value="Login" id="blogin"></td>
			</tr>
			<tr>
				<td style="font-size:10pt"><input type="checkbox"> Let me in</td>
				<td><a href="#" style="font-size:10pt; color:#fff">Forgot Password ?</a></td>
			</tr>
			</table>
		</form>
		</div>
	</div>
	
<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="<?php echo base_url();?>Asset/kampus.jpg" width="800px" height="600px" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo base_url();?>Asset/perpus.jpg" width="800px" height="600px"  alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo base_url();?>Asset/kelas.jpg"  width="800px" height="600px"  alt="Third slide">
    </div>
  </div>
</div>

</body>

</body>
</html>