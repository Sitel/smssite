<?
if ($login == "yes")
{
include "../mysql.php";
$password = mysql_real_escape_string($_POST[password]);
$username = mysql_real_escape_string($_POST[username]); 
$username = strtolower($username);


$check = mysql_query("SELECT username FROM sponsor WHERE username = '$username'");
if(mysql_num_rows($check) == 0)  {$error[] = 'Login failed'; };

if (!$error){
  $check = mysql_query("SELECT password FROM sponsor WHERE username = '$username'");
	$row = mysql_fetch_row($check);
	if ($password != $row[0]) {$error[] = 'Login failed'; };
} 


// login process
if (!$error){
session_start(); 


$_SESSION['sponsor'] = $username;
$dt = date("F j, Y, g:i a");
mysql_query("UPDATE sponsor SET lastlogin = '$dt' WHERE username = '$username'");
header("Location: index.php");
}
else
{
echo "Login error, your IP has been logged!";
}
exit;
}
include "index.php";
?>
