<?php 	
include('koneksi.php');
$db = new database();
$data_barang_penjualan = $db->tampil_data();
?>
<!doctype html>
<html lang="en">

<head>
    <title>Cetak Data</title>
    <style>
        h1 {
            text-align: center;
            font-size: 18pt;
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
    <h1>Laporan Data Hewan Pesanan Anda ┃ CIREBON PET SHOP</h1>
    <table>
        <thead>
            <tr>
            <th>No</th>
			<th>Nama Barang</th>
			<th>Satuan Barang</th>
			<th>Harga Barang</th>
			<th>Jumlah Pesanan</th>
            </tr>
        </thead>
        <tbody>
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
        </tbody>
    </table>
    <script>
         window.print();
    </script>
    </body>
    
    </html>
    