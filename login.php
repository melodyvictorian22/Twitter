<?php session_start();
    require_once("config.php");
    
    if(isset($_POST['login'])){
         if(isset($_POST['NamaPengguna']) && isset($_POST['Password'])){
            $username = $_POST['NamaPengguna'];
            $password = hash('sha256', $_POST['Password']);
            if(empty($username)){
                die("Empty or invalid username");
            }
            if(empty($password)){
                die("Enter your password");
            }

            
            $_SESSION["AkunLogin"] =  $username;
            
            if($collection1){
                $qry = array("NamaPengguna" => $username, "Password" => $password);
                $result = $collection1->findOne($qry);
                
                $test = json_encode($result);
                $_SESSION["result"] = $test;
        
                if(!empty($result)){
                    $_SESSION["AkunSedangLogin"] = $result->_id;
                    echo "You are successfully loggedIn";
                    
                    header("Location: timeline.php");
                }else{
                    echo "Wrong combination of username and password";
                }
            }else{
                die("Mongo DB not connected!");
                
            }
        }
        
    }
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Login Twitter</title>

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
                <div class="col-md-6">

                <p>&larr; <a href="index.php">Home</a>

                <h4>Masuk ke Twitter</h4>
                <p>Belum punya akun? <a href="register.php">Daftar di sini</a></p>

                <form action="login.php" method="POST">

                    <div class="form-group">
                        <label for="NamaPengguna"><strong>Nama Pengguna</strong></label>
                        <input class="form-control" type="text" name="NamaPengguna" placeholder="Nama Pengguna" />
                    </div>


                    <div class="form-group">
                        <label for="Password"><strong>Password</strong></label>
                        <input class="form-control" type="password" name="Password" placeholder="Password" />
                    </div>

                    <input type="submit" class="btn btn-success btn-block" name="login" value="Masuk" />

                </form>
                    
                </div>

                <div class="col-md-6">
                    <img class="img img-responsive" src="img/logo2.png" width="600" height="325" />
                </div>

            </div>
        </div>
        
        <footer class="container-fluid text-center">
            <p>© 2021 Twitter, Inc.</p>
                
        </footer>
    </body>
</html>