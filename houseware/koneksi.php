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
 
	function tampil_data_Penjualan()
	{
		$data = mysqli_query($this->koneksi,"select * from tb_penjualan");
		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		return $hasil;
	}

	function tampil_data()
	{
		$data = mysqli_query($this->koneksi,"select * from tb_barang");
		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		return $hasil;
	}
 
	function tambah_data($nama_barang,$stok_barang,$harga_barang,$satuan_barang)
	{
		mysqli_query($this->koneksi,"insert into tb_barang values ('','$nama_barang','$stok_barang','$harga_barang','$satuan_barang')");
	}
 
	function get_by_id($id_barang)
	{
		$query = mysqli_query($this->koneksi,"select * from tb_barang where id_barang='$id_barang'");
		return $query->fetch_array();
	}
 
	function update_data($nama_barang,$stok_barang,$harga_barang,$satuan_barang,$id_barang)
	{
		$query = mysqli_query($this->koneksi,"update tb_barang set nama_barang='$nama_barang',stok_barang='$stok_barang',harga_barang='$harga_barang',
		satuan_barang='$satuan_barang' where id_barang='$id_barang'");
	}
 
	function delete_data($id_barang)
	{
		$query = mysqli_query($this->koneksi,"delete from tb_barang where id_barang='$id_barang'");
	}
}
?>