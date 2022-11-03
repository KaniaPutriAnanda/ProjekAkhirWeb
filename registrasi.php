<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Register</title>
</head>
<body>
    <div class="container regis">

        <div class="judul">
            <h2>Registrasi</h2>
        </div>
        
        <div class="form">
            <form action="" method="post">
                <label for="email">Email<b style = "color : red">*</b></label><br>
                <input type="email" name="email" class="input" placeholder="Masukkan email" required autocomplete="off"><br>

                <label for="username">Username<b style = "color : red">*</b></label><br>
                <input type="text" name="username" class="input" placeholder="Masukkan username" required autocomplete="off"><br>

                <label for="password">Password<b style = "color : red">*</b></label><br>
                <input type="password" name="password" class="input" placeholder="Password" required autocomplete="off"><br>

                <label for="konfirmasi">Konfirmasi Password<b style = "color : red">*</b></label><br>
                <input type="password" name="konfirmasi" class="input" placeholder="Konfirmasi password" required autocomplete="off"><br>

                <input type="submit" name="registrasi" class="submit" value="Registrasi"><br><br>
            </form>

            <p>Sudah punya akun?
                <a href="login.php">Login</a>
            </p>
        
        </div>
    </div>
</body>
</html>

<?php
    require 'konfigurasi.php';

    if(isset($_POST['registrasi'])){
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $konfirmasi = $_POST['konfirmasi'];

        // Cek Username Udah Digunakan atau Belum
        $sql = "SELECT * FROM akun WHERE username = '$username'";
        $user = $db->query($sql);
        if(mysqli_num_rows($user) > 0){
            echo "<script>
                    alert('Username telah digunakan, Silahkan gunakan Username lain')
                </script>";
        }else {
            // cek konfirmasi password
            if($password == $konfirmasi){
                $password = password_hash($password, PASSWORD_DEFAULT);
                $query = "INSERT INTO akun (email, username, psw)
                VALUES ('$email', '$username', '$password')";

                $result = $db->query($query);

                if ($result){
                    echo "<script>
                            alert('Registrasi Berhasil');
                            document.location.href = 'login.php';
                        </script>";
                } else {
                    echo "<script>
                             alert('Registrasi Gagal');
                        </script>";
                }
            }else{
                echo "<script>
                        alert('Konfirmasi Password Salah');
                    </script>";
            }
        }
    }

?>