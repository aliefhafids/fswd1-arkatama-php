<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read Products</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
    </style>
</head>

<body>
    <?php
    // Koneksi ke database
    require_once('koneksi.php');

    // Query untuk mengambil data
    $query = 'SELECT products.id, products.category_id, categories.name as category_name, products.name, products.price, products.status
    FROM products
    JOIN categories ON products.category_id = categories.id Order BY id LIMIT 40;';

    // Eksekusi query
    $result = mysqli_query($conn, $query);
    ?>

    <!-- Menampilkan data -->

    <table id="mytable">
        <thead>
            <th>Product ID</th>
            <th>Category Name</th>
            <th>Product Name</th>
            <th>Price</th>
            <th>Status</th>
        </thead>
        <tbody>
            <?php 
        while ($row = mysqli_fetch_assoc($result)) :
            ?>
            <tr>
                <td><?= $row['id']; ?></td>
                <td><?= $row['category_name']; ?></td>
                <td><?= $row['name']; ?></td>
                <td><?= $row['price']; ?></td>
                <td><?= $row['status']; ?></td>
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