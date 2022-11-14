<?php

require 'konfigurasi.php';

if(isset($_POST['submit'])){
    $nama = $_POST['nama'];
    $no_telp = $_POST['no_telp'];
    $ruangan = $_POST['ruangan'];
    $tanggal = $_POST['tanggal'];
    $jumlah = $_POST['jumlah'];
    $notes = $_POST['notes'];

    $result = mysqli_query($db, "INSERT INTO reservasi (nama, no_telp, ruangan, tanggal, jumlah, notes) 
    VALUES ('$nama', '$no_telp', '$ruangan', '$tanggal', '$jumlah', '$notes')");

    if($result){
        echo " 
            <script> 
            alert('Anda telah melakukan reservasi, silakan menunggu info selanjutnya');
            </script>
        ";
    } else {
        echo " 
            <script> 
            alert('Gagal melakukan reservasi, silakan coba lagi!');
            </script>
        ";
    }
}
?>
<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservasi</title>
    <link rel="stylesheet" href="css/reservasi-user.css?v9">
    <link rel="stylesheet" href="style-home3.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
</head>
<body>
    <nav>
        <ul>
            <li> <a href="home.php">Home</a></li>
            <li> <a href="menu.php">Menu</a></li>
            <li> <a href="reservasi.php">Reservasi</a></li>
            <li> <a href="about2.php">About Us</a></li>
            <li> <a href="logout.php">Sign Out</a></li>
        </ul>

        <div class="menu-toggle">
            <input type="checkbox"/>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </nav>
    <section class="banner">
    <div class="bigboxForm">
    <div class="kotakForm">
            <form action="" method="POST"  enctype="multipart/form-data">
                    <label for="">Nama Lengkap </label> 
                    <input type="text" name="nama" required> <br>

                    <label for="">No Telepon </label> 
                    <input type="text" name="no_telp" required> <br>

                    <label for="">Ruangan : </label>
                    <select name = "ruangan" required="">
                        <option >--select--</option>
                        <option >Private VIP</option>
                        <option >Private</option>
                        <option >Public</option>
                    </select> <br><br>  

                    <label for="">Tanggal reservasi</label>
                    <input type="date" name = "tanggal" required=""><br>
                    
                    <label for="">Jumlah Orang : </label>
                    <input type="number" name="jumlah" required=""> <br>
                    
                    <label for="">Note : </label>
                    <input type="text" name="notes"> <br>
                
                    <input type="hidden" name="tglinput" value=<?=date("d-m-Y")?>>
                    <button type="submit" name="submit" id="button1" class="btn btn-primary deep-purple btn-block "><h1 class="submitt">Submit</h1></button>
                
                </form>
        </div>
    </div>
    </section>
    <div class="footer-reservasi">
            <footer>
            <p>©Copyright 2022 - by Kania Medina Risma</p>
            </footer>
        </div>
    </body>
</html>
