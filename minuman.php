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
            $query = "INSERT INTO minuman
            VALUES ('', '$nama', '$harga', '$gambar_baru')";

            $result = $db->query($query);

            if($result){
                header("Location:makanan.php");
            }else{
                echo "gagal kirim";
            }  
        }
        else {
            echo "GAGAL";
        }
    }
?>

<div>
<form action="" method="POST"  enctype="multipart/form-data">
            <label for="">Nama minuman: </label> 
            <input type="text" name="nama" required> <br>

            <label for="">Harga: </label> 
            <input type="number" name="harga" required> <br>

            <label for="">Foto: </label><br><br>
            <input type="file" name="gambar" required><br><br>

            <button type="submit" name="submit">Submit</button>

</div>