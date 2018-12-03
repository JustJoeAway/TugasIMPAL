<?php 
	class Nilai_C extends CI_Controller{
		public function index()
		{

			$this->load->model('Nilai_M');
			$data['query'] = $this->Nilai_M->get_all_event();
			$this->load->view('lihatnilai',$data);

			
		}
		public function edit($data){
        $data = $this->input->post(null,TRUE);
        $edit = $this->Nilai_M->edit_data($data);
        if($edit){
            $this->session->set_flashdata('alert', 'sukses_edit');
            redirect('home/index');
        }else{
            echo "<script>alert('Gagal Edit Data');</script>";

        }
    }
    public function hapus($id)
    {
       $this->load->model('Nilai_M');
		$this->Nilai_M->delete_data($id);
			redirect('Nilai_C');

        }
    }
	
?>