<?
if ($login == "yes")
{
include "mysql.php";
$password = mysql_real_escape_string($_POST[password]);
$username = mysql_real_escape_string($_POST[username]); 
$username = strtolower($username);


$check = mysql_query("SELECT username FROM superior WHERE username = '$username'");
if(mysql_num_rows($check) == 0)  {$error[] = 'Login failed'; };

if (!$error){
  $check = mysql_query("SELECT password FROM superior WHERE username = '$username'");
	$row = mysql_fetch_row($check);
	if ($password != $row[0]) {$error[] = 'Login failed'; };
} 


// login process
if (!$error){
session_start(); 
$_SESSION['admin'] = $username;
$dt = date("F j, Y, g:i a");
mysql_query("UPDATE superior SET lastlogin = '$dt' WHERE username = '$username'");
header("Location: index.php");
}
else
{
echo "Login error, your IP has been logged!";
}
exit;
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Administrator Login</title>
<style type="text/css" media="all">
@import "main.css";
</style>

</head>

<body>

<form method="POST" action="login.php?login=yes">
	<p align="center">&nbsp;</p>
	<p align="center"><span class="o">Username:</span> 
	  <input name="username" type="text" class="o" size="20">
	</p>
	<p align="center"><span class="o">Password:</span> 
	  <input name="password" type="password" class="o" size="20">
	</p>
	<p align="center"><input name="B1" type="submit" class="o" value="Submit">
	<input name="B2" type="reset" class="o" value="Reset">
	</p>
</form>
<p align="center">&nbsp;</p>

</body>

</html>