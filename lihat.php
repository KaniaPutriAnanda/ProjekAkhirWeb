<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
        </tr>
            <?php
                $i++; }
            ?>
    </table>

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
        </tr>
            <?php
                $i++; }
            ?>
    </table>

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
        </tr>
            <?php
                $i++; }
            ?>
    </table>
</body>
</html>