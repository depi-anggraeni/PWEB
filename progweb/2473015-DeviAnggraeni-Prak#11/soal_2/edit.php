<?php
include 'koneksi.php';
$id = $_GET['id'];
$data = mysqli_query($conn, "SELECT * FROM siswa WHERE id='$id'");
$row = mysqli_fetch_assoc($data);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Data</title>
    <style>
        body{
            font-family: sans-serif; }
        .btn-update{
            background-color: #4CAF50;
            color: white;
            padding: 8px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;}
        .btn-kembali{
            background-color: #2196F3;
            color: white; padding: 8px 15px;
            text-decoration: none;
            border-radius: 4px;
            display: inline-block;}
    </style>
</head>
<body>

<h2>Edit Data Siswa</h2>

<form action="update.php" method="POST">
    <input type="hidden" name="id" value="<?= $row['id']; ?>">

    <p>
        Nama:<br>
        <input type="text" name="nama" value="<?= $row['nama']; ?>" style="width: 300px; padding: 5px;">
    </p>
    <p>
        Kelas:<br>
        <input type="text" name="kelas" value="<?= $row['kelas']; ?>" style="width: 300px; padding: 5px;">
    </p>

    <button type="submit" class="btn-update">Update</button>
    <a href="index.php" class="btn-kembali">Kembali</a>
</form>

</body>
</html>