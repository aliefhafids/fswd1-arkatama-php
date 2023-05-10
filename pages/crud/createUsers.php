<?php
// Koneksi ke database
require_once 'koneksi.php';

// Ambil data dari form
$name = $_REQUEST['name'];
$avatar = $_REQUEST['avatar'];
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];
$phone = $_REQUEST['phone'];
$role = $_REQUEST['role'];
$address = $_REQUEST['address'];

// Query untuk menambah data
$query = "INSERT INTO users (name, avatar, email, password, phone, role, address) 
VALUES ('$name', '$avatar', '$email', '$password', '$phone', '$role', '$address')";

// Eksekusi query
if (mysqli_query($conn, $query)) {
    echo 'Data berhasil ditambahkan';
} else {
    echo 'Error: ' . mysqli_error($conn);
}

// Tutup koneksi
mysqli_close($conn);
?>