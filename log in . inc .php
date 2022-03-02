<?php  

if(isset($_POST['login-submit'])) { 
	
	require'Dbh.inc.php';

	$emailUser = $_POST['username'];
	$pwdUser = $_POST['password'];


	if (empty($emailUser) || empty($pwdUser) ) {

		header("Location:log in .php?error=emptyfileds");
	exit();
	}


	else{

	$sql = "SELECT * FROM customer WHERE user_name =? OR user_email=?;";
	$stmt = mysqli_stmt_init($conn);

	if(!mysqli_stmt_prepare($stmt ,$sql)){

		header("Location:log in .php?error=sqlerror");
	exit();


	}
	else
	{
		mysqli_stmt_bind_param($stmt ,"ss",$emailUser,$emailUser);

		mysqli_stmt_execute($stmt);

		$result = mysqli_stmt_get_result($stmt);
			

		if($row = mysqli_fetch_assoc($result)){

			$pwdcheck = password_verify($pwdUser, $row['user_pwd']);
			if ($pwdcheck==false) {
				header("Location:log in .php?error=wrongpassword");
			exit();
			}
			elseif ($pwdcheck==true) {
			session_start();
			$_SESSION['userid']=$row['user_id'];
			$_SESSION['useruid']=$row['user_name'];


			header("Location:log in .php?login=succes");
			exit();

			}

			else{
				header("Location:log in .php?error=wrongpassword");
			exit();

			}
		}
		else
		{

		header("Location:log in .php?error=nouser");
		exit();
		
	}

}

}

}
else{
header("Location:log in .php?");
		exit();

}


