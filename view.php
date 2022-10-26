<?php

require 'koneksi.php';

$siswa = query("SELECT * FROM siswa");

?>
<!DOCTYPE html
<html Lang="en"
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Siswa</title>
    <h1>Data Siswa</h1>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>NISN</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Jurusan</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach( $siswa as $row) :?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $row["NISN"]?></td>
                <td><?= $row["nama"]?></td>
                <td><?= $row["kelas"]?></td>
                <td><?= $row["jurusan"]?></td>
            </tr>

        <?php $i++?>
        <?php endforeach;?>
    </table>
</body>
</html>
