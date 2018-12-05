<?php
/**
 * Created by PhpStorm.
 * User: Hantamsurga
 * Date: 21/04/2018
 * Time: 2:28
 */

class Akun_C extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Akun_M');
    }
    public function index()
    {
        $this->load->view('login2');
    }

     

    public function cek_login()
    {
        $data = $this->input->post(null,TRUE);
        $login= $this->Akun_M->login_akun($data);
        if($login){
            $sess_data = array(
                'logged_in' => "Sudah Login",
                'username' => $login->username,
                'level' => "Admin"
            );
//            isi dengan session data , terus di set sessionnya
            $this->session->set_userdata($sess_data);
            redirect('Home');

        }else{
            echo "gagal";
            //isi dengan flash data disini untuk memberi tau alert ke View
            $this->session->set_flashdata('alert', 'gagal_login');
            redirect('Akun_C/index');

        }

    }

    public function logout(){
        //isi dengan sess_destroy
        $this->session->sess_destroy();
        redirect(site_url('Akun_C/index'));
    }
}