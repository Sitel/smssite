<?
include "igwt.php";



session_start(); 


if ($_SESSION['username'] == '')
{
$logged = "no";
session_destroy();
}







echo $sus;
?>


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

<body bgcolor="#FFFFFF" onLoad="MM_preloadImages('images/over_02.jpg','images/over_04.jpg','images/over_06.jpg','images/over_08.jpg','images/over_10.jpg','images/over_12.jpg','images/over_14.jpg')">
<table id="Table_01" width="790" border="0" cellpadding="0" cellspacing="0" align="center">
	<tr>
		<td colspan="7">
			<img src="images/index_01.jpg" width="249" height="77" alt=""></td>
		<td colspan="10" style="background-image: url(images/index_02.jpg);">
		<p align="right" class="txt" style="margin-right: 25px">
			<?
if ($logged == 'no')
{
echo $notlogged;
}
else
{
echo "Welcome, $_SESSION[name] $_SESSION[firstname]! You have $_SESSION[sms] SMS credits for your account.</td>";

}
?></td>
	</tr>
    <tr>
		<td colspan="17">
			<img src="images/top1.jpg" alt="" width="790" height="151"></td>
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
		<td colspan="3" rowspan="2" style="background-image: url('images/raw2_18.jpg');">
<table id="table1" width="145" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td colspan="2">
			<img src="images/tabel_01.jpg" width="145" height="13" alt=""></td>
	</tr>
	<tr>
		<td width="142">
			<p style="margin-left: 3px">
			<img border="0" src="images/test.jpg" width="24" height="24" alt="Test our service" style="vertical-align:middle;"> <span class="txtn">Test
			our service</span></p>
			<p class="o" style="margin-left: 6px; margin-top:0; margin-bottom:5px" align="left">
			Mobile No.: <a href="javascript:popUp('numberformat.html')">Format</a></p>
			<form action="testsend.php" method="POST" class="o">
			  <p style="margin-left: 3px; margin-top:0px; margin-bottom:0" align="center">
				<input name="T1" type="text" class="o" size="20"></p>
				<p style="margin-left: 3px; margin-top:3px; margin-bottom:0" align="center">
				<input type="image" src="images/pressme.jpg"  name="B1" class="o" value="Submit">
				</p>
			</form>
			</td>
		<td style="background-image: url('images/tabel_03.jpg');" width="3" height="136">
		  </td>
	</tr>
	<tr>
		<td colspan="2">
			<img src="images/tabel_04.jpg" width="145" height="11" alt=""></td>
	</tr>
</table>
		 

<table id="table5" width="145" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td colspan="2">
			<img src="images/tabel_01.jpg" width="145" height="13" alt=""></td>
	</tr>
	<tr>
		<td width="142">
			<p style="margin-left: 3px">
			<img border="0" src="images/mail2.jpg" width="24" height="24" alt="Test our service" style="vertical-align:middle;">
			<span class="txtn">Newsletter</span></p>
			<p class="o" style="margin-left: 6px; margin-top:0; margin-bottom:5px">
			Want to know when new features are available?</p>
			<p class="o" style="margin-left: 6px; margin-top:0; margin-bottom:5px">
			Subscribe to our newsletter by entering your e-mail address here:</p>
			<form action="newsletter/users/form.php?FormID=2" method="post" name="frmSS" onSubmit="return CheckSS()">
			<input type="hidden" name="SelectLists[2]" value="YES">
			<input type="hidden" name="Format" value="1">
			<input type="hidden" name="FormCode" value="5fb552f49223d8c6f9c7b92a350c6c57">

			  <p style="margin-left: 3px; margin-top:0px; margin-bottom:0" align="center">
				<input name="Email" type="text" class="o" size="20"></p>
				<p style="margin-left: 3px; margin-top:3px; margin-bottom:0" align="center">
				<input type="image" src="images/pressme.jpg" value="Subscribe" name="I1">
				</p>
			</form>
			</td>
		<td style="background-image: url('images/tabel_03.jpg');" width="3" height="136">
		  </td>
	</tr>
	<tr>
		<td colspan="2">
			<img src="images/tabel_04.jpg" width="145" height="11" alt=""></td>
	</tr>
</table>
		 

		<br>&nbsp;<p>&nbsp;</p>
<p></td>
		<td colspan="13">
			<img src="images/index_19.jpg" width="639" height="23" alt=""></td>
		<td>
			<img src="images/index_20.jpg" width="2" height="23" alt=""></td>
	</tr>
	<tr>
		<td style="background-image: url('images/index_21.jpg');">&nbsp;	  </td>
		<td colspan="13" style="background-image: url('images/index_22.jpg');">
			&nbsp;<form action="login.php" method="POST" class="o"><table border="0" cellpadding="2" cellspacing="2" width="51%" id="table4">
                        <tr>
                          <td colspan="2" align="left" class="txtn">


							<img border="0" src="images/lock.jpg" style="vertical-align:middle;" alt="">&nbsp; Log in to your account</td>
                        </tr>
                <tr>
                  <td class="o">Username:</td>
                  <td>
                  <input name="username" type="text" class="o" maxlength="20" size="20">
                  </td>

                </tr>
                <tr>
                  <td class="o">Password:</td>
                  <td>
                  <input name="password" type="password" class="o" maxlength="20" size="20">
                  </td>
                </tr>
                <tr>
                  <td colspan=2 align=right>
				<p align="center">
				<input type="image" src="images/pressme.jpg"  name="B2" class="o" value="Submit"></td>

                </tr>
                <tr>
                  <td colspan=2>
					    <p style="margin-top: 0; margin-bottom: 0">
					    <span class="o"><img border="0" src="images/arr2.jpg" width="10" height="7" alt="">
						<a href="forgot.php" style="text-decoration: none">
						<font color="#000000">Forgot
						password</font></a></span></p>
						<p style="margin-top: 0; margin-bottom: 0" align="left">
					    <span class="o"><img border="0" src="images/arr2.jpg" width="10" height="7" alt="">
						<font color="#000000">
						<a href="register.php" style="text-decoration: none">
						<font color="#000000">Sign up now!</font></a></font></span></p>
						<p style="margin-top: 0; margin-bottom: 0">
						  <span class="o"><img border="0" src="images/arr2.jpg" width="10" alt="" height="7">
				  		<a href="features.php" style="text-decoration: none">
							<font color="#000000">Why register?</font></a></span></td>
                </tr>

                    </table></form>

						<p class="txtn" style="margin-top: 0; margin-bottom: 0">&nbsp;</p>
			<p class="txtn" style="margin-top: 0; margin-bottom: 0"><img border="0" src="images/desp.jpg" width="400" height="5" alt=""></p>
			<p style="margin-top: 0; margin-bottom: 0">&nbsp;</p>
			<p style="margin-top: 0; margin-bottom: 0">
			<p style="margin-top: 0; margin-bottom: 0">
			<p style="margin-top: 0; margin-bottom: 0">
			<p style="margin-top: 0; margin-bottom: 0">
			<p style="margin-top: 0; margin-bottom: 0">
			<p style="margin-top: 0; margin-bottom: 0">
			<p style="margin-top: 0; margin-bottom: 0">
			<p style="margin:0 10px; "><img border="0" src="images/pack.jpg" width="32" height="32" style="vertical-align:middle;" alt=""><span class="txtn">&nbsp;
			Get free SMS</span>
			<p style="margin:0 10px; ">
			<p style="margin:0 10px; ">
			<p style="margin:0 10px; ">
			<span class="o">
			<img border="0" src="images/arr2.jpg" width="10" height="7" alt=""> We are offering you
            <b>free SMS</b> when you sign up,  refer your friends to us, or when
			you sign up for free with other services!</span><p style="margin:0 10px; ">
			<span class="o">
			<img border="0" src="images/arr2.jpg" width="10" height="7" alt=""> Sign up
			now and start sending free SMS!</span><p style="margin:0 10px; ">
			<p style="margin-top: 0; margin-bottom: 0"><img border="0" src="images/desp.jpg" width="400" height="5" alt=""><p style="margin-top: 0; margin-bottom: 0"><p style="margin-top: 0; margin-bottom: 0">
			<p style="margin: 0 5px">
			<img border="0" src="images/star.jpg" width="32" height="32" style="vertical-align:middle;" alt=""><span class="txtn"> Send spoofed
            SMS</span><p style="margin-left: 5px; margin-right:3px; margin-top:0; margin-bottom:0">&nbsp;
			</p>
			<p style="margin:0 10px; ">
			<span class="o">
			<img border="0" src="images/arr2.jpg" width="10" height="7" alt=""> Yes, we know :). We know that you will trick your
			friends and colleagues. We even help you to do that!</span></p>
			<p style="margin:0 10px; ">
			<span class="o">
			<img border="0" src="images/arr2.jpg" width="10" height="7" alt="">
            100% anonymous SMS service so that you can send messages with any sender's number
			or ID you
			want!</span></p>
			<p style="margin:0 10px; ">
			<span class="o">
			<img border="0" src="images/arr2.jpg" width="10" height="7" alt="">
            And best of all we support worldwide coverage.</span></p>
		  	<p align="right" style="margin-right: 10px">
			<span class="o">
			<a href="features.php" style="text-decoration: none">
			<font color="#000000">View all features</font></a></span><p align="right" style="margin-right: 10px; margin-top:0; margin-bottom:0">
			</td>
	</tr>
	<tr>
		<td colspan="17">
			<img src="images/index_23.jpg" width="790" height="30" alt=""></td></tr>
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
</body>
</html>
