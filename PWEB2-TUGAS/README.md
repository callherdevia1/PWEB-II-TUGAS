<h1>🗒️ TUGAS 2</h1>
Repository ini dibuat untuk Tugas 2 Mata Kuliah Pemrograman Web 2 mengenai materi Object-Oriented Programming (OOP) Based View dengan menggabungkan OOP dan MYSQL.<br>
OOP merupakan pemrograman yang berfokus pada konsep objek, konsep dasar ini seperti class dan object dalam kode program.

<h1>✍️KONEKSI </h1>

Pada tahap pertama perlu dilakukan dulu koneksi antar class, dan kelas turunannya(inheritance). Semua koneksi antar kelas ada di php ini. 
## 1. Class
  ```
  class Students {
  private $host = "localhost";
	private $username = "root";
	private $password = "";
	private $database = "pweb-2";
	protected $koneksi = "";
  ```
  - Class Students Details: 
  ```class Students {``` merupakan kelas yang diberi nama Students. Di dalam       kelas ini terdapat beberapa atribut.
  - Encapsulasi Details:
    ```private``` Pada setiap atribut diatur sebagai private. Artinya, atribut       atribut ini hanya bisa diakses di dalam kelas Students dan tidak bisa          diakses dari luar kelas Students.
  - Koneksi MYSQL Details:
    ```
    private $host = "localhost";
	  private $username = "root";
	  private $password = "";
	  private $database = "pweb-2";
	  protected $koneksi = "";
    ```
    Private pada host yang menyimpan informasi terkoneksi ke database yang ada     pada mysql php admin sehingga data yang ditampilkan nantinya merupakan         output dri mysql.
    
## 2. Class Pewarisan Inheritance
    ```
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
    ```
- Class Study Programs Pewarisan Details:
      - ```class Study_Programs extends Students {``` merupakan kelas turunan  atau inheritance dari kelas Students. Inheritance (pewarisan)                  memungkinkan kelas Study_Programs untuk mewarisi properti dan                  metode dari kelas Students. Inherintance khas dengan extends.
      - ```tampil_data()``` Kelas ini juga memiliki metode tampil_data(),               tetapi untuk mengambil data dari tabel Study_Programs di database.
        >
## 3. Polimorphism
Meskipun metode ```tampil_data()``` pada kelas Students didefinisikan kembali di kelas ```Study_Programs```, metode ini memiliki fungsi yang berbeda dari metode yang sama di kelas Students. Ini adalah contoh dari polymorphism, di mana metode yang sama digunakan untuk mengambil data dari tabel yang berbeda

## 4. Konstruktor(Construct)

  ```
  function __construct(){//construct
  $this->koneksi = mysqli_connect($this->host, $this->username, $this->password,$this->database);
  if (mysqli_connect_errno()){
  echo "Koneksi database gagal : " . mysqli_connect_error();
  }
  }
  ```
- Construct Details:
  - ```function __construct()```  digunakan untuk melakukan inisialisasi,          seperti menghubungkan ke database Students.
  - ```$this->koneksi = mysqli_connect($this->host, $this->username,$this->password,$this->database);``` digunakan untuk membuat koneksi                     ke database yang ada di MySQL dengan menggunakan properti $host,               $username,$password, dan $database.
  - ```echo "Koneksi database gagal : " . mysqli_connect_error();```               fungsi ini digunakan untuk mengecek adaranya error atau tidak dalam            melakukan koneksi, jika gagal maka output yang ditampilkan adalah              "Koneksi Database Gagal"
         
## 5. Tampil Data<b><br>
  ```
  function tampil_data(){
	$data = mysqli_query($this->koneksi,"select * from Students");
	while($row = mysqli_fetch_array($data)){
	$hasil[] = $row;
	}
	return $hasil;
	}
  ```
  - Tampil Data Details:
    - ```function tampil_data()``` merupakan metode untuk mengambil data dari tabel Students di database.
    - ```mysqli_query($this->koneksi,"select * from Students");``` berfungsi untuk menjalankan query pada SQL database.
    - ```$hasil[] = $row;``` untuk menyimpan hasil pada sertiap row ke dalam array

<h1>✍️STUDENTS</h1>

Pada Tahap Kedua mulai memasukan OOP dari kelas Students yang terkoneksi dengan database yang ada pada MYSQ. Pada Bagian ini PHP tergabung dengan HTML. Sehingga akan dijelaskan juga mengenai detail untuk mempercantik output menggunakan vanbar.

## 1. Data Students Pada MYSQL
  ```
  include('koneksi.php'); //Mengkoneksikan ke koneksi.php
  $db = new students();
  $database = $db->tampil_data();
  ```
  - Details: <br>
    - ```
      include('koneksi.php')
      ```
      Berfungsi untuk menghubungkan ke file koneksi.php, file tersebut berisi kode untuk koneksi ke database MySQL. Dengan menggunakan koneksi tersebut maka dapat terhubung ke database di halaman students.
    - ```
      $db = new students()
      ```
      Membuat objek baru dari kelas Students. Dengan kelas baru ini maka dapat mengakses fungsi yang ada di kelas tersebut.
    - ```
      $database = $db->tampil_data()
      ```
      Objek $db digunakan untuk memanggil fungsi tampil_data() yang ada di kelas students. Fungsi ini mengambil data dari database dan hasilnya disimpan ke variabel $database yang nantinya, variabel ini akan digunakan untuk menampilkan data di tabel HTML.

## 2. Bagian HTML CSS Navbar dan PHP</b><br>
Bagian ini digunakan untuk membuat tampilan pada output menjadi cantik dengan design navbar menggunakan html serta css.
- HTML Details:<br>
	- ```<!DOCTYPE html>``` mendeklarasikan bahwa menggunakan 			html untuk membuat halaman web
	- ```<head>``` bagian ini berisikan informasi infromasi 			mengenai judul, yang tidak terlihat ketika di 				ouputkan
	- ```<title>Student Data</title>``` berfungsi untuk judul 			halaman Students Data yang akan muncul di halaman browser
	- ```<style>``` bagian ini berisi code CSS untuk mengatur 			tampilan halaman baik dalam warna, text, dan lain 			lain
  
- Bagian CSS:<br>
Pada bagian CSS, text, warna, elemen yang ada pada output semua ada
pada CSS ini
	```
	body {
		font-family: 'Arial', sans-serif;
		background-color: #2c3e50;
		margin: 0;
		padding: 0;
		color: #ecf0f1;
	}
	```
	- ```body {``` untuk mengatur seluruh tampilan halaman seperti settingan untuk font ```font-family```, warna background output ```background-output:```, margin, padding, dan juga warna. 
	- ```<head>``` bagian ini berisikan informasi infromasi 			mengenai judul, yang tidak terlihat ketika di 				ouputkan.
- Bagian Navbar <br>
	```
 	.navbar {
	width: 80%;
	background: linear-gradient(135deg, #1abc9c, #16a085);
	overflow: hidden;
	box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
	margin: 20px auto;
	border-radius: 15px;
	display: flex;
	justify-content: center;
	padding: 10px 0;
	}
 	```
 	- ```.navbar {``` digunakan untuk bagian atas navbar dengan menggunakan warna latar belakang hijau supaya tampilan pada navbar tersebut terlihat nyaman dilihat
  	- Pada Output Navbar Student Bagian Atas terlihat menu menu berada di tengah dengan menggunakan ```justify-content: center;```
  	- Pada Menu Navigasi Dibuat Seperti Ini:
  	  ```
  	  <div class="navbar">
  	  	<a href="home.php">Home</a>
  	  	<a href="students.php">Students</a>
  	  	<a href="studyprog.php">Study Programs</a>
  	  	<a href="aboutme.php">About Me</a>
  	  </div>
  	  ```
  	  - Fungsi ```<div class="navbar">``` digunakan untuk membuat navigasi yang menarik serta untuk menautkan link ke halaman yang berbeda menggunakan ```<a href="studyprog.php">Study Programs</a>```
  	  - Pada Navigasi Bar juga ditambahkan ```tr:hover {``` untuk memberikan efek shading atau shadow saat menu di arahkan
		
- TABEL HTML<br>
Tabel HTML digunakan untuk membuat tabel untuk output yang ada pada database terlihat rapih dan juga menarik dengan mengatur elemen elemennya.
	```
	<table>
	<tr>
		<th>No</th>
		<th>ID</th>
		<th>NIM</th>
		<th>Name</th>
		<th>Address</th>
		<th>Signature</th>
		<th>Number Phone</th>
		<th>User ID</th>
		<th>Student Class ID</th>
		<th>Deleted At</th>
		<th>Created At</th>
		<th>Updated At</th>
	</tr>
	```
 	- Fungsi ```<table>``` digunakan untuk membuat tabel pada html 		sehingga output yang ditampilkan rapih dan dapat diatur sesuai 		dengan kebutuhan
  	- Menggunakan ```<tr> dan <th>``` untuk membuat satu baris dalam 	tabel, <th> digunakan untuk membuat header judul secara bold atau 	tebal yang biasa ada diatas tabel
  
	  	  
	  	  	
			


