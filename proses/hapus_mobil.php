
<?php
session_start(); // Memulai Session
	  include '../share/db.php';
			$id=$_GET['id'];
			$g1=$_GET['g1'];
			$g2=$_GET['g2'];
			$g3=$_GET['g3'];
			$g4=$_GET['g4'];
			$g5=$_GET['g5'];
			chown("../mobil/$g1",465);
			chown("../mobil/$g2",465);
			chown("../mobil/$g3",465);
			chown("../mobil/$g4",465);
			chown("../mobil/$g5",465);
			unlink("../mobil/$g1");
			unlink("../mobil/$g2");
			unlink("../mobil/$g3");
			unlink("../mobil/$g4");
			unlink("../mobil/$g5");
			$perintah="DELETE FROM `mobil` where no_pol='$id'";
			$query = mysqli_query($con,$perintah);

				if ($query) {
							echo "<script>alert('Berhasil')</script>";
							echo '<script type="text/javascript">window.location = "../data_mobil.php"</script>';
				}else{
							echo "<script>alert('Gagal')</script>";
							echo '<script type="text/javascript">window.location = "../detail_mobil.php?id='.$id.'"</script>';
				}



?>
