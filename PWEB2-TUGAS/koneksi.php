<?php 
class Students { //Encapsulasi supaya menjadi private
    private $host = "localhost";
	private $username = "root";
	private $password = "";
	private $database = "pweb-2";
	protected $koneksi = "";

	function __construct(){//construct
		$this->koneksi = mysqli_connect($this->host, $this->username, $this->password,$this->database);
		if (mysqli_connect_errno()){
			echo "Koneksi database gagal : " . mysqli_connect_error();
		}
	}
	//POLYMORPHISM TABEL1
    function tampil_data()
	{
		$data = mysqli_query($this->koneksi,"select * from Students");
		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		return $hasil;
	}
}

class Study_Programs extends Students {// Inherintance menggunakan extends
	function tampil_data()// polymorphism tabel 2
	{
		$data = mysqli_query($this->koneksi,"select * from Study_Programs");
		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		return $hasil;
	}
}
?>