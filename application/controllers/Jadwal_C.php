<?php 
	class Jadwal_C extends CI_Controller{
		public function index()
		{

			$this->load->model('Jadwal_M');
			$data['query'] = $this->Jadwal_M->get_all_event();
			$this->load->view('jadwalperkuliahan',$data);

			
		}
		public function edit()
    {
        $data = $this->input->post(null,TRUE);
        $edit = $this->Jadwal_M->edit_data($data);
        if($edit){
            $this->session->set_flashdata('alert', 'sukses_edit');
            redirect('Jadwal_C');
        }else{
            echo "<script>alert('Gagal Edit Data');</script>";

        }
    }

	}
?>