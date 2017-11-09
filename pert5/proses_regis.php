<?php

$username = $_POST['username'];
$password = $_POST['password'];

$enc_pass = password_hash($password,PASSWORD_BCRYPT);

$koneksi = mysqli_connect("localhost", "root", "", "kalbis_web");