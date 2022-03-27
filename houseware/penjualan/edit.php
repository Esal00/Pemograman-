<?php 	
include('koneksi.php');
$db = new database();
$id_penjualan = $_GET['id'];
if(! is_null($id_penjualan))
{
	$data_barang_penjualan = $db->get_by_id($id_penjualan);
}
else
{
	header('location:tampil_data.php');
}
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<br>
<style>
    .col-3{
        border: 1px solid blue; 
        width: 22%;
        text-align:center;
        border-radius: 15px;
        position: absolute;
        margin-left:15px;
    }
</style>
<div class="col-3">
<h3>Update Pesanan Anda</h3>
<a href="index.php">Home</a>
<hr/>
<form method="post" action="proses_data.php?action=update">
<input type="hidden" name="id_penjualan" value="<?php echo $data_barang_penjualan['id_penjualan']; ?>"/>
<table>
	<tr>
		<td>Nama Barang</td>
		<td>:</td>
		<td><input type="text" name="nama_penjualan" value="<?php echo $data_barang_penjualan['nama_penjualan']; ?>"/></td>
	</tr>
	<tr>
		<td>Satuan Barang</td>
		<td>:</td>
		<td><input type="text" name="satuan_penjualan" value="<?php echo $data_barang_penjualan['satuan_penjualan']; ?>"/></td>
	</tr>
	<tr>
		<td>Harga Barang</td>
		<td>:</td>
		<td><input type="text" name="harga_penjualan" value="<?php echo $data_barang_penjualan['harga_penjualan']; ?>"/></td>
	</tr>
	<tr>
		<td>Jumlah Pesanan</td>
		<td>:</td>
		<td><input type="text" name="jumlah_penjualan" value="<?php echo $data_barang_penjualan['jumlah_penjualan']; ?>"/></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td><input type="submit" name="tombol" value="Update"/></td>
	</tr>
</table>
</form>
</div>
</body>
</html>