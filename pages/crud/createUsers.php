<?php
// Koneksi ke database
require_once 'koneksi.php';

// Ambil data dari form
$id = $_POST['id'];
$avatar = $_POST['avatar'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$role = $_POST['role'];

// Query untuk menambah data
$query = "INSERT INTO users (id, avatar, name, email, phone, role) VALUES ('$id', '$avatar', '$name', '$email', '$phone', '$role')";

// Eksekusi query
if (mysqli_query($conn, $query)) {
    echo 'Data berhasil ditambahkan';
} else {
    echo 'Error: ' . mysqli_error($conn);
}

// Tutup koneksi
mysqli_close($conn);
?>