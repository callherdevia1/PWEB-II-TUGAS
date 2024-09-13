<?php
?>
<!DOCTYPE html>
<html>
<head>
    <title>About Me</title>
    <style>
        /* Membuat tampilan body lebih menarik */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #2c3e50;
            margin: 0;
            padding: 0;
            color: #ecf0f1;
        }

        /* Navbar */
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

        /* Judul Section */
        .section-title {
            margin-top: 20px;
            text-align: center;
            font-size: 30px; 
            font-weight: 600;
            color: #1abc9c;
            text-transform: uppercase;
            padding: 10px 0;
            border-bottom: 2px solid #1abc9c;
            letter-spacing: 2px;
        }

        /* Container untuk informasi tentang saya */
        .container {
            margin: 30px auto;
            text-align: center;
            max-width: 600px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        }

        /* Styling untuk list */
        .container ul {
            list-style: none;
            padding: 0;
            margin: 20px 0;
            text-align: left;
        }

        .container ul li {
            font-size: 18px;
            padding: 10px 0;
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
            display: flex;
            justify-content: space-between;
        }

        .container ul li span {
            color: #1abc9c;
            font-weight: bold;
        }

        /* Mempercantik hover di list */
        .container ul li:hover {
            background-color: rgba(255, 255, 255, 0.05);
        }
    </style>
</head>
<body>

<!-- Navbar -->
<div class="navbar">
    <a href="home.php">Home</a>
    <a href="students.php">Students</a>
    <a href="studyprog.php">Study Programs</a>
    <a href="aboutme.php">About Me</a>
</div>

<!-- Judul Section -->
<div class="section-title">
    Tentang Saya
</div>

<!-- Informasi dalam container -->
<div class="container">
    <ul>
        <li><span>Nama:</span> Devia Herena Kippuw</li>
        <li><span>NPM:</span> 230202031</li>
        <li><span>Kelas:</span> TI-2B</li>
    </ul>
</div>

</body>
</html>
