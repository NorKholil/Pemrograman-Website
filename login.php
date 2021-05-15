<?php
session_start();
include 'koneksi.php';
if (isset($_SESSION['login'])){
    header("location: welcome.php");
    exit();
}
if (isset($_POST["submit"])){
    $username = $_POST['username'];
    $password = $_POST['password'];
 
    $database = mysqli_query($connection,"SELECT * FROM user WHERE username='$username' and password='$password'");
    $result = mysqli_num_rows($database);
    
    if($result > 0){
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;

        setcookie($_SESSION['username'], $_SESSION['password'], time() + (86400 * 30), "/");
        $_SESSION['login'] = true;
            header("location: welcome.php");
            exit();
    }else{
        echo "<script>alert('Username atau Password Tidak Sesuai!'); document.location.href = 'index.php';</script>";
    }

}
?>