<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read</title>
</head>
<body>
    <?php
    // Koneksi ke database
    require_once('koneksi.php');

    // Query untuk mengambil data
    $query = 'SELECT * FROM products';

    // Eksekusi query
    $result = mysqli_query($conn, $query);
    ?>

    <!-- Menampilkan data -->

    <table id="mytable">
        <thead>
            <th>Product ID</th>
            <th>Category ID</th>
            <th>Product Name</th>
            <th>Product Price</th>
            <th>Status</th>
        </thead>
    <tbody>
        <?php 
        while ($row = mysqli_fetch_array ($result));
            ?>
            <tr>
                <td><?php echo $row['product_id']; ?></td>
                <td><?php echo $row['category_id']; ?></td>
                <td><?php echo $row['product_name']; ?></td>
                <td><?php echo $row['product_price']; ?></td>
                <td><?php echo $row['status']; ?></td>  
        </tr>
</body>
</html>