<html>
<title>CRUD</title>
<head>
<link rel="stylesheet" href="style/materialize.min.css" />
</head>
<body>
<nav>
        <div class="nav-wrapper teal">
        <div class="container">
          <a href="index.php" class="brand-logo center white-text">CRUD - CREAT READ UPDATE DELETE</a>
        </div>
        </div>
</nav>

<?php
	include"koneksi.php";
	$no = 1;
	$data = mysqli_query ($koneksi, " select 
											id_mahasiswa,
											nama,
											jenis_kelamin,
											telepon,
											alamat
									  from 
									  mahasiswa 
									  where id_mahasiswa = $_GET[id]");
	$row = mysqli_fetch_array ($data);
	
?>
<div class="container" style="margin-top:8%">
	<div class="row">
		<div class="col-md-8 col-md-offset-2"> 
			<p>
				<center>
					<h5>Detail <?php echo $row['nama']; ?> </h5><hr>
				</center>
			</p>
			<br>
			<p>
				<a class="btn red lighten-2" href="index.php">Kembali</a>
			</p>
			<table class="table table-stripped">
				<tr>
					<td style="width:10%;">
						Nama 
					</td>
					<td>
						: <?php echo $row['nama']; ?>
					</td>
				</tr>
				<tr>
					<td style="width:10%;">
						Jenis Kelamin
					</td>
					<td>
						: <?php echo $row['jenis_kelamin']; ?>
					</td>
				</tr>
				<tr>					
					<td>
						Telepon
					</td>
					<td>
						: <?php echo $row['telepon']; ?>
					</td>
				</tr>
				<tr>		
					<td>
						Alamat
					</td>
					<td>
						: <?php echo $row['alamat']; ?>
					</td>
				</tr>
			</table>
		</div>
	</div>
</div>
</body>
</html>