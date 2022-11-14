<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="css/admin4.css?va">
    <style><?php include 'css/admin.css' ?></style>
    <link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
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
                <a href="lihat_reservasi.php">
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
    
    <!-- <div class="admin"><h1>ADMIN PROFILE</h1></div> -->
    <div class="bigbox">
        <div class="admin"><h1>ADMIN PROFILE</h1></div>
        <div class="profil profil1"><img src="img/profil11.png" alt="" width="250px"></div>
        <div class="profil profil2"><img src="img/profil22.png" alt="" width="250px"></div>
        <div class="profil profil3"><img src="img/profil33.png" alt="" width="250px"></div>
    </div>
</body>
</html>