<?php


class insertnilai_M extends CI_Model
{

	public function save_data($nim,$nama,$nilai,$indeks){
	    $hasil=$this->db->query("INSERT INTO nilai (nim,nama,nilai,indeks) VALUES ('$nim','$nama','$nilai','$indeks')");
        return $hasil;
	}

}