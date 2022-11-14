<?php 
    require 'konfigurasi.php';
    $result1 = mysqli_query($db, "SELECT * FROM makanan");
    $result2 = mysqli_query($db, "SELECT * FROM minuman");
    $result3 = mysqli_query($db, "SELECT * FROM dessert");

    if(isset($_GET['search'])){
        $keyword = $_GET['keyword'];
        $query_makan = mysqli_query($db, "SELECT * FROM makanan where 
        nama LIKE '%$keyword%' OR 
        harga LIKE '%$keyword%'");

        $query_minum = mysqli_query($db, "SELECT * FROM minuman where 
        nama LIKE '%$keyword%' OR 
        harga LIKE '%$keyword%'");

        $query_dessert = mysqli_query($db, "SELECT * FROM dessert where 
        nama LIKE '%$keyword%' OR 
        harga LIKE '%$keyword%'");
    }else{
        $query_makan = mysqli_query($db, "SELECT * FROM makanan");
        $query_minum = mysqli_query($db, "SELECT * FROM minuman");
        $query_dessert = mysqli_query($db, "SELECT * FROM dessert");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="css/admin4.css?vl"> 
    <link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
</head>
<body>
<div class="bigboxbos">
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
                    <span class="fas fa-caret-down" id="panah"></span>
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
                    <span class="nav-item">Reservasi</span>
                </a>
            </li>
            <li>
                <a href="logout.php">
                <i class="fas fa-sign-out-alt"></i>
                    <span class="nav-item">Signout</span>
                </a>
            </li>
        </ul>
    </nav>

<div class="bigbox">
    <div class="table0">
        <table>
            <tr>
                <form action="" method="GET" class="formlain">
                    <td colspan='3'>
                        <div class="search">
                            <input type="text" name="keyword" id="keyword" placeholder='cari menu dan harga'>
                        </div>
                    </td>
                    <td>
                        <button type="submit" name="search" id="cari">
                            <div class='ikon'><i class="bi bi-search"></i></div>
                        </button>
                    </td>
            </tr>
    </div>
        </table>
    </div>
 
    <div class="tabel1">
        <table border='5'>
        <tr>
            <th colspan='4' class="head">--MAKANAN--</th>
        </tr>
                <tr>
                    <th>no</th>
                    <th>Makanan</th>
                    <th>harga</th>
                    <th>foto</th>
                </tr>
                    <?php
                            $i = 1;
                            $makanan = [];
                            // while($row = mysqli_fetch_array($result)){
                
                            while($row = mysqli_fetch_assoc($query_makan)){
                                $makanan[] = $row;
                    ?>
                <tr>
                    <td><?=$i?></td>
                    <td><?=$row['nama']?></td>
                    <td><?=$row['harga']?></td>
                    <td><img src="img/<?=$row['gambar']?>" alt="" width="100px"></td>
                </tr>
                    <?php
                        $i++; }
                    ?>
        </table>
    </div>

    <div class="tabel2">
        <table>
        <tr>
            <th colspan='4'class="head">--MINUMAN--</th>
        </tr>

            <tr>
                <th>no</th>
                <th>minuman</th>
                <th>harga</th>
                <th>foto</th>
            </tr>
                <?php
                        $i = 1;
                        $minuman = [];
                        // while($row = mysqli_fetch_array($result)){
            
                        while($row = mysqli_fetch_assoc($query_minum)){
                            $minuman[] = $row;
                ?>
            <tr>
                <td><?=$i?></td>
                <td><?=$row['nama']?></td>
                <td><?=$row['harga']?></td>
                <td><img src="img/<?=$row['gambar']?>" alt="" width="100px"></td>
            </tr>
                <?php
                    $i++; }
                ?>
        </table>
    </div>

    <div class="tabel3">
        <table>
        <tr>
            <th colspan='4'class="head">--Dessert--</th>
        </tr>
            <tr>
                <th>no</th>
                <th>dessert</th>
                <th>harga</th>
                <th>foto</th>
            </tr>
                <?php
                        $i = 1;
                        $dessert = [];
                        // while($row = mysqli_fetch_array($result)){
            
                        while($row = mysqli_fetch_assoc($query_dessert)){
                            $dessert[] = $row;
                ?>
            <tr>
                <td><?=$i?></td>
                <td><?=$row['nama']?></td>
                <td><?=$row['harga']?></td>
                <td><img src="img/<?=$row['gambar']?>" alt="" width="100px"></td>
            </tr>
                <?php
                    $i++; }
                ?> 


        </table>
    </div>
</div>
</div>
</body>
</html>
