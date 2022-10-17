<?php

$servername = "localhost";
$database = "cctvlab";
$username = "root";
$password = "";

$con = mysqli_connect($servername, $username, $password, $database);
// // mengecek koneksi
// if (!$conn) {
//     die("Koneksi gagal: " . mysqli_connect_error());
// }
// echo "Koneksi berhasil";
// mysqli_close($conn);

// function submit($data)
// {
//     global $con;

//     $username = strtolower(stripslashes($data["username"]));
//     $password = mysqli_real_escape_string($con, $data["password"]);
// }
