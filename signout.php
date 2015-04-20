<?
session_start(); 
$_SESSION['name'] = "";
$_SESSION['firstname'] = "";
$_SESSION['active'] = "";
$_SESSION['sms'] = "";
session_destroy();
header("Location: index.php");
?>
