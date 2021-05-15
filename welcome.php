<?php
session_start(); // Start session nya
// Kita cek apakah user sudah login atau belum
// Cek nya dengan cara cek apakah terdapat session username atau tidak
if( ! isset($_SESSION['login'])){ // Jika tidak ada session username berarti dia belum login
  header("location: index.php"); // Kita Redirect ke halaman index.php karena belum login
}
?>
<html>
<head>
  <title>Halaman Setelah Login</title>
  <style>
        .parent1{
          background-color: #7FFF00;
        }
        .parent2{
          text-align: center;
        }

        .button{
        background: radial-gradient(159.97% 67694.69% at 0% 50%, #093BF7 0%, rgba(11, 238, 253, 0.633947) 86.46%, rgba(9, 236, 251, 0.28886) 99.98%, rgba(44, 223, 239, 0.140625) 99.99%, rgba(0, 221, 208, 0) 100%);
        color: white;
        margin: auto;
        border-radius: 5px;
        padding: 4px;
        font-size: 15px;
        text-decoration: none;
		}
  </style>
</head>
<body>
    <div class="parent1">
      <div class="parent2">
      <h1>Selamat Datang <?php echo $_SESSION['username']; ?></h1>
      <h4>Anda Berhasil Login Ke Dalam Sistem</h4>
      <a href="logout.php" class="button" >Logout</a>
      </div>
    
    </div>
</body>
</html>


