
<?php
session_start(); // Memulai Session
	  include '../share/db.php';
			$id=$_GET['invoice'];

			$perintah="UPDATE `pesan` SET pesan.verifikasi_pembayaran='3' WHERE invoice='$id'";
			$query = mysqli_query($con,$perintah);

				if ($query) {
							echo "<script>alert('Berhasil Verifikasi')</script>";
							echo '<script type="text/javascript">window.location = "../invoice_admin.php?id='.$id.'"</script>';
				}else{
							echo "<script>alert('Gagal Verifikasi')</script>";
							echo '<script type="text/javascript">window.location = "../invoice_admin.php?id='.$id.'"</script>';
				}



?>
