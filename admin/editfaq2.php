<?
include "igwt.php";
include "mysql.php";
session_start(); 

if ($_SESSION['admin'] == '')
{
include "login.php";
die;
exit;
break;
}

$question = $_POST[question];
$answer = $_POST[answer]; 
$id = $_GET[id];
if ($id != '')
{
mysql_query("UPDATE faq SET question = '$question' WHERE id = '$id'");
mysql_query("UPDATE faq SET answer = '$answer' WHERE id = '$id'");
}
else
{
mysql_query("INSERT INTO faq (question, answer) VALUES('".$question."','".$answer."')") or die(mysql_error());
}



?><META HTTP-EQUIV="Refresh" CONTENT="0; URL=faq.php">