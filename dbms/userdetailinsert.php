<?php
	$l=mysqli_connect("localhost","root","");
	mysqli_select_db($l,'project');

      $firstname=$_POST['firstname'];
	  $lastname=$_POST['lastname'];
    	$username=$_POST['username'];
	$password=$_POST['password'];
	if($username=="" and $password=="")
	{
		?>
			
				<script>alert("Enter Credential USER Already Exist");
				window.location="sign up.html";
				</script>
			
			<?php 
	}

	else
	{
		$qrysel="select * from user where username='$username'";
		$rs=mysqli_query($l,$qrysel);
		$rowcount=mysqli_num_rows($rs);
		if($rowcount>0)
		{
			?>
			
				<script>alert("USER Already Exist");
				window.location="sign up.html";
				</script>
			
			<?php 
		}
		else
		{
			mysqli_query ($l, "INSERT INTO `user_registration` (`firstname`,`lastname`,`username`,`password`)VALUES	('$firstname','$lastname','$username','$password')");
		
			?>
				<script>alert ("Inserted succesfuuly, Now you can Login");
				window.location="tranlog.html";
				</script>
		
			<?php
		}
	}
?>
