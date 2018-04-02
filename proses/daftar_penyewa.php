
<?php
session_start(); // Memulai Session
	  include '../share/db.php';
		$nama=$_POST['nama'];
		$alamat=$_POST['alamat'];
		$no_hp=$_POST['no_hp'];
		$email=$_POST['email'];
		$username=$_POST['username'];
		$password=md5($_POST['password']);
		list($status, $foto_ktp)=upload_ktp();
		list($status, $foto_diri)=upload_foto();
		if($status){
			echo $perintah="INSERT INTO `costumer`(`nama`, `Alamat`, `no_hp`, `email`, `username`, `password`, `foto_ktp`, `foto_ktp_orang`)
								 VALUES 							 ('$nama','$alamat','$no_hp','$email','$username','$password','$foto_ktp','$foto_diri')";
		$query = mysqli_query($con,$perintah);
				if ($query) {
							echo "<script>alert('Perdaftaran Berhasil, Tungggu Di Verifikasi Admin atau Mengkonfirmasi Langsung Ke admin')</script>";
							echo '<script type="text/javascript">window.location = "../login.php"</script>';
				}else{
							echo "<script>alert('Perdaftaran Gagal')</script>";
							//echo '<script type="text/javascript">window.location = "../daftar_penyewa.php"</script>';
				}
		}else{
			echo "gagall";
		}

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
	 function upload_foto(){
				$target_dir = "../penyewa/";
				$target_file = $target_dir . basename($_FILES["foto_diri"]["name"]);
				$uploadOk = 1;
				$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
				// Check if image file is a actual image or fake image
				if(isset($_POST["submit"])) {
				    $check = getimagesize($_FILES["foto_diri"]["tmp_name"]);
				    if($check !== false) {
				        $uploadOk = 1;
				    } else {
				        $uploadOk = 0;
				    }
			}

			if ($uploadOk == 0) {
			  return False;
			} else {

					$temp = explode(".", $_FILES["foto_diri"]["name"]);//untuk mengambil nama file gambarnya saja tanpa format gambarnya
					$nama_baru=random_name(30);
					$nama_baru=$nama_baru. '.' . end($temp);
					$temp = explode(".", $_FILES["foto_diri"]["name"]);//untuk mengambil nama file gambarnya saja tanpa format gambarnya
				  if (move_uploaded_file($_FILES["foto_diri"]["tmp_name"], $target_dir."/" . $nama_baru)) {
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
