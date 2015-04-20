<?


$filename = $_GET[page];
$contents = html_entity_decode($_POST[cont]);
$contents = stripslashes($contents);
$fp = fopen($filename, "w");


fputs ($fp, $contents);
fclose($fp);

header("Location: edithtml2.php?page=$filename");

?>