<?php
// Koneksi ke database
include 'koneksi.php';

// Ambil data dari form
$id = $_GET['id'];

// Query untuk menampilkan data
$sql = "SELECT avatar FROM users WHERE id = '$id'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $image = $row['avatar']; 

    if (file_exists($image)) {
        unlink($image);
    }

// Query untuk menghapus data
$query = "DELETE FROM users WHERE id = '$id'";

// Eksekusi query
if (mysqli_query($conn, $query)) {
    echo 'Data berhasil dihapus';
    header("Location: readUsers.php");
} else {
    echo 'Error: ' . mysqli_error($conn);
}
}

// Tutup koneksi
mysqli_close($conn);
?>