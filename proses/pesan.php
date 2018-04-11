
<?php
session_start(); // Memulai Session
	  include '../share/db.php';
			$id=$_GET['id'];
			$start=$_GET['start'];
			$end=$_GET['end'];
			$id_costumer=$_SESSION['costumer_id'];
			$harga=$_GET['harga'];
			$invoice=random_name(10);
			$perintah="INSERT INTO `pesan`(`invoice`,`id_costumer`, `no_pol`,`tanggal_mulai`, `tanggal_selesai`, `harga`)
								 VALUES ('$invoice','$id_costumer','$id','$start','$end','$harga')";
			$query = mysqli_query($con,$perintah);

				if ($query) {
							echo "<script>alert('Berhasil Memesan')</script>";
							echo '<script type="text/javascript">window.location = "../invoice.php?id='.$invoice.'"</script>';
				}else{
							echo "<script>alert('Gagal Memesan')</script>";
							echo '<script type="text/javascript">window.location = "../invoice.php?id='.$invoice.'"</script>';
				}

				function random_name($length) {
					$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
					$password = substr( str_shuffle( $chars ), 0, $length );
					return $password;
				}

?>
