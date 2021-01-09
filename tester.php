<?php session_start();
    require 'config.php';

    
    if(isset($_POST['login'])){

         if(isset($_POST['NamaPengguna']) && isset($_POST['Password'])){
            $username = ($_POST['NamaPengguna']);
            $password = ($_POST['Password']);
            // $pass_hash = md5($password);
            if(empty($username)){
                die("Empty or invalid username or email address");
            }
            if(empty($password)){
                die("Enter your password");
            }
            // Select Database
            if($collection1){
                
                // Select Collection
                $qry = array('NamaPengguna' => $username, 'Password' => $password);
                $result = $collection1->findOne($qry);
        
                if(!empty($result)){
                    foreach ( $result as $doc ) {
                        
                       echo  var_dump($result);
                        // $_SESSION['NamaPengguna'] = $doc['NamaPengguna'];
                        // $password = $doc["Password"];
                        
                  }

                    echo "You are successfully loggedIn";
                    $_SESSION['suksesLogin'] = "Selamat datang di Twitter!";
                    header("Location: timeline.php");
                    session_write_close();
                }else{
                    echo "Wrong combination of username and password";
                }
            }else{
                die("Mongo DB not connected!");
                
            }
        }
        
    }
?>