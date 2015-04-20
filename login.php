<?
include "igwt.php";
include "mysql.php";
$dt = date("F j, Y, g:i a");

$password = $_POST[password];
$username = $_POST[username]; 
$username = strtolower($username);
session_start(); 
$check = mysql_query("SELECT username FROM users WHERE username = '$username'");
if(mysql_num_rows($check) == 0)  {$error[] = 'Login failed'; };
 


if (!$error){
  $check = mysql_query("SELECT password FROM users WHERE username = '$username'");
	$row = mysql_fetch_row($check);
	if ($password != $row[0]) {$error[] = 'Login failed'; };
} 

// login process
if (!$error){

$check = mysql_query("SELECT name, firstname, active, sms FROM users WHERE username = '$username'");
$row = mysql_fetch_row($check); 




$_SESSION['name'] = $row[0];
$_SESSION['firstname'] = $row[1]; 
$_SESSION['active'] = $row[2];
$_SESSION['sms'] = $row[3];
$_SESSION['username'] = $username;


$check = mysql_query("SELECT clicks, registrations FROM affiliates WHERE username = '$username'");
$row = mysql_fetch_row($check); 

$_SESSION['clicks'] = $row[0];
$_SESSION['registrations'] = $row[1];

mysql_query("UPDATE users SET lastlogin = '$dt' WHERE username = '$username'");


}
if ($error){
session_destroy();
include "loginerror2.php";
die;
exit;
break;
}



header("Location: myaccount.php");
?>