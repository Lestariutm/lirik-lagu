<?php 
	class Reggae_lagu extends CI_Controller{
		public function index(){
			$data['content']="Admin/lagu_reggae";
			$this->load->view('Admin/admin',$data);
		}
	}
 ?>