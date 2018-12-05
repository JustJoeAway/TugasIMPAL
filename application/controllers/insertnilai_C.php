<?php


class insertnilai_C extends CI_Controller {
        public function index()
        {$this->load->model('insertnilai_M');
            $this->load->view('insertnilai');
            
            
            

            
        }
         public function add()
	{
        $this->load->model('insertnilai_M');
		$nim=$this->input->post('nim');
        $nama=$this->input->post('nama');
        $nilai=$this->input->post('nilai');
        $indeks=$this->input->post('indeks');
        $this->insertnilai_M->save_data($nim,$nama,$nilai,$indeks);
        redirect('Nilai_C');

	}

}

