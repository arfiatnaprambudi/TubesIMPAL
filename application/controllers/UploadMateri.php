<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UploadMateri extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	 function __construct()
 {
   parent::__construct();
 }

 function index()
 {
    
   if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
     $data['username'] = $session_data['username'];
     $data['level'] = $session_data['level'];
     $this->template->load('Static-Dosen','Dosen-UploadMateri', $data);
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
   redirect('home', 'refresh');
 }

public function upload_process(){
		$session_data = $this->session->userdata('logged_in');
		$data['username'] = $session_data['username'];
     	$data['level'] = $session_data['level'];

		$config['upload_path'] = './materi/';
		$config['allowed_types'] = 'doc|docx|pdf';
		$config['max_size']	= '100000'; //in kb
		$config['overwrite']= FALSE;

 
		$this->upload->initialize($config);
 
		//if upload failed
		if ( ! $this->upload->do_upload('materi')){
 
			$data['message'] =  $this->upload->display_errors();
			$this->template->load('Static-Dosen','Dosen-UploadMateri', $data);
		//if upload success
		}else{
			$data_insert = array(
					            'judul' => $this->input->post('judul'),
					            'kode_matkul' => $this->input->post('kode'),
					            'filename' => $this->upload->data('file_name'),
					            'location' => $this->upload->data('file_path')
					        );
			//query to insert into myupload table
			$this->db->insert('materi', $data_insert);
 
			$data['message'] =  'Your file was successfully uploaded!';
			$this->template->load('Static-Dosen','Dosen-UploadMateri', $data);
		}
	}


}