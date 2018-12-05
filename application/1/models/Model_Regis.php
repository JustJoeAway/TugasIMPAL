<?php
class Registrasi extends CI_Model
{
    public function daftar_akun($data)
    {
    	var_dump($data);
        $param = array(
            "nama_lengkap"=>$data['namalgkp'],
            "jenis_kelamin"=>$data['gender'],
            "no_telpon"=>$data['telfon'],
            "user_email"=>$data['email'],
            "user_password"=>$data['password'],
            "alamat"=>$data['alamat']
        );

        $insert = $this->db->insert('user', $param);

        if ($insert){
            return TRUE;
        }else{
            return FALSE;
        }
    }




?>