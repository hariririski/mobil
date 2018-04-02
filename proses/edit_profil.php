
<?php
session_start(); // Memulai Session
	  include '../share/db.php';
			$id=$_GET['id'];
			$id2=$_GET['id'];
			$gambar=$_GET['gambar'];
			$nama_rental=$_POST['nama_rental'];
			$alamat=$_POST['alamat'];
			$no_hp_rental=$_POST['no_hp_rental'];
			$no_hp_pemilik=$_POST['no_hp_pemilik'];
			$nik=$_POST['nik'];
			$nama_pemilik_rental=$_POST['nama_pemilik_rental'];
			$foto_rental=$_FILES["foto_rental"]["name"];
			$pemilik_rekening=$_POST['pemilik_rekening'];
			$rekening=$_POST['rekening'];
			$bank=$_POST['bank'];
			if(!empty($foto_rental)){
				chown("../rental/$gambar",465);
				unlink("../rental/$gambar");
				list($status, $name_file)=upload();
				$perintah="UPDATE `rental` SET `nama_rental`='$nama_rental',`alamat`='$alamat',`nama_pemilik`='$nama_pemilik_rental',`no_hp_pemilik`='$no_hp_pemilik',`no_hp_rental`='$no_hp_rental',`foto_rental`='$name_file',`nik`='$nik',`rekening`='$rekening',`pemilik_rekening`='$pemilik_rekening',`bank`='$bank' WHERE id_rental='$id'";
			}else{
				$perintah="UPDATE `rental` SET `nama_rental`='$nama_rental',`alamat`='$alamat',`nama_pemilik`='$nama_pemilik_rental',`no_hp_pemilik`='$no_hp_pemilik',`no_hp_rental`='$no_hp_rental',`nik`='$nik',`pemilik_rekening`='$pemilik_rekening',`bank`='$bank' WHERE id_rental='$id'";
			}
			$query = mysqli_query($con,$perintah);

				if ($query) {
							echo "<script>alert('Berhasil Perbaharui')</script>";
							echo '<script type="text/javascript">window.location = "../profil.php?id='.$id2.'"</script>';
				}else{
							echo "<script>alert('Gagal Perbaharui')</script>";
							//echo '<script type="text/javascript">window.location = "../profil.php?id='.$id2.'"</script>';
				}

?>



<?php

				function upload(){
						 $target_dir = "../rental/";
						 $target_file = $target_dir . basename($_FILES["foto_rental"]["name"]);
						 $uploadOk = 1;
						 $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
						 // Check if image file is a actual image or fake image
						 if(isset($_POST["submit"])) {
								 $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
								 if($check !== false) {
										 $uploadOk = 1;
								 } else {
										 $uploadOk = 0;
								 }
					 }

					 if ($uploadOk == 0) {
						 return False;
					 } else {

							 $temp = explode(".", $_FILES["foto_rental"]["name"]);//untuk mengambil nama file gambarnya saja tanpa format gambarnya
							 $nama_baru=random_name(30);
							 $nama_baru=$nama_baru. '.' . end($temp);
							 $temp = explode(".", $_FILES["foto_rental"]["name"]);//untuk mengambil nama file gambarnya saja tanpa format gambarnya
							 if (move_uploaded_file($_FILES["foto_rental"]["tmp_name"], $target_dir."/" . $nama_baru)) {
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
