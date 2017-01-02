<!DOCTYPE html>
<html>
<head>	
</head>
<body>
	<center><?php echo anchor('helloworld/tambah/','Tambah Data'); ?></center>
	<table style="margin:20px auto;" border="1">
		<tr>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Jurusan</th>
			<th>Action</th>
		</tr>
		<?php

		foreach($tes as $u){ 
		?>
		<tr>
			<td><?php echo $u->nama ?></td>
			<td><?php echo $u->alamat ?></td>
			<td><?php echo $u->jurusan ?></td>
			<td>
			<img height="50" width="50" src="<?php echo base_url(). "foto/".$u->foto ?>">
			</td>			
			<td>
			<?php echo anchor('helloworld/edit/'.$u->no_induk,'Edit'); ?>
            <?php echo anchor('helloworld/hapus/'.$u->no_induk,'Hapus'); ?>
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>