<?php
    require 'konfigurasi.php';
    $result = mysqli_query($db, "SELECT * FROM reservasi");
?>

<?php
    require 'konfigurasi.php';
    $result = mysqli_query($db, "SELECT * FROM reservasi ORDER BY tanggal ASC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/admin4.css">
    <style><?php include 'admin.css' ?></style>
    <link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <title>Lihat Reservasi</title>
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
                <a href="lihat.reservasi.php">
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
    <main>
<div class = "box-preview">
<table class = "table" border = 5 align = "center">
    <tr>
        <th colspan = '9'>Preview Booking Table</th>
    </tr>
    <tr>
        <th>No</th>
        <th>Name Customer</th>
        <th>Ruangan</th>
        <th>Nomor Telpon</th>
        <th>Tanggal Reservasi</th>
        <th>Jumlah Orang</th>
        <th>Notes</th>
        <th>Hapus</th>
        <!-- <th colspan = '2'>Action</th> -->
    </tr>
    <?php
        $i = 1;
        while($row = mysqli_fetch_array($result)){
    ?>
    <tr>
        <td><?= $i; ?></td>
        <td><?= $row['nama']; ?></td>
        <td><?= $row['no_telp']; ?></td>
        <td><?= $row['ruangan']; ?></td>
        <td><?= $row['tanggal']; ?></td>
        <td><?= $row['jumlah']; ?></td>
        <td><?= $row['notes']; ?></td>
        <td id = "btn"><a href = "delete-rsv.php?id=<?=$row['id']?>"> Hapus</td>
    </tr>
    <?php 
     $i++;
        }
    ?>
    </table>
</div>
    </main>
</body>
</html>