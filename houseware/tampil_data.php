<?php 	
include('koneksi.php');
$db = new database();
$data_barang = $db->tampil_data();
$data_barang_penjualan = $db->tampil_data_penjualan();


?>
<!DOCTYPE html>
<html>
<head>
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
        background-color: aliceblue;
        }


        footer{
            text-align: center;
            font-size: 10pt;
            padding-top: 10px;
            padding-bottom: 10px;
        }

        th,
        td {
        padding: 15px;
        }

        .col-2{
            padding: 20px;
        }

    </style>
</head>
<body>
<div class="col-2">
    <h1>Detail Data Barang</h1>
    <a href="index.php">Home</a>
    <br> <br>
    <a href="tambah_data.php">Tambah Data Barang</a>
    <br> <br>
    <a href="print.php" target="_blank">Cetak Data Barang</a>
    </div>
<table border="1";>
		<tr>
			<th>No</th>
			<th>Nama Barang</th>
			<th>Stok Barang</th>
			<th>Harga Barang</th>
			<th>Satuan Barang</th>
            <th>Action</th>
		</tr>
		<?php 
		$no = 1;
		foreach($data_barang as $row){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $row['nama_barang']; ?></td>
				<td><?php echo $row['stok_barang']; ?></td>
				<td><?php echo $row['harga_barang']; ?></td>
				<td><?php echo $row['satuan_barang']; ?></td>
				<td>
					<a href="edit.php?id=<?php echo $row['id_barang']; ?>">Update</a> /
					<a href="proses_data.php?action=delete&id=<?php echo $row['id_barang']; ?>">Delete</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
    <br>
    <hr>
    <br>
<div class="col-2">
    <h1>Detail Pesanan Pelanggan</h1>
    <a href="print_penjualan.php" target="_blank">Cetak Data Barang Pesanan Pelanggan</a>
    </div>
    <table border="1";>
		<tr>
			<th>No</th>
			<th>Nama Barang</th>
			<th>Satuan Barang</th>
			<th>Harga Barang</th>
			<th>Jumlah Pesanan</th>
		</tr>
		<?php 
		$no = 1;
		foreach($data_barang_penjualan as $row){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $row['nama_penjualan']; ?></td>
				<td><?php echo $row['satuan_penjualan']; ?></td>
				<td><?php echo $row['harga_penjualan']; ?></td>
				<td><?php echo $row['jumlah_penjualan']; ?></td>
			</tr>
			<?php 
		}
		?>
	</table>
    <br> <br>

    <footer>WAROENG ISAL</footer>
</body>
</html>