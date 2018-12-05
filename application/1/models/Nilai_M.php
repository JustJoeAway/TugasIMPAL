<?php 
	class Nilai_M extends CI_Model{

		public function get_all_event()
		{
			$query = $this->db->get('matkul');
			return $query->result();
		}	
	
	public function edit_data($data){
	    $table = 'matkul';
        $param = array(
            "id" => $data['nim'],
            "Indeks"=>$data['Indeks']
        );
        
        $this->db->where('id', $param['id']);
        $update = $this->db->update($table,$param);
        if ($update){
            return TRUE;
        }else{
            return FALSE;
        }

    }
    public function delete_data($id){
        
       $this->db->where('id', $id);
       $this->db->delete('matkul');

        
    }
    
}
?>