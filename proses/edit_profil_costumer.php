
<?php
session_start(); // Memulai Session
	  include '../share/db.php';
			$id_costumer=$_GET['id_costumer'];
			$g1=$_GET['g1'];
			$g2=$_GET['g2'];
			$nama=$_POST['nama'];
			$no_hp=$_POST['no_hp'];
			$alamat=$_POST['alamat'];
			$email=$_POST['email'];
			$foto_ktp=$_FILES["foto_ktp"]["name"];
			$foto_ktp_orang=$_FILES["foto_ktp_orang"]["name"];


				if(!empty($foto_ktp)){
					chown("../penyewa/$g1",465);
					unlink("../penyewa/$g1");
					list($status, $foto_ktp)=upload_ktp();
				}else{
					$foto_ktp=$g1;
				}

				if(!empty($foto_ktp_orang)){
					chown("../penyewa/$g2",465);
					unlink("../penyewa/$g2");
					list($status, $foto_ktp_orang)=upload_ktp_orang();
				}else{
					$foto_ktp_orang=$g2;
				}

				$perintah="UPDATE `costumer` SET `nama`='$nama',`alamat`='$alamat',`no_hp`='$no_hp',`email`='$email',`foto_ktp`='$foto_ktp',`foto_ktp_orang`='$foto_ktp_orang' WHERE id_costumer='$id_costumer'";
				$query = mysqli_query($con,$perintah);

				if ($query) {
							echo "<script>alert('Berhasil Perbaharui')</script>";
							echo '<script type="text/javascript">window.location = "../profil_costumer.php"</script>';
				}else{
							echo "<script>alert('Gagal Perbaharui')</script>";
							echo '<script type="text/javascript">window.location = "../profil_costumer.php"</script>';
				}

?>



<?php

				function upload_ktp(){
						 $target_dir = "../penyewa/";
						 $target_file = $target_dir . basename($_FILES["foto_ktp"]["name"]);
						 $uploadOk = 1;
						 $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
						 // Check if image file is a actual image or fake image
						 if(isset($_POST["submit"])) {
								 $check = getimagesize($_FILES["foto_ktp"]["tmp_name"]);
								 if($check !== false) {
										 $uploadOk = 1;
								 } else {
										 $uploadOk = 0;
								 }
					 }

					 if ($uploadOk == 0) {
						 return False;
					 } else {

							 $temp = explode(".", $_FILES["foto_ktp"]["name"]);//untuk mengambil nama file gambarnya saja tanpa format gambarnya
							 $nama_baru=random_name(30);
							 $nama_baru=$nama_baru. '.' . end($temp);
							 $temp = explode(".", $_FILES["foto_ktp"]["name"]);//untuk mengambil nama file gambarnya saja tanpa format gambarnya
							 if (move_uploaded_file($_FILES["foto_ktp"]["tmp_name"], $target_dir."/" . $nama_baru)) {
									 return array(true,$nama_baru);
							 } else {
										return array(False,false);
							 }
					 }
				 }

				function upload_ktp_orang(){
						 $target_dir = "../penyewa/";
						 $target_file = $target_dir . basename($_FILES["foto_ktp_orang"]["name"]);
						 $uploadOk = 1;
						 $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
						 // Check if image file is a actual image or fake image
						 if(isset($_POST["submit"])) {
								 $check = getimagesize($_FILES["foto_ktp_orang"]["tmp_name"]);
								 if($check !== false) {
										 $uploadOk = 1;
								 } else {
										 $uploadOk = 0;
								 }
					 }

					 if ($uploadOk == 0) {
						 return False;
					 } else {

							 $temp = explode(".", $_FILES["foto_ktp_orang"]["name"]);//untuk mengambil nama file gambarnya saja tanpa format gambarnya
							 $nama_baru=random_name(30);
							 $nama_baru=$nama_baru. '.' . end($temp);
							 $temp = explode(".", $_FILES["foto_ktp_orang"]["name"]);//untuk mengambil nama file gambarnya saja tanpa format gambarnya
							 if (move_uploaded_file($_FILES["foto_ktp_orang"]["tmp_name"], $target_dir."/" . $nama_baru)) {
									 return array(true,$nama_baru);
							 } else {
										return array(False,false);
							 }
					 }
				 }

				 function random_name($length) {
					 $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
					 $password = substr( str_shuffle( $chars ), 0, $length );
					 return $password;
				 }

?>
