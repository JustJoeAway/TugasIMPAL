<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
        public function index()
        {

            $this->load->model('insertnilai_M');
            $data['query'] = $this->insertnilai_M->get_all_event();
            $this->load->view('insertnilai',$data);

            
        }
    public function add()
	{
		$data = $this->input->post(null,TRUE);
		$insert = $this->insertnilai_M->save_data($data);
        if($insert){
            $this->session->set_flashdata('alert', 'sukses_insert');
            redirect('lihatnilai');
        }else{
            echo "<script>alert('Gagal Menambahkan Data');</script>";
        }

	}

}
