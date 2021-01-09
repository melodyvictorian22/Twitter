<?php session_start();
    
    if(isset($_POST['register'])){
        require_once("config.php");
        
        // filter data yang diinputkan
        $insertOneResult = $collection1->insertOne([
            'Nama' => $_POST['Nama'],
            'Email' => $_POST['Email'],
            'Password' => $_POST['Password'],
            'NamaPengguna' => $_POST['NamaPengguna'],
        ]);
        // // menyiapkan query
        // $sql = "INSERT INTO users (name, username, email, password) 
        //         VALUES (:name, :username, :email, :password)";
        // $stmt = $db->prepare($sql);

        // // bind parameter ke query
        // $params = array(
        //     ":name" => $name,
        //     ":username" => $username,
        //     ":password" => $password,
        //     ":email" => $email
        // );

        // // eksekusi query untuk menyimpan ke database
        // $saved = $stmt->execute($params);

        // jika query simpan berhasil, maka user sudah terdaftar
        // maka alihkan ke halaman login
        $_SESSION['success'] = "Selamat telah bergabung bersama kami!";
        header("Location: timeline.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Register Twitter</title>

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

            <h4>Bergabunglah bersama kami sekarang</h4>
            <p>Sudah punya akun? <a href="login.php">Login di sini</a></p>

        
            <form action="" method="POST">
                
                <div class="form-group">
                    <label for="name"><strong>Nama Lengkap</strong></label>
                    <input class="form-control" type="text" name="Nama" required="" placeholder="Nama kamu" />
                </div>

                <div class="form-group">
                    <label for="email"><strong>Email</strong></label>
                    <input class="form-control" type="email" name="Email" required="" placeholder="Alamat Email" />
                </div>

                <div class="form-group">
                    <label for="password"><strong>Password</strong></label>
                    <input class="form-control" type="password" name="Password" required="" placeholder="Password" />
                </div>

                <div class="form-group">
                    <label for="username"><strong>Nama Pengguna</strong></label>
                    <input class="form-control" type="text" name="NamaPengguna" required="" placeholder="Username" />
                </div>

                <input type="submit" class="btn btn-success btn-block" name="register" value="Daftar" />
            </form>
                
            </div>

            <div class="col-md-6">
                <img class="img img-responsive" src="img/logo1.png" width="600" height="500" />
            </div>

        </div>
    </div>

    </body>

    <footer class="container-fluid text-center">
        <p>© 2021 Twitter, Inc.</p>
            
    </footer>
</html>