
<?php
session_start(); // Memulai Session
	  include '../share/db.php';
			$id=$_GET['id'];
			$foto_rental=$_GET['gambar'];
			chown("../rental/$foto_rental",465);
			unlink("../rental/$foto_rental");
			$perintah="DELETE FROM `rental` where id_rental='$id'";
			$query = mysqli_query($con,$perintah);

				if ($query) {
							echo "<script>alert('Berhasil')</script>";
							echo '<script type="text/javascript">window.location = "../a_verifikasi_rental.php"</script>';
				}else{
							echo "<script>alert('Gagal')</script>";
							echo '<script type="text/javascript">window.location = "../a_verifikasi_rentall.php"</script>';
				}



?>
