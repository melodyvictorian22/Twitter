<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Twitter</title>

        <!-- menyisipkan bootstrap -->
        <link rel="stylesheet" href="./vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
        <style>
            body {
                background: url('https://source.unsplash.com/twukN12EN7c/1920x1080') no-repeat center center fixed;
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
                color: white;
                text-align: center;
            }
        </style>
    </head>

    <body class="bg-light">
        <header>
            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <h1>Selamat datang di Twitter</h1>
                            <p>Bergabunglah bersama jutaan orang lainnya...</p>
                        </div>
                        <div class="col-md-4">
                            <a href="login.php" class="btn btn-secondary">Masuk</a>
                            <a href="register.php" class="btn btn-success">Daftar</a>
                            <img class="img img-responsive" src="img/logoTwitter.png" width="50" height="50" />
                            <!-- <?php
                                // if (isset($_SESSION['success'])) {
                                //     echo "<div class='alert alert-success'>".$_SESSION['success']."</div>";
                                // }
                            ?> -->
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <img class="img img-responsive" src="img/logo1.png" width="1000" height="600" />
                    </div>
                </div>
            </div>
        </section> -->

        <footer class="container-fluid text-center">
            <p>© 2021 Twitter, Inc.</p>
            
        </footer>
    </body>
</html>