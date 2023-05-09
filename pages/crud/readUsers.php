<html>

<head>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
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
                <td><?= $row['action'] ?></td>
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

<script>
    $(document).ready(function () {
        $('#myTable').DataTable();
    });
</script>

</html>