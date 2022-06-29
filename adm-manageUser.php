<html lang="en">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USER</title>
</head>

<style>
* {
    font-family: 'Josefin Sans', sans-serif;
}

.body {
    background: #e4e6c3;
}
</style>

<body class="body">
    <!-- ini import navbar -->
    <?php include "adm-navigation.php" ?>
    <!-- ini untuk tabel product -->
    <div class="row justify-content-center">
        <div class="col-sm-11">
            <h2>Daftar User</h2>
            <!-- ini untuk search user -->
            <div class="table table-hover">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <td scope="col">ID</td>
                            <td scope="col">Nama</td>
                            <td scope="col">Alamat</td>
                            <td scope="col">Email</td>
                            <td scope="col">Role</td>
                            <td scope="col">Username</td>
                            <td scope="col">Password</td>
                            <td scope="col">Action</td>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        <?php
                            include "database/connect.php";

                            $query = mysqli_query($conn, 'SELECT * FROM tb_user');
                            while ($data = mysqli_fetch_array($query)) {
                        ?>
                        <tr>
                            <td><?php echo $data['id_user'] ?></td>
                            <td><?php echo $data['name'] ?></td>
                            <td><?php echo $data['address'] ?></td>
                            <td><?php echo $data['email'] ?></td>
                            <td><?php echo $data['role'] ?></td>
                            <td><?php echo $data['username'] ?></td>
                            <td><?php echo $data['password'] ?></td>
                            <td class="update">
                                <a class="btn btn-primary m-1"
                                    href="adm-updateUser.php?id_user=<?php echo $data['id_user']; ?>"><img
                                        src="img\lucide_pencil.svg" alt=""></a>
                                <a class="btn btn-primary m-1"
                                    href="database/delete-user.php?id_user=<?php echo $data['id_user']; ?>"><img
                                        src="img\octicon_trash-16.svg" alt=""></a>
                            </td>
                        </tr>
                        <?php 
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>

</html>