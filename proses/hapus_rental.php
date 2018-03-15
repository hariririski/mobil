
<?php
session_start(); // Memulai Session
	  include '../share/db.php';
			$id=$_GET['id'];
			$foto_rental=$_GET['gambar'];
			chown("../rental/$foto_rental",465);
			unlink("../rental/$foto_rental");
			mobil($id);
			$perintah="DELETE FROM `rental` where id_rental='$id'";
			$query = mysqli_query($con,$perintah);

				if ($query) {
							echo "<script>alert('Berhasil')</script>";
							echo '<script type="text/javascript">window.location = "../a_user.php"</script>';
				}else{
							echo "<script>alert('Gagal')</script>";
							echo '<script type="text/javascript">window.location = "../a_user.php"</script>';
				}



?>


<?php
function mobil($id){
	  include '../share/db.php';

		$query = mysqli_query($con,"select * from mobil where id_rental='$id' ");
		while($data = mysqli_fetch_array($query)){
			$foto_depan=$data['foto_depan'];
			$foto_belakang=$data['foto_belakang'];
			$foto_samping=$data['foto_samping'];
			$foto_dalam1=$data['foto_dalam1'];
			$foto_dalam2=$data['foto_dalam2'];
			chown("../mobil/$foto_depan",465);
			chown("../mobil/$foto_belakang",465);
			chown("../mobil/$foto_samping",465);
			chown("../mobil/$foto_dalam1",465);
			chown("../mobil/$foto_dalam2",465);
			unlink("../mobil/$foto_depan");
			unlink("../mobil/$foto_belakang");
			unlink("../mobil/$foto_samping");
			unlink("../mobil/$foto_dalam1");
			unlink("../mobil/$foto_dalam2");
		}

			$perintah="DELETE FROM `mobil` where id_rental='$id'";
			$query = mysqli_query($con,$perintah);



}

?>
