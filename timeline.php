<?php session_start();
    require 'auth.php';
    if(isset($_POST['send'])){
        require_once("config.php");
        
        // filter data yang diinputkan
        $insertOneResult = $cl_tweet->insertOne([
            'Tweet' => $_POST['tweet']
        ]);
        header("Location: timeline.php");
    }
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
                            <li class="nav-item"><a class="nav-link" style="color: #ffffff;" href="#"><i
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
            <div class="row">
                <div class="col-md-4">

                    <div class="card">
                        <div class="card-body text-center">
                            <p><a href="#">My Profile</a></p>
                            <img class="img img-responsive rounded-circle mb-3" width="160" src="img/default.svg ?>" />
                                <?php
                                  require 'config.php';
                                  $username = ($_SESSION['NamaPengguna']);
                                  $qry = array('NamaPengguna' => $username);
                                  $orang = $collection1->findOne($qry);
                                  echo "<h1>$orang->NamaPengguna</h1>";
                                ?>
                        </div>
                    </div>
                </div>


                <div class="col-md-8">
                    <div class = "card">
                        <div class="card-body">
                            <form action="" method="POST">
                                <div class="form-group">
                                    <label for="tweet">Tweet :</label>
                                    <input type="text" name="tweet" class="form-control" placeholder="compose new tweet...">
                                </div>
                                <input type="submit" class="btn btn-primary" value="Send" name="send">
                            </form>
                        </div>
                    </div>
                    
                    <!-- <form action="" method="post" >
                        <div class="form-group">
                            <textarea class="form-control" placeholder="Apa yang kamu pikirkan?"></textarea>
                        </div>
                    </form>

                    <?php for($i=0; $i < 6; $i++){ ?>
                        <div class="card mb-3">
                            <div class="card-body">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis veritatis nemo ad recusandae labore nihil iure qui eum consequatur, officiis facere quis sunt tempora impedit ullam reprehenderit facilis ex amet!
                            </div>
                        </div>
                    <?php } ?> -->
                    
                </div>
            
            </div>
        </div>


    <!-- Handlebars Templates
    <script id="template-tweet" type="text/x-handlebars-template">
        <div class="tweet">
            <img src="images/{{ img }}">

            <div class="body">
                <div class="title">{{ handle }}</div>
                <div class="message">{{ message }}</div>
            </div>
        </div>
    </script>

    <script id="template-compose" type="text/x-handlebars-template">
        <div class="replies">
            <form class="compose">
                <textarea placeholder="Compose new Tweet..."></textarea>

                <div>
                    <span class="count">140</span>
                    <button>Send</button>
                </div>
            </form>
        </div>
    </script>

    <script id="template-thread" type="text/x-handlebars-template">
        <div class="thread">
            {{{ tweetTemplate }}}
            {{{ composeTemplate }}}
        </div>
    </script>

    <script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/handlebars.js/2.0.0/handlebars.js"></script>
    <script src="js/main.js"></script> -->
    </body>
</html>