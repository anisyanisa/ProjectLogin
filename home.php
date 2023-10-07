<?php
session_start();
if(isset($_SESSION['username']))
{
include "koneksi.php";
?>
anda telah berhasil login. <br>
Jika mau keluar, silahkan klik link berikut <a href="logout.php">Logout</a>
<?php
}
else
{
?>
anda tidak boleh mengakses halaman ini.
Silahkan <a href="formlogin.php">Login</a> terlebih dahulu<?php
}
?>