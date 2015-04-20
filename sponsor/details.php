<?
include "igwt.php";
include "mysql.php";
session_start(); 

if ($_SESSION['sponsor'] == '')
{
include "login.php";
die;
exit;
break;
}
$username = $_SESSION['sponsor'];
$check = mysql_query("SELECT * FROM sponsor WHERE username = '$username'");
$row = mysql_fetch_row($check); 

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Sponsor Area</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<META http-equiv="Content-Language" content="en-us">
<META name="robots" content="index,follow">
<META name="revisit-after" content="30 days">
<META name="keywords" content="free, sms, anonymous, cheap sms, spoofed sms, spoofed, spoof sms header, sms header, sms forum, sms for free, worldwide coverage sms, wordlwide, text messages">
<meta name="description" content="delivers the best free sms service on the internet! Trick your friends by sending them spoofed sender messages.">
<META name="page-topic" content="Free SMS">


<style type="text/css" media="all">
@import "main.css";
</style>
<script type="text/JavaScript">
<!--
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

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

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}

function popUp(URL) {
day = new Date();
id = day.getTime();
eval("page" + id + " = window.open(URL, '" + id + "', 'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=0,width=450,height=200,left = 100,top = 100');");
}

//-->
</script>
</head>
<body bgcolor="#FFFFFF" onLoad="MM_preloadImages('images/over_02.jpg','images/over_04.jpg','images/over_06.jpg','images/over_08.jpg','images/over_10.jpg','images/over_12.jpg','images/over_14.jpg','images/signout2.jpg','images/admin2.jpg','images/faq2.jpg','images/credits2.jpg','images/conf2.jpg','images/news2.jpg','images/sql2.jpg','images/mass2.jpg','images/member2.jpg','images/hom2.jpg')">
<table id="Table_01" width="790" border="0" cellpadding="0" cellspacing="0" align="center">
	<tr>
		<td colspan="7">
			<img src="../images/index_01.jpg" width="249" height="77" alt=""></td>
		<td colspan="10" style="background-image: url(images/index_02.jpg);">
		<p align="right" class="txt" style="margin-right: 25px">
<a href="index.php"><font color="#666666">Sponsor Home</font></a>
<a href="details.php"><font color="#666666">My Details</font></a>
<a href="history.php"><font color="#666666">History</font></a>
<a href="signout.php"><font color="#666666">Sign Out</font></a></td>
	</tr>
	<tr>
		<td colspan="17">
			<img src="../images/top2.jpg" alt="" width="790" height="151"></td>
	</tr>
	<tr>
		<td>
			<a onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Home','','images/over_02.jpg',1)" href="../index.php"><img src="../images/index_04.jpg" name="Home" width="110" height="24" border="0" alt="Home"></a></td>
		<td>
			<img src="../images/index_05.jpg" width="2" height="24" alt=""></td>
		<td colspan="3">
			<a onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('My Account','','images/over_04.jpg',1)" href="../myaccount.php"><img src="../images/raw2_05.jpg" name="My Account" width="110" height="24" border="0" alt="My Account"></a></td>
		<td>
			<img src="../images/index_07.jpg" width="2" height="24" alt=""></td>
		<td colspan="2">
			<a onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Sign Up','','images/over_06.jpg',1)" href="../signup.php"><img src="../images/raw2_06.jpg" name="Sign Up" width="110" height="24" border="0" alt="Sign Up"></a></td>
		<td>
			<img src="../images/index_09.jpg" width="2" height="24" alt=""></td>
		<td>
			<a onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Features','','images/over_08.jpg',1)" href="../features.php"><img src="../images/raw2_08.jpg" name="Features" width="110" height="24" border="0" alt="Features"></a></td>
		<td>
			<img src="../images/index_11.jpg" width="2" height="24" alt=""></td>
		<td>
			<a onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Coverage','','images/over_10.jpg',1)" href="../coverage.php"><img src="../images/raw2_10.jpg" name="Coverage" width="113" height="24" border="0" alt="Coverage"></a></td>
		<td>
			<img src="../images/index_13.jpg" width="2" height="24" alt=""></td>
		<td>
			<a onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Forum','','images/over_12.jpg',1)" href="../forum"><img src="../images/index_14.jpg" name="Pricing" width="113" height="24" border="0" alt="Pricing"></a></td>
		<td>
			<img src="../images/index_15.jpg" width="2" height="24" alt=""></td>
		<td colspan="2">
			<a onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Support','','images/over_14.jpg',1)" href="../faq.php"><img src="../images/index_16.jpg" name="Support" width="112" height="24" border="0" alt="Suport"></a></td>
	</tr>
	<tr>
		<td colspan="17">
			<img src="../images/index_17.jpg" width="790" height="23" alt=""></td>
	</tr>
	<tr>
		<td colspan="3" rowspan="2" style="background-image: url(images/raw2_18.jpg);"  valign="top"><br>

&nbsp;<table id="table1" width="145" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td colspan="2">
			<img src="../images/tabel_01.jpg" width="145" height="13" alt=""></td>
	</tr>
	<tr>
		<td width="142">
			<p style="margin-left: 3px">
			<img border="0" src="../images/chat.jpg" width="24" height="24" alt="Test our service" style="vertical-align:middle;">
			<span class="txtn">Quick Links</span></p>
			<p class="o" style="margin-left: 6px; margin-top:0; margin-bottom:5px">
			<a href="index.php"><font color="#000000">Sponsor Home</font></a></p>
			<p class="o" style="margin-left: 6px; margin-top:0; margin-bottom:5px">
			<a href="details.php"><font color="#000000">View my details</font></a></p>
			<p class="o" style="margin-left: 6px; margin-top:0; margin-bottom:5px">
			<a href="history.php"><font color="#000000">History</font></a></p>
			<p class="o" style="margin-left: 6px; margin-top:0; margin-bottom:5px">
			<a href="signout.php"><font color="#000000">Sign Out</font></a></p>
			</td>
		<td style="background-image: url('../images/tabel_03.jpg');" width="3" height="136">
		  </td>
	</tr>
	<tr>
		<td colspan="2">
			<img src="../images/tabel_04.jpg" width="145" height="11" alt=""></td>
	</tr>
</table>
		 	  

<br><br>		</td>
		<td colspan="13">
			<img src="../images/spon.jpg" width="639" height="23" alt=""></td>
		<td>
			<img src="../images/index_20.jpg" width="2" height="23" alt=""></td>
	</tr>
	<tr>
		<td style="background-image: url(images/backft.jpg);">&nbsp;	  </td>
		<td colspan="13" style="background-image: url(images/index_22.jpg);">
			<p align="center" class="o">
			<p align="center" class="o">
			<p align="center" class="o">
			<p align="center" class="o">
<form method="POST" action="editsponsor2.php?id=<? echo $row[0]; ?>" >
  <p align="center" class="o">&nbsp;</p>
  <table width="100%"  border="0" cellpadding="5" cellspacing="1" class="box_inner" id="table2">

          <tr>
            <td width="172" class="o">Sponsor password:</td>
            <td >
			<input name="password" type="text" class="o" id="email"  value="<? echo $row[2]; ?>" size="30" maxlength="65" /></td>
          </tr>
          <tr>
            <td width="172" class="o">Sponsor name:</td>
            <td >
			<input name="name" type="text" class="o" id="email2"  value="<? echo $row[3]; ?>" size="30" maxlength="65" />            </td>
          </tr>

          <tr>
            <td width="172" class="o">Sponsor URL:</td>
            <td >
			<input name="url" class="o"  value="<? echo $row[4]; ?>" maxlength="65" size="30" />            </td>
          </tr>
		  <tr>
            <td width="172" class="o">Sponsor email:</td>
            <td >
			<input name="email" class="o"  value="<? echo $row[5]; ?>" maxlength="65" size="30" />            </td>

          </tr>
			<tr>
		    <td width="172" class="o">SMS Credit:</td>
		    <td >
			<input name="credit" type="text" class="o"  value="<? echo $row[6]; ?>" size="30" maxlength="65" />
 </td>
    		</tr>
		  	
	 </table>

	<p>
				<input name="B1" type="submit" class="o" value="Submit">
	</p>
</form>
	</tr>
	<tr>
		<td colspan="17">
			<img src="../images/index_23.jpg" width="790" height="30" alt=""></td>
	</tr>
<? echo $footer; ?>	<tr>
		<td>
			<img src="../images/spacer.gif" width="110" height="1" alt=""></td>
		<td>
			<img src="../images/spacer.gif" width="2" height="1" alt=""></td>
		<td>
			<img src="../images/spacer.gif" width="37" height="1" alt=""></td>
		<td>
			<img src="../images/spacer.gif" width="13" height="1" alt=""></td>
		<td>
			<img src="../images/spacer.gif" width="60" height="1" alt=""></td>
		<td>
			<img src="../images/spacer.gif" width="2" height="1" alt=""></td>
		<td>
			<img src="../images/spacer.gif" width="25" height="1" alt=""></td>
		<td>
			<img src="../images/spacer.gif" width="85" height="1" alt=""></td>
		<td>
			<img src="../images/spacer.gif" width="2" height="1" alt=""></td>
		<td>
			<img src="../images/spacer.gif" width="110" height="1" alt=""></td>
		<td>
			<img src="../images/spacer.gif" width="2" height="1" alt=""></td>
		<td>
			<img src="../images/spacer.gif" width="113" height="1" alt=""></td>
		<td>
			<img src="../images/spacer.gif" width="2" height="1" alt=""></td>
		<td>
			<img src="../images/spacer.gif" width="113" height="1" alt=""></td>
		<td>
			<img src="../images/spacer.gif" width="2" height="1" alt=""></td>
		<td>
			<img src="../images/spacer.gif" width="110" height="1" alt=""></td>
		<td>
			<img src="../images/spacer.gif" width="2" height="1" alt=""></td>
	</tr>
</table>
</div>
</body>
</html>