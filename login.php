<?php
$user_mail   = $_POST['user_mail'];
$user_pass   = ($_POST['user_pass']);

include 'connect.php';

$user = mysqli_query($connect,"select * from admin where user_mail='$user_mail' and user_pass='$user_pass'");
$chek = mysqli_num_rows($user);

// cek apakah user_mail & user_pass ada di db
if($chek > 0){

	$data = mysqli_fetch_assoc($user);

	// cek jika user login sebagai admin
	if($data['user_role']=="admin"){
		$_SESSION['user_mail'] = $user_mail;
		$_SESSION['user_role'] = "admin";
		header("location:halaman_admin.php");

	// cek jika user login sebagai user
	}else if($data['user_role']=="user"){
		$_SESSION['user_mail'] = $user_mail;
		$_SESSION['user_role'] = "user";
		header("location:halaman_user.php");

	}else{

		// alihkan ke halaman login kembali
		header("location:login.php?pesan=invalid-credential");
	}	
}else{
	header("tidak berfungsi");
}
?>