<html>
    <head>
        <title>Validasi Form dengan JQuery Validation</title>
<link href="<?php echo base_url().'assets//bootstrap/css/bootstrap.min.css'?>" rel="stylesheet">
       
    </head>
    <body>
   
    <div class="container">
    <h1><center>halaman home</center></h1>
<p class="text-center"><a href="<?php echo site_url('logout');?>" class="btn btn-md btn-danger">keluar</a></p><br><br>
<h2>email:<?php echo $this->session->userdata('email');?></h2>
        </div>
    </body>
</html>