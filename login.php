<?php
error_reporting(E_ALL);
session_start();
 include "koneksi.php";
if (isset($_SESSION['username'])) {
    header("Location: home.php");
    exit();
}
 
if (isset($_POST['btnlogin'])) //btnlogin=name dari tombol
{
    $username = $_POST['usern']; //usern=name dari textfield Username
    $password = $_POST['pass']; //pass=name dari textfield password

    $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'"; 
    $result = mysqli_query($conn, $sql);
 
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        header("Location: home.php");
        exit();
    } else {
        echo "<script>alert('Email atau password Anda salah. Silakan coba lagi!')</script>";
        echo "<script>window.location.href='formlogin.php';</script>";

    }
}
?>