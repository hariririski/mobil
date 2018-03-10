
<?php
session_start(); // Memulai Session
	  include '../share/db.php';
			$id=$_GET['id'];
			$username=$_SESSION['login'];
			echo $perintah="UPDATE `rental` SET rental.status='1', rental.id_admin='$username' WHERE id_rental='$id'";
			$query = mysqli_query($con,$perintah);

				if ($query) {
							echo "<script>alert('Berhasil Verifikasi')</script>";
							echo '<script type="text/javascript">window.location = "../a_data_rental.php"</script>';
				}else{
							echo "<script>alert('Gagal Verifikasi')</script>";
							echo '<script type="text/javascript">window.location = "../a_verifikasi_rental.php"</script>';
				}



?>
