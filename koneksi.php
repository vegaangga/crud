<?php
$koneksi = mysqli_connect
			(
				"10.0.0.55",
				"admin",
				"Admin123/",
				"crud"
			);
if (mysqli_connect_errno())
	{
		echo "Koneksi Gagal"
		.mysqli_connect_error();
	}
?>
