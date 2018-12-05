<?php 
	class Nilai_C extends CI_Controller{
		public function index()
		{

			$this->load->model('Nilai_M');
			$data['query'] = $this->Nilai_M->get_all_event();
			$this->load->view('lihatnilai',$data);

			
		}
		public function edit(){
        $this->load->model('Nilai_M');
        $data = $this->input->post();
        $edit = $this->Nilai_M->edit_data($data);
        if($edit){
            $this->session->set_flashdata('alert', 'sukses_edit');
            redirect('Nilai_C');
        }else{
            echo "<script>alert('Gagal Edit Data');</script>";

        }
    }
     public function hapus()
     {
        $data = $this->input->post();
        $this->load->model('Nilai_M');;
        $this->Nilai_M->hapus_data($data);
        redirect('Nilai_C');
     }
}
	
?>