<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Singup extends CI_Controller {
public function __construct() {
        parent::__construct();
        if($this->session->userdata('id')){
        redirect('welcome');
}
}
 
public function index() {
$aksi=$this->input->post('daftar');
//jika tidak meng klik daftar tidak akan di proses
if(isset($aksi)){
$this->load->helper(array('form', 'url'));
$this->load->library('form_validation');
//set validasi
$this->form_validation->set_rules('password', 'password', 'trim|required|alpha_numeric|min_length[4]|max_length[50]', array('required' => 'password  tidak boleh kosong')
);  
$this->form_validation->set_rules('email', 'email', 'trim|required|valid_email', array('required' => ' email tidak boleh kosong.')
);
if ($this->form_validation->run() == FALSE) {
$this->load->view('form_daftar');
} else {
$email=$this->input->post('email'); $password=md5($this->input->post('password'));
//cek email,agar tidak ada akun yg sama
$ceke=$this->mlogin->cekemail($email);
$hasilemail= count($ceke);
if ($hasilemail > 0){
$this->session->set_flashdata('erroremail','email sudah ada');
redirect('singup');
}
$data= array('email'=>$email,'password'=>$password);
$dftr=$this->mlogin->input($data);
if($dftr > 0){
$curi=$this->mlogin->buatsession($email);
if($curi){
$id=$curi->id;
$nama=$curi->user_name;
}
//nembuat hak akses
$this->session->set_userdata('id',$id);
$this->session->set_userdata('email',$email);
redirect('home');
}
}
}else{
$this->load->view('form_daftar');
}
}
 
}