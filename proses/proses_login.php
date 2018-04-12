
<?php
session_start(); // Memulai Session
$error=''; // Variabel untuk menyimpan pesan error

	if (empty($_POST['username']) || empty($_POST['password'])) {
			echo $error = "Username or Password is invalid";
	}
	else
	{
		// Variabel username dan password
		$username=$_POST['username'];
		$password=md5($_POST['password']);
		// Membangun koneksi ke database
	include '../share/db.php';
		// Mencegah MySQL injection
		$username = stripslashes($username);
		$password = stripslashes($password);
		$username = mysqli_real_escape_string($con,$username);
		$password = mysqli_real_escape_string($con,$password);
		// Seleksi Database

		// SQL query untuk memeriksa apakah karyawan terdapat di database?
		$perintah="select * from admin where password='$password' AND username='$username'";
		$query = mysqli_query($con,$perintah);
		$rows = mysqli_num_rows($query);
		$status=0;
			if ($rows == 1) {
				$_SESSION['login']=$username; // Membuat Sesi/session
				header("location: ../index.php"); // Mengarahkan ke halaman profil

			} else {
				$perintah="select * from rental where password='$password' AND username='$username'";
				$query = mysqli_query($con,$perintah);

				while($data = mysqli_fetch_array($query)){
					$status=$data['status'];
					$id_rental=$data['id_rental'];
				}

				$rows = mysqli_num_rows($query);

						if ($rows == 1 && $status==1 ) {
							$_SESSION['rental']=$username; // Membuat Sesi/session
							$_SESSION['id_rental']=$id_rental; // Membuat Sesi/session
							header("location: ../index.php"); // Mengarahkan ke halaman profil
						} else if($rows == 1 && $status==0) {
							$_SESSION['rental']=$username; // Membuat Sesi/session
							$_SESSION['id_rental']=$id_rental; // Membuat Sesi/session
						  echo "<script>alert('Warning, Akun Anda Belum Di Verifikasi Admin Silahkan Menghubungi admin')</script>";
							echo '<script type="text/javascript">window.location = "../profil.php"</script>';
						} else if($rows == 0 && $status==0) {
							echo "<script>alert('Maaf Data Tidak Cocok')</script>";
							echo '<script type="text/javascript">window.location = "../admin.php"</script>';
						}
			}


	}

?>
