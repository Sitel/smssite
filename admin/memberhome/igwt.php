<?
$server = 'localhost';
$database = 'database_name';
$username = 'dababase_username';
$password = 'password';
$connection = mysql_connect($server,$username,$password);

if (!$connection) {
die('Could not connect to MySQL database, the server return the error: '.mysql_error());
}
// $db2 = mysql_select_db($database2);
$db = @mysql_select_db($database);
 

  $check = mysql_query("SELECT content FROM configuration WHERE description = 'sitename'");
	$sitename = mysql_fetch_row($check); 

  $check = mysql_query("SELECT content FROM configuration WHERE description = 'title'");
	$title = mysql_fetch_row($check); 

  $check = mysql_query("SELECT content FROM configuration WHERE description = 'forum'");
	$forum = mysql_fetch_row($check); 


$footer = "<tr>
		<td colspan=\"17\" style=\"background-image: url(images/dilitme.jpg);\">
		<p align=\"center\" style=\"margin-top: 3px; margin-bottom: 0\">
		<span class=\"txt\"><a href=\"http://$_SERVER[SERVER_NAME]/index.php\"><font color=\"#666666\">Home</font></a>&nbsp;&nbsp; |&nbsp;&nbsp;<a href=\"http://$_SERVER[SERVER_NAME]/faq.php\"><font color=\"#666666\">Site not working?</font></a>&nbsp;&nbsp; |&nbsp;&nbsp;<a href=\"http://$_SERVER[SERVER_NAME]/signup.php\"><font color=\"#666666\">Sign Up</font></a>&nbsp;&nbsp; |&nbsp;&nbsp;<a href=\"http://$_SERVER[SERVER_NAME]/faq.php\"><font color=\"#666666\">Support</font></a>&nbsp;&nbsp; |&nbsp;&nbsp;<a href=\"$forum[0]\" target=\"_blank\"><font color=\"#666666\">Forums</font></a>&nbsp;&nbsp; |&nbsp;&nbsp;<a href=\"/sponsor\" ><font color=\"#666666\">Sponsor Login</font></a>&nbsp;&nbsp; |&nbsp;&nbsp;<a href=\"http://$_SERVER[SERVER_NAME]/privacy.php\"><font color=\"#666666\">Privacy</font></a>&nbsp;&nbsp; |&nbsp;&nbsp; <a href=\"http://$_SERVER[SERVER_NAME]/terms.php\">
		<font color=\"#666666\">Terms of Service</font></a></span><p align=\"center\" style=\"margin-top: 5px; margin-bottom: 2px\">
	  <span class=\"txt\">Copyright 2006 $sitename[0]. All rights reserved.</span></td>
	</tr>";



$sus = "<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01 Transitional//EN\">
<html>
<head>
<title>$title[0]</title>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=iso-8859-1\">
<META http-equiv=\"Content-Language\" content=\"en-us\">
<META name=\"robots\" content=\"index,follow\">
<META name=\"revisit-after\" content=\"30 days\">
<META name=\"keywords\" content=\"free, sms, anonymous, cheap sms, spoofed sms, spoofed, spoof sms header, sms header, sms forum, sms for free, worldwide coverage sms, wordlwide, text messages\">
<meta name=\"description\" content=\"$sitename[0] delivers the best free sms service on the internet! Trick your friends by sending them spoofed sender messages.\">
<META name=\"page-topic\" content=\"Free SMS\">";

/*
	<tr>
		<td colspan="17" style="background-image: url(images/index_24.jpg);">
		<p align="center" style="margin-top: 3px; margin-bottom: 0">
		<span class="txt"><a href="index.php"><font color="#666666">Home</font></a>&nbsp;&nbsp; |&nbsp;&nbsp;<a href="login.php"><font color="#666666">My account</font></a>&nbsp;&nbsp; 
		|&nbsp;&nbsp;<a href="signup.php"><font color="#666666">Sign Up</font></a>&nbsp;&nbsp; |&nbsp;&nbsp;<a href="faq.php"><font color="#666666">Support</font></a>&nbsp;&nbsp; |&nbsp;&nbsp;<a href="forum.php"><font color="#666666">Forums</font></a>&nbsp;&nbsp; |&nbsp;&nbsp;<a href="privacy.php"><font color="#666666">Privacy</font></a>&nbsp;&nbsp; |&nbsp;&nbsp; <a href="terms.php">
		<font color="#666666">Terms of Service</font></a></span><p align="center" style="margin-top: 5px; margin-bottom: 0">
	  <span class="txt">Copyright 2006 $sitename[0]. All rights reserved.</span></td>
	</tr>

*/






$notlogged = "
			<img src=\"images/arr.jpg\" alt=\"Log In\" width=\"14\" height=\"11\" border=\"0\" style=\"vertical-align:middle;\"> 
			<a href=\"index.php\" style=\"text-decoration: none\">
			<font color=\"#666666\">Log In</font></a>&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;
			<img src=\"images/arr.jpg\" alt=\"Register\" width=\"14\" height=\"11\" border=\"0\" style=\"vertical-align:middle;\"> 
			<a href=\"register.php\" style=\"text-decoration: none\">
			<font color=\"#666666\">Register</font></a>";

$adminlink = "		<td colspan=\"3\" rowspan=\"2\" style=\"background-image: url(images/raw2_18.jpg);\"  valign=\"top\"><br>
<table id=\"table1\" width=\"144\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
	<tr>
		<td>
			<p style=\"margin-left: 1px\">
			<a href=\"index.php\" onMouseOut=\"MM_swapImgRestore()\" onMouseOver=\"MM_swapImage('Admin Home','','images/hom2.jpg',1)\"><img src=\"images/hom1.jpg\" name=\"Admin Home\" width=\"144\" height=\"18\" border=\"0\" alt=\"Admin Home\"></a></td>
	</tr>
	<tr>
		<td>
			<p style=\"margin-left: 1px\">
			<a href=\"member.php\" onMouseOut=\"MM_swapImgRestore()\" onMouseOver=\"MM_swapImage('Member Management','','images/member2.jpg',1)\"><img src=\"images/member1.jpg\" alt=\"Member Management\" name=\"Member Management\" width=\"144\" height=\"18\" border=\"0\"></a></td>
	</tr>
	<tr>
		<td>
			<p style=\"margin-left: 1px\">
			<a href=\"massmail.php\" onMouseOut=\"MM_swapImgRestore()\" onMouseOver=\"MM_swapImage('Mass Mail','','images/mass2.jpg',1)\"><img src=\"images/mass1.jpg\" alt=\"Mass Mail\" name=\"Mass Mail\" width=\"144\" height=\"18\" border=\"0\"></a></td>
	</tr>
	<tr>
		<td>
			<p style=\"margin-left: 1px\">
			<a href=\"sqlbackup.php\" onMouseOut=\"MM_swapImgRestore()\" onMouseOver=\"MM_swapImage('Sql Backup','','images/sql2.jpg',1)\"><img src=\"images/sql.jpg\" alt=\"Sql Backup\" name=\"Sql Backup\" width=\"144\" height=\"18\" border=\"0\"></a></td>
	</tr>
	<tr>
		<td>
			<p style=\"margin-left: 1px\">
			<a href=\"news.php\" onMouseOut=\"MM_swapImgRestore()\" onMouseOver=\"MM_swapImage('News Management','','images/news2.jpg',1)\"><img src=\"images/news1.jpg\" alt=\"News Management\" name=\"News Management\" width=\"144\" height=\"18\" border=\"0\"></a></td>
	</tr>	<tr>
		<td>
			<p style=\"margin-left: 1px\">
			<a href=\"edithtml.php\" onMouseOut=\"MM_swapImgRestore()\" onMouseOver=\"MM_swapImage('Content Management','','images/content2.jpg',1)\"><img src=\"images/content.jpg\" alt=\"Content Management\" name=\"Content Management\" width=\"144\" height=\"18\" border=\"0\"></a></td>
	</tr>
	<tr>
		<td>
			<p style=\"margin-left: 1px\">
			<a href=\"configuration.php\" onMouseOut=\"MM_swapImgRestore()\" onMouseOver=\"MM_swapImage('Site Configuration','','images/conf2.jpg',1)\"><img src=\"images/conf1.jpg\" alt=\"Site Configuration\" name=\"Site Configuration\" width=\"144\" height=\"18\" border=\"0\"></a></td>
	</tr>
	<tr>
		<td>
			<p style=\"margin-left: 1px\">
			<a href=\"credits.php\"onMouseOut=\"MM_swapImgRestore()\" onMouseOver=\"MM_swapImage('Credits Management','','images/credits2.jpg',1)\"><img src=\"images/credits1.jpg\" alt=\"Credits Management\" name=\"Credits Management\" width=\"144\" height=\"18\" border=\"0\"></a></td>
	</tr>	<tr>
		<td>
			<p style=\"margin-left: 1px\">
			<a href=\"faq.php\" onMouseOut=\"MM_swapImgRestore()\" onMouseOver=\"MM_swapImage('FAQ Manager','','images/faq2.jpg',1)\"><img src=\"images/faq1.jpg\" alt=\"FAQ Manager\" name=\"FAQ Manager\" width=\"144\" height=\"18\" border=\"0\"></a></td>
	</tr>	<tr>
		<td>
			<p style=\"margin-left: 1px\">
			<a href=\"admin.php\" onMouseOut=\"MM_swapImgRestore()\" onMouseOver=\"MM_swapImage('Admin Manager','','images/admin2.jpg',1)\"><img src=\"images/admin1.jpg\" alt=\"Admin Manager\" name=\"Admin Manager\" width=\"144\" height=\"18\" border=\"0\"></a></td>
	</tr>
		<tr>
		<td>
			<p style=\"margin-left: 1px\">
			<a href=\"paypal.php\" onMouseOut=\"MM_swapImgRestore()\" onMouseOver=\"MM_swapImage('PayPal','','images/paypal2.jpg',1)\"><img src=\"images/paypal.jpg\" alt=\"PayPal\" name=\"PayPal\" width=\"144\" height=\"18\" border=\"0\"></a></td>
	</tr>
	<tr>
		<td>
			<p style=\"margin-left: 1px\">
			<a href=\"sponsor.php\" onMouseOut=\"MM_swapImgRestore()\" onMouseOver=\"MM_swapImage('Sponsor','','images/sponsor2.jpg',1)\"><img src=\"images/sponsor.jpg\" alt=\"Sponsor\" name=\"Sponsor\" width=\"144\" height=\"18\" border=\"0\"></a></td>
	</tr>
		<tr>
		<td>
			<p style=\"margin-left: 1px\">
			<a href=\"approval.php\" onMouseOut=\"MM_swapImgRestore()\" onMouseOver=\"MM_swapImage('Approval','','images/app2.jpg',1)\"><img src=\"images/app.jpg\" alt=\"Approval\" name=\"Approval\" width=\"144\" height=\"18\" border=\"0\"></a></td>
	</tr>
	</tr>
		<tr>
		<td>
			<p style=\"margin-left: 1px\">
			<a href=\"apph.php\" onMouseOut=\"MM_swapImgRestore()\" onMouseOver=\"MM_swapImage('Approve History','','images/apph2.jpg',1)\"><img src=\"images/apph.jpg\" alt=\"Approve History\" name=\"Approve History\" width=\"144\" height=\"18\" border=\"0\"></a></td>
	</tr>
	<tr>
		<td>
			<p style=\"margin-left: 1px\">
			<a href=\"signout.php\" onMouseOut=\"MM_swapImgRestore()\" onMouseOver=\"MM_swapImage('Signout','','images/signout2.jpg',1)\"><img src=\"images/signout.jpg\" alt=\"Signout\" name=\"Signout\" width=\"144\" height=\"18\" border=\"0\"></a></td>
	</tr>

</table>
<br><br>
";


mysql_close();
?>