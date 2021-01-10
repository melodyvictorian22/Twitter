<?php session_start();
    require 'config.php';

    $userData = $collection1->findOne( array('_id'=> $_SESSION['AkunSedangLogin']));
    
    if (isset($_GET['id'])) {
        $userData = $collection1->findOne(['_id' => new MongoDB\BSON\ObjectID($_GET['id'])]);
    }
    if(isset($_POST['hapus'])){
        require 'config.php';
        $collection1->deleteOne($userData);
        $_SESSION['suksesDelete'] = "Data Akun Twitter Berhasil dihapus";
        header("Location: index.php");
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com    @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>Profile Activities Followers Following - Bootdey.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/profile.css">
    <style type="text/css">
       
    </style>
</head>

<body>
<nav>
<div class="menu-icon"><span class="fas fa-bars"></span></div>
    <div class="logo">Twitter</div>
    <div class="nav-items">
        <li><a href="timeline.php">Home</a></li>
        <li><a href="profile.php">Profile</a></li>
        <li><a href="search.php">Search</a></li>
    </div>
    <div class="search-icon"><span class="fas fa-search"></span></div>
    <div class="cancel-icon"><span class="fas fa-times"></span></div>
    <div class="nav-items2">
        <li><a href="logout.php">Logout</a></li>
    </div>
</nav>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <div class="container">
        <div class="user-profile">
            <div class="profile-header-background"><img src="http://demo.thedevelovers.com/dashboard/queenadmin-1.2/assets/img/city.jpg" alt="Profile Header Background"></div>
            <div class="row">
                <div class="col-md-4" style="background-color: white;">
                    <div class="profile-info-left">
                        <div class="text-center">
                            <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="Avatar" class="avatar img-circle">
                            <?php
                                echo "<h1>".$userData['NamaPengguna']."</h1>";

                                echo "<p>".$userData['Email']."</p>";
                            ?>
                        </div>
                        <br>
                        <div class="action-buttons">
                            <div class="row">
                                <div class="col-xs-6">
                                    <a href="#" class="btn btn-success btn-block"><i class="fa fa-plus-round"></i> Edit Profile</a>
                                </div>
                                <div class="col-xs-6">
                                    <a href="#" class="btn btn-danger btn-block"><i class="fa fa-android-mail"></i> Delete Account</a>
                                </div>
                            </div>
                        </div>
                        <div class="section">
                            <h3>About Me</h3>
                            <p>Energistically administrate 24/7 portals and enabled catalysts for change. Objectively revolutionize client-centered e-commerce via covalent scenarios. Continually envisioneer.</p>
                        </div>
                        <div class="section">
                            <h3>Statistics</h3>
                            <p><span class="badge">332</span> Following</p>
                            <p><span class="badge">124</span> Followers</p>
                            <p><span class="badge">620</span> Likes</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-8" style="background-color: white;">
                    <div class="profile-info-right">
                        <ul class="nav nav-pills nav-pills-custom-minimal custom-minimal-bottom">
                            <li class="active"><a href="#edit" data-toggle="tab">Hapus Akun Twitter</a></li>
                            
                        </ul>
                <div class="col-md-8">
                <br>
                    <div class="card">
                    <h3> Nama pengguna <strong><?php echo "$userData->NamaPengguna"; ?></strong> dengan Alamat Email <strong><?php echo "$userData->Email"; ?> </strong>? </h3>
                    <p>Apakah Anda yakin untuk menonaktifkan akun Twitter Anda?</p>
                        <form method="POST">
                            <div class="form-group">
                                <input type="hidden" value="<?php echo "$userData->Email"; ?>" class="form-control" name="Email">
                                <button type="submit" name="hapus" class="btn btn-danger">Hapus</button>
                                <a href="profile.php" class="btn btn-primary">Kembali</a>
                            </div>
                        </form>
                    </div>
                <br><br>
                
                        

                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script type="text/javascript">

    </script>
</body>

</html>