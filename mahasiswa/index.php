<?php
include 'model.php';
$model = new Model();
$index = 1;
?>
<!doctype html>
<html lang="en">

<head>
    <tittle> Data Mahasiswa </title>
</head>

<body>
    <div>
        <h1> Data Nilai Mahasiswa </h1>
        <a href="create.php"> Tambah Data </a>
        <br>
        <a href="print.php" target="_blank"> Cetak Data </a>
        <br>
        <table border="1">
            <thead>
                <tr>
                    <th> No. </th>
                    <th> NIM </th>
                    <th> Nama </th>
                    <th> UTS</th>
                    <th> UAS </th>
                    <th> Tugas </th>
                    <th> NA </th>
                    <th> Status </th>
                    <th> Aksi </th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $result = $model->tampil_data();
                if (!empty ($result)) {
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
                            <td>
                                <a name="edit" id="edit" href="edit.php?nim=<?= $data->nim ?> "> Edit </a>
                                <a name="hapus" id="hapus" href="process.php?nim=<?= $data->nim ?> "> Delete </a>
                            </td>
                        </tr>   
                    <?php endforeach;
                } else { ?>
                    <tr>
                        <td colspan="9"> Belum ada data pada tabel nilai mahasiswa. </td>
                    </tr>
                <?php } ?>
            </tbody> 
        </table>
    </div>
</body>

</html>