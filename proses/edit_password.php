
<?php
session_start(); // Memulai Session
	  include '../share/db.php';
			$password_lama=md5($_POST['password_lama']);
			$password_baru=md5($_POST['password_baru']);
			$ulangi_password_baru=md5($_POST['ulangi_password_baru']);
			$password_data_base;
			$username=$_SESSION['rental'];
			$query = mysqli_query($con,"select * from rental where username='$username' ");
			while($data = mysqli_fetch_array($query)){
					$password_data_base=$data['password'];
			}
			if($password_baru==$ulangi_password_baru){
				if($password_lama==$password_data_base){
					$perintah="update rental set password='$password_baru' where username='$username'";
					$query = mysqli_query($con,$perintah);
					if ($query) {
								echo "<script>alert('Berhasil Meperbaharui')</script>";
								echo '<script type="text/javascript">window.location = "logout.php"</script>';
					}else{
								echo "<script>alert('Gagal Memberbaharui')</script>";
								echo '<script type="text/javascript">window.location = "../ubah_password.php?id='.$id.'"</script>';
					}
				}else{
					echo "<script>alert('Password Lama Tidak Cocok')</script>";
					echo '<script type="text/javascript">window.location = "../ubah_password.php"</script>';
				}
			}else{
				echo "<script>alert('Password Baru Tidak Sama')</script>";
				echo '<script type="text/javascript">window.location = "../ubah_password.php"</script>';
			}








?>
