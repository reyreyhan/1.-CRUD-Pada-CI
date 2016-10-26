<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<center>
		<h3>Edit Data</h3>
	</center>
	<?php foreach($ndelok as $u){ ?>
	<form action="<?php echo base_url(). 'index.php/helloworld/apdet'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>Nama</td>
				<td>
					<input type="hidden" name="no_induk" value="<?php echo $u->no_induk ?>">
					<input type="text" name="nama" value="<?php echo $u->nama ?>">
				</td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat" value="<?php echo $u->alamat ?>"></td>
			</tr>
			<tr>
				<td>Jurusan</td>
				<td><input type="text" name="jurusan" value="<?php echo $u->jurusan ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>
			</tr>
		</table>
	</form>	
	<?php } ?>
</body>
</html>