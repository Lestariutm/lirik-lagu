	<?php 
		class Dangdut_lagu extends CI_Controller{
			public function index(){
				$data['query']=$this->db->get('lagu_dangdut');
				$data['content']="Admin/dangdut/lagu_dangdut";
				$this->load->view('Admin/admin',$data);
			}
			function add(){
				$data['content']='Admin/dangdut/add_dangdut';
				$this->load->view('Admin/admin',$data);
			}
			function save(){
				$judul = $this->input->post('judul_lagu');
				$artis = $this->input->post('artis');
				$lirik = $this->input->post('lirik_lagu');
				$pencipta = $this->input->post('pencipta_lagu');

				// $config = array(
				// 	'upload_path'=> './upload/lagu_dangdut/',
				// 	'allowed_types'=> 'mp3',   	   	

				// );

				// 	$this->load->library('upload',$config);
				//     $this->upload->initialize($config);
				//      if ($this->upload->do_upload('lagu')) { 
				//     $data=array(
				// 	'judul_lagu'=>$judul,
				// 	'artis'=>$artis,
				// 	'lirik_lagu'=>$lirik,
				// 	'pencipta_lagu'=>$pencipta,
				// 	'lagu'=>$this->upload->data('file_name') 
				// );
				// 		$this->db->insert('lagu_dangdut',$data);
				// 		redirect('Dangdut_lagu');

				// 	}else{
				// 		echo $this->upload->display_errors();
				// 	}

				// $file_name = $_FILES['lagu']['name'];
				// $destination = $_FILES['lagu']['tmp_name'];
				
				// move_uploaded_file($destination, './upload/lagu_dangdut/' . $file_name);
				echo json_encode($_FILES['lagu']);
				}
				function edit($id){
					$data['query']=$this->db->get_where('lagu_dangdut',['dangdut_id'=>$id])->row();
					$data['content']='Admin/dangdut/edit_dangdut';
					$this->load->view('Admin/admin',$data);
				}
				function update($id){
				$id = $this->input->post('id');
				$judul = $this->input->post('judul_lagu');
				$artis = $this->input->post('artis');
				$lirik = $this->input->post('lirik_lagu');
				$pencipta = $this->input->post('pencipta_lagu');

				// $config = array(
				// 	'upload_path' => './upload/lagu_dangdut/',
				// 	'allowed_types' => 'mp3' 
				// );

				// $this->load->library('upload',$config);
				$lagu = $_FILES['lagu']['name'];
				echo $lagu;
				// if($this->upload->do_upload('lagu')) {
				// $data=array(
				// 	'judul_lagu'=>$judul,
				// 	'artis'=>$artis,
				// 	'lirik_lagu'=>$lirik,
				// 	'pencipta_lagu'=>$pencipta,
				// 	'lagu'=>$this->upload->data('file_name') 
				// );
				// 		$this->db->where('dangdut_id',$id);
				// 		$this->db->update('lagu_dangdut',$data);
				// 		redirect('Dangdut_lagu');

				// 	}else{
				// 		echo $this->upload->display_errors();
				// 	}

			}
			function hapus($id){
				if($this->db->delete('lagu_dangdut',['dangdut_id'=>$id])){
				?>
					<script type="text/javascript">
						alert("data berhasil di hapus");
						window.location="<?php echo base_url('index.php/Dangdut_lagu'); ?>";
					</script>				
				<?php
			}
		}
		}	
	?>