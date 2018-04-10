
<?php
session_start(); // Memulai Session
	  include '../share/db.php';
			$invoice=$_GET['invoice'];
			$bank_pengirim=$_POST['bank_pengirim'];
			$rek_pengirim=$_POST['rek_pengirim'];
			$nominal=$_POST['nominal'];
			list($status, $name_file)=upload();

			echo $perintah="UPDATE `pesan` SET `bank_pengirim`='$bank_pengirim',`rek_pengirim`='$rek_pengirim',`bukti_pembayaran`='$name_file',
																		 `nominal`='$nominal',`verifikasi_pembayaran`='1' WHERE invoice='$invoice'";

			$query = mysqli_query($con,$perintah);

				if ($query) {
							echo "<script>alert('Berhasil Perbaharui')</script>";
							echo '<script type="text/javascript">window.location = "../invoice.php?id='.$invoice.'"</script>';
				}else{
							echo "<script>alert('Gagal Perbaharui')</script>";
							echo '<script type="text/javascript">window.location = "../invoice.php?id='.$invoice.'"</script>';
				}

?>



<?php

				function upload(){
						 $target_dir = "../bukti_pembayaran/";
						 $target_file = $target_dir . basename($_FILES["bukti_pembayaran"]["name"]);
						 $uploadOk = 1;
						 $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
						 // Check if image file is a actual image or fake image
						 if(isset($_POST["submit"])) {
								 $check = getimagesize($_FILES["bukti_pembayaran"]["tmp_name"]);
								 if($check !== false) {
										 $uploadOk = 1;
								 } else {
										 $uploadOk = 0;
								 }
					 }

					 if ($uploadOk == 0) {
						 return False;
					 } else {

							 $temp = explode(".", $_FILES["bukti_pembayaran"]["name"]);//untuk mengambil nama file gambarnya saja tanpa format gambarnya
							 $nama_baru=random_name(30);
							 $nama_baru=$nama_baru. '.' . end($temp);
							 $temp = explode(".", $_FILES["bukti_pembayaran"]["name"]);//untuk mengambil nama file gambarnya saja tanpa format gambarnya
							 if (move_uploaded_file($_FILES["bukti_pembayaran"]["tmp_name"], $target_dir."/" . $nama_baru)) {
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
