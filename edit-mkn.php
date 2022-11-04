<?php
    require 'konfigurasi.php';

// Manangkap
if(isset($_GET['id'])){
    $id = $_GET['id'];
}

// Tampilkan value inputan dari id
$result = mysqli_query($db, 
"SELECT * FROM makanan WHERE id = '$id'");
$row = mysqli_fetch_array($result);


    if(isset($_POST['submit'])){
        $nama = $_POST['nama'];
        $harga = $_POST['harga'];

        $gambar = $_FILES['gambar']['name'];
        $x = explode('.',$gambar);
        $ekstensi = strtolower(end($x));
        $gambar_baru = "$nama.$ekstensi";

        $tmp = $_FILES['gambar']['tmp_name'];
        

        if(move_uploaded_file($tmp, "img/".$gambar_baru)){
            $result = mysqli_query($db, 
            "UPDATE makanan SET 
            nama = '$nama',
            harga = '$harga',
            gambar = '$gambar_baru'
            WHERE id = '$id'");
        
            if($result){
                echo " 
                    <script> 
                    alert('Data Berhasil DiUpdate');
                    document.location.href = 'lihat.php';
                    </script>
                ";
            } else {
                echo " 
                    <script> 
                    alert('Data Gagal DiUpdate');
                    </script>
                ";
            }
        }
        }
        ?>


<div>
<form action="" method="POST"  enctype="multipart/form-data">
            <label for="">Nama Makanan: </label> 
            <input type="text" name="nama" required value = <?= $row['nama']?>> <br>

            <label for="">Harga: </label> 
            <input type="number" name="harga" required value = <?= $row['harga']?>> <br>

            <label for="">Foto: </label><br><br>
            <input type="file" name="gambar" required value = <?= $row['gambar']?>> <br><br>

            <button type="submit" name="submit">Submit</button>

</div>