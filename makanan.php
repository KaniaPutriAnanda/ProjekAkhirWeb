<?php
    require 'konfigurasi.php';
    if(isset($_POST['submit'])){
        $nama = $_POST['nama'];
        $harga = $_POST['harga'];

        $gambar = $_FILES['gambar']['name'];
        $x = explode('.',$gambar);
        $ekstensi = strtolower(end($x));
        $gambar_baru = "$nama.$ekstensi";

        $tmp = $_FILES['gambar']['tmp_name'];
        
        if(move_uploaded_file($tmp, "img/".$gambar_baru)){
            $query = "INSERT INTO makanan
            VALUES ('', '$nama', '$harga', '$gambar_baru')";

            $result = $db->query($query);

            if($result){
                echo "
                <script>
                    alert('Menu Berhasil Ditambah');
                    document.location.href = 'makanan.php';
                </script>
            ";
            }else{
                echo "
                <script>
                    alert('Menu Gagal Ditambah');
                </script>
            ";
            }  
        }
        else {
            echo "GAGAL";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="admin3.css?v8">
    <!-- <style><?php include 'admin.css' ?></style> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
</head>
<body>
<div class="bigboxbos">
<nav>
    <ul>
        <li>
            <a href="#" class="logo">
                <i class="fas fa-search"></i>
                <span class="nav-item">Lihat  Menu</span>
            </a>
        </li>
        <li>
            <a href="#">
            <i class="fas fa-plus"></i>
                <span class="nav-item">Tambah Menu</span>
                <span class="fas fa-caret-down" id="panah"></span>
            </a>
                <ul class="feat-show">
                    <li><a href="makanan.php">Makanan</a></li>
                    <li><a href="minuman.php">Minuman</a></li>
                    <li><a href="dessert.php">Dessert</a></li>
                </ul>
        </li>
        <li>
            <a href="#">
                <i class="fas fa-edit"></i>
                <span class="nav-item">Update Menu</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class="fas fa-trash"></i>
                <span class="nav-item">Hapus Menu</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class="fas fa-cash-register"></i>
                <span class="nav-item">Kasir</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class="fas fa-sign-out-alt"></i>
                <span class="nav-item">Signout</span>
            </a>
        </li>
    </ul>
</nav>

<div class="bigboxForm">
    <div class="kotakForm">
            <form action="" method="POST"  enctype="multipart/form-data">
                <div class="atasForm"><h1>Tambahkan menu baru </h1> <br><br></div>
                    <label for="">Nama Makanan </label> 
                    <input type="text" name="nama" required> <br>

                    <label for="">Harga </label> 
                    <input type="number" name="harga" required> <br>

                    <label for="">Foto </label>
                    <input type="file" name="gambar" required><br>
                
                    <button type="submit" name="submit" id="button1" class="btn btn-primary deep-purple btn-block "><h1 class="submitt">Submit</h1></button>
                
                </form>
        </div>
    </div>
</div>
</body>
</html>

