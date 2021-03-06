<!DOCTYPE html>
<html lang="en">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ADM - Update User</title>
    <!-- CSS only -->
    <!-- link berfungsi untuk mengimport library dari bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
</head>
<style>
* {
    font-family: 'Josefin Sans', sans-serif;
}

.warning {
    color: #ff0000;
}

.card {
    box-shadow: 0 15px 25px rgba(0, 0, 0, 0.5);
}

.body {
    background: #e4e6c3;
}
</style>

<body class="body">
    <?php include "adm-navigation.php" ?>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card mt-4 rounded-4 p-2" style="background-color: #899878;">
                <div class="card-body text-light">
                    <!-- pembuatan form yang digunakan untuk memasukkan data -->
                    <form action="database/update-user.php" method="POST">
                        <h2 class="text-center mb-4">UPDATE USER</h2>
                        <?php
                            $id_user = $_GET['id_user'];
                            include "database/connect.php";     
                            $query = mysqli_query($conn, "SELECT * FROM tb_user where id_user = $id_user");
                            while ($data = mysqli_fetch_array($query)) {
                        ?>

                        <input type="hidden" name="id_user" value="<?php echo $data['id_user']; ?>">

                        <!-- === NAMA USER === -->
                        <div class="form-group row mb-3">
                            <label for="name" class="col-sm-3 col-form-label">Nama User</label>
                            <div class="col-sm-9"><input required type="text" name="name" class="form-control" id="name"
                                    value="<?php echo $data['name']; ?>" /> <span class="warning"></span>
                            </div>
                        </div>

                        <!-- === ALAMAT -->
                        <div class="form-group row mb-3">
                            <label for="address" class="col-sm-3 col-form-label">Alamat</label>
                            <div class="col-sm-9"><input required type="text" name="address" class="form-control"
                                    id="address" value="<?php echo $data['address']; ?>" /> <span
                                    class="warning"></span>
                            </div>
                        </div>

                        <!-- === EMAIL -->
                        <div class="form-group row mb-3">
                            <label for="email" class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9"><input required type="text" name="email" class="form-control"
                                    id="email" value="<?php echo $data['email']; ?>" /> <span class="warning"></span>
                            </div>
                        </div>

                        <!-- === ROLE === -->
                        <div class="form-group row mb-3">
                            <label for="role" class="col-sm-3">Role</label>
                            <div class="col-sm-3">
                                <select name="role" class="form-select form-select-sm " id="role"
                                    aria-label=".form-select-lg example">
                                    <option value="Admin">Admin</option>
                                    <option value="Cashier">Cashier</option>
                                </select>
                            </div>
                        </div>

                        <!-- === USERNAME -->
                        <div class="form-group row mb-3">
                            <label for="username" class="col-sm-3 col-form-label">Username</label>
                            <div class="col-sm-9"><input required type="text" name="username" class="form-control"
                                    id="username" value="<?php echo $data['username']; ?>" /> <span
                                    class="warning"></span>
                            </div>
                        </div>

                        <!-- === PASSWORD -->
                        <div class="form-group row mb-3">
                            <label for="password" class="col-sm-3 col-form-label">Password</label>
                            <div class="col-sm-9"><input required type="text" name="password" class="form-control"
                                    id="password" value="<?php echo $data['password']; ?>" /> <span
                                    class="warning"></span></div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-9">
                                <!-- tombol submit untuk melakukan perintah selanjutnya yaitu dialihkan
                                    ke file php untuk memasukkan data ke dalam database -->
                                <button type="submit" class="btn btn-light p-2">Update</button>
                            </div>
                        </div>
                        <?php } ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>