<?php 
include('koneksi.php');
$koneksi = new database();
 
$action = $_GET['action'];
if($action == "add")
{
	$koneksi->tambah_data($_POST['nama_penjualan'],$_POST['satuan_penjualan'],$_POST['harga_penjualan'],$_POST['jumlah_penjualan']);
	header('location:tampil_data.php');
}
elseif($action=="update")
{
	$koneksi->update_data($_POST['nama_penjualan'],$_POST['satuan_penjualan'],$_POST['harga_penjualan'],$_POST['jumlah_penjualan'],$_POST['id_penjualan']);
	header('location:tampil_data.php');
}
elseif($action=="delete")
{
	$id_penjualan = $_GET['id'];
	$koneksi->delete_data($id_penjualan);
	header('location:tampil_data.php');
}
?>