<?php //filename: delete_kategori.php
// 1. Koneksi
include("koneksi.php");

$id = $_GET['id'];

$query = "DELETE FROM kategori WHERE id=$_GET[id]";
			
mysqli_query($db, $query);

header('Location: kategori.php');