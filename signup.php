<html>

<head>
    <title>Welcome to Start</title>
    <link rel="stylesheet" type="text/css" href="css/register.css">
</head>

<body>
    <form class="register" method="POST" action="signup.php">
        <input type="text" name="name" id="name" placeholder="Name" required="yes">
        <input type="text" name="username" id="username" placeholder="Username" required="yes">
        <input type="email" name="email" id="email" placeholder="Email" required="yes">
        <input type="password" name="password" id="password" placeholder="Password" required="yes">
        <input type="password" name="password" id="password" placeholder="Re-type Password" required="yes">
        <input type="submit" name="register" value="SIGN UP">
    </form>
    <p>Already have an account? <a href="loginregister.php">Login</a></p>
</body>

</html>