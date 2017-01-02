<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<center>
		<h3>Tambah data baru</h3>
	</center>
	<?php echo form_open_multipart('/helloworld/mlebu'); ?>
	<form action="post" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<td>Jurusan</td>
				<td><input type="text" name="jurusan"></td>
			</tr>
			<tr>
				<td>Upload Gambar disini</td>
				<td>
                <input id="file" type="file" name="userfile">
                <input hidden name="foto" id="foto" type="text" />

                <script type="text/javascript">
                document.getElementById('file').onchange = uploadOnChange;

                function uploadOnChange() {
                    var foto = this.value;
                    var lastIndex = foto.lastIndexOf("\\");
                    if (lastIndex >= 0) {
                        foto = foto.substring(lastIndex + 1);
                    }
                    document.getElementById('foto').value = foto;
                }
                </script>
                </td> 
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Tambah"></td>
			</tr>
		</table>
	</form>	
	<?php echo form_close();?>
</body>
</html>