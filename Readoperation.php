<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Operasi Read</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid black;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Data Buku Pada Perpustakaan</h2>
    <table>
        <tr>
            <th>Id_buku</th>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Tahun_terbit </th>
        </tr>
        <?php
require_once 'Readoperation.php';

$read = ReadOperations::getInstance();
$items = $read->read();
if ($items === false) {
    echo "Failed to fetch items.";
} else {
    foreach ($items as $item) {
        echo "<tr>";
        echo "<td>".$item['Id_buku']."</td>";
        echo "<td>".$item['Judul']."</td>";
        echo "<td>".$item['Penulis']."</td>";
        echo "<td>".$item['Tahun_terbit']."</td>";
        echo "</tr>";
    }
}
?>
    </table>
</body>
</html>
