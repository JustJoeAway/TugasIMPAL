<?php
class Registrasi extends CI_Model
{
public function login_user($email,$pass){

  $this->db->select('*');
  $this->db->from('user');
  $this->db->where('user_email',$email);
  $this->db->where('user_password',$pass);

  if($query=$this->db->get())
  {
      return $query->row_array();
  }
  else{
    return false;
  }
  public function daftar_jadwal($data)
    {
      var_dump($data);
        $param = array(
            "nama_matkul"=>$data['matkul'],
            "jam"=>$data['jam'],
            "ruangan"=>$data['ruangan'],
            "kelas"=>$data['kelas'],
            "kode_matkul"=>$data['kodem'],
            "hari"=>$data['hari'],
            "status"=>$data['status']

        );

        $insert = $this->db->insert('jadwal', $param);

        if ($insert){
            return TRUE;
        }else{
            return FALSE;
        }
    }
}
?>  