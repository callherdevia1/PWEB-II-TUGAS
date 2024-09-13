<?php
?>
<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <style>
        /* Membuat tampilan body lebih menarik*/
        body {
            font-family: 'Arial', sans-serif;
            background-color: #2c3e50;
            margin: 0;
            padding: 0;
            color: #ecf0f1;
        }

        /* Navbar*/
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

        .navbar a {
            display: block;
            color: #ecf0f1;
            text-align: center;
            padding: 16px 24px;
            text-decoration: none;
            font-size: 18px;
            transition: background-color 0.4s ease, transform 0.3s ease;
            border-radius: 12px;
            margin: 0 10px;
            position: relative;
            overflow: hidden;
            z-index: 1;
        }

        .navbar a::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(255, 255, 255, 0.15);
            z-index: -1;
            transition: transform 0.4s ease;
            transform: scaleX(0);
            transform-origin: right;
        }

        .navbar a:hover::before {
            transform: scaleX(1);
            transform-origin: left;
        }

        .navbar a:hover {
            background-color: transparent;
            transform: scale(1.05);
        }

        /* Navbar untuk judul Home Page */
        .section-title {
            margin-top: 20px; /* Mengurangi jarak navbar */
            text-align: center;
            font-size: 30px; 
            font-weight: 600;
            color: #1abc9c;
            text-transform: uppercase;
            padding: 10px 0;
            border-bottom: 2px solid #1abc9c;
            letter-spacing: 2px; 
        }

        /* Mempercantik bagian tabel*/
        table {
            width: 80%;
            border-collapse: collapse;
            margin: 20px auto;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            background: #34495e;
            border-radius: 10px;
            overflow: hidden;
        }

        table, th, td {
            border: 1px solid #2c3e50;
        }

        th, td {
            padding: 15px;
            color: #ecf0f1;
        }

        th {
            background-color: #1abc9c;
            color: #2c3e50;
            font-size: 16px;
        }

        tr:nth-child(even) {
            background-color: #2c3e50;
        }

        tr:nth-child(odd) {
            background-color: #34495e;
        }

        tr:hover {
            background-color: #1abc9c;
            color: #2c3e50;
        }

        /* Untuk kolom rata tengah */
        .center-align {
            text-align: center;
        }

        /* Untuk kolom rata kiri */
        .left-align {
            text-align: left;
        }

        /* Styling untuk container */
        .container {
            margin: 30px auto;
            text-align: center;
            max-width: 800px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        }

        /* Untuk paragraf */
        .container p {
            font-size: 18px;
            color: #ecf0f1;
            line-height: 1.6;
            margin: 20px 0;
        }
    </style>
</head>
<body>

<!-- Untuk memanggil dri php ke output navbar-->
<div class="navbar">
    <a href="home.php">Home</a>
    <a href="students.php">Students</a>
    <a href="studyprog.php">Study Programs</a>
    <a href="#contact">Contact</a>
</div>

<!-- Untuk Judul judul Home Page -->
<div class="section-title">
    Home Page
</div>

<div class="container">
    <p>Tugas ini untuk Praktikum Pemrograman Web 2 Object Oriented Programming (OOP) Based View yang diampu oleh Bapak Prih Diantono Abda'u, S.Kom.,M.Kom</p>
</div>

</body>
</html>

