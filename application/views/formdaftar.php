<html>
    <head>
        <title>Validasi Form dengan JQuery Validation - Achmatim.Net</title>
        <style type="text/css">
        .error{
            font-size:small;
            color:red;
        }
        </style>
<link href="<?php echo base_url().'assets//bootstrap/css/bootstrap.min.css'?>" rel="stylesheet">
       
    </head>
    <body>
    <div class="container">
<center>        <h1>daftar</h1></center>
<form action="<?php echo site_url('singup');?>" method="post" class="form-signin">
 
<?php echo validation_errors(); ?>
<?php echo "<p class='text-danger'>".$this->session->flashdata('error')."</p>";?>
 
 
 
 
<div class="form-group  has-feedback">  <label for="email" class="labelfrm ">email</label>
<?php echo"<p class='text-danger'>". $this->session->flashdata('erroremail')."</p>";?>
    <?php echo"<p class='text-danger'>". form_error('email')."</p>"; ?>
<input type="text" name="email" id="email" placeholder="Email" value="<?php echo set_value('email'); ?>" class="form-control required" />  
</div>
 
 
<div class="form-group has-feedback">  
<label for="password" class="labelfrm">password</label>
<?php echo"<p class='text-danger'>".form_error('password')."</p>"; ?>
<input type="password" name="password" id="password" placeholder="Password" value="<?php echo set_value('password'); ?>" class="form-control required"/>
</div>
 
            <div class="checkbox">
<label>
 
</label>
</div>
           
<button class="btn btn-info btn-block" type="submit" name="daftar">daftar</button>
        </form>
<h5><p class="text-center">atau</p></h5>
<p class="text-center"><a href="<?php echo site_url('login');?>" class="btn btn-md btn-success">masuk</a></p><br><br>
<p class="text-center"> dakon &copy; <?php echo  date('Y'); ?></p>     
        </div>
    </body>
</html>