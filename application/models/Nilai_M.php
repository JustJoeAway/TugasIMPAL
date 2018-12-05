<?php 
	class Nilai_M extends CI_Model{

		public function get_all_event()
		{
			$query = $this->db->get('nilai');
			return $query->result();
		}	
	
	public function edit_data($data){
	    $table = 'nilai';
        $param = array(
            "nim" => $data['nim'],
            "nilai"=>$data['nilai'],
            "indeks"=>$data['indeks']
        );
        echo $param;
        $this->db->where('nim', $param['nim']);
        $update = $this->db->update($table,$param);
        if ($update){
            return TRUE;
        }else{
            return FALSE;
        }

    }
    public function hapus_data($id){
        $where = array('nim' => $id['nim']);
        $this->db->where('nim',$where['nim']);
        $this->db->delete('nilai');
    }
    
}
?>