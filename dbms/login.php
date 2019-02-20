<html>
<head>
<body bgcolor="pink" alink="black" vlink="voilet">

<div align="center" ><h1>Login Form</h1>
<form name="loginform" action="loginsession.php" method="post"><TR></tr>

     <label>User name <input type="text" name="username" style="background" required/></label><br/>
	 <label>Password  <input type="password" name="password" maxlength="8" required/><br/>
     <input type="submit"  value="Submit" name="ok"/>
	 <input name="reset" type="reset" value="Reset"/>
        <a href="userinfo.php">New User?</a>
		
  </form>
</div>
</body>
</html>