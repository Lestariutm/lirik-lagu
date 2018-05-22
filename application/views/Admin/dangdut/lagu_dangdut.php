<style type="text/css">
	tr,td,th{
		text-align: center;
	}
</style>

<label>Lagu Dangdut</label><br> <br>
<a href="<?php echo base_url('index.php/Dangdut_lagu/add'); ?>" class="btn btn-info">Tambahkan</a>
<br><br>
<table class="table">
	<thead>
		<th>no</th>
		<th>user_id</th>
		<th>nama artis</th>
		<th>Judul Lagu</th>
		<th>Aksi</th>
	</thead>
	<tbody>
		<?php
			if ($query->num_rows()>0){
				$no=0;
				foreach ($query->result() as $row){
				$no++;
				echo' 
				<tr>
					<td>'.$no.'</td>
					<td>'.$row->dangdut_id.'</td>
					<td><src="'.base_url('upload/lagu_dangdut/'.$row->lirik_lagu).'"></td>
					<td><button class="btn btn-primary"><a href="'.base_url('Dangdut_lagu/edit/'.$row->dangdut_id).'" class="fafa-pencil-square-o" style="text-decoration: none; color:white;"></a></button>
					<a href="'.base_url('Dangdut_lagu/hapus/'.$row->dangdut_id).'" class="btn btn-danger"><i class="fafa-trash"></i></a></td>
				</tr>';
					
				}
			}
			?>

	</tbody>
</table>