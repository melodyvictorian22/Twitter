<?php session_start();
$user = $_SESSION["AkunLogin"];
$testResult = $_SESSION["result"];
$result = json_decode($testResult);
require 'auth.php';

$userData = $collection1->findOne( array('_id' => $_SESSION['AkunSedangLogin']));

if (isset($_POST['posting'])) {
    require_once("config.php");

    $res2 = json_decode(json_encode($result->_id), true);
    $insertOneResult = $collection2->insertOne([
        'Tweet' => $_POST['Tweet'],
        'UserTweet' => $user,
        'UserId' => $res2['$oid']
    ]);

    // echo $res2['$oid'];


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
    <link rel="stylesheet" href="./vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
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
<nav>
<div class="menu-icon"><span class="fas fa-bars"></span></div>
    <div class="logo">Twitter</div>
    <div class="nav-items">
        <li><a href="#">Home</a></li>
        <li><a href="profile.php?id=<?php echo $_SESSION['AkunSedangLogin']; ?>">Profile</a></li>
        
        <li><a href="#">Contact</a></li>
        <li><a href="#">Feedback</a></li>
    </div>
    <div class="search-icon"><span class="fas fa-search"></span></div>
    <div class="cancel-icon"><span class="fas fa-times"></span></div>
    <div class="nav-items2">
        <li><a href="logout.php">Logout</a></li>
    </div>
</nav>

<body class="bg-light">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4">

                <div class="card">
                    <div class="card-body text-center">
                        <!-- <p><a href="profile.php">My Profile</a></p> -->
                        <img class="img img-responsive rounded-circle mb-3" width="160" src="img/default.svg ?>" />

                        <?php

                        echo "<h1>".$userData['NamaPengguna']."</h1>";

                        echo "<p>".$userData['Email']."</p>";


                        ?>

                        <p><a href="logout.php">Logout</a></p>
                    </div>

                </div>
            </div>

            
            <div class="col-md-8">
                <h1>Beranda</h1>
                <hr>
                <div class="card">
                    <div class="card-body ">
                        
                            <form action="createTweet.php" method="POST">
                                <div class="form-group">
                                    <label for="Tweet">Tweet :</label>
                                    <textarea type="text" name="Tweet" class="form-control" required="" placeholder="Apa yang sedang terjadi?"></textarea>
                                </div>
                                <input type="submit" class="btn btn-primary" value="Tweet" name="posting">
                            </form>
                        
                    </div>
                </div>
                <br><br>
                

                <div class="card">
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="form-group">
                                <table class="table">
                                    <thead class="thead-dark">
                                        <?php
                                            require 'config.php';
                                            $Tweet = $collection2->find();
                                            foreach ($Tweet as $tweets) {
                                                echo "<tr>";
                                                echo "<td>".$user."</td>";
                                                echo "<td>".$tweets->Tweet."</td>";
                                                echo "<td><textarea type='text' name='Tweet' class='form-control' placeholder='Apa yang sedang terjadi?'>".""."</textarea></td>";
                                                echo "<td><input type='submit' class='btn btn-primary' value='Tweet' name='posting'></td>";
                                                echo "</tr>";
                                            }
                                        ?>
                                    
                                    </thead>
                                </table>
                            </div>
                        </form>
                    </div>
                </div>

            </div>

        </div>
    </div>

</body>

</html>