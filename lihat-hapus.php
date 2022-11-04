<?php
    require 'konfigurasi.php';
    $result = mysqli_query($db, "SELECT * FROM makanan");
?>
<?php
    require 'konfigurasi.php';
    $result = mysqli_query($db, "SELECT * FROM minuman");
?>
<?php
    require 'konfigurasi.php';
    $result = mysqli_query($db, "SELECT * FROM dessert");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/admin3.css">
    <style><?php include 'admin.css' ?></style>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <title>Document</title>
</head>
<body>
<nav>
        <ul>
            <li>
                <a href="lihat.php" class="logo">
                <i class="fas fa-search"></i>
                    <span class="nav-item">Lihat  Menu</span>
                </a>
            </li>
            <li>
                <a href="#">
                <i class="fas fa-plus"></i>
                    <span class="nav-item">Tambah Menu</span>
                    <span class="fas fa-caret-down"  id="panah"></span>
                </a>
                <ul class="feat-show">
                    <li><a href="makanan.php">Makanan</a></li>
                    <li><a href="minuman.php">Minuman</a></li>
                    <li><a href="dessert.php">Dessert</a></li>
                </ul>
            </li>
            <li>
                <a href="lihat-edit.php">
                <i class="fas fa-edit"></i>
                    <span class="nav-item">Update Menu</span>
                </a>
            </li>
            <li>
                <a href="lihat-hapus.php">
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

<div class="bigbox">
    <div>
<table border=1>
        <tr>
            <th>no</th>
            <th>nama</th>
            <th>harga</th>
            <th>foto</th>
        </tr>
            <?php
                require 'konfigurasi.php';
                $result = $db->query("SELECT * FROM makanan");
                $i = 1;
                while($row = mysqli_fetch_array($result)){
            ?>
        <tr>
            <td><?=$i?></td>
            <td><?=$row['nama']?></td>
            <td><?=$row['harga']?></td>
            <td><img src="img/<?=$row['gambar']?>" alt="" width="100px"></td>
            <td id = "btn"><a href = "delete-mkn.php?id=<?=$row['id']?>"> Hapus</td>
        </tr>
            <?php
                $i++; }
            ?>
    </table>
    </div>

    <div>
    <table border=1>
        <tr>
            <th>no</th>
            <th>nama</th>
            <th>harga</th>
            <th>foto</th>
        </tr>
            <?php
                require 'konfigurasi.php';
                $result = $db->query("SELECT * FROM minuman");
                $i = 1;
                while($row = mysqli_fetch_array($result)){
            ?>
        <tr>
            <td><?=$i?></td>
            <td><?=$row['nama']?></td>
            <td><?=$row['harga']?></td>
            <td><img src="img/<?=$row['gambar']?>" alt="" width="100px"></td>
            <td id = "btn"><a href = "delete-mnm.php?id=<?=$row['id']?>">Hapus</td>
        </tr>
            <?php
                $i++; }
            ?>
    </table>
    </div>


    <div>
    <table border=1>
        <tr>
            <th>no</th>
            <th>nama</th>
            <th>harga</th>
            <th>foto</th>
        </tr>
            <?php
                require 'konfigurasi.php';
                $result = $db->query("SELECT * FROM dessert");
                $i = 1;
                while($row = mysqli_fetch_array($result)){
            ?>
        <tr>
            <td><?=$i?></td>
            <td><?=$row['nama']?></td>
            <td><?=$row['harga']?></td>
            <td><img src="img/<?=$row['gambar']?>" alt="" width="100px"></td>
            <td id = "btn"><a href = "delete-dst.php?id=<?=$row['id']?>">Hapus</td>
        </tr>
            <?php
                $i++; }
            ?>
    </table>
    </div>
</body>
</html>