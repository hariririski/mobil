
<?php
session_start(); // Memulai Session
	  include '../share/db.php';
		$no_polisi=$_POST['no_polisi'];
		$merek=$_POST['merek'];
		$tipe=$_POST['tipe'];
		$jenis=$_POST['jenis'];
		$tahun_pembuatan=$_POST['tahun_pembuatan'];
		$kapasitas_penumpang=$_POST['kapasitas_penumpang'];
		$bahan_bakar=$_POST['bahan_bakar'];
		$harga_sewa=$_POST['harga_sewa'];
		$fasilitas=$_POST['fasilitas'];
		$foto_depan=$_FILES["foto_depan"]["name"];
		$foto_samping=$_FILES["foto_samping"]["name"];
		$foto_belakang=$_FILES["foto_belakang"]["name"];
		$foto_dalam1=$_FILES["foto_dalam1"]["name"];
		$foto_dalam2=$_FILES["foto_dalam2"]["name"];



			$perintah="UPDATE `mobil` SET no_pol='$no_polisi',`merek`='$merek',`jenis`='$jenis',`tipe`='$tipe',`tahun_pembuatan`='$tahun_pembuatan',`harga_sewa`='$harga_sewa',
								`bahan_bakar`='$bahan_bakar',`kapasitas_penumpang`='$kapasitas_penumpang',`fasilitas`='$fasilitas' WHERE no_pol='$no_polisi'";
			$query = mysqli_query($con,$perintah);
				if ($query) {
					if(!empty($foto_depan)){
						list($status, $foto_depan)=upload_depan();
						$no_polisi=$_POST['no_polisi'];
						$perintah="UPDATE `mobil` SET foto_depan='$foto_depan' WHERE no_pol='$no_polisi'";
						$query = mysqli_query($con,$perintah);
					}
					if(!empty($foto_samping)){
						list($status, $foto_samping)=upload_samping();
						$no_polisi=$_POST['no_polisi'];
						$perintah="UPDATE `mobil` SET foto_samping='$foto_samping' WHERE no_pol='$no_polisi'";
						$query = mysqli_query($con,$perintah);
					}
					if(!empty($foto_belakang)){
						list($status, $foto_belakang)=upload_belakang();
						$no_polisi=$_POST['no_polisi'];
						$perintah="UPDATE `mobil` SET foto_belakang='$foto_belakang' WHERE no_pol='$no_polisi'";
						$query = mysqli_query($con,$perintah);
					}
					if(!empty($foto_dalam1)){
						list($status, $foto_dalam1)=upload_dalam1();
						$no_polisi=$_POST['no_polisi'];
						$perintah="UPDATE `mobil` SET foto_dalam1='$foto_dalam1' WHERE no_pol='$no_polisi'";
						$query = mysqli_query($con,$perintah);
					}
					if(!empty($foto_dalam2)){
						list($status, $foto_dalam2)=upload_dalam2();
						$no_polisi=$_POST['no_polisi'];
						$perintah="UPDATE `mobil` SET foto_dalam2='$foto_dalam2' WHERE no_pol='$no_polisi'";
						$query = mysqli_query($con,$perintah);
					}
							echo "<script>alert('Perbaharui Mobil Berhasil')</script>";
							echo '<script type="text/javascript">window.location = "../edit_mobil.php?id='.$no_polisi.'"</script>';
				}else{
							echo "<script>alert('Perbaharui Mobil Gagal')</script>";
							echo '<script type="text/javascript">window.location = "../edit_mobil.php?id='.$no_polisi.'"</script>';
				}

				function upload_depan(){
						 $target_dir = "../mobil/";
						 $target_file = $target_dir . basename($_FILES["foto_depan"]["name"]);
						 $uploadOk = 1;
						 $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
						 // Check if image file is a actual image or fake image
						 if(isset($_POST["submit"])) {
								 $check = getimagesize($_FILES["foto_depan"]["tmp_name"]);
								 if($check !== false) {
										 $uploadOk = 1;
								 } else {
										 $uploadOk = 0;
								 }
					 }

					 if ($uploadOk == 0) {
						 return False;
					 } else {

							 $temp = explode(".", $_FILES["foto_depan"]["name"]);//untuk mengambil nama file gambarnya saja tanpa format gambarnya
							 $nama_baru=random_name(30);
							 $nama_baru=$nama_baru. '.' . end($temp);
							 $temp = explode(".", $_FILES["foto_depan"]["name"]);//untuk mengambil nama file gambarnya saja tanpa format gambarnya
							 if (move_uploaded_file($_FILES["foto_depan"]["tmp_name"], $target_dir."/" . $nama_baru)) {
									 return array(true,$nama_baru);
							 } else {
										return array(False,false);
							 }
					 }
				 }

		function upload_belakang(){
				 $target_dir = "../mobil/";
				 $target_file = $target_dir . basename($_FILES["foto_belakang"]["name"]);
				 $uploadOk = 1;
				 $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
				 // Check if image file is a actual image or fake image
				 if(isset($_POST["submit"])) {
						 $check = getimagesize($_FILES["foto_belakang"]["tmp_name"]);
						 if($check !== false) {
								 $uploadOk = 1;
						 } else {
								 $uploadOk = 0;
						 }
			 }

			 if ($uploadOk == 0) {
				 return False;
			 } else {

					 $temp = explode(".", $_FILES["foto_belakang"]["name"]);//untuk mengambil nama file gambarnya saja tanpa format gambarnya
					 $nama_baru=random_name(30);
					 $nama_baru=$nama_baru. '.' . end($temp);
					 $temp = explode(".", $_FILES["foto_belakang"]["name"]);//untuk mengambil nama file gambarnya saja tanpa format gambarnya
					 if (move_uploaded_file($_FILES["foto_belakang"]["tmp_name"], $target_dir."/" . $nama_baru)) {
							 return array(true,$nama_baru);
					 } else {
								return array(False,false);
					 }
			 }
		 }

		 function upload_samping(){
					$target_dir = "../mobil/";
					$target_file = $target_dir . basename($_FILES["foto_samping"]["name"]);
					$uploadOk = 1;
					$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
					// Check if image file is a actual image or fake image
					if(isset($_POST["submit"])) {
							$check = getimagesize($_FILES["foto_samping"]["tmp_name"]);
							if($check !== false) {
									$uploadOk = 1;
							} else {
									$uploadOk = 0;
							}
				}

				if ($uploadOk == 0) {
					return False;
				} else {

						$temp = explode(".", $_FILES["foto_samping"]["name"]);//untuk mengambil nama file gambarnya saja tanpa format gambarnya
						$nama_baru=random_name(30);
						$nama_baru=$nama_baru. '.' . end($temp);
						$temp = explode(".", $_FILES["foto_samping"]["name"]);//untuk mengambil nama file gambarnya saja tanpa format gambarnya
						if (move_uploaded_file($_FILES["foto_samping"]["tmp_name"], $target_dir."/" . $nama_baru)) {
								return array(true,$nama_baru);
						} else {
								 return array(False,false);
						}
				}
			}

			function upload_dalam1(){
					 $target_dir = "../mobil/";
					 $target_file = $target_dir . basename($_FILES["foto_dalam1"]["name"]);
					 $uploadOk = 1;
					 $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
					 // Check if image file is a actual image or fake image
					 if(isset($_POST["submit"])) {
							 $check = getimagesize($_FILES["foto_dalam1"]["tmp_name"]);
							 if($check !== false) {
									 $uploadOk = 1;
							 } else {
									 $uploadOk = 0;
							 }
				 }

				 if ($uploadOk == 0) {
					 return False;
				 } else {

						 $temp = explode(".", $_FILES["foto_dalam1"]["name"]);//untuk mengambil nama file gambarnya saja tanpa format gambarnya
						 $nama_baru=random_name(30);
						 $nama_baru=$nama_baru. '.' . end($temp);
						 $temp = explode(".", $_FILES["foto_dalam1"]["name"]);//untuk mengambil nama file gambarnya saja tanpa format gambarnya
						 if (move_uploaded_file($_FILES["foto_dalam1"]["tmp_name"], $target_dir."/" . $nama_baru)) {
								 return array(true,$nama_baru);
						 } else {
									return array(False,false);
						 }
				 }
			 }

			 function upload_dalam2(){
						$target_dir = "../mobil/";
						$target_file = $target_dir . basename($_FILES["foto_dalam2"]["name"]);
						$uploadOk = 1;
						$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
						// Check if image file is a actual image or fake image
						if(isset($_POST["submit"])) {
								$check = getimagesize($_FILES["foto_dalam2"]["tmp_name"]);
								if($check !== false) {
										$uploadOk = 1;
								} else {
										$uploadOk = 0;
								}
					}

					if ($uploadOk == 0) {
						return False;
					} else {

							$temp = explode(".", $_FILES["foto_dalam2"]["name"]);//untuk mengambil nama file gambarnya saja tanpa format gambarnya
							$nama_baru=random_name(30);
							$nama_baru=$nama_baru. '.' . end($temp);
							$temp = explode(".", $_FILES["foto_dalam2"]["name"]);//untuk mengambil nama file gambarnya saja tanpa format gambarnya
							if (move_uploaded_file($_FILES["foto_dalam2"]["tmp_name"], $target_dir."/" . $nama_baru)) {
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
