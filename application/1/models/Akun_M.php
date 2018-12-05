<?php
/**
 * Created by PhpStorm.
 * User: Kacangrebus
 * Date: 21/04/2018
 * Time: 2:30
 */

class Akun_M extends CI_Model
{


    public function login_akun($data){
        $this->db->where('user_email',$data['user_email']);
        $this->db->where('user_password',$data['user_password']);

        $result = $this->db->get('user');
        if($result->num_rows()==1){
            return $result->row(0);
        }else{
            return false;
        }
    }
}