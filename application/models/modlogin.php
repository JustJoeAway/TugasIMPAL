<?php defined('BASEPATH') OR exit('No direct script access allowed');
 
class Mlogin extends CI_Model {
 
//cek email saat daftar
public function cekemail($email){
$this->db->where('email',$email);
return $this->db->get('tb_user')->row();
}
 
   
    //cek email saat login
public function cekpass($email,$password){
$this->db->where('email',$email);
$this->db->where('password',$password);
return $this->db->get('tb_user')->row();
}
 
//proses daftar user
public function input($data){
$tmbh= $this->db->insert('tb_user',$data);
return $tmbh;
}
 
//membuat session saat baru daftar      
public function buatsession($email){
$this->db->where('email',$email);
$data = $this->db->get('tb_user');
return $data->row();
}
 
 
}