<?php

$username = $_POST['username'];
$password = $_POST['password'];

echo "<font face='sans-serif'>";

if($username == "admin" && $password == "admin"){
    echo "<h2>Login berhasil!</h2>";
    echo "<h3>Selamat datang, <font color='blue'><strong>admin</strong></font>.</h3>";
} else {
    echo "<h2><font color='red'>Username : " . htmlspecialchars($username) . " Tidak Terdaftar!</font></h2>";
}

echo "<br><a href='login.php'>kembali ke halaman login</a>";
echo "</font>";

?>