<?php 
include 'model.php';
$model = new Model();
$index = 1;
?>

<!doctype html>
<html lang="en">

<head>
    <title> Cek Data </title>
    <style>
        h1 {
            text-align: center;
        }

        table,
        td,
        th {
            border: 1px solid #ddd;
            text-align: left;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            padding: 15px;
        }
    </style>
</head> 

<body>
    <h1> Laporan Data Nilai Mahasiswa </h1>
    <table>
        <thead>
            <tr>
                <th> No. </th>
                <th> NIM </th>
                <th> Nama </th>
                <th> UTS </th>
                <th> UAS </th>
                <th> Tugas </th>
                <th> NA </th>
                <th> Status </th>
            </tr>
        </thead>
        <tbody>
            <?php
            $result = $model -> tampil_data();
            if (!empty($result)) {
                foreach ($result as $data) : ?>
                    <tr>
                        <td><?=$index++ ?></td>
                        <td><?=$index->nim ?></td>
                        <td><?=$index->nama ?></td>
                        <td><?=$index->uts ?></td>
                        <td><?=$index->uas ?></td>
                        <td><?=$index->tugas ?></td>
                        <td><?=$index->na ?></td>
                        <td><?=$index->status ?></td>
                    </tr>
                <?php endforeach;
            } else { ?>
                <tr>
                    <td colspan = "9"> Belum ada data pada tabel nilai mahasiswa. </td>
                </tr>
            <?php} ?>
            </tbody>
        </table>
        <script>
            window.print();
        </script>
    </body>