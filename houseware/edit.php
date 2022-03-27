<?php 	
include('koneksi.php');
$db = new database();
$id_barang = $_GET['id'];
if(! is_null($id_barang))
{
	$data_barang = $db->get_by_id($id_barang);
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
<h3>Update Data Barang</h3>
<a href="index.php">Home</a>
<hr/>
<form method="post" action="proses_data.php?action=update">
<input type="hidden" name="id_barang" value="<?php echo $data_barang['id_barang']; ?>"/>
<table>
	<tr>
		<td>Nama Barang</td>
		<td>:</td>
		<td><input type="text" name="nama_barang" value="<?php echo $data_barang['nama_barang']; ?>"/></td>
	</tr>
	<tr>
		<td>Stok Barang</td>
		<td>:</td>
		<td><input type="text" name="stok_barang" value="<?php echo $data_barang['stok_barang']; ?>"/></td>
	</tr>
	<tr>
		<td>Harga Barang</td>
		<td>:</td>
		<td><input type="text" name="harga_barang" value="<?php echo $data_barang['harga_barang']; ?>"/></td>
	</tr>
	<tr>
		<td>Satuan Barang</td>
		<td>:</td>
		<td><input type="text" name="satuan_barang" value="<?php echo $data_barang['satuan_barang']; ?>"/></td>
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