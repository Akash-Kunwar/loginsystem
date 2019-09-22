<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>LoginSystem</title>
</head>
<body>
	<?php
	  if($_SESSION['useruid']!==NULL)
	  {
	  	echo'<h2>You are Logged in!</h2>
	  	<form action="includes/logout.php" method="post">
	  	<input type="submit" name="logout" value="Logout">
        </form>';
	  }
	  else
	  {
	echo'<h2>You are Logged out!</h2>
    <h2>Signin</h2>
    <form action="includes/signin.php" method="post">

	<span>Userid or Email:</span><input type="text" name="uid">
	<br>

	<span>Password:</span><input type="Password" name="pwd">
	<br>
	<input type="submit" name="signin" value="Sign in">
    </form>


    <h2>Signup</h2>
    <form action="includes/signup.php" method="post">
	
	<span>Userid:</span><input type="text" name="uid">
	<br>
	<span>Email:</span><input type="email" name="email">
	<br>
	<span>Age:</span><input type="text" name="uage">
	<br>
	<span>City:</span><input type="text" name="city">
	<br>
	<span>City:</span><select name="gender">
  <option value="male">male</option>
  <option value="female">female</option>
  <option value="others">others</option>
  </select>
	<br>
	<span>Password:</span><input type="Password" name="pwd">
	<br>
	<span>Retype-password:</span><input type="Password" name="rpwd">
	<br>
	<input type="submit" name="signup" value="Sign up">
    </form>';
	}
	?>





</body>
</html>
