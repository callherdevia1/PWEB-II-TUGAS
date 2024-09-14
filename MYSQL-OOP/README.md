<h1>🗒️ PHP MY ADMIN MYSQL</h1>

Repository ini dibuat untuk Tugas 2 Mata Kuliah Pemrograman Web 2 mengenai materi Object-Oriented Programming (OOP) Based View.<br>
Database Pada MYSQL digunakan sebagai Informasi Pada Data Yang akan di masukan.
## STRUKTUR DATABASE TUGAS 2
## 1. XAMPP 
Sebelum memasukan database pada phpmyadmin dan mysql, perlu terlebih dahulu untuk menyalakan xampp apache dan juga mysql supaya database dapat menyala dan dapat menyimpan tabel serta database yang akan dibuat

- <b>XAMPP</b> <br>
![Screenshot 2024-09-14 100857](https://github.com/user-attachments/assets/639adbd4-0819-4b70-bbdf-c7e347c30083) <br>

## 2. DATABASE
Setelah xampp dinyalakan klik Admin pada MYSQL 

- <b>MYSQL</b> <br>
![Screenshot 2024-09-14 101245](https://github.com/user-attachments/assets/c345d1ff-5647-4e74-91b1-2541a3f4005e) <br>


Dan nantinya akan muncul temapilan seperti berikut

- <b>PHPMYADIN</b> <br>
![Screenshot 2024-09-14 101428](https://github.com/user-attachments/assets/de1997fc-082a-4dfd-8514-2e1c9530eef2) <br>

## 3. Database dan Tabel 
Buat Database yang akan dibuat dan juga tabel yang akan dibuat dengan mengisi beberapa informasi yang dibutuhkan pada saat membuatnya.
- <b>Students</b><br>
  Tabel Students pada database pweb-2 memiliki beberapa kolom untuk menyimpan informasi didalamnya, pada saat membuat tabel di phpmyadmin MYSQL harus terlebih dulu mengisi infromasi baik itu kolom, tipe data, dan juga indeks, maupun primary key yang ada pada tabel tersebut. Pada Tabel Students disi dengan informasi
  - ``id`` dengan tipe data integer untuk nomor indenitikasi untuk untuk setiap mahasiswa id sebagai primary key pada tabel
  - ``nim`` dengan tipe data integer untuk nomor induk setiap mahasiswa
  - ``name`` dengan tipe data varchar untuk nama setiap mahasiswa
  - ``address`` dengan tipe data varchar untuk menulis tempat tinggal
  - ``signature`` dengan tipe data varchar untuk mengisi tanda tangan
  - ``number_phone`` dengan tipe data integer untuk nomo telepon mahasiswa
  - ``user_id`` dengan tipe data integer yang saling berhubungan dengan id mahasiswa
  - ``student_class`` dengan tipe data integer yang merupakan id kelas mahasiswa
  - ``deleted_at`` dengan tipe data timestamp untuk dapat melihat kapan data dihapus
  - ``created_at`` dengan tipe data timestamp untuk dapat melihat kapan data dibuat
  - ``updated_at`` dengan tipe data timestamp untuk dapat melihat kapan data diperbarui

- <b>Tabel Students</b> <br>
![Screenshot 2024-09-14 101708](https://github.com/user-attachments/assets/6382be32-6130-4738-8e3f-9313f9ff9b10)<br>

- <b>Study Programs</b><br>
Tabel Study Programs pada database pweb-2 memiliki beberapa kolom untuk menyimpan informasi didalamnya, pada saat membuat tabel di phpmyadmin MYSQL harus terlebih dulu mengisi infromasi baik itu kolom, tipe data, dan juga indeks, maupun primary key yang ada pada tabel tersebut. Pada Tabel Students disi dengan informasi
  - ``id`` dengan tipe data integer untuk nomor indenitikasi untuk untuk setiap study programs id sebagai primary key pada tabel
  - ``name`` dengan tipe data varchar untuk nama setiap study programs
  - ``deleted_at`` dengan tipe data timestamp untuk dapat melihat kapan data dihapus
  - ``created_at`` dengan tipe data timestamp untuk dapat melihat kapan data dibuat
  - ``updated_at`` dengan tipe data timestamp untuk dapat melihat kapan data diperbarui
 
- <b>Tabel Study Programs</b> <br>
![Screenshot 2024-09-14 102439](https://github.com/user-attachments/assets/c3fbf13b-55c8-4351-8aff-8210b70fb893) <br>
