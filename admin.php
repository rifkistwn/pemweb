<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="admin.css">
	<title>Selamat Datang di Halaman Admin</title>
</head>

<body>
	<?php
	session_start();

	if ($_SESSION['level'] == "") {
		header("location:loginregister.php?pesan=gagal");
	}

	?>
	<h1>Admin</h1>

	<p>Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</p>
	<a href="logout.php">LOGOUT</a>



	<?php
	if (isset($_GET['pesan'])) {
		$pesan = $_GET['pesan'];
		if ($pesan == "input") {
			echo "Data berhasil di input.";
		} else if ($pesan == "update") {
			echo "Data berhasil di update.";
		} else if ($pesan == "hapus") {
			echo "Data berhasil di hapus.";
		}
	}
	?>
	<br />
	<a class="tombol" href="input.php">+ Tambah Data Baru</a>

	<h3>Data user</h3>
	<table border="1" class="table">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Username</th>
			<th>Email</th>
			<th>Jenis</th>
		</tr>
		<?php
		include "koneksi.php";
		$query_mysql = mysql_query("SELECT * FROM user") or die(mysqlierror());
		$nomor = 1;
		while ($data = mysql_fetch_array($query_mysql)) {
			?>
			<tr>
				<td><?php echo $nomor++; ?></td>
				<td><?php echo $data['nama']; ?></td>
				<td><?php echo $data['username']; ?></td>
				<td><?php echo $data['email']; ?></td>
				<td>
					<a class="edit" href="edit.php?id=<?php echo $data['id']; ?>">Edit</a> |
					<a class="hapus" href="hapus.php?id=<?php echo $data['id']; ?>">Hapus</a>
				</td>
			</tr>
		<?php } ?>
	</table>
</body>


</html>