<!DOCTYPE html>
<html>

<head>
    <title>DASHBOARD</title>
    <link rel="stylesheet" type="text/css" href="css/dashboard.css">
</head>

<body>


    <div class="dashboard">
        <div class="left-dashboard">
            <?php include 'sidepanel.php' ?>
        </div>
        <div class="right-dashboard">
            <div class="title">
                <h3>DASHBOARD</h3>
            </div>

            <?php
            session_start();

            if ($_SESSION['level'] == "") {
                header("location:loginregister.php?pesan=gagal");
            }
            ?>
            <h4>Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</h4>

            <div class="main">
                <div class="main-1">
                    <div class="profile">
                        <div class="pic-profile">
                            img
                        </div>
                        <div class="data-profile">
                            <div class="name-profile">
                                NAMA
                            </div>
                            COIN
                        </div>
                    </div>
                    <div class="user-tournament">
                        <h2>ON GOINT TOURNAMENT</h2>
                        <br>
                        You don't have any tournament.
                    </div>
                </div>
                <div class="main-2">

                </div>
                <div class="main-3">

                </div>
            </div>
        </div>
    </div>
    <a href="logout.php">LOGOUT</a>
</body>

</html>