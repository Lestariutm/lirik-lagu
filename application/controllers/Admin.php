<?php 
	class Admin extends CI_Controller{
		public function index(){
			$data['content']="Admin/dashboard";
			$this->load->view('Admin/admin',$data);
		}
	}
 ?>