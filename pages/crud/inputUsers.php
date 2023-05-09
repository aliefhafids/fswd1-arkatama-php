<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
<form>
    <div class="form-group">
        <form method="post" action="createUsers.php">
            <label for="id">ID : </label>
            <input type="text" id="id" name="id" required>

            <label for="avatar">Select a file:</label>
            <input type="file" id="avatar" name="avatar">

            <label for="name">Name : </label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email : </label>
            <input type="text" id="email" name="email" required>

            <label for="phone">Phone : </label>
            <input type="text" id="phone" name="phone" required>

            <label for="role">Role : </label>
            <select id="role" name="role">
                <option value="admin">Admin</option>
                <option value="staff">Staff</option>
            </select>

            <input type="submit" value="Simpan">
        </form>
    </div>
</form>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>
</html>