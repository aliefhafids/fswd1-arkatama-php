<?php

function insert_category($id, $name, $created_at, $updated_at) {
require_once 'koneksi.php';

    // Prepare and bind statement
    $query = $conn->prepare("INSERT INTO categories (id, name, created_at, updated_at) VALUES (?, ?, ?, ?)");
    $query->bind_param("ssss", $id, $name, $created_at, $updated_at);

    // Execute statement and get last insert ID
    $query->execute();
    // Close statement and connection
    mysqli_close($conn);
}

insert_category('11', 'Kategori 11', '2023-04-01 15:00:00', '2023-04-01 15:00:00');


function insert_products($id, $category_id, $name, $description, $price, $status, $created_at, $updated_at, $created_by, $verified_at, $verified_by) {
    require_once 'koneksi.php';
    
        // Prepare and bind statement
        $query = $conn->prepare("INSERT INTO products 
        (id, category_id, name, description, price, status, created_at, updated_at, created_by, verified_at, verified_by ) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $query->bind_param("sssssssssss", $id, $category_id, $name, $description, $price, $status, $created_at, $updated_at, $created_by, $verified_at, $verified_by);
    
        // Execute statement and get last insert ID
        $query->execute();
        // Close statement and connection
        mysqli_close($conn);
    }

insert_products(31, 1, 'Produk 31', 'Deskripsi Produk 32', 40000, 'rejected', '2023-04-01 15:00:00', '2023-04-01 15:00:00', 1, '2023-04-01 15:00:00', 1);

?>