<?
include "igwt.php";
include "mysql.php";



session_start(); 

$check = mysql_query("SELECT clicks, registrations FROM affiliates WHERE username = '$username'");
$row = mysql_fetch_row($check); 

$_SESSION['clicks'] = $row[0];
$_SESSION['registrations'] = $row[1];

if ($_SESSION['username'] == '')
{
include "loginerror.php";
die;
exit;
break;
}
$check = mysql_query("SELECT * FROM news WHERE id = '1'");
	$row1 = mysql_fetch_row($check);

$check = mysql_query("SELECT * FROM news WHERE id = '2'");
	$row2 = mysql_fetch_row($check);
	
$check = mysql_query("SELECT * FROM news WHERE id = '3'");
	$row3 = mysql_fetch_row($check);
$activa = "			<p align=\"left\" class=\"o\" style=\"margin-right: 25px; margin-left:10px\">
			<img border=\"0\" src=\"images/arr2.jpg\" width=\"10\" height=\"7\" alt=\"\" style=\"vertical-align:middle;\">
			Insert here the <font color=\"#FF0000\">activation code</font> you received in the SMS message when 
			you signed up:<form method=\"POST\" action=\"activate.php\">
				<p align=\"left\" class=\"o\" style=\"margin-left: 10px; margin-right: 25px\">
				<input name=\"T2\" type=\"text\" class=\"o\" size=\"20\">
				<input type=\"image\" src=\"images/pressme.jpg\"  name=\"B1\" class=\"o\" value=\"Submit\" style=\"vertical-align:top;\"></p>
			</form>
";

$check = mysql_query("SELECT name, firstname, active, sms FROM users WHERE username = '$username'");
$row = mysql_fetch_row($check); 




$_SESSION['name'] = $row[0];
$_SESSION['firstname'] = $row[1]; 
$_SESSION['active'] = $row[2];
$_SESSION['sms'] = $row[3];
$_SESSION['username'] = $username;

echo $sus;
?>


<style type="text/css" media="all">
@import "main.css";
</style>
<script type="text/JavaScript">
<!--
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function popUp(URL) {
day = new Date();
id = day.getTime();
eval("page" + id + " = window.open(URL, '" + id + "', 'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=0,width=450,height=200,left = 100,top = 100');");
}

function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>
</head>

<body bgcolor="#FFFFFF" onLoad="MM_preloadImages('images/over_02.jpg','images/over_04.jpg','images/over_06.jpg','images/over_08.jpg','images/over_10.jpg','images/over_12.jpg','images/over_14.jpg','images/mhome2.jpg','images/profile2.jpg','images/sms2.jpg','images/history2.jpg','images/free2.jpg','images/purchase2.jpg','imagesforums2.jpg','images/signout2.jpg','images/address2.jpg')">
<div align="center">
<table id="Table_01" width="790" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td colspan="7">
			<img src="images/index_01.jpg" width="249" height="77" alt=""></td>
		<td colspan="10" style="background-image: url(images/index_02.jpg);">
		<p align="right" class="txt" style="margin-right: 25px">
Welcome, <? echo $_SESSION['name']; echo " "; echo $_SESSION['firstname']; ?>! You have <? echo $_SESSION['sms']; ?> SMS credits for your account.</tr>
	<tr>
		<td colspan="17">
			<img src="images/top3.jpg" alt="" width="790" height="151"></td>
	</tr>
	<tr>
		<td>
			<a href="index.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Home','','images/over_02.jpg',1)"><img src="images/index_04.jpg" name="Home" width="110" height="24" border="0" alt="Home"></a></td>
		<td>
			<img src="images/index_05.jpg" width="2" height="24" alt=""></td>
		<td colspan="3">
			<a href="myaccount.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('My Account','','images/over_04.jpg',1)"><img src="images/raw2_05.jpg" name="My Account" width="110" height="24" border="0" alt="My Account"></a></td>
		<td>
			<img src="images/index_07.jpg" width="2" height="24" alt=""></td>
		<td colspan="2">
			<a href="signup.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Sign Up','','images/over_06.jpg',1)"><img src="images/raw2_06.jpg" name="Sign Up" width="110" height="24" border="0" alt="Sign Up"></a></td>
		<td>
			<img src="images/index_09.jpg" width="2" height="24" alt=""></td>
		<td>
			<a href="features.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Features','','images/over_08.jpg',1)"><img src="images/raw2_08.jpg" name="Features" width="110" height="24" border="0" alt="Features"></a></td>
		<td>
			<img src="images/index_11.jpg" width="2" height="24" alt=""></td>
		<td>
			<a href="coverage.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Coverage','','images/over_10.jpg',1)"><img src="images/raw2_10.jpg" name="Coverage" width="113" height="24" border="0" alt="Coverage"></a></td>
		<td>
			<img src="images/index_13.jpg" width="2" height="24" alt=""></td>
		<td>
			<a href="forum" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Forum','','images/over_12.jpg',1)"><img src="images/index_14.jpg" name="Pricing" width="113" height="24" border="0" alt="Pricing"></a></td>
		<td>
			<img src="images/index_15.jpg" width="2" height="24" alt=""></td>
		<td colspan="2">
			<a href="faq.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Support','','images/over_14.jpg',1)"><img src="images/index_16.jpg" name="Support" width="112" height="24" border="0" alt="Suport"></a></td>
	</tr>
	<tr>
		<td colspan="17">
			<img src="images/index_17.jpg" width="790" height="23" alt=""></td>
	</tr>
	<tr>
		<td colspan="3" rowspan="2" style="background-image: url(images/raw2_18.jpg);" valign="top"><br>
<table id="table1" width="144" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td>
			<p style="margin-left: 1px">
			<a href="myaccount.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('MemberHome','','images/mhome2.jpg',1)"><img src="images/mhome.jpg" name="MemberHome" width="144" height="18" border="0" alt="Member Home"></a></td>
	</tr>
	<tr>
		<td>
			<p style="margin-left: 1px">
			<a href="profile.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Profile','','images/profile2.jpg',1)"><img src="images/profile.jpg" alt="Profile" name="Profile" width="144" height="18" border="0"></a></td>
	</tr>
	<tr>
		<td>
			<p style="margin-left: 1px">
			<a href="sendsms.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('SMS','','images/sms2.jpg',1)"><img src="images/sms.jpg" alt="Send SMS" name="SMS" width="144" height="18" border="0"></a></td>
	</tr>
	<tr>
		<td>
			<p style="margin-left: 1px">
			<a href="addressbook.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Address Book','','images/address2.jpg',1)"><img src="images/address.jpg" alt="Address Book" name="Address Book" width="144" height="18" border="0"></a></td>
	</tr>
	<tr>
		<td>
			<p style="margin-left: 1px">
			<a href="history.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('History','','images/history2.jpg',1)"><img src="images/history.jpg" alt="Message History" name="History" width="144" height="18" border="0"></a></td>
	</tr>
	<tr>
		<td>
			<p style="margin-left: 1px">
			<a href="freesms.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Free','','images/free2.jpg',1)"><img src="images/free.jpg" alt="Get Free SMSs" name="Free" width="144" height="18" border="0"></a></td>
	</tr>
	<tr>
		<td>
			<p style="margin-left: 1px">
			<a href="purchase.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Purchase','','images/purchase2.jpg',1)"><img src="images/purchase.jpg" alt="Purchase SMS" name="Purchase" width="144" height="18" border="0"></a></td>
	</tr>
	<tr>
		<td>
			<p style="margin-left: 1px">
			<a href="forum" target="_blank" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Forums','','imagesforums2.jpg',1)"><img src="imagesforums.jpg" alt="Forums" name="Forums" width="144" height="18" border="0"></a></td>
	</tr>
	<tr>
		<td>
			<p style="margin-left: 1px">
			<a href="signout.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Signout','','images/signout2.jpg',1)"><img src="images/signout.jpg" alt="Sign Out" name="Signout" width="144" height="18" border="0"></a></td>
	</tr>
</table>
<br><br><br><br><br><br><br><br><br><br><br><br>		</td>
		<td colspan="13">
			<img src="images/memberhome.jpg" alt=""></td>
		<td>
			<img src="images/index_20.jpg" width="2" height="23" alt=""></td>
	</tr>
	<tr>
		<td style="background-image: url(images/backft2.jpg);">&nbsp;	  </td>
		<td colspan="13" style="background-image: url(images/index_22.jpg);">	
		<table width="625" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td rowspan="4" width="410">	<p align="center"><br>
		<?php
    if (@include(getenv('DOCUMENT_ROOT').'/ads/phpadsnew.inc.php')) {
        if (!isset($phpAds_context)) $phpAds_context = array();
        $phpAds_raw = view_raw ('zone:3', 0, '', '', '0', $phpAds_context);
        echo $phpAds_raw['html'];
    }
?>
			</p>
			<p style="margin-left: 5px; margin-right: 5px; margin-bottom:0">			
			<img border="0" src="images/info2.jpg" style="vertical-align:middle;" alt=""><span class="txtn">&nbsp; 
			Info</span></p>
		<p align="left" class="o" style="margin-right: 25px; margin-left:10px">
			<img border="0" src="images/arr2.jpg" width="10" height="7" alt="" style="vertical-align:middle;">
			Welcome, <? echo $_SESSION['name']; echo " "; echo $_SESSION['firstname']; ?>! You have <? echo $_SESSION['sms']; ?> SMS 
			credit<? if ($_SESSION['sms'] == 1) { echo ""; } else { echo "s"; } ?> left, and your account status is <? if ($_SESSION['active'] == 'no') { echo "not active"; } else { echo "active"; } ?>.
			<? if ($_SESSION['active'] == 'no') { echo $activa; } ?>
		  <p align="left" class="o" style="margin-right: 25px; margin-left:10px">
		  <p style="margin-right: 0px; margin-bottom:0">&nbsp;			<img border="0" src="images/desp.jpg" width="400" height="5" alt=""></p>
			<p style="margin-left: 5px; margin-right: 5px; margin-bottom:0">			
			<img border="0" src="images/pack2.jpg" style="vertical-align:middle;" alt="" width="36" height="36"><span class="txtn">&nbsp; 
			Free SMS Credits</span></p>
		<p class="o" style="margin:0 5px; ">			
			&nbsp;</p>
		<p class="o" style="margin:0 5px; ">			
			<img border="0" src="images/arr2.jpg" width="10" height="7" alt="" style="vertical-align:middle;">
			<b><font color="#FF0000">5 free SMS</font></b> credits
			<a href="freesms.php#1">here</a> to sign-up on a site for free</p>
		<p class="o" style="margin:0 5px; ">			
			<img border="0" src="images/arr2.jpg" width="10" height="7" alt="" style="vertical-align:middle;">
			<b><font color="#FF0000">1 free SMS</font></b>/referred user
			<a href="freesms.php#2">here</a></p>
		<p class="o" style="margin:0 5px; ">			
			<img border="0" src="images/arr2.jpg" width="10" height="7" alt="" style="vertical-align:middle;">
			<b><font color="#FF0000">1 free SMS</font></b>/20 posts on the 
			forums <a href="freesms.php#1">here</a></p>
		<p style="margin-left: 5px; margin-right: 5px; margin-bottom:0">			<img border="0" src="images/desp.jpg" width="400" height="5" alt=""></p>
			<p style="margin-left: 5px; margin-right: 5px; margin-bottom:0">&nbsp;			
			<img border="0" src="images/add.jpg" style="vertical-align:middle;" alt="" width="32" height="32"><span class="txtn">&nbsp; 
			Invite Link</span></p>
			<p style="margin-left: 5px; margin-right: 5px; margin-bottom:0">&nbsp;			
			<img border="0" src="images/arr2.jpg" width="10" height="7" alt="" style="vertical-align:middle;">
			<span class="o">Start inviting your friends with this link and get extra free SMS 
			credits!</span></p>
			<p style="margin-left: 5px; margin-right: 5px; margin-bottom:0">&nbsp;			
			<img border="0" src="images/arr2.jpg" width="10" height="7" alt="" style="vertical-align:middle;">
			<span class="o">Use this link:
			<a href="http://<? echo  $_SERVER[SERVER_NAME]; ?>/in.php?id=<? echo $_SESSION['username']; ?>">
			<font color="#FF0000"><b>
			http://<? echo  $_SERVER[SERVER_NAME]; ?>/in.php?id=<? echo $_SESSION['username']; ?></b></font></a></span></p>
			<p style="margin-left: 5px; margin-right: 5px; margin-bottom:0">&nbsp;			
			<img border="0" src="images/arr2.jpg" width="10" height="7" alt="" style="vertical-align:middle;">
			<span class="o">Total clicks: <? echo $_SESSION['clicks']; ?></span></p>
			<p style="margin-left: 5px; margin-right: 5px; margin-bottom:0">&nbsp;			
			<img border="0" src="images/arr2.jpg" width="10" height="7" alt="" style="vertical-align:middle;">
			<span class="o">Total signups (and SMS credits): <?  echo $_SESSION['registrations']; ?></span>&nbsp;			</p><br><p style="margin-left: 5px; margin-right: 5px">
			<p align="center"><br>
		<?php
    if (@include(getenv('DOCUMENT_ROOT').'/ads/phpadsnew.inc.php')) {
        if (!isset($phpAds_context)) $phpAds_context = array();
        $phpAds_raw = view_raw ('zone:4', 0, '', '', '0', $phpAds_context);
        echo $phpAds_raw['html'];
    }
?>
			</p> </td>
	</tr></td>
		<td>
<table id="table2" width="144" height="154" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td colspan="3" style="background-image: url('images/N1.jpg');">
			<img src="images/N1.jpg" width="144" height="3" alt=""></td>
	</tr>
	<tr>
		<td rowspan="3" style="background-image: url('images/N2.jpg');">
			<img src="images/N2.jpg" width="2" height="147" alt=""></td>
		<td>
			<p class="o" style="margin-left: 5px"><? echo $row1[2]; ?></p></td>
		<td rowspan="3" style="background-image: url('images/N4.jpg');">
			<img src="images/N4.jpg" width="3" height="147" alt=""></td>
	</tr>
	<tr>
		<td>
			<img src="images/N5.jpg" width="139" height="4" alt=""></td>
	</tr>
	<tr>
		<td>
			<p align="center">
			<span class="txtn">&nbsp; 
			<? echo $row1[1]; ?></span><br></p>
			<p class="o" style="margin-left: 5px"><? echo $row1[3]; ?></td>
	</tr>
	<tr>
		<td colspan="3" height="5" style="background-image: url('images/N7.jpg');">
			<img src="images/N7.jpg" width="144" height="4" alt=""></td>
	</tr>
</table>
		</td>
	</tr>
	<tr>
		<td>
<table id="table3" width="144" height="154" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td colspan="3" style="background-image: url('images/N1.jpg');">
			<img src="images/N1.jpg" width="144" height="3" alt=""></td>
	</tr>
	<tr>
		<td rowspan="3" style="background-image: url('images/N2.jpg');">
			<img src="images/N2.jpg" width="2" height="147" alt=""></td>
		<td>
			<p class="o" style="margin-left: 5px"><? echo $row2[2]; ?></p></td>
			<p>&nbsp;</td>
		<td rowspan="3" style="background-image: url('images/N4.jpg');">
			<img src="images/N4.jpg" width="3" height="147" alt=""></td>
	</tr>
	<tr>
		<td>
			<img src="images/N5.jpg" width="139" height="4" alt=""></td>
	</tr>
	<tr>
		<td>
			<p align="center">
			<span class="txtn">&nbsp; 
			<? echo $row2[1]; ?></span><br></p>
			<p class="o" style="margin-left: 5px"><? echo $row2[3]; ?></p>
			</td>
	</tr>
	<tr>
		<td colspan="3" height="5" style="background-image: url('images/N7.jpg');">
			<img src="images/N7.jpg" width="144" height="4" alt=""></td>
	</tr>
</table>
		</td>
	</tr>
	<tr>
		<td>
<table id="table4" width="144" height="154" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td colspan="3" style="background-image: url('images/N1.jpg');">
			<img src="images/N1.jpg" width="144" height="3" alt=""></td>
	</tr>
	<tr>
		<td rowspan="3" style="background-image: url('images/N2.jpg');">
			<img src="images/N2.jpg" width="2" height="147" alt=""></td>
		<td>
			<p class="o" style="margin-left: 5px"><? echo $row3[2]; ?></p></td>
			<p>&nbsp;</td>
		<td rowspan="3" style="background-image: url('images/N4.jpg');">
			<img src="images/N4.jpg" width="3" height="147" alt=""></td>
	</tr>
	<tr>
		<td>
			<img src="images/N5.jpg" width="139" height="4" alt=""></td>
	</tr>
	<tr>
		<td>
			<p align="center">
			<span class="txtn">&nbsp; 
			<? echo $row3[1]; ?></span></p>
			<p class="o" style="margin-left: 5px"><? echo $row3[3]; ?></p>
</td>
	</tr>
	<tr>
		<td colspan="3" height="5" style="background-image: url('images/N7.jpg');">
			<img src="images/N7.jpg" width="144" height="4" alt=""></td>
	</tr>
</table>
		</td>
	</tr>
	<tr>
		<td width="410">
			</td>
	</tr>
</table>

	<tr>
		<td colspan="17">
			<img src="images/index_23.jpg" width="790" height="30" alt=""></td>
	</tr>
<? echo $footer; ?>	<tr>
		<td>
			<img src="images/spacer.gif" width="110" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="2" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="37" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="13" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="60" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="2" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="25" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="85" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="2" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="110" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="2" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="113" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="2" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="113" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="2" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="110" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="2" height="1" alt=""></td>
	</tr>
</table>
</div>
</body>
</html>