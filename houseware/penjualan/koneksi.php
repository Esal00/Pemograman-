<?php 
class database{
 
	var $host = "localhost";
	var $username = "root";
	var $password = "";
	var $database = "alat_dapur";
	var $koneksi = "";
	function __construct(){
		$this->koneksi = mysqli_connect($this->host, $this->username, $this->password,$this->database);
		if (mysqli_connect_errno()){
			echo "Koneksi database gagal : " . mysqli_connect_error();
		}
	}
	function tampil_data()
	{
		$data = mysqli_query($this->koneksi,"select * from tb_barang");
		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		return $hasil;
	}
	function tampil_data_penjualan()
	{
		$data = mysqli_query($this->koneksi,"select * from tb_penjualan");
		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		return $hasil;
	}
 
	function tambah_data($nama_penjualan,$satuan_penjualan,$harga_penjualan,$jumlah_penjualan)
	{
		mysqli_query($this->koneksi,"insert into tb_penjualan values ('','$nama_penjualan','$satuan_penjualan','$harga_penjualan','$jumlah_penjualan')");
	}
 
	function get_by_id($id_penjualan)
	{
		$query = mysqli_query($this->koneksi,"select * from tb_penjualan where id_penjualan='$id_penjualan'");
		return $query->fetch_array();
	}
 
	function update_data($nama_penjualan,$satuan_penjualan,$harga_penjualan,$jumlah_penjualan,$id_penjualan)
	{
		$query = mysqli_query($this->koneksi,"update tb_penjualan set nama_penjualan='$nama_penjualan',satuan_penjualan='$satuan_penjualan',
		harga_penjualan='$harga_penjualan',jumlah_penjualan='$jumlah_penjualan' where id_penjualan='$id_penjualan'");
	}
 
	function delete_data($id_penjualan)
	{
		$query = mysqli_query($this->koneksi,"delete from tb_penjualan where id_penjualan='$id_penjualan'");
	}
}
?>