
<?php
session_start(); // Memulai Session
	  include '../share/db.php';
			$id=$_GET['id'];
			$perintah="DELETE FROM `admin` where id_admin='$id'";
			$query = mysqli_query($con,$perintah);

				if ($query) {
							echo "<script>alert('Berhasil')</script>";
							echo '<script type="text/javascript">window.location = "../a_user.php"</script>';
				}else{
							echo "<script>alert('Gagal')</script>";
							echo '<script type="text/javascript">window.location = "../a_user.php"</script>';
				}



?>
