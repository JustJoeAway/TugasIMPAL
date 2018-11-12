<?php
Class Pembayaran extends CI_Controller
{	
	public function __construct()
    {
        parent::__construct();
    }   
	public function index($offset=0)
	{
        $this->load->view('Pembayaran - Detail Pembayaran Mahasiswa');
    }
    public function Tagihan()
    {
        $this->load->view('Pembayaran - Tagihan');
    }
    public function Konfirmasi()
    {
        $this->load->view('Pembayaran - Konfirmasi Pembayaran');
    }
    public function Keterlambatan()
    {
        $this->load->view('Pembayaran - Keterlambatan Registrasi Semester');
    }
}
?>