<?php
include 'koneksi.php';
$data = mysqli_query($conn, "SELECT * FROM siswa");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2473015-Devi Anggraeni</title>
</head>
<body>
    <style>
        body{
            font-family: sans-serif;}
        .btn-tambah{
            background-color: #4CAF50;
            color: white; padding: 8px 12px;
            text-decoration: none;
            border-radius: 4px;
            display: inline-block;}
        .btn-edit{
            background-color: #2196F3;
            color: white;
            padding: 5px 10px;
            text-decoration: none;
            border-radius: 4px;}
        .btn-hapus{
            background-color: #f44336;
            color: white;
            padding: 5px 10px;
            text-decoration: none;
            border-radius: 4px;}
        table{
            border-collapse: collapse;
            width: 75%;}
        th{
            background-color: #f2f2f2;}
    </style>
</head>
<body>

<h2><center>Data Siswa</center></h2>

<a href="tambah.php" class="btn-tambah">Tambah Data</a>
<br><br>

<table cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Aksi</th>
    </tr>

    <?php while($row = mysqli_fetch_assoc($data)){ ?>
    <tr>
        <td align="center"><?= $row['id']; ?></td>
        <td><?= $row['nama']; ?></td>
        <td align="center"><?= $row['kelas']; ?></td>
        <td align="center">
            <a href="edit.php?id=<?= $row['id']; ?>" class="btn-edit">Edit</a>
            <a href="hapus.php?id=<?= $row['id']; ?>" class="btn-hapus" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
        </td>
    </tr>
    <?php } ?>
</table>

</body>
</html>