<!DOCTYPE html>
<html>

<head>
    <title>Tambah User</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

    <br />

    <a href="admin.php">Lihat Semua Data</a>

    <br />
    <h3>Edit data</h3>

    <?php
    include "koneksi.php";
    $id = $_GET['id'];
    $query_mysql = mysql_query("SELECT * FROM user WHERE id='$id'") or die(mysql_error());
    $nomor = 1;
    while ($data = mysql_fetch_array($query_mysql)) {
        ?>
        <form action="update.php" method="post">
            <table>
                <tr>
                    <td>Nama</td>
                    <td>
                        <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
                        <input type="text" name="nama" value="<?php echo $data['nama'] ?>">
                    </td>
                </tr>
                <tr>
                    <td>Username</td>
                    <td><input type="text" name="alamat" value="<?php echo $data['username'] ?>"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="email" name="email" value="<?php echo $data['email'] ?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Simpan"></td>
                </tr>
            </table>
        </form>
    <?php } ?>
</body>

</html>