<?php

class insertjadwal_M extends CI_Model
{

public function save_data($data)
	{
		$param = array(
					"Hari"=>$data['Hari'],
					"Nama_M"=>$data['Nama_M'],
					"Waktu"=>$data['Waktu'],
					"Ruangan"=>$data['Ruangan'],
					"SKS"=>$data['SKS'],
					"Kode_M"=>$data['Kode_M']
					
		);
		$insert = $this->db->insert('matkul', $param);
        if ($insert){
            return TRUE;
        }else{
            return FALSE;
        }
	}

}
?>