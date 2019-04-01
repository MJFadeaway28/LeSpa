<?php 
	if (isset($_POST['changepwd-submit'])) {

		require 'dbh.inc.php';

		$password = $_POST['pwd'];
		$newPassword = $_POST['newpwd'];
		$newPasswordRepeat = $_POST['newpwd-repeat'];

		if (empty($password) || empty($newPassword) || empty($newPasswordRepeat)) {
			header("Location: ../changePwd.php?changepwderror=emptyfields");
			exit();
		}
		$adminId = $_SESSION['adminId'];
		$sql = "SELECT * FROM admin WHERE idAdmin = $adminId";
		$pwdCheck = password_verify($password, $row['pwdAdmin']);
			if ($pwdCheck == false) {
				header("Location: ../changePwd.php?error=wrongpwd");
				exit();
			}
			else if ($pwdCheck == true) {
				if ($newPassword !== $newPasswordRepeat) {
					header("Location: ../changePwd.php?changepwderror=newpasswordcheck");
					exit();
				}
				else {
					$sql = "UPDATE admin SET pwdAdmin = ?";
					$stmt = mysqli_stmt_init($conn);
					if (!mysqli_stmy_prepare($stmt, $sql)) {
					header("Location: ../changePwd.php?changepwderror=sqlerror");
					exit();
					}
					else {
						$hashedPwd = password_hash($newPassword, PASSWORD_DEFAULT);

						mysqli_stmt_bind_param($stmt, "s", $newPassword);
						mysqli_stmt_execute($stmt);
						mysqli_stmt_store_result($stmt);
						header("Location: ../home.php?changepwd=success");
						exit();
					}
				}
			}
			mysqli_close($conn);
		/*
		else if ($newPassword !== $newPasswordRepeat) {
			header("Location: ../changePwd.php?changepwderror=newpasswordcheck")
			exit();
		}
		*/
	}
 ?>