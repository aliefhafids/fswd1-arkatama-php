<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read Categories</title>
</head>

<body>
    <?php
    // Koneksi ke database
    require_once('koneksi.php');

    // Query untuk mengambil data
    $query = 'SELECT * FROM categories';

    // Eksekusi query
    $result = mysqli_query($conn, $query);
    ?>

    <!-- Menampilkan data -->

    <table id="mytable">
        <thead>
            <th>Category ID</th>
            <th>Name Category</th>
            <th>Created at</th>
            <th>Updated at</th>
        </thead>
        <tbody>
            <?php 
        while ($row = mysqli_fetch_assoc($result)) :
            ?>
            <tr>
                <td><?= $row['id']; ?></td>
                <td><?= $row['name']; ?></td>
                <td><?= $row['created_at']; ?></td>
                <td><?= $row['updated_at']; ?></td>
            </tr>
            <?php endwhile;
        ?>

        </tbody>

    </table>

    <!-- Tutup koneksi -->
    <?php
mysqli_close($conn);
?>

</body>
<script>
    $(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
</html>