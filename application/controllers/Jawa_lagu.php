<?php 
	class Jawa_lagu extends CI_Controller{
		public function index(){
			$data['content']="Admin/lagu_jawa";
			$this->load->view('Admin/admin',$data);
		}
	}
 ?>