<?php 
	class Jadwal_M extends CI_Model{

		public function get_all_event()
		{
			$this->db->limit(20);
			$query = $this->db->get('matkul');
			return $query->result();
		}


        public function edit_data($data){
        $table = 'matkul';
        $param = array(
            "Kode_M" => $data['kodem'],
            "Waktu"=>$data['waktu'],
            "Ruangan"=>$data['ruangan']
        );
        $this->db->where('Kode_M', $param['Kode_M']);
        $update = $this->db->update($table,$param);
        if ($update){
            return TRUE;
        }else{
            return FALSE;
        }

    }
    public function hapus_data($id){
        $where = array('Kode_M' => $id['Kode_M']);
        $this->db->where('Kode_M',$where['Kode_M']);
        $this->db->delete('matkul');
    }

    }

?>