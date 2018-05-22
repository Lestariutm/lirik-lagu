<?php 
	class korea_lagu extends CI_Controller{
		public function index(){
			$data['content']="Admin/lagu_korea";
			$this->load->view('Admin/admin',$data);
		}
	}
 ?>