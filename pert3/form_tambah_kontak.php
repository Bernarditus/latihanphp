<!DOCTYPE html>
<html>
<head>
	<title>Data Mahasiswa Kalbis</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" 
	integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" 
	crossorigin="anonymous">
</head>
<body>
<h1>Phone Book</h1>
<div id="menu">
	<ul>
		<li><a href="index.php">Kontak</a></li>
		<li><a href="kategori.php">Kategori</a></li>
	</ul>
</div>
<div id="konten">
	<h2>Tambah Kontak</h2>
	<?php
	$q2 = "SELECT * FROM kategori";
	$h2 = mysqli_query($db, $q2);
	?>
	<form action="proses_tambah_kontak.php" method="post" enctype="multipart/form-data">
	<tbody>
		Icon: 
		<input type="file" name="gambar" />
		</br>
		Nama:
		<input type="text" name="nama" />
		<br />
		Phone:
		<input type="text" name="phone" />
		<br />
		Email:
		<input type="text" name="email" />
		<br />
		Kategori:
		<select name="kategori"> 
		<?php
		while ($row = mysqli_fetch_array($h2)):; 
		?> <option value="<?php echo $row['id']; ?>"><?php echo $row['keterangan']; ?></option>
		<?php
			endwhile;
		?>
		<br />
		</select>
			<input type="hidden" name="id" value="<?php echo $row['id']; ?>" />
		<input type="submit" name="submit" value="Simpan" />
		
	</form>
	</tbody>
</div>
</body>
</html>