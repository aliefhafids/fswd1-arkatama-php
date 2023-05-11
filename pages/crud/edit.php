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
    <?php

    // Koneksi ke database
    include 'koneksi.php';

    $id = $_GET['id'];

        $data = mysqli_query($conn,"SELECT * FROM users WHERE id='$id'");
        while ($d = mysqli_fetch_array($data)) {
    ?>
    <div class="container mt-5">
        <form action="update.php" method="post" enctype="multipart/form-data">
            <input class="form-control" type="hidden" name="id" id="id" value="<?php echo $d['id'] ?>">
            <div class="form-row mb-3">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input class="form-control mt-2" type="text" name="name" id="name" value="<?php echo $d['name'] ?>">
                </div>
            </div>

            <div class="form-row mb-3">
                <div class="row">
                    <div class="col">
                        <label for="role">Role</label>
                        <select name="role" id="role" class="form-control mt-2">
                            <option selected>Admin</option>
                            <option>Staff</option>
                        </select>
                    </div>
                    <div class="col">
                        <label for="password">Password</label>
                    <input class="form-control mt-2" type="password" name="password" id="name"
                        value="<?php echo $d['password'] ?>">
                    </div>
                </div>
            </div>

           <div class="form-row mb-3">
                <div class="row">
                    <div class="col">
                        <label for="email">Email</label>
                    <input class="form-control mt-2" type="email" name="email" id="email" value="<?php echo $d['email'] ?>">
                </div>
                <div class="col">
                        <label for="phone">Phone</label>
                    <input class="form-control mt-2" type="tel" name="phone" id="phone" value="<?php echo $d['phone'] ?>">
                </div>
                </div>
            </div>

            <div class="form-group mb-3">
                <label for="address">Address</label>
                <textarea class="form-control mt-2" name="address" id="address"
                rows="4"><?php echo $d['address'] ?></textarea>
            </div>

            <div class="custom-file">
                <input type="file" class="custom-file-input" name="avatar" id="avatar">
                <label class="custom-file-label" for="avatar">Choose file</label>
            </div>

            <?php 
                }
            ?>
            <button   class="btn btn-primary mt-4">Back</button>
            <button type="submit" name="submit" class="btn btn-primary mt-4">Submit</button>
        </form>
    </div>
</body>

</html>