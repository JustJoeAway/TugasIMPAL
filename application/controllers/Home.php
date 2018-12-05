<?php
Class Home extends CI_Controller
{	
	public function __construct()
    {
        parent::__construct();
    }   
	public function index($offset=0)
	{
        $this->load->view('home');
    }
    public function Artikel1()
	{
        $this->load->view('artikel1');
    }
    public function Artikel2()
	{
        $this->load->view('artikel2');
    }
    public function Artikel3()
	{
        $this->load->view('artikel3');
    }
    public function Artikel4()
	{
        $this->load->view('artikel4');
    }
    public function Artikel5()
	{
        $this->load->view('artikel5');
    }
    public function Artikel6()
	{
        $this->load->view('artikel6');
    }
    public function Jadwal()
    {
        $this->load->view('jadwalperkuliahan');
    }

    public function Nilai()
    {
        $this->load->view('lihatnilai');
    }
    public function Login()
    {
        $this->load->view('formlogin');
    }
    public function insertnilai()
    {
        $this->load->view('insertnilai');
    }
     public function insertjadwal()
    {
        $this->load->view('insertjadwal');
    }
}
?>