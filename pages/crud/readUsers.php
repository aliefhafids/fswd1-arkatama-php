<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/framework/css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>
    
<h1>Data Pengguna</h1>
    <?php
// Koneksi ke database
require_once 'koneksi.php';

// Query untuk menampilkan data
$query = "SELECT * FROM users";

// Eksekusi query
$result = mysqli_query($conn, $query);
?>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Action</th>
                <th scope="col">Avatar</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Role</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
                $i=1;
                foreach ($rows as $row) {
                    echo "<tr>
                            <th scope='row'>" .$i++. "</td>
                            <td>".
                                "<button type='button' class='btn btn-info'>
                                    <a class='text-light'>Detail</a>
                                </button>
                                <button type='button' class='btn btn-warning'>
                                    <a class='text-light' href=edit.php?id=".$row['id'].">Edit</a>
                                </button>
                                <button type='button' class='btn btn-danger'>
                                    <a class='text-light' href=delete.php?id=".$row['id'].">Delete</a>
                                </button>
                                " 
                                ."
                            </td>
                            <td> <img src=../../assets/img/". $row["avatar"] . " width=100px></td>
                            <td>" . $row["name"] . "</td>
                            <td>" . $row["email"] . "</td>
                            <td>" . $row["phone"] . "</td>
                            <td>" . $row["role"] . "</td>
                        </tr>";
                }
            ?>
        </tbody>
    </table>
    <button type="button" class="btn btn-primary"><a class="text-light" href="inputUsers.php">Tambah Data</a></button>

    <!-- Tutup koneksi -->
    <?php
mysqli_close($conn);
?>

</body>

</html>