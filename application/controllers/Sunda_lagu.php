<?php 
	class Sunda_lagu extends CI_Controller{
		public function index(){
			$data['content']="Admin/lagu_sunda";
			$this->load->view('Admin/admin',$data);
		}
	}
 ?>