
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


				$perintah="select * from costumer where password='$password' AND username='$username'";
				$query = mysqli_query($con,$perintah);
				$status=null;
				while($data = mysqli_fetch_array($query)){
					$status=$data['verifikasi'];
					$id_costumer=$data['id_costumer'];
				}

				$rows = mysqli_num_rows($query);

						if ($rows == 1 && $status==1 ) {
							$_SESSION['costumer']=$username; // Membuat Sesi/session
							$_SESSION['costumer_id']=$id_costumer; // Membuat Sesi/session
							header("location: ../index.php"); // Mengarahkan ke halaman profil
						} else if($rows == 1 && $status==0) {
							$_SESSION['costumer']=$username; // Membuat Sesi/session

						  echo "<script>alert('Warning, Akun Anda Belum Di Verifikasi Admin Silahkan Menghubungi admin')</script>";
							echo '<script type="text/javascript">window.location = "../profil_costumer.php"</script>';
						} else if($rows == 0 && $status==0) {
							echo "<script>alert('Maaf Data Tidak Cocok')</script>";
							echo '<script type="text/javascript">window.location = "../login.php"</script>';
						}

}
?>
