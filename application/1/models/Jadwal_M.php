<?php 
	class Jadwal_M extends CI_Model{

		public function get_all_event()
		{
			
			$query = $this->db->get('matkul');
			return $query->result();
		}


		 public function edit_data($item){
	    $table = 'matkul';
        $param = array(
            "Indeks"=>$item['Indeks'],
        );
        $this->db->where('id', $item['id']);
        $update = $this->db->update($table,$param);
        if ($update){
            return TRUE;
        }else{
            return FALSE;
        }

    }
	}

?>