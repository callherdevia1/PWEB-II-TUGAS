<?php
include('koneksi.php'); //Mengkoneksikan ke koneksi.php 
$db = new study_programs();
$database = $db->tampil_data();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Study Programs</title>
	<style>
		/* Membuat body output menarik */
		body {
			font-family: 'Arial', sans-serif;
			background-color: #2c3e50;
			margin: 0;
			padding: 0;
			color: #ecf0f1;
		}

		/* Membuat navbar */
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

		/* Bagian untuk membuat judul Data Students */
		.section-title {
			margin-top: 20px; /* Mengurangi jarak dari navbar */
			text-align: center;
			font-size: 30px; 
			font-weight: 600;
			color: #1abc9c;
			text-transform: uppercase;
			padding: 10px 0;
			border-bottom: 2px solid #1abc9c;
			letter-spacing: 2px; 
		}

		/* Mengurangi jarak dari navbar */
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
	</style>
</head>
<body>

<!-- Bagian Navbar Atas -->
<div class="navbar">
	<a href="home.php">Home</a>
	<a href="students.php">Students</a>
	<a href="studyprog.php">Study Programs</a>
	<a href="aboutme.php">About Me</a>
</div>

<!-- Bagian untuk judul Study Programs -->
<div class="section-title">
	Study Programs
</div>

<!-- Tabel Kolom pada Data Study Programs -->
<table>
	<tr>
		<th class="center-align">No</th>
		<th class="center-align">ID</th>
		<th class="left-align">Name</th>
		<th class="center-align">Deleted At</th>
		<th class="center-align">Created At</th>
		<th class="center-align">Updated At</th>
	</tr>
	<?php 
	$no = 1;
	foreach($database as $row){
	?>
	<tr>
		<td class="center-align"><?php echo $no++; ?></td>
		<td class="center-align"><?php echo $row['id']; ?></td>
		<td class="left-align"><?php echo $row['name']; ?></td>
		<td class="center-align"><?php echo $row['deleted_at']; ?></td>
		<td class="center-align"><?php echo $row['created_at']; ?></td>
		<td class="center-align"><?php echo $row['updated_at']; ?></td>
	</tr>
	<?php 
	}
	?>
</table>

</body>
</html>
