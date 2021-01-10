<?php session_start();
    require 'config.php';

    $userData = $collection1->findOne( array('_id'=> $_SESSION['AkunSedangLogin']));

    if (isset($_GET['id'])) {
        $userData = $collection1->findOne(['_id' => new MongoDB\BSON\ObjectID($_GET['id'])]);
    }
    if(isset($_POST['edit'])){
        $userData = $collection1->updateOne(
            $userData,
            ['$set' => ['Nama' => $_POST['Nama'], 'Email' => $_POST['Email'], 'Password' => hash('sha256', $_POST['Password']), 'NamaPengguna' => $_POST['NamaPengguna']]]
        );
        $_SESSION['suksesEdit'] = "Data akun twitter berhasil diubah";
        header("Location: profile.php");
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
                                    <a href="edit.php" class="btn btn-success btn-block"><i class="fa fa-plus-round"></i> Edit Profile</a>
                                </div>
                                <div class="col-xs-6">
                                    <a href="delete.php" class="btn btn-danger btn-block"><i class="fa fa-android-mail"></i> Delete Account</a>
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
                            <li class="active"><a href="#edit" data-toggle="tab">Edit Data Akun Twitter</a></li>
                            
                        </ul>
                <div class="col-md-8">
                <br>
                    <div class="card">
                        <form method="POST">
                            <div class="form-group">
                            <strong>Nama:</strong>
                            <input type="text"  class="form-control" name="Nama" required="" placeholder="Edit Nama Lengkap">
                            <strong>Email:</strong>
                            <input type="text" class="form-control" name="Email" required="" placeholder="Edit Alamat Email">
                            <strong>Password:</strong>
                            <input type="password" class="form-control" name="Password" required="" placeholder="Edit Password">
                            <strong>Nama Pengguna:</strong>
                            <input type="text" class="form-control" name="NamaPengguna" required="" placeholder="Edit Nama Pengguna">
                            
                            <br>
                            <button type="submit" name="edit" class="btn btn-success">Simpan</button>
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