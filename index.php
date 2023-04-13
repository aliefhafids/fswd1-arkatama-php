<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <title>Biography</title>
</head>

<body>
    <div class="container">
        <img src="assets/img/profile.png" alt="profile">

        <?php
        $nama = "Maulana Alief Hafids";
        $ttl = "Malang, 20 Oktober 2002";
        $alamat = "Pakis, Malang";
        $hobby = "Jalan Jalan";
        $study = "Politeknik Negeri Malang | 2024";
        $prodi = "Sistem Informasi Bisnis";

        echo "Nama : $nama";
        echo "<br>";
        echo "Tempat, Tanggal Lahir : $ttl";
        echo "<br>";
        echo "Alamat : $alamat";
        echo "<br>";
        echo "Hobby : $hobby";
        echo "<br>";
        echo "Pendidikan : $study <br> $prodi";
        ?>
    </div>

</body>

</html>