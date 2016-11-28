<?php
Class MateriMatkul extends CI_Model
{
 function cekMateri($username)
 {
   $this-> db->select('user.id_user, 
                   user.username, 
                   user_matkul.id_user, 
                   user_matkul.kode_matkul,  
                   materi.judul,materi.filename,materi.location');
    $this-> db->from('user');
    $this-> db-> join('user_matkul', 'user.id_user= user_matkul.id_user');
    $this-> db-> join('materi', 'user_matkul.kode_matkul= materi.kode_matkul');
    $this -> db -> where('user.username', $username);
    $q = $this->db->get();
    //$result = $q->row();
    //return $result->nama_matkul; 
    return $q->result();
 }
}
?>