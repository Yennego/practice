<?php include "hub/db.php"; ?>
<?php 
	
	session_start();
	ob_start();
	

function login(){
	global $con;


	if (isset($_POST['loginBtn'])) {
		
		$email = $_POST['email'];
		// $pass = md5($_POST['password']);
		$pass = $_POST['password'];

		echo $email . "" . $pass;


		$sql =  "SELECT * FROM users WHERE email = '{$email}' ";

		$user = mysqli_query($con, $sql);

		while ($row = mysqli_fetch_assoc($user)) {
			$dbId = $row['id'];
			$dbEmail = $row['email'];
			$dbPass = $row['password'];

			$dbFullname = $row['fullname'];
			$dbImage = $row['image'];
			$dbRole = $row['role'];
			$dbStatus = $row['status'];
		}

		if (isset($dbEmail)) {
			if ($dbPass === $pass) {
				$_SESSION['id'] = $dbId;
				$_SESSION['fullname'] = $dbFullname;
				$_SESSION['email'] = $dbEmail;
				$_SESSION['image'] = $dbImage;
				$_SESSION['role'] = $dbRole;
				$_SESSION['status'] = $dbStatus;
				echo "<script> window.location = '/practice/admin'</script>";
		}else{
			echo "Password Incorrect";
		}
		}else {
			echo "User Not Found";
		}
	}
}



?>
