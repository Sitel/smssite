<?
include "mysql.php";
$username = $_POST[username];
$password = $_POST[password];
$name = $_POST[name];
$url = $_POST[url];
$email = $_POST[email];
$credits = $_POST[credits];

mysql_query("INSERT INTO sponsor (username, password, name, url, email, credit) VALUES('".$username."','".$password."','".$name."','".$url."','".$email."','".$credits."')") or die(mysql_error());

header("Location: sponsor.php");
?>