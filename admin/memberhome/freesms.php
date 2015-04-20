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

<body bgcolor="#FFFFFF" onLoad="MM_preloadImages('images/over_02.jpg','images/over_04.jpg','images/over_06.jpg','images/over_08.jpg','images/over_10.jpg','images/over_12.jpg','images/over_14.jpg','images/mhome2.jpg','images/profile2.jpg','images/sms2.jpg','images/history2.jpg','images/free2.jpg','images/purchase2.jpg','imagesforums2.jpg','images/signout2.jpg')">
<div align="center">
<table id="Table_01" width="790" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td colspan="7">
			<img src="images/index_01.jpg" width="249" height="77" alt=""></td>
		<td colspan="10" style="background-image: url(images/index_02.jpg);">
		<p align="right" class="txt" style="margin-right: 25px">
			Welcome, <? echo $_SESSION['name']; echo " "; echo $_SESSION['firstname']; ?>! You have <? echo $_SESSION['sms']; ?> SMS credits for your account.</td>
	</tr>
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
<table id="table1" width="144" height="144" border="0" cellpadding="0" cellspacing="0">
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
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		</td>
		<td colspan="13">
			<img src="images/freetop.jpg" alt="" width="639" height="23"></td>
		<td>
			<img src="images/index_20.jpg" width="2" height="23" alt=""></td>
	</tr>
	<tr>
		<td style="background-image: url(images/backft2.jpg);">&nbsp;	  </td>
		<td colspan="13" style="background-image: url(images/index_22.jpg);">
			<p style="margin-left: 5px; margin-right: 5px; margin-bottom:0">			<span class="o">
			<br>
			<a name="1"></a>
			</span>
			<img border="0" src="images/pack.jpg" style="vertical-align:middle;" alt="" width="32" height="32"><span class="txtn">&nbsp; 
		Get free SMSs - Signup with other service for <font color="#FF0000"><u>
			FREE</u></font> (5 SMS)</span></p><p style="margin-left: 5px; margin-right: 5px">
			&nbsp;			
			<img border="0" src="images/arr2.jpg" width="10" height="7" alt="" style="vertical-align:middle;">
			<span class="o">In order to get your SMS credits, please read the 
			following steps and follow them!</span><p style="margin-left: 5px; margin-right: 5px">
			&nbsp;			
			<img border="0" src="images/arr2.jpg" width="10" height="7" alt="" style="vertical-align:middle;">
			<span class="o"><b>Step 1</b> - Click on the banner below:</span><p style="margin-left: 5px; margin-right: 5px">
			<span class="o"><!-- Start Partner Program code -->
<CENTER>
<A HREF="http://click.adultsingles.com/partner/click.asp?id=12345&typ=click" target="_blank"><img src="http://click.adultsingles.com/partner/click.asp?id=70685&typ=show" alt="AdultSingles Dating Service" border=0 width=468 height=60></A><br>
<A HREF="http://click.adultsingles.com/">Webmasters click here</A>
</CENTER>
			<p style="margin-left: 5px; margin-right: 5px">
<!-- End Partner Program code -->
&nbsp;<img border="0" src="images/arr2.jpg" width="10" height="7" alt="" style="vertical-align:middle;">
			<b>Step 2</b> - Complete ALL the fields properly and carefully! If 
			you write rubbish on that forms, you will not be credited with the SMS 
messages, and there won't be a second try!</p>
			<p style="margin-left: 5px; margin-right: 5px">			
			<img border="0" src="images/arr2.jpg" width="10" height="7" alt="" style="vertical-align:middle;">
			<b>Step 3</b> - Make sure your profile is complete. On the top of 
			the page you see a progress bar. Make sure everything is done and 
			your account status is active (e-mail activations, etc.)</p>
			<p style="margin-left: 5px; margin-right: 5px">			
			<img border="0" src="images/arr2.jpg" width="10" height="7" alt="" style="vertical-align:middle;">
			<b>Step 4</b> - Use <a href="credits1.php">this form</a> to contact 
			us and request the SMS credits from us. Please note: your account 
			will be manually checked within 24-48 hours!</p>
</span><p style="margin-left: 5px; margin-right: 5px">
	  <img border="0" src="images/desp.jpg" width="400" height="5" alt=""><p style="margin-left: 5px; margin-right: 5px; margin-bottom:0">			
			<a name="2"></a>			
			<img border="0" src="images/pack.jpg" style="vertical-align:middle;" alt="" width="32" height="32"><span class="txtn">&nbsp; 
			Get free SMSs - Refer your friends to us (1 SMS/referred user)</span></p>
			<p style="margin-left: 5px; margin-right: 5px; margin-bottom:0">&nbsp;			
			<img border="0" src="images/arr2.jpg" width="10" height="7" alt="" style="vertical-align:middle;">
			<span class="o">Start inviting your friends with this link and get extra free SMS 
			credits! 1 active referred user gives you 1 SMS!</span></p>
			<p style="margin-left: 5px; margin-right: 5px; margin-bottom:0">&nbsp;			
			<img border="0" src="images/arr2.jpg" width="10" height="7" alt="" style="vertical-align:middle;">
			<span class="o">Use this personal link:
			<a href="http://<? echo  $_SERVER[SERVER_NAME]; ?>/in.php?id=<? echo $_SESSION['username']; ?>">
			<font color="#FF0000"><b>
			http://<? echo  $_SERVER[SERVER_NAME]; ?>/in.php?id=<? echo $_SESSION['username']; ?></b></font></a></span></p>
			<p style="margin-left: 5px; margin-right: 5px; margin-bottom:0">&nbsp;			
			<img border="0" src="images/arr2.jpg" width="10" height="7" alt="" style="vertical-align:middle;">
			<span class="o">Total clicks: <? echo $_SESSION['clicks']; ?></span></p>
			<p style="margin-left: 5px; margin-right: 5px; margin-bottom:0">&nbsp;			
			<img border="0" src="images/arr2.jpg" width="10" height="7" alt="" style="vertical-align:middle;">
			<span class="o">Total signups (with account activated): <?  echo $_SESSION['registrations']; ?></span>&nbsp;			</p>
			<p style="margin-left: 6px; margin-right: 0px; margin-bottom:0">&nbsp;			
			<img border="0" src="images/arr2.jpg" width="10" height="7" alt="" style="vertical-align:middle;">
			<span class="o">All the information above is updated in real time! 
			You will automatically be credited when the referred user becomes 
			active.</span></p><p style="margin-left: 5px; margin-right: 5px">
	  <img border="0" src="images/desp.jpg" width="400" height="5" alt=""><p style="margin-left: 5px; margin-right: 5px">
			<a name="3"></a>
			<img border="0" src="images/pack.jpg" style="vertical-align:middle;" alt="" width="32" height="32"><span class="txtn">&nbsp; 
		Get free SMSs - Post in the forums (1 SMS/20 posts)</span><p style="margin-left: 5px; margin-right: 5px">
			&nbsp;			
			<img border="0" src="images/arr2.jpg" width="10" height="7" alt="" style="vertical-align:middle;">
			<span class="o">Start posting on our forums and earn free SMSs!</span><p style="margin-left: 5px; margin-right: 5px">
			&nbsp;			
			<img border="0" src="images/arr2.jpg" width="10" height="7" alt="" style="vertical-align:middle;">
			<span class="o">20 posts on the forums = 1 SMS. *Note: your posts 
		will be manually verified to make sure they are quality posts. You will 
		not receive the SMS credits if your posts are short or they don't comply 
		with the forum rules.</span><p style="margin-left: 5px; margin-right: 5px">
	  &nbsp;</td>
	</tr>
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
