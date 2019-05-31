<!DOCTYPE html>
<html>

<head>
    <title>Daftar User</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <br />

    <a href="admin.php">Lihat Semua Data</a>

    <br />
    <h3>Input data baru</h3>
    <form action="input-aksi.php" method="post">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Simpan"></td>
            </tr>
        </table>
    </form>
</body>

</html>