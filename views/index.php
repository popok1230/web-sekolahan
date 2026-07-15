<?php

include_once "../config/db.php";
include_once "../app/Siswa.php";

$database = new Database();
$db = $database->getConn();

$siswa = new Siswa($db);
$dataSiswa = $siswa->readAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Nisn</th>
            <th>Jurusan</th>
        </tr>
            <?php
                $no = 1;
                while ($row = $dataSiswa->fetch(PDO::FETCH_ASSOC)) { ?>
        <tr>
            <td><?php echo $no++ ?> </td>
            <td><?php echo $row["nama"] ?> </td>
            <td><?php echo $row["nisn"] ?> </td>
            <td><?php echo $row["jurusan"] ?> </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
