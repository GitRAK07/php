<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login form</title>
<link rel="stylesheet" href="file:///C|/Users/Welcome/Desktop/dbms/tran.css" />
</head>
<body>
<form action="tranlog.php" method="post">
<div class="login-box">
<i class="fa fa-user-circle"></i>
<h1>Login</h1>
<div class="textbox">
<input type="text" placeholder="username" name="" value="" required="required">
</div>
<div class="textbox">
<i class="fa fa-lock"></i>
<input type="password" placeholder="password" name="" value="" required="required">
</div>
<input class="btn" type="button" name="" value="sign in">
<a href="file:///C|/Users/Welcome/Desktop/dbms/sign up.html"><input class="button" type="button" name="" value="sign up"></a>
</div>
</body></form>
</html>



<?php
	session_start();
	
	$l=mysqli_connect("localhost","root","");
	mysqli_select_db($l,'login');
	
	$username=$_POST['username'];
	$password=$_POST['password'];
    
	$res=mysqli_query($l,"select * from `user_registration` where  `username`='".$username."' and  `password`='".$password."'");
	
	if(mysqli_num_rows($res)>0)
	{
	   	$_SESSION['username']=$username;
		header("location:reservation.php");
				exit();		 
	}
	else
	{
	      ?>
		<script>alert("Enter Valid User Credential");
		window.location="login.php";
		</script>
			<?php
		  
	}
	
?>

