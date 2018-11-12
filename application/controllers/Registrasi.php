<?php
Class Registrasi extends CI_Controller
{	
	public function __construct()
    {
        parent::__construct();
    }   
	public function index($offset=0)
	{
        $this->load->view('Registrasi - Menu Registrasi Mata Kuliah');
    }
    public function Status()
    {
        $this->load->view('Registrasi - Menu Status Registrasi Matkul.php');
    }
}
?>