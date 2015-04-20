<?
include "mysql.php";
session_start(); 
$admin = $_SESSION['admin'];
$tate = $_POST[total];
$date = $date = date("m.d.y");
$numar = 0;
$batch = $_POST[batch];
function convertToInt($string) {
   $y = ltrim($string, '0');
   $z = 0 + $y;
   return $z;
}

$sql = "SELECT * FROM approve WHERE batch = '$batch'";
$result = mysql_query($sql);

while ($row = mysql_fetch_assoc($result)) {
 $numar = $numar + 1;
$temp = $_POST["C$numar"];
$tempsms = convertToInt($row[credit]);

	if ($temp == 'ON')
		{
		mysql_query("INSERT INTO approvelog (sponsor, happyuser, credit, status, date, editor, batch) VALUES('".$row[sponsor]."','".$row[happyuser]."','".$row[credit]."','approved','".$date."','".$admin."','".$batch."')") or die(mysql_error());
		mysql_query("DELETE FROM approve WHERE id = '$row[id]'");
	if (eregi('@', $temp)) {
		mysql_query("UPDATE users SET sms = sms+$tempsms WHERE email = '$row[happyuser]'");
		}
		else
		{
				mysql_query("UPDATE users SET sms = sms+$tempsms WHERE username = '$row[happyuser]'");
		}
		} 
		else
		{
				mysql_query("INSERT INTO approvelog (sponsor, happyuser, credit, status, date, editor, batch) VALUES('".$row[sponsor]."','".$row[happyuser]."','".$row[credit]."','denied','".$date."','".$admin."','".$batch."')") or die(mysql_error());

				mysql_query("DELETE FROM approve WHERE id = '$row[id]'");
		}
}
header("Location: apph.php");
?>


