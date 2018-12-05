<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class insertjadwal_C extends CI_Controller {
        public function index()
        {
            $this->load->view('insertjadwal');
            $this->load->model('insertjadwal_M');
            
                       
        }
        public function add()
	{
        $this->load->model('insertjadwal_M');
		$data = $this->input->post(null,TRUE);
		$insert = $this->insertjadwal_M->save_data($data);
        if($insert){
            $this->session->set_flashdata('alert', 'sukses_insert');
            redirect('Jadwal_C');
        }else{
            echo "<script>alert('Gagal Menambahkan Data');</script>";
        }

	}

}
?>
