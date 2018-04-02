
<?php
session_start(); // Memulai Session
	  include '../share/db.php';
			$id=$_GET['id'];
			$perintah="UPDATE `costumer` SET `verifikasi`='1' where id_costumer='$id'";
			$query = mysqli_query($con,$perintah);

				if ($query) {
							echo "<script>alert('Berhasil')</script>";
							echo '<script type="text/javascript">window.location = "../a_verifikasi_costumer.php"</script>';
				}else{
							echo "<script>alert('Gagal')</script>";
							echo '<script type="text/javascript">window.location = "../a_verifikasi_costumer.php"</script>';
				}



?>
