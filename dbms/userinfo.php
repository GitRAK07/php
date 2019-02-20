<html>
<head>
<title>registration form</title>
<script language="JavaScript">
function RePasswordValidataion(sPassword,sRePassword)
{
	if(sPassword.toString()!=sRePassword.toString())
	{
		alert("Re-Type Password Has to be same as the Password");
		return false;
	}
	else{return true;}
}
</script>
</head>
<body bgcolor="pink">
<div align="center" ><h1>Valid User Detail</h1></div>
<form action="userdetailinsert.php" method="post" name="userinfo">
 <div align="center">
<label>Enter user name:<input type="text" name="username" required/></label><br/>
	 <label> Enter password:<input type="password" name="pwd" maxlength="8" required/><br/>
    <label>Confirm password:</strong><input type="password" name="password" maxlength="8" onChange="return RePasswordValidataion(document.userinfo.pwd.value,document.userinfo.password.value)" required/></br>
  	<input class="button" type="submit" value="Submit" name="ok" align="left" />
	<input name="reset" type="reset" value="Reset"/>
	<a href=login.php><font color="Red">Home</a></font>
</div>
</form>
</body>
</html> 		  



