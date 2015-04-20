<META HTTP-EQUIV="refresh" CONTENT="1; URL=../return.php">
<?
include "../mysql.php";
$username = base64_decode($_GET[id]);


session_start(); 
$check = mysql_query("SELECT name, firstname, active, sms FROM users WHERE username = '$username'");
$row = mysql_fetch_row($check); 




$_SESSION['name'] = $row[0];
$_SESSION['firstname'] = $row[1]; 
$_SESSION['active'] = $row[2];
$_SESSION['sms'] = $row[3];
$_SESSION['username'] = $username;




$status = $_POST[payment_status];
$name = $_POST[item_name];
$n = $_GET[n];
$n = base64_decode($n);


	if (!@$_POST['txn_type'])
	{
		@header("Status: 404 Not Found"); exit; }

	else
	{

		@header("Status: 200 OK");  // Prevents ipn reposts on some servers

mysql_query("UPDATE users SET sms = sms+$n WHERE username = '$username'");

}

?>
