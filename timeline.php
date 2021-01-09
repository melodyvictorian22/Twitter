<?php session_start();
    $user = $_SESSION["AkunLogin"];
    $testResult = $_SESSION["result"];
    $result = json_decode($testResult);
    require 'auth.php';
    
    

    if(isset($_POST['send'])){
        require_once("config.php");

        $res2 = json_decode(json_encode($result->_id), true);
        $insertOneResult = $collection2->insertOne([
            'Tweet' => $_POST['tweet'],
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
    
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-4">

                    <div class="card">
                        <div class="card-body text-center">
                            <p><a href="#">My Profile</a></p>
                            <img class="img img-responsive rounded-circle mb-3" width="160" src="img/default.svg ?>" />
                            
                            <?php
                                
                                echo "<h1>".$user."</h1>";
                                
                                echo $result->Email;
                                
                                
                            ?>

                            <p><a href="logout.php">Logout</a></p>
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
                                <input type="submit" class="btn btn-primary" value="Send" name="Tweet">
                            </form>
                        </div>
                    </div>
                    <br><br>
                    <div class="card">
                        <div class="card-body">
                            <?php
                                require 'config.php';
                                $tweet = $collection2->find();
                                foreach($tweet as $tweets){
                                    echo "<p>$tweets->Tweet</p>";
                                }
                            ?>
                        </div>
                    </div>
                    
                    
                </div>
            
            </div>
        </div>

    </body>
</html>