<?php session_start();
    require_once('config.php');
    if(!isset($_SESSION['AkunSedangLogin'])){
        header('Location: timeline.php');
    }
    $userData = $collection1->findOne( array('_id'=> $_SESSION['AkunSedangLogin']));
    function get_user_list($db){
        $resultList = $db->cl_account->find();
        $users = iterator_to_array($resultList);
        return $users;
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
        <li><a href="timeline.php">Home</a></li>
        <li><a href="profile.php?id=<?php echo $_SESSION['AkunSedangLogin']; ?>">Profile</a></li>
        <li><a href="search.php">Search</a></li>
    </div>
    <div class="search-icon"><span class="fas fa-search"></span></div>
    <div class="cancel-icon"><span class="fas fa-times"></span></div>
    <div class="nav-items2">
        <li><a href="logout.php">Logout</a></li>
    </div>
</nav>
    <body class="bg-light">
            <div class="container mt-5">
                <div class="card">
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="form-group">
                                <label for="user">Search User:</label>
                                <input type="search" name="searchUser" class="form-control" placeholder="search user..">
                            </div>
                            <input type="submit" class="btn btn-primary" value="Search" name="search">
                        </form>
                    </div>
                </div>
                <br><br>
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-2">
                                <img class="img img-responsive rounded-circle mb-3" width="90" src="img/default.svg ?>" />
                            </div>
                            <div class = "col-sm-4">
                                <?php
                                    if(isset($_POST["search"])){
                                        require_once("config.php");
                                        $searchUser = $_POST["searchUser"];
                                        $_SESSION["akunCari"] = $searchUser;
                                        if($collection1){
                                            $find = $collection1->findOne(["NamaPengguna" => $searchUser]);
                                            
                                            $test = json_encode($find);
                                            $_SESSION["resultCari"] = $test;
                                            if(!empty($find)){
                                                echo "<h2><a href='profile-ppl.php'>".$find->Nama."</a></h2>";
                                                echo "<h3>$find->NamaPengguna</h3>";
                                            }
                                            else{
                                                echo "Tidak ditemukan !";
                                            }
                                        }
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="card">
                    <div class="card-body">
                    <table class="table">
                        <div class = "col-dm-8">
                            <h2><b>Orang yang mungkin Anda kenal</b></h2>
                            <?php
                                $user_list = get_user_list($db);
                                if(isset($_POST["Kunjungi"])){
                                    
                                }

                                foreach($user_list as $list){
                                    echo '<tr>';
                                    echo '<td><span>'.$list['NamaPengguna'].'</span></td>';
                                    echo "<td><a href = 'profile-ppl.php?id=".$list['_id']."'class='btn btn-success'>Kunjungi Profile</a></td>";
                                    echo "<td><a href = 'follow.php?id=".$list['_id']."'class='btn btn-primary'>Follow</a></td>";
                                    echo '</tr>';
                                }
                            ?>
                        </div>
                    </table>
                    </div>
                </div>
            </div>
    </body>
</html>