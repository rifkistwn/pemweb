<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <title>LOGIN</title>
</head>

<body>
    <?php
    if (isset($_GET['pesan'])) {
        if ($_GET['pesan'] == "gagal") {
            echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
        }
    }
    ?>
    <form class="login" method="POST" action="cek_login.php">
        <input type="text" name="username" id="username" placeholder="Username" required="yes">
        <input type="password" name="password" id="password" placeholder="Password" required="yes">
        <input type="submit" name="login" value="LOGIN">
    </form>
    <p>Don't have any account? <a href="signup.php">Sign Up</a></p>

</html>

</html>