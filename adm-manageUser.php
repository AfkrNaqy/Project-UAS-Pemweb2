<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- ini import navbar -->
    <?php include "adm-navigation.php" ?>
    <!-- ini untuk tombol search dll -->
    <div class="act"></div>
    <!-- ini untuk tabel product -->
    <div class="table table-hover">
        <h2>Daftar User</h2>
        <table class="table">
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
            <tbody>
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
                        <a class="btn btn-primary"
                            href="adm-updateUser.php?id_user=<?php echo $data['id_user']; ?>"><img
                                src="img\lucide_pencil.svg" alt=""></a>
                        <a class="btn btn-primary"
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
</body>

</html>