<!DOCTYPE html>
<html>
<head>
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
</head>
<body>
<div class="col-3">
<h3>Tambah Pesanan</h3>
<a href="index.php">Home</a>

<hr/>
<form method="post" action="proses_data.php?action=add">
<table>
	<tr>
		<td>Nama Barang</td>
		<td>:</td>
		<td><input type="text" name="nama_penjualan"/></td>
	</tr>
	<tr>
		<td>Satuan Barang</td>
		<td>:</td>
		<td><input type="text" name="satuan_penjualan"/></td>
	</tr>
	<tr>
		<td>Harga Barang</td>
		<td>:</td>
		<td><input type="text" name="harga_penjualan"/></td>
	</tr>
	<tr>
		<td>jumlah Pesanan</td>
		<td>:</td>
		<td><input type="text" name="jumlah_penjualan"/></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td><input type="submit" name="tombol" value="Simpan"/></td>
</tr>
</table>
</form>
</div>
</body>
</html>