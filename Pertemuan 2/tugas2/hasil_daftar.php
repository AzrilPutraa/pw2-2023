<!DOCTYPE html>
<html>
<head>
	<title>Data Pendaftar</title>
	<!-- Load Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h2>Data Pendaftar</h2>
		<table class="table">
			<thead>
				<tr>
					<th>Nama Lengkap</th>
					<th>Email</th>
					<th>Alamat</th>
					<th>Telepon</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Azril</td>
					<td>Azril@gmail.com</td>
					<td>Jakarta</td>
					<td>+6281993199951</td>
				</tr>
				<tr>
					<td>eL</td>
					<td>ell@gmail.com</td>
					<td>Jakarta</td>
					<td>+6281993199951</td>
				</tr>

				<?php
				  
                  if (isset($_POST['nama_lengkap'])) {

                    $nama_siswa = $_POST['nama_lengkap'];
                    $email = $_POST['email'];
                    $alamat = $_POST['alamat'];
                    $telepon = $_POST['telepon'];

                    echo '<tr>';
                    echo '<td>' . $nama_siswa . '</td>';
                    echo '<td>' . $email . '</td>';
                    echo '<td>' . $alamat . '</td>';
                    echo '<td>' . $telepon . '</td>';
                    echo '</tr>';
                  }
                  
				?>

			</tbody>
		</table>
	</div>
</body>
</html>