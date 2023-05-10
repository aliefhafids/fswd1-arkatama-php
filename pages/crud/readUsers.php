<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
// Koneksi ke database
require_once 'koneksi.php';

// Query untuk menampilkan data
$query = "SELECT * FROM users";

// Eksekusi query
$result = mysqli_query($conn, $query);
?>
    <table id="myTable">
        <thead>
            <th>ID</th>
            <th>Action</th>
            <th>Avatar</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Role</th>
        </thead>
        <tbody>
            <?php  
while ($row = mysqli_fetch_assoc($result)) : //mysqli_fetch_assoc
    ?>
            <tr>
                <td><?= $row['id'] ?></td>
                <td>
                    <a href='edit.php?id=$row[id]'>Edit</a> |
                    <a href='delete.php?id=$row[id]'>Delete</a>
                </td>
                <td><?= $row['avatar'] ?></td>
                <td><?= $row['name'] ?></td>
                <td><?= $row['email'] ?></td>
                <td><?= $row['phone'] ?></td>
                <td><?= $row['role'] ?></td>
            </tr>

            <?php endwhile; ?>

        </tbody>

    </table>

    <!-- Tutup koneksi -->
    <?php
mysqli_close($conn);
?>

</body>

</html>