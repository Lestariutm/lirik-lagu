<?php 
	class Pop_lagu extends CI_Controller{
		public function index(){
			$data['content']="Admin/lagu_pop";
			$this->load->view('Admin/admin',$data);
		}
	}
 ?>