<?
include "mysql.php";
session_start();
$username = $_SESSION['username'];

/*   header("Content-type: application/vnd.ms-excel");
   header("Content-disposition: csv" . date("Y-m-d") . ".csv"); */
header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=history.csv");
header("Pragma: no-cache");
header("Expires: 0");

$sql = "SELECT message, date, tono, fromno FROM  sms WHERE  username = '$username'";
$result = mysql_query($sql);


if (!$result) {
   echo "Could not successfully run query ($sql) from DB: " . mysql_error();
   exit;
}

echo "Date,From,To,Message\n";
while ($row = mysql_fetch_assoc($result)) {

echo "$row[date],$row[fromno],$row[tono],$row[message]";
echo "\n";


}

// header("Location: history.php");
?>