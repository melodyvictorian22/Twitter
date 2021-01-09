<?php
    require 'config.php'
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Twitter Timeline</title>

        <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
        <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
        <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
        <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
        <link rel="stylesheet" href="assets/css/Dark-NavBar.css">
        <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
        <link rel="stylesheet" href="assets/css/Pretty-Product-List.css">
        <link rel="stylesheet" href="assets/css/profile.css">
        <link rel="stylesheet" href="assets/css/timeline.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="./vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
        <style>
            body {
                background: url('img/bg.png') no-repeat center center fixed;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                background-size: cover;
                -o-background-size: cover;
            }
            footer {
                position: fixed;
                left: 0;
                bottom: 0;
                width: 100%;
                color: black;
                text-align: center;
            }
        </style>
    </head>
    <body class="bg-light">
            <nav class="navbar navbar-light navbar-expand-md sticky-top navigation-clean-button"
                style="height:80px;background-color:#37434d;color:#ffffff;">
                <div class="container-fluid"><a class="navbar-brand" href="index.html"><i
                            class="fab fa-twitter"></i>&nbsp;Twitter</a><button data-toggle="collapse"
                        class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span
                            class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navcol-1">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item"><a class="nav-link" style="color: #ffffff;" href="index.html"><i
                                        class="fa fa-home"></i>&nbsp;Home</a></li>
                            <li class="nav-item"><a class="nav-link" style="color: #ffffff;" href="search.php"><i
                                        class="fa fa-search"></i>&nbsp;Search</a></li>
                            <li class="nav-item"><a class="nav-link" style="color:#ffffff;" href="profile.html"><i
                                        class="fa fa-user-circle-o"></i>&nbsp;Profile</a></li>
                            <li class="nav-item"><a class="nav-link" style="color:#ffffff;" href="login.html"><i
                                        class="fa fa-sign-out"></i>&nbsp;Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="container mt-5">
                <div class="card">
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="form-group">
                                <label for="user">Search User:</label>
                                <input type="text" name="searhcUser" class="form-control" placeholder="search user..">
                            </div>
                            <input type="submit" class="btn btn-primary" value="Search" name="search">
                        </form>
                    </div>
                </div>
                <br><br>
                <div class="card">
                    <div class="card-body">
                        <?php
                            require "config.php";
                            if(isset($_POST['search'])){
                                $username = $_POST['searchUser'];
                                $Result = $collection1->find(['NamaPengguna' => $username]);
                                echo "<h1>$Result->NamaPengguna</h1>";
                            }
                        ?>
                    </div>
                </div>
            </div>
    </body>
</html>