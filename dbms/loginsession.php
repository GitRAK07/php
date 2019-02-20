<?php
	session_start();
	
	$l=mysqli_connect("localhost","root","");
	mysqli_select_db($l,'project');
	
	$username=$_POST['x1'];
	$password=$_POST['x2'];
    
	$res=mysqli_query($l,"select * from `logintable` where  `username`='".$username."' and  `password`='".$password."'");
	
	if(mysqli_num_rows($res)>0)
	{
	   	$_SESSION['username']=$username;
		header("location:Home.html");
				exit();		 
	}
	else
	{
	      ?>
		<script>alert("Enter Valid User Credential");
		window.location="tranlog.html";
		</script>
			<?php
		  
	}
	
?>