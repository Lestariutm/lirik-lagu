<?php 
	class Barat_lagu extends CI_Controller{
		public function index(){
			$data['content']="Admin/lagu_barat";
			$this->load->view('Admin/admin',$data);
		}
	}
 ?>