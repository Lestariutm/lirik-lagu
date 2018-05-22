<form action="<?php echo base_url('index.php/Dangdut_lagu/update'); ?>" method="POST" enctype="multipart/form-data">
	<center>Edit Lagu Dangdut</center>
<hr>
	<label>Judul Lagu</label><br>
	<input type="text" name="judul_lagu" class="from-control"><br>
	<label>Nama Artis</label><br>
	<input type="text" name="artis"><br>
	<label>Lagu</label><br><br>
	<input type="file" name="lagu"><br>
	<label>Pencipta</label><br>
	<input type="text" name="pencipta_lagu"><br>
	<label>Lirik</label> <br>
	<textarea cols="50" rows="5" name="lirik_lagu"></textarea> <br>
	<button class="btn btn-info">UPDATE</button>
</form>