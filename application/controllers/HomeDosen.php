<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//session_start(); //we need to call PHP's session object to access it through CI
class HomeDosen extends CI_Controller {

 function __construct()
 {
   parent::__construct();
 }


function edit_content()
    {
        parent::__construct();
        $this->load->model('user_matkul');
        $result = $this->user_matkul->cekMatkul($username);
    }


 function index()
 {
   if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
     $data['username'] = $session_data['username'];
     $data['level'] = $session_data['level'];
     $username = $data['username'];
     $this->load->model('user_matkul');
     $result = $this->user_matkul->cekMatkul($username);
     $this->load->vars('r', $result);
     //data['result'] = $result;
     $this->load->model('MateriMatkul');
     $hasil = $this->MateriMatkul->cekMateri($username);
     $this->load->vars('h', $hasil);
     $this->template->load('Static-Dosen','Dosen-Dashboard', $data);
   }
   else
   {
     //If no session, redirect to login page
     redirect('login', 'refresh');
   }
 }

 function logout()
 {
   $this->session->unset_userdata('logged_in');
   session_destroy();
   redirect('HomeDosen', 'refresh');
 }
 
}

?>