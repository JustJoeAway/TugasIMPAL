<?php
/**
 * Created by PhpStorm.
 * User: Kacangrebus
 * Date: 21/04/2018
 * Time: 2:30
 */

class Akun_M extends CI_Model
{

public function save_data($data)
	{
		$param = array(
					"nim"=>$data['nim'],
					"nama"=>$data['nama'],
					"nilai"=>$data['nilai'],
					"nilai"=>$data['indeks']
					
		);
		$insert = $this->db->insert('nilai', $param);
        if ($insert){
            return TRUE;
        }else{
            return FALSE;
        }
	}

}