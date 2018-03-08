
<?php
session_start(); // Memulai Session
	  include '../share/db.php';
		$nama_rental=$_POST['nama_rental'];
		$alamat=$_POST['alamat'];
		$no_hp_rental=$_POST['no_hp_rental'];
		$no_hp_pemilik=$_POST['no_hp_pemilik'];
		$nik=$_POST['nik'];
		$nama_pemilik_rental=$_POST['nama_pemilik_rental'];
		$username=$_POST['username'];
		$password=md5($_POST['password']);
		list($status, $name_file)=upload();
		if($status){
			$perintah="INSERT INTO `rental`(`nama_rental`, `alamat`, `nama_pemilik`, `no_hp_pemilik`, `no_hp_rental`,`username`, `password`, `foto_rental`, `nik`)
								 VALUES 						 ('$nama_rental','$alamat','$nama_pemilik_rental','$no_hp_pemilik','$no_hp_rental','$username','$password','$name_file','$nik')";
			$query = mysqli_query($con,$perintah);
				if ($query) {
							echo "<script>alert('Perdaftaran Berhasil, Tungggu Di Verifikasi Admin atau Mengkonfirmasi Langsung Ke admin')</script>";
							echo '<script type="text/javascript">window.location = "../index.php"</script>';
				}else{
							echo "<script>alert('Perdaftaran Gagal')</script>";
							echo '<script type="text/javascript">window.location = "../daftar_rental.php"</script>';
				}
		}else{
			echo "gagall";
		}

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
