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
    <div class="container mt-5">
        <form method="post" action="createUsers.php">
            <div class="form-row mb-3">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control mt-2" name="name" id="name" placeholder="Name">
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
                        <input type="password" class="form-control mt-2" name="password" id="password">
                    </div>
                </div>
            </div>
            <div class="form-row mb-3">
                <div class="row">
                    <div class="col">
                        <label for="email">Email</label>
                        <input type="email" class="form-control mt-2" name="email" id="email" placeholder="admin@gmail.com">
                    </div>
                    <div class="col">
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control mt-2" name="phone" id="phone">
                    </div>
                </div>
            </div>
            <div class="form-group mb-3">
                <label for="address">Address</label>
                <textarea class="form-control mt-2" name="address" id="adress" rows="4"></textarea>
            </div>

            <div class="custom-file">
                <input type="file" class="custom-file-input" name="avatar" id="avatar">
                <label class="custom-file-label" for="avatar">Choose file</label>
            </div>

            <button type="submit" class="btn btn-primary mt-4" value="simpan">Submit</button>
        </form>
    </div>
</body>

</html>