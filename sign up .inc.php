<?php

if(isset($_POST['submit-signup'])){

	require 'Dbh.inc.php';

	$username =$_POST['uid'];
	$email =$_POST['user_email'];
	$password =$_POST['psw'];
	$r_password =$_POST['psw-repeat'];

if (empty($username) || empty($email) || empty($password) || empty($r_password)) 
{
header("Location:sign up.php?error=emptyfieleds&uid");
exit();

} 
elseif (!filter_var($email ,FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/",$username))
 {

	header("Location:sign up.php?error=invalidemail&uid");
	exit();
}
elseif (!preg_match("/^[a-zA-Z0-9]*$/",$username))
{
	
	header("Location:sign up.php?error=invalidusername");
	exit();
}
elseif (!filter_var($email ,FILTER_VALIDATE_EMAIL)) 
{
	
	header("Location:sign up.php?error=invalidemail");
	exit();
}
elseif ( $password !== $r_password) 
{
	header("Location:sign up.php?error=passwordcheak");
	exit();
}
else
{
	$sql = "SELECT user_name FROM customer WHERE user_name =?";
	$stmt = mysqli_stmt_init($conn);
	if(!mysqli_stmt_prepare($stmt , $sql))
	{
		header("Location:sign up.php?error=sqlerror");
		exit();
	}

		else{

			mysqli_stmt_bind_param($stmt ,"s", $username);
			mysqli_stmt_execute($stmt);
			mysqli_stmt_store_result($stmt);
			$resultCheck = mysqli_stmt_num_rows($stmt);
			if ($resultCheck > 0) {

			header("Location:sign up.php?error=usertaken");
			exit();
			
			}
			else
			{
				$sql = "INSERT INTO  customer (user_name , user_pwd ,user_email) VALUES (?,?,?)";
				$stmt = mysqli_stmt_init($conn);
				if(!mysqli_stmt_prepare($stmt , $sql))
	{
		header("Location:sign up.php?error=sqlerror");
		exit();
	}
	else{

		$hashpwd = password_hash($password, PASSWORD_DEFAULT);

		mysqli_stmt_bind_param($stmt ,"sss", $username ,$hashpwd,$email  );
			mysqli_stmt_execute($stmt);
			header("Location:log in .php?");
		exit();
			
	}

			}

		}
	}

mysqli_stmt_close($stmt);
	mysqli_close($conn);

}
else
{
	header("Location:sign up.php?");
		exit();
}
