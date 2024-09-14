<h1>🗒️ TUGAS 2</h1>
Repository ini dibuat untuk Tugas 2 Mata Kuliah Pemrograman Web 2 mengenai materi Object-Oriented Programming (OOP) Based View dengan menggabungkan OOP dan MYSQL.<br>
OOP merupakan pemrograman yang berfokus pada konsep objek, konsep dasar ini seperti class dan object dalam kode program.

<h1>✍️KONEKSI </h1>

Pada tahap pertama perlu dilakukan dulu koneksi antar class, dan kelas turunannya(inheritance). Semua koneksi antar kelas ada di php ini. 
- <b>Class<b><br>
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
    
 - <b> Class Pewarisan Inheritance <b><br>
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
      - ```class Study_Programs extends Students {``` merupakan kelas turunan             atau inheritance dari kelas Students. Inheritance (pewarisan)                  memungkinkan kelas Study_Programs untuk mewarisi properti dan                  metode dari kelas Students. Inherintance khas dengan extends.
      - ```tampil_data()``` Kelas ini juga memiliki metode tampil_data(),               tetapi untuk mengambil data dari tabel Study_Programs di database.
        
- <b> Polimorphism<b> <br>
Meskipun metode ```tampil_data()``` pada kelas Students didefinisikan kembali di kelas ```Study_Programs```, metode ini memiliki fungsi yang berbeda dari metode yang sama di kelas Students. Ini adalah contoh dari polymorphism, di mana metode yang sama digunakan untuk mengambil data dari tabel yang berbeda

- <b>Konstruktor(Construct)<b><br>
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
       -  ```$this->koneksi = mysqli_connect($this->host, $this->username,$this->password,$this->database);``` digunakan untuk membuat koneksi                     ke database yang ada di MySQL dengan menggunakan properti $host,               $username,$password, dan $database.
       -  ```echo "Koneksi database gagal : " . mysqli_connect_error();```               fungsi ini digunakan untuk mengecek adaranya error atau tidak dalam            melakukan koneksi, jika gagal maka output yang ditampilkan adalah              "Koneksi Database Gagal"
         
- <b>Tampil Data<b><br>
  ```
  function tampil_data()
	{
		$data = mysqli_query($this->koneksi,"select * from Students");
		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		return $hasil;
	}
  ```
  - Tampil Data Details:
    - ```function tampil_data()``` merupakan metode untuk mengambil data dari         tabel Students di database.
    - ```mysqli_query($this->koneksi,"select * from Students");``` berfungsi         untuk menjalankan query pada SQL database.
    - ```$hasil[] = $row;``` untuk menyimpan hasil pada sertiap row ke dalam           array
