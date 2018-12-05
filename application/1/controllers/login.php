<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {
public function __construct() {
parent::__construct();
if($this->session->userdata('id')){redirect('welcome');}
}
 
public function index() {
$this->load->helper(array('form', 'url'));
$this->load->library('form_validation');  
$this->form_validation->set_rules('password', 'Password', 'required');
$this->form_validation->set_rules('email', 'Email', 'required|is_unique[users.email]');
if ($this->form_validation->run() == FALSE) {
$this->load->view('form_login');
} else {
redirect('login/masuk');
}
}
 
public function masuk(){
$email=$this->input->post('email');
$password=md5($this->input->post('password'));
//cek dan mencocokan pass dan email dari tabel database
$cek = $this->mlogin->cekpass($email,$password);
$hasil= count($cek);
//jika hasil ada
if ($hasil > 0)
{
$id=$cek->id;
$level=$cek->level;
$name=$cek->email;            
//buat session
$this->session->set_userdata('id',$id);
$this->session->set_userdata('email',$email);
redirect('home');
}
else
{
//jika gagal login  menampilkan pesan kesalahan
$this->session->set_flashdata('error','username atau password salah');
redirect('login');
}
}
 
 
 
}