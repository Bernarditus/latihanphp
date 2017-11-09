<?php // filename: proses_login.php

$user = $_POST ['username'];
$password = $_POST['password'];

$k = mysqli_connect('lcalhost', 'root', '', 'kalbis_web');

$query = "SELECT * FROM users WHERE username = '$user'";
$hasil = mysqli_query($k, $query);
$row = mysqli_fetch_assoc($hasil);

if($row
&& password_verify($pass, $row['password'])){
	// kalo ada, maka cek passwordnya
	$_SESSION['login'] = 1;
	header('Location: admin.php');
}else{
	// jika ga ada, username salah
	//DITOLAK
	echo"DITOLAK";
}