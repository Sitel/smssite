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
.style1 {
	color: #000000;
	font-weight: bold;
}
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
			<img src="images/top6.jpg" alt="" width="790" height="151"></td>
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
		<td style="background-image: url(images/tabel_03.jpg);" width="3" height="136">
		  </td>
	</tr>
	<tr>
		<td colspan="2">
			<img src="images/tabel_04.jpg" width="145" height="11" alt=""></td>
	</tr>
</table>
		</td>
		<td colspan="13">
			<img src="images/toptitle3.jpg" width="639" height="23" alt=""></td>
		<td>
			<img src="images/index_20.jpg" width="2" height="23" alt=""></td>
	</tr>
	<tr>
		<td style="background-image: url(images/backft2.jpg);">&nbsp;	  </td>
		<td colspan="13" style="background-image: url(images/index_22.jpg);">

        &nbsp;<table width="97%" border=0 cellpadding=2 cellspacing=1 id="table2" bgcolor="#FFFFFF">
          <tr bgcolor="#CCCCCC" class="o">
            <td width="84%" bgcolor="#FBFBFB" ><span class="txtn">Country/Network</span></td>
            <TD bgcolor="#F9F9F9" width="13%" ><span class="txtn">Phone Code</span></td>
          </tr>
          <tr class="o">
            <td   bgcolor="#EBEBEB" width="84%"><b><!-- 1 -->Afghanistan</b></td>
		  <td  bgcolor="#EBEBEB" width="13%">93</td></tr><tr class="o">
		    <td width=150  colspan=2>AWCC</td></tr><tr class="o">
		      <td   bgcolor="#EBEBEB" width="84%"><b><!-- 2 -->Albania</b></td>
			<td  bgcolor="#EBEBEB" width="13%">355</td></tr><tr class="o">
			  <td width=150  colspan=2>AMC</td></tr><tr class="o">
			    <td width=150  colspan=2>Vodafone</td></tr><tr class="o">
			      <td   bgcolor="#EBEBEB" width="84%"><b><!-- 3 -->Algeria</b></td>
			<td  bgcolor="#EBEBEB" width="13%">213</td></tr><tr class="o">
			  <td width=150  colspan=2>Algérie Telecom (AMN)</td></tr><tr class="o">
			    <td width=150  colspan=2>Orascom (Djezzy)</td></tr><tr class="o">
			      <td width=150  colspan=2>Wataniya</td></tr><tr class="o">
			        <td   bgcolor="#EBEBEB" width="84%"><b><!-- 5 -->Andorra</b></td>
			<td  bgcolor="#EBEBEB" width="13%">376</td></tr><tr class="o">
			  <td width=150  colspan=2>Mobiland (STA)</td></tr><tr class="o">
			    <td   bgcolor="#EBEBEB" width="84%"><b><!-- 318 -->Angola</b></td>
			<td  bgcolor="#EBEBEB" width="13%">244</td></tr><tr class="o">
			  <td width=150  colspan=2>Unitel</td></tr><tr class="o">
			    <td   bgcolor="#EBEBEB" width="84%"><b><!-- 9 -->Antigua & Barbuda</b></td>
			<td  bgcolor="#EBEBEB" width="13%">1268</td></tr><tr class="o">
			  <td width=150  colspan=2>APUA</td></tr><tr class="o">
			    <td   bgcolor="#EBEBEB" width="84%"><b><!-- 10 -->Argentina</b></td>
			<td  bgcolor="#EBEBEB" width="13%">54</td></tr><tr class="o">
			  <td width=150  colspan=2>C.T.I. Compania DTDI S.A.</td></tr><tr class="o">
			    <td width=150  colspan=2>Conectel Comunicaciones S.A.</td></tr><tr class="o">
			      <td width=150  colspan=2>Telecom Personal S.A.</td></tr><tr class="o">
			        <td width=150  colspan=2>Unifon (TCP)</td></tr><tr class="o">
			          <td   bgcolor="#EBEBEB" width="84%"><b><!-- 11 -->Armenia</b></td>
			<td  bgcolor="#EBEBEB" width="13%">374</td></tr><tr class="o">
			  <td width=150  colspan=2>Armentel</td></tr><tr class="o">
			    <td   bgcolor="#EBEBEB" width="84%"><b><!-- 319 -->Aruba</b></td>
			<td  bgcolor="#EBEBEB" width="13%">297</td></tr><tr class="o">
			  <td width=150  colspan=2>New Millenium (Digicel)</td></tr><tr class="o">
			    <td width=150  colspan=2>SETAR GSM</td></tr><tr class="o">
			      <td   bgcolor="#EBEBEB" width="84%"><b><!-- 14 -->Australia</b></td>
			<td  bgcolor="#EBEBEB" width="13%">61</td></tr><tr class="o">
			  <td width=150  colspan=2>Hutchinson 3G</td></tr><tr class="o">
			    <td width=150  colspan=2>Telstra (MobileNet,OneTel)</td></tr><tr class="o">
			      <td width=150  colspan=2>Vodafone</td></tr><tr class="o">
			        <td width=150  colspan=2>YES Optus (Singtel)</td></tr><tr class="o">
			          <td   bgcolor="#EBEBEB" width="84%"><b><!-- 16 -->Austria</b></td>
			<td  bgcolor="#EBEBEB" width="13%">43</td></tr><tr class="o">
			  <td width=150  colspan=2>Connect (ONE)</td></tr><tr class="o">
			    <td width=150  colspan=2>Mobilkom (Telekom,A1,PTA)</td></tr><tr class="o">
			      <td width=150  colspan=2>T-Mobil (Max.Mobil)</td></tr><tr class="o">
			        <td width=150  colspan=2>Telering</td></tr><tr class="o">
			          <td width=150  colspan=2>TRE (H3G)</td></tr><tr class="o">
			            <td   bgcolor="#EBEBEB" width="84%"><b><!-- 18 -->Azerbaijan</b></td>
			<td  bgcolor="#EBEBEB" width="13%">994</td></tr><tr class="o">
			  <td width=150  colspan=2>Azercell Telekom B.M.</td></tr><tr class="o">
			    <td width=150  colspan=2>J.V.Bakcell GSM 2000</td></tr><tr class="o">
			      <td   bgcolor="#EBEBEB" width="84%"><b><!-- 20 -->Bahrain</b></td>
			<td  bgcolor="#EBEBEB" width="13%">973</td></tr><tr class="o">
			  <td width=150  colspan=2>Batelco (BHR Mobile Plus)</td></tr><tr class="o">
			    <td width=150  colspan=2>Vodafone (MTC)</td></tr><tr class="o">
			      <td   bgcolor="#EBEBEB" width="84%"><b><!-- 21 -->Bangladesh</b></td>
			<td  bgcolor="#EBEBEB" width="13%">880</td></tr><tr class="o">
			  <td width=150  colspan=2>GrameenPhone</td></tr><tr class="o">
			    <td   bgcolor="#EBEBEB" width="84%"><b><!-- 22 -->Barbados</b></td>
			<td  bgcolor="#EBEBEB" width="13%">1</td></tr><tr class="o">
			  <td width=150  colspan=2>Cable and Wireless BET Ltd.</td></tr><tr class="o">
			    <td width=150  colspan=2>Cingular</td></tr><tr class="o">
			      <td width=150  colspan=2>Digicel</td></tr><tr class="o">
			        <td   bgcolor="#EBEBEB" width="84%"><b><!-- 24 -->Belarus</b></td>
			<td  bgcolor="#EBEBEB" width="13%">375</td></tr><tr class="o">
			  <td width=150  colspan=2>MTS Belarus</td></tr><tr class="o">
			    <td   bgcolor="#EBEBEB" width="84%"><b><!-- 25 -->Belgium</b></td>
			<td  bgcolor="#EBEBEB" width="13%">32</td></tr><tr class="o">
			  <td width=150  colspan=2>BASE (KPN Orange)</td></tr><tr class="o">
			    <td width=150  colspan=2>Mobistar</td></tr><tr class="o">
			      <td width=150  colspan=2>Proximus (Belgacom)</td></tr><tr class="o">
			        <td   bgcolor="#EBEBEB" width="84%"><b><!-- 27 -->Belize</b></td>
			<td  bgcolor="#EBEBEB" width="13%">501</td></tr><tr class="o">
			  <td width=150  colspan=2>Belize Telecommunication Ltd</td></tr><tr class="o">
			    <td   bgcolor="#EBEBEB" width="84%"><b><!-- 28 -->Benin</b></td>
			<td  bgcolor="#EBEBEB" width="13%">229</td></tr><tr class="o">
			  <td width=150  colspan=2>BeninCell (Spacetel)</td></tr><tr class="o">
			    <td width=150  colspan=2>Telecel Benin</td></tr><tr class="o">
			      <td   bgcolor="#EBEBEB" width="84%"><b><!-- 29 -->Bermuda</b></td>
			<td  bgcolor="#EBEBEB" width="13%">1441</td></tr><tr class="o">
			  <td width=150  colspan=2>AT&T (Telecomm.)</td></tr><tr class="o">
			    <td width=150  colspan=2>Mobility</td></tr><tr class="o">
			      <td   bgcolor="#EBEBEB" width="84%"><b><!-- 31 -->Bolivia</b></td>
			<td  bgcolor="#EBEBEB" width="13%">591</td></tr><tr class="o">
			  <td width=150  colspan=2>Entel Pcs (Movil)</td></tr><tr class="o">
			    <td width=150  colspan=2>Nuevatel</td></tr><tr class="o">
			      <td   bgcolor="#EBEBEB" width="84%"><b><!-- 32 -->Bosnia-Herzegovina</b></td>
			<td  bgcolor="#EBEBEB" width="13%">387</td></tr><tr class="o">
			  <td width=150  colspan=2>BH Telecom (PTT BIH)</td></tr><tr class="o">
			    <td width=150  colspan=2>ERONET/HPT</td></tr><tr class="o">
			      <td width=150  colspan=2>Mobilna Srpske (Telecomm)</td></tr><tr class="o">
			        <td   bgcolor="#EBEBEB" width="84%"><b><!-- 33 -->Botswana</b></td>
			<td  bgcolor="#EBEBEB" width="13%">267</td></tr><tr class="o">
			  <td width=150  colspan=2>Mascom Wireless</td></tr><tr class="o">
			    <td width=150  colspan=2>Orange (Vista)</td></tr><tr class="o">
			      <td   bgcolor="#EBEBEB" width="84%"><b><!-- 35 -->Brazil</b></td>
			<td  bgcolor="#EBEBEB" width="13%">55</td></tr><tr class="o">
			  <td width=150  colspan=2>TIM</td></tr><tr class="o">
			    <td width=150  colspan=2>TNL PCS (Oi,Telemar)</td></tr><tr class="o">
			      <td   bgcolor="#EBEBEB" width="84%"><b><!-- 38 -->Brunei</b></td>
			<td  bgcolor="#EBEBEB" width="13%">673</td></tr><tr class="o">
			  <td width=150  colspan=2>DST Communications Sdn Bhd</td></tr><tr class="o">
			    <td   bgcolor="#EBEBEB" width="84%"><b><!-- 39 -->Bulgaria</b></td>
			<td  bgcolor="#EBEBEB" width="13%">359</td></tr><tr class="o">
			  <td width=150  colspan=2>Cosmo Bulgaria Mobile (Globul)</td></tr><tr class="o">
			    <td width=150  colspan=2>MobilTel AD</td></tr><tr class="o">
			      <td width=150  colspan=2>VivaTel</td></tr><tr class="o">
			        <td   bgcolor="#EBEBEB" width="84%"><b><!-- 40 -->Burkina Faso</b></td>
			<td  bgcolor="#EBEBEB" width="13%">226</td></tr><tr class="o">
			  <td width=150  colspan=2>CELTEL</td></tr><tr class="o">
			    <td width=150  colspan=2>TELECEL</td></tr><tr class="o">
			      <td   bgcolor="#EBEBEB" width="84%"><b><!-- 41 -->Burundi</b></td>
			<td  bgcolor="#EBEBEB" width="13%">257</td></tr><tr class="o">
			  <td width=150  colspan=2>Telecel</td></tr><tr class="o">
			    <td   bgcolor="#EBEBEB" width="84%"><b><!-- 42 -->Cambodia</b></td>
			<td  bgcolor="#EBEBEB" width="13%">855</td></tr><tr class="o">
			  <td width=150  colspan=2>CamGSM (MobiTel,Tango))</td></tr><tr class="o">
			    <td width=150  colspan=2>Camshin (Shinawatra) DCS 1800</td></tr><tr class="o">
			      <td width=150  colspan=2>Camtel CDMA</td></tr><tr class="o">
			        <td width=150  colspan=2>Casacom (Samart) GSM 900</td></tr><tr class="o">
			          <td   bgcolor="#EBEBEB" width="84%"><b><!-- 44 -->Cameroon</b></td>
			<td  bgcolor="#EBEBEB" width="13%">237</td></tr><tr class="o">
			  <td width=150  colspan=2>MTN</td></tr><tr class="o">
			    <td width=150  colspan=2>Orange (SCM)</td></tr><tr class="o">
			      <td   bgcolor="#EBEBEB" width="84%"><b><!-- 45 -->Canada</b></td>
			<td  bgcolor="#EBEBEB" width="13%">1</td></tr><tr class="o">
			  <td width=150  colspan=2>Alliant Telecom (Mobility)</td></tr><tr class="o">
			    <td width=150  colspan=2>Bell Mobility</td></tr><tr class="o">
			      <td width=150  colspan=2>Clearnet</td></tr><tr class="o">
			        <td width=150  colspan=2>Microcell Solutions Inc. (Fido)</td></tr><tr class="o">
			          <td width=150  colspan=2>Rogers AT&T Wireless</td></tr><tr class="o">
			            <td width=150  colspan=2>Sasktel Mobility</td></tr><tr class="o">
			              <td width=150  colspan=2>Telus Mobility</td></tr><tr class="o">
			                <td   bgcolor="#EBEBEB" width="84%"><b><!-- 46 -->Cape Verde</b></td>
			<td  bgcolor="#EBEBEB" width="13%">238</td></tr><tr class="o">
			  <td width=150  colspan=2>CV Movel</td></tr><tr class="o">
			    <td   bgcolor="#EBEBEB" width="84%"><b><!-- 47 -->Cayman Islands</b></td>
			<td  bgcolor="#EBEBEB" width="13%">1345</td></tr><tr class="o">
			  <td width=150  colspan=2>Cable & Wireless</td></tr><tr class="o">
			    <td   bgcolor="#EBEBEB" width="84%"><b><!-- 48 -->Central African Republic</b></td>
			<td  bgcolor="#EBEBEB" width="13%">236</td></tr><tr class="o">
			  <td width=150  colspan=2>Telecel Centrafrique</td></tr><tr class="o">
			    <td   bgcolor="#EBEBEB" width="84%"><b><!-- 49 -->Chad</b></td>
			<td  bgcolor="#EBEBEB" width="13%">235</td></tr><tr class="o">
			  <td width=150  colspan=2>Celtel Tchad SA</td></tr><tr class="o">
			    <td   bgcolor="#EBEBEB" width="84%"><b><!-- 51 -->Chile</b></td>
			<td  bgcolor="#EBEBEB" width="13%">56</td></tr><tr class="o">
			  <td width=150  colspan=2>Entel Movil</td></tr><tr class="o">
			    <td width=150  colspan=2>Entel PCS</td></tr><tr class="o">
			      <td width=150  colspan=2>Telefónica Móvil</td></tr><tr class="o">
			        <td   bgcolor="#EBEBEB" width="84%"><b><!-- 52 -->China</b></td>
			<td  bgcolor="#EBEBEB" width="13%">86</td></tr><tr class="o">
			  <td width=150  colspan=2>China Mobile/Telecom</td></tr><tr class="o">
			    <td width=150  colspan=2>China Unicom</td></tr><tr class="o">
			      <td   bgcolor="#EBEBEB" width="84%"><b><!-- 55 -->Colombia</b></td>
			<td  bgcolor="#EBEBEB" width="13%">57</td></tr><tr class="o">
			  <td width=150  colspan=2>Movil SA (OLA)</td></tr><tr class="o">
			    <td   bgcolor="#EBEBEB" width="84%"><b><!-- 57 -->Congo</b></td>
			<td  bgcolor="#EBEBEB" width="13%">242</td></tr><tr class="o">
			  <td width=150  colspan=2>CelTel</td></tr><tr class="o">
			    <td width=150  colspan=2>Libertis</td></tr><tr class="o">
			      <td   bgcolor="#EBEBEB" width="84%"><b><!-- 58 -->Congo, Democratic Republic</b></td>
			<td  bgcolor="#EBEBEB" width="13%">243</td></tr><tr class="o">
			  <td width=150  colspan=2>Celtel</td></tr><tr class="o">
			    <td width=150  colspan=2>Sait Telecom SPRL(Oasis)</td></tr><tr class="o">
			      <td width=150  colspan=2>Vodacom (CWN)</td></tr><tr class="o">
			        <td   bgcolor="#EBEBEB" width="84%"><b><!-- 61 -->Croatia</b></td>
			<td  bgcolor="#EBEBEB" width="13%">385</td></tr><tr class="o">
			  <td width=150  colspan=2>T-Mobile (HT Mobile,Cronet,Croatian Tele.)</td></tr><tr class="o">
			    <td width=150  colspan=2>VipNet</td></tr><tr class="o">
			      <td   bgcolor="#EBEBEB" width="84%"><b><!-- 62 -->Cuba</b></td>
			<td  bgcolor="#EBEBEB" width="13%">53</td></tr><tr class="o">
			  <td width=150  colspan=2>C-COM</td></tr><tr class="o">
			    <td   bgcolor="#EBEBEB" width="84%"><b><!-- 65 -->Cyprus</b></td>
			<td  bgcolor="#EBEBEB" width="13%">357</td></tr><tr class="o">
			  <td width=150  colspan=2>Areeba</td></tr><tr class="o">
			    <td width=150  colspan=2>CYTA (Vodafone)</td></tr><tr class="o">
			      <td   bgcolor="#EBEBEB" width="84%"><b><!-- 66 -->Czech Republic</b></td>
			<td  bgcolor="#EBEBEB" width="13%">420</td></tr><tr class="o">
			  <td width=150  colspan=2>Cesky Mobil (Oscar)</td></tr><tr class="o">
			    <td width=150  colspan=2>EuroTel Praha</td></tr><tr class="o">
			      <td width=150  colspan=2>T-Mobile (Radiomobil)</td></tr><tr class="o">
			        <td   bgcolor="#EBEBEB" width="84%"><b><!-- 67 -->Denmark</b></td>
			<td  bgcolor="#EBEBEB" width="13%">45</td></tr><tr class="o">
			  <td width=150  colspan=2>Orange (Mobilix)</td></tr><tr class="o">
			    <td width=150  colspan=2>Sonofon (Dansk Mobil Telefon)</td></tr><tr class="o">
			      <td width=150  colspan=2>TDC (Tele Denmark)</td></tr><tr class="o">
			        <td width=150  colspan=2>Telia (Orange)</td></tr><tr class="o">
			          <td width=150  colspan=2>Tellmore (Virtual:Tele Danmark)</td></tr><tr class="o">
			            <td width=150  colspan=2>Three (Hi3G)</td></tr><tr class="o">
			              <td   bgcolor="#EBEBEB" width="84%"><b><!-- 73 -->Dominican Republic</b></td>
			<td  bgcolor="#EBEBEB" width="13%">1</td></tr><tr class="o">
			  <td width=150  colspan=2>Orange (France Telecom Do.)</td></tr><tr class="o">
			    <td   bgcolor="#EBEBEB" width="84%"><b><!-- 76 -->Ecuador</b></td>
			<td  bgcolor="#EBEBEB" width="13%">593</td></tr><tr class="o">
			  <td width=150  colspan=2>Conecel (Porta)</td></tr><tr class="o">
			    <td   bgcolor="#EBEBEB" width="84%"><b><!-- 77 -->Egypt</b></td>
			<td  bgcolor="#EBEBEB" width="13%">20</td></tr><tr class="o">
			  <td width=150  colspan=2>ECMS MobiNil</td></tr><tr class="o">
			    <td width=150  colspan=2>Vodafone (Misrfone +CLICK GSM)</td></tr><tr class="o">
			      <td   bgcolor="#EBEBEB" width="84%"><b><!-- 78 -->El Salvador</b></td>
			<td  bgcolor="#EBEBEB" width="13%">503</td></tr><tr class="o">
			  <td width=150  colspan=2>CTE Telecom PERSONAL</td></tr><tr class="o">
			    <td width=150  colspan=2>Digicel</td></tr><tr class="o">
			      <td   bgcolor="#EBEBEB" width="84%"><b><!-- 79 -->Equatorial Guinea</b></td>
			<td  bgcolor="#EBEBEB" width="13%">240</td></tr><tr class="o">
			  <td width=150  colspan=2>GETESA</td></tr><tr class="o">
			    <td   bgcolor="#EBEBEB" width="84%"><b><!-- 81 -->Estonia</b></td>
			<td  bgcolor="#EBEBEB" width="13%">372</td></tr><tr class="o">
			  <td width=150  colspan=2>EMT</td></tr><tr class="o">
			    <td width=150  colspan=2>Radiolinja</td></tr><tr class="o">
			      <td width=150  colspan=2>Tele 2 (AS Ritabell)</td></tr><tr class="o">
			        <td   bgcolor="#EBEBEB" width="84%"><b><!-- 312 -->Ethiopia</b></td>
			<td  bgcolor="#EBEBEB" width="13%">251</td></tr><tr class="o">
			  <td width=150  colspan=2>ETMTN</td></tr><tr class="o">
			    <td   bgcolor="#EBEBEB" width="84%"><b><!-- 83 -->Faroe Islands</b></td>
			<td  bgcolor="#EBEBEB" width="13%">298</td></tr><tr class="o">
			  <td width=150  colspan=2>FaroeseTelecom</td></tr><tr class="o">
			    <td width=150  colspan=2>Kall Telecom</td></tr><tr class="o">
			      <td   bgcolor="#EBEBEB" width="84%"><b><!-- 84 -->Fiji</b></td>
			<td  bgcolor="#EBEBEB" width="13%">679</td></tr><tr class="o">
			  <td width=150  colspan=2>Vodafone</td></tr><tr class="o">
			    <td   bgcolor="#EBEBEB" width="84%"><b><!-- 85 -->Finland</b></td>
			<td  bgcolor="#EBEBEB" width="13%">358</td></tr><tr class="o">
			  <td width=150  colspan=2>Alands Mobiltelefon Ab</td></tr><tr class="o">
			    <td width=150  colspan=2>Dna Finland Oy</td></tr><tr class="o">
			      <td width=150  colspan=2>Elisa (Oy Radiolinja Ab)</td></tr><tr class="o">
			        <td width=150  colspan=2>Finnet (Finnish 2G Suomen)</td></tr><tr class="o">
			          <td width=150  colspan=2>Saunalahti Group Oyj (Jippii)</td></tr><tr class="o">
			            <td width=150  colspan=2>Sonera (Tele)</td></tr><tr class="o">
			              <td width=150  colspan=2>Telia Mobile</td></tr><tr class="o">
			                <td   bgcolor="#EBEBEB" width="84%"><b><!-- 86 -->France</b></td>
			<td  bgcolor="#EBEBEB" width="13%">33</td></tr><tr class="o">
			  <td width=150  colspan=2>Bouygues Telecom</td></tr><tr class="o">
			    <td width=150  colspan=2>Infomobile</td></tr><tr class="o">
			      <td width=150  colspan=2>Nilcom Prosedie</td></tr><tr class="o">
			        <td width=150  colspan=2>Orange</td></tr><tr class="o">
			          <td width=150  colspan=2>SFR</td></tr><tr class="o">
			            <td width=150  colspan=2>Te.Sa.M</td></tr><tr class="o">
			              <td   bgcolor="#EBEBEB" width="84%"><b><!-- 89 -->French Guiana</b></td>
			<td  bgcolor="#EBEBEB" width="13%">594</td></tr><tr class="o">
			  <td width=150  colspan=2>Bouygues Telecom</td></tr><tr class="o">
			    <td width=150  colspan=2>Orange (France Caraibe Mobiles)</td></tr><tr class="o">
			      <td   bgcolor="#EBEBEB" width="84%"><b><!-- 90 -->French Polynesia</b></td>
			<td  bgcolor="#EBEBEB" width="13%">689</td></tr><tr class="o">
			  <td width=150  colspan=2>Tikiphone</td></tr><tr class="o">
			    <td   bgcolor="#EBEBEB" width="84%"><b><!-- 92 -->French West Indies</b></td>
			<td  bgcolor="#EBEBEB" width="13%">?</td></tr><tr class="o">
			  <td width=150  colspan=2>Bouygues</td></tr><tr class="o">
			    <td width=150  colspan=2>Orange</td></tr><tr class="o">
			      <td   bgcolor="#EBEBEB" width="84%"><b><!-- 93 -->Gabon</b></td>
			<td  bgcolor="#EBEBEB" width="13%">241</td></tr><tr class="o">
			  <td width=150  colspan=2>Celtel</td></tr><tr class="o">
			    <td width=150  colspan=2>Libertis</td></tr><tr class="o">
			      <td   bgcolor="#EBEBEB" width="84%"><b><!-- 94 -->Gambia</b></td>
			<td  bgcolor="#EBEBEB" width="13%">220</td></tr><tr class="o">
			  <td width=150  colspan=2>Africell</td></tr><tr class="o">
			    <td width=150  colspan=2>Gamtel GSM</td></tr><tr class="o">
			      <td   bgcolor="#EBEBEB" width="84%"><b><!-- 95 -->Georgia</b></td>
			<td  bgcolor="#EBEBEB" width="13%">995</td></tr><tr class="o">
			  <td width=150  colspan=2>Geocell</td></tr><tr class="o">
			    <td width=150  colspan=2>Magticom Ltd.</td></tr><tr class="o">
			      <td   bgcolor="#EBEBEB" width="84%"><b><!-- 96 -->Germany</b></td>
			<td  bgcolor="#EBEBEB" width="13%">49</td></tr><tr class="o">
			  <td width=150  colspan=2>E-Plus</td></tr><tr class="o">
			    <td width=150  colspan=2>Group 3G</td></tr><tr class="o">
			      <td width=150  colspan=2>MobilCom</td></tr><tr class="o">
			        <td width=150  colspan=2>O2 (Viag, E2)</td></tr><tr class="o">
			          <td width=150  colspan=2>T-Mobil (D1,Detemobil)</td></tr><tr class="o">
			            <td width=150  colspan=2>Vodafone (D2,Man.man,Mobilfunk)</td></tr><tr class="o">
			              <td   bgcolor="#EBEBEB" width="84%"><b><!-- 98 -->Ghana</b></td>
			<td  bgcolor="#EBEBEB" width="13%">233</td></tr><tr class="o">
			  <td width=150  colspan=2>Ghana Telecom (One-touch)</td></tr><tr class="o">
			    <td width=150  colspan=2>Millicom (Buzz)</td></tr><tr class="o">
			      <td width=150  colspan=2>Scancom (Areeba)</td></tr><tr class="o">
			        <td   bgcolor="#EBEBEB" width="84%"><b><!-- 99 -->Gibraltar</b></td>
			<td  bgcolor="#EBEBEB" width="13%">350</td></tr><tr class="o">
			  <td width=150  colspan=2>Gibtel</td></tr><tr class="o">
			    <td   bgcolor="#EBEBEB" width="84%"><b><!-- 100 -->Greece</b></td>
			<td  bgcolor="#EBEBEB" width="13%">30</td></tr><tr class="o">
			  <td width=150  colspan=2>Cosmote</td></tr><tr class="o">
			    <td width=150  colspan=2>Infoquest AEBE (Q-Telecom)</td></tr><tr class="o">
			      <td width=150  colspan=2>TIM (Telestet,Stet Hellas)</td></tr><tr class="o">
			        <td width=150  colspan=2>Vodafone (Panafon)</td></tr><tr class="o">
			          <td   bgcolor="#EBEBEB" width="84%"><b><!-- 102 -->Greenland</b></td>
			<td  bgcolor="#EBEBEB" width="13%">299</td></tr><tr class="o">
			  <td width=150  colspan=2>TELE Greenland</td></tr><tr class="o">
			    <td   bgcolor="#EBEBEB" width="84%"><b><!-- 104 -->Guadeloupe</b></td>
			<td  bgcolor="#EBEBEB" width="13%">590</td></tr><tr class="o">
			  <td width=150  colspan=2>Bouygues Telecom</td></tr><tr class="o">
			    <td width=150  colspan=2>Orange (France Caraibe Mobiles)</td></tr><tr class="o">
			      <td   bgcolor="#EBEBEB" width="84%"><b><!-- 316 -->Guernsey</b></td>
			<td  bgcolor="#EBEBEB" width="13%">44</td></tr><tr class="o">
			  <td width=150  colspan=2>Cable & Wireless</td></tr><tr class="o">
			    <td   bgcolor="#EBEBEB" width="84%"><b><!-- 111 -->Guyana</b></td>
			<td  bgcolor="#EBEBEB" width="13%">592</td></tr><tr class="o">
			  <td width=150  colspan=2>Unallocated Prefixes</td></tr><tr class="o">
			    <td   bgcolor="#EBEBEB" width="84%"><b><!-- 114 -->HongKong</b></td>
			<td  bgcolor="#EBEBEB" width="13%">852</td></tr><tr class="o">
			  <td width=150  colspan=2>HK CSL (900/1800)</td></tr><tr class="o">
			    <td width=150  colspan=2>Hutchison (CDMA)</td></tr><tr class="o">
			      <td width=150  colspan=2>Hutchison (Orange 2G)</td></tr><tr class="o">
			        <td width=150  colspan=2>Hutchison 3G</td></tr><tr class="o">
			          <td width=150  colspan=2>New World PCS</td></tr><tr class="o">
			            <td width=150  colspan=2>Peoples</td></tr><tr class="o">
			              <td width=150  colspan=2>SmarTone</td></tr><tr class="o">
			                <td width=150  colspan=2>Sunday (Mandarin)</td></tr><tr class="o">
			                  <td   bgcolor="#EBEBEB" width="84%"><b><!-- 118 -->Hungary</b></td>
			<td  bgcolor="#EBEBEB" width="13%">36</td></tr><tr class="o">
			  <td width=150  colspan=2>Pannon GSM</td></tr><tr class="o">
			    <td width=150  colspan=2>T-Mobile (Westel)</td></tr><tr class="o">
			      <td width=150  colspan=2>Vodafone (V.R.A.M Tele.)</td></tr><tr class="o">
			        <td   bgcolor="#EBEBEB" width="84%"><b><!-- 120 -->Iceland</b></td>
			<td  bgcolor="#EBEBEB" width="13%">354</td></tr><tr class="o">
			  <td width=150  colspan=2>Landssimi</td></tr><tr class="o">
			    <td width=150  colspan=2>Og Vodafone (Islandssimi)</td></tr><tr class="o">
			      <td width=150  colspan=2>TAL</td></tr><tr class="o">
			        <td width=150  colspan=2>Viking Wireless(IMC)</td></tr><tr class="o">
			          <td   bgcolor="#EBEBEB" width="84%"><b><!-- 121 -->India</b></td>
			<td  bgcolor="#EBEBEB" width="13%">91</td></tr><tr class="o">
			  <td width=150  colspan=2>ADIL - Haryana</td></tr><tr class="o">
			    <td width=150  colspan=2>ADIL - Rajasthan</td></tr><tr class="o">
			      <td width=150  colspan=2>ADIL - UP(E)</td></tr><tr class="o">
			        <td width=150  colspan=2>Aircel - Tamil Nadu</td></tr><tr class="o">
			          <td width=150  colspan=2>Airtel - Orissa</td></tr><tr class="o">
			            <td width=150  colspan=2>Airtel Bharti Cellular - Kerala</td></tr><tr class="o">
			              <td width=150  colspan=2>Barakhamba - AP</td></tr><tr class="o">
			                <td width=150  colspan=2>Barakhamba - Chennai</td></tr><tr class="o">
			                  <td width=150  colspan=2>Barakhamba - Karnataka</td></tr><tr class="o">
			                    <td width=150  colspan=2>Bharti - AP (Airtel)</td></tr><tr class="o">
			                      <td width=150  colspan=2>Bharti - Karnataka</td></tr><tr class="o">
			                        <td width=150  colspan=2>Bharti - Punjab</td></tr><tr class="o">
			                          <td width=150  colspan=2>Bharti Cellular - Delhi</td></tr><tr class="o">
			                            <td width=150  colspan=2>Bharti Cellular - Gujarat</td></tr><tr class="o">
			                              <td width=150  colspan=2>Bharti Cellular - Haryana</td></tr><tr class="o">
			                                <td width=150  colspan=2>Bharti Cellular - Maharashtra</td></tr><tr class="o">
			                                  <td width=150  colspan=2>Bharti Cellular - MP</td></tr><tr class="o">
			                                    <td width=150  colspan=2>Bharti Cellular - Mumbai</td></tr><tr class="o">
			                                      <td width=150  colspan=2>Bharti Cellular - Tamilnadu</td></tr><tr class="o">
			                                        <td width=150  colspan=2>Bharti Cellular - UP(W)</td></tr><tr class="o">
			                                          <td width=150  colspan=2>Bharti Mobinet (Skycell)-Chennai</td></tr><tr class="o">
			                                            <td width=150  colspan=2>Bharti Mobitel - Kolkata</td></tr><tr class="o">
			                                              <td width=150  colspan=2>Bharti Telenet - HP</td></tr><tr class="o">
			                                                <td width=150  colspan=2>BPL Mobile Cellular (Kerala)</td></tr><tr class="o">
			                                                  <td width=150  colspan=2>BPL Mobile Cellular (Maharashtra)</td></tr><tr class="o">
			                                                    <td width=150  colspan=2>BPL Mobile Comm (Mumbai)</td></tr><tr class="o">
			                                                      <td width=150  colspan=2>BSNL - Andhra Pradesh</td></tr><tr class="o">
			                                                        <td width=150  colspan=2>BSNL - Bihar</td></tr><tr class="o">
			                                                          <td width=150  colspan=2>BSNL - Haryana</td></tr><tr class="o">
			                                                            <td width=150  colspan=2>BSNL - Himachal Pradesh</td></tr><tr class="o">
			                                                              <td width=150  colspan=2>BSNL - Karnataka</td></tr><tr class="o">
			                                                                <td width=150  colspan=2>BSNL - Kerala</td></tr><tr class="o">
			                                                                  <td width=150  colspan=2>BSNL - Maharashtra</td></tr><tr class="o">
			                                                                    <td width=150  colspan=2>BSNL - Mathya Pradesh</td></tr><tr class="o">
			                                                                      <td width=150  colspan=2>BSNL - Orissa</td></tr><tr class="o">
			                                                                        <td width=150  colspan=2>BSNL - Rajastan</td></tr><tr class="o">
			                                                                          <td width=150  colspan=2>BSNL - Tamilandu</td></tr><tr class="o">
			                                                                            <td width=150  colspan=2>BSNL - UP(W)</td></tr><tr class="o">
			                                                                              <td width=150  colspan=2>BSNL - West Bengal</td></tr><tr class="o">
			                                                                                <td width=150  colspan=2>C-DOT - Delhi</td></tr><tr class="o">
			                                                                                  <td width=150  colspan=2>Fascel Limited</td></tr><tr class="o">
			                                                                                    <td width=150  colspan=2>Hexacom (Oasis)-NE</td></tr><tr class="o">
			                                                                                      <td width=150  colspan=2>Hexacom (Oasis)-Rajasthan</td></tr><tr class="o">
			                                                                                        <td width=150  colspan=2>Hutchinson East (Usha Martin-Kolkata)</td></tr><tr class="o">
			                                                                                          <td width=150  colspan=2>Hutchinson – Karnataka</td></tr><tr class="o">
			                                                                                            <td width=150  colspan=2>Hutchison Essar (Sterling-Delhi)</td></tr><tr class="o">
			                                                                                              <td width=150  colspan=2>Hutchison Essar Telecom</td></tr><tr class="o">
			                                                                                                <td width=150  colspan=2>Hutchison Max (Orange)-Mumbai</td></tr><tr class="o">
			                                                                                                  <td width=150  colspan=2>Hutchison Max Telecom (Orange)</td></tr><tr class="o">
			                                                                                                    <td width=150  colspan=2>Idea Cellular</td></tr><tr class="o">
			                                                                                                      <td width=150  colspan=2>IDEA Cellular (Gujurat)</td></tr><tr class="o">
			                                                                                                        <td width=150  colspan=2>IDEA Mobile Comm - Haryana</td></tr><tr class="o">
			                                                                                                          <td width=150  colspan=2>IDEA Mobile Comm - Kerala</td></tr><tr class="o">
			                                                                                                            <td width=150  colspan=2>IDEA Mobile Comm - Upwest</td></tr><tr class="o">
			                                                                                                              <td width=150  colspan=2>Reliance Internet Serv - Kolkata</td></tr><tr class="o">
			                                                                                                                <td width=150  colspan=2>Reliance Telecom - Assam</td></tr><tr class="o">
			                                                                                                                  <td width=150  colspan=2>Reliance Telecom - Bihar</td></tr><tr class="o">
			                                                                                                                    <td width=150  colspan=2>Reliance Telecom - HP</td></tr><tr class="o">
			                                                                                                                      <td width=150  colspan=2>Reliance Telecom - Maharastra</td></tr><tr class="o">
			                                                                                                                        <td width=150  colspan=2>Reliance Telecom - MP</td></tr><tr class="o">
			                                                                                                                          <td width=150  colspan=2>Reliance Telecom - NE</td></tr><tr class="o">
			                                                                                                                            <td width=150  colspan=2>Reliance Telecom - Orissa</td></tr><tr class="o">
			                                                                                                                              <td width=150  colspan=2>Reliance Telecom - Punjab</td></tr><tr class="o">
			                                                                                                                                <td width=150  colspan=2>Reliance Telecom - WB</td></tr><tr class="o">
			                                                                                                                                  <td width=150  colspan=2>RPG Cellular - Chennai</td></tr><tr class="o">
			                                                                                                                                    <td width=150  colspan=2>Spice Commns - Karnataka</td></tr><tr class="o">
			                                                                                                                                      <td width=150  colspan=2>Spice Commns - Punjab</td></tr><tr class="o">
			                                                                                                                                        <td   bgcolor="#EBEBEB" width="84%"><b><!-- 132 -->Indonesia</b></td>
			<td  bgcolor="#EBEBEB" width="13%">62</td></tr><tr class="o">
			  <td width=150  colspan=2>Excelcomindo Pratama</td></tr><tr class="o">
			    <td width=150  colspan=2>PT Indosat (IM3)</td></tr><tr class="o">
			      <td width=150  colspan=2>Satelindo</td></tr><tr class="o">
			        <td width=150  colspan=2>Telkom Flexi (CDMA, Telkomsel)</td></tr><tr class="o">
			          <td   bgcolor="#EBEBEB" width="84%"><b><!-- 139 -->Iran</b></td>
			<td  bgcolor="#EBEBEB" width="13%">98</td></tr><tr class="o">
			  <td width=150  colspan=2>Telecommunication Company (ITC)</td></tr><tr class="o">
			    <td   bgcolor="#EBEBEB" width="84%"><b><!-- 140 -->Iraq</b></td>
			<td  bgcolor="#EBEBEB" width="13%">964</td></tr><tr class="o">
			  <td width=150  colspan=2>AsiaCell (prefix:7701,7702)</td></tr><tr class="o">
			    <td width=150  colspan=2>Atheer</td></tr><tr class="o">
			      <td width=150  colspan=2>Osracom</td></tr><tr class="o">
			        <td   bgcolor="#EBEBEB" width="84%"><b><!-- 141 -->Ireland</b></td>
			<td  bgcolor="#EBEBEB" width="13%">353</td></tr><tr class="o">
			  <td width=150  colspan=2>Eircell (Vodafone)</td></tr><tr class="o">
			    <td width=150  colspan=2>Hutchinson 3G</td></tr><tr class="o">
			      <td width=150  colspan=2>Meteor</td></tr><tr class="o">
			        <td width=150  colspan=2>O2 (Esat Digifone)</td></tr><tr class="o">
			          <td   bgcolor="#EBEBEB" width="84%"><b><!-- 142 -->Isle of Man</b></td>
			<td  bgcolor="#EBEBEB" width="13%">44</td></tr><tr class="o">
			  <td width=150  colspan=2>O2 (Manx,Pronto)</td></tr><tr class="o">
			    <td   bgcolor="#EBEBEB" width="84%"><b><!-- 143 -->Israel</b></td>
			<td  bgcolor="#EBEBEB" width="13%">972</td></tr><tr class="o">
			  <td width=150  colspan=2>Cellcom Israel Ltd</td></tr><tr class="o">
			    <td width=150  colspan=2>Orange (Partner)</td></tr><tr class="o">
			      <td   bgcolor="#EBEBEB" width="84%"><b><!-- 144 -->Italy</b></td>
			<td  bgcolor="#EBEBEB" width="13%">39</td></tr><tr class="o">
			  <td width=150  colspan=2>TIM</td></tr><tr class="o">
			    <td width=150  colspan=2>TRE (H3G)</td></tr><tr class="o">
			      <td width=150  colspan=2>Vodafone (Omnitel)</td></tr><tr class="o">
			        <td width=150  colspan=2>WIND (BLU)</td></tr><tr class="o">
			          <td   bgcolor="#EBEBEB" width="84%"><b><!-- 146 -->Ivory Coast</b></td>
			<td  bgcolor="#EBEBEB" width="13%">225</td></tr><tr class="o">
			  <td width=150  colspan=2>Comstar Cellular S.A.</td></tr><tr class="o">
			    <td width=150  colspan=2>Loteny (TELECEL)</td></tr><tr class="o">
			      <td width=150  colspan=2>Orange (SIM,Ivoiris)</td></tr><tr class="o">
			        <td   bgcolor="#EBEBEB" width="84%"><b><!-- 147 -->Jamaica</b></td>
			<td  bgcolor="#EBEBEB" width="13%">1876</td></tr><tr class="o">
			  <td width=150  colspan=2>Mossel (Digicel)</td></tr><tr class="o">
			    <td   bgcolor="#EBEBEB" width="84%"><b><!-- 148 -->Japan</b></td>
			<td  bgcolor="#EBEBEB" width="13%">81</td></tr><tr class="o">
			  <td width=150  colspan=2>Vodafone K.K. (J-Phone)</td></tr><tr class="o">
			    <td   bgcolor="#EBEBEB" width="84%"><b><!-- 332 -->Jersey</b></td>
			<td  bgcolor="#EBEBEB" width="13%">44</td></tr><tr class="o">
			  <td width=150  colspan=2>Jersey Telecoms</td></tr><tr class="o">
			    <td   bgcolor="#EBEBEB" width="84%"><b><!-- 150 -->Jordan</b></td>
			<td  bgcolor="#EBEBEB" width="13%">962</td></tr><tr class="o">
			  <td width=150  colspan=2>Jordan Mobile Telephone (Fastlink)</td></tr><tr class="o">
			    <td width=150  colspan=2>MobileCom (Petra)</td></tr><tr class="o">
			      <td width=150  colspan=2>Umniah</td></tr><tr class="o">
			        <td width=150  colspan=2>XPress</td></tr><tr class="o">
			          <td   bgcolor="#EBEBEB" width="84%"><b><!-- 151 -->Kazakhstan</b></td>
			<td  bgcolor="#EBEBEB" width="13%">7</td></tr><tr class="o">
			  <td width=150  colspan=2>KarTel (K-Mobile)</td></tr><tr class="o">
			    <td width=150  colspan=2>KCell</td></tr><tr class="o">
			      <td   bgcolor="#EBEBEB" width="84%"><b><!-- 153 -->Kenya</b></td>
			<td  bgcolor="#EBEBEB" width="13%">254</td></tr><tr class="o">
			  <td width=150  colspan=2>KenCell</td></tr><tr class="o">
			    <td width=150  colspan=2>Safaricom</td></tr><tr class="o">
			      <td   bgcolor="#EBEBEB" width="84%"><b><!-- 155 -->Korea (South)</b></td>
			<td  bgcolor="#EBEBEB" width="13%">82</td></tr><tr class="o">
			  <td width=150  colspan=2>KT Freetel</td></tr><tr class="o">
			    <td width=150  colspan=2>SK Telecom (+Shinsegi)</td></tr><tr class="o">
			      <td   bgcolor="#EBEBEB" width="84%"><b><!-- 157 -->Kuwait</b></td>
			<td  bgcolor="#EBEBEB" width="13%">965</td></tr><tr class="o">
			  <td width=150  colspan=2>Vodafone (MTC)</td></tr><tr class="o">
			    <td width=150  colspan=2>Wataniya Telecom</td></tr><tr class="o">
			      <td   bgcolor="#EBEBEB" width="84%"><b><!-- 158 -->Kyrgyzstan</b></td>
			<td  bgcolor="#EBEBEB" width="13%">996</td></tr><tr class="o">
			  <td width=150  colspan=2>Bitel</td></tr><tr class="o">
			    <td   bgcolor="#EBEBEB" width="84%"><b><!-- 159 -->Lao</b></td>
			<td  bgcolor="#EBEBEB" width="13%">856</td></tr><tr class="o">
			  <td width=150  colspan=2>Milicom (Tango)</td></tr><tr class="o">
			    <td   bgcolor="#EBEBEB" width="84%"><b><!-- 160 -->Latvia</b></td>
			<td  bgcolor="#EBEBEB" width="13%">371</td></tr><tr class="o">
			  <td width=150  colspan=2>Latvian Mobile Telephone (LMT)</td></tr><tr class="o">
			    <td width=150  colspan=2>Tele2 (Baltkom)</td></tr><tr class="o">
			      <td   bgcolor="#EBEBEB" width="84%"><b><!-- 161 -->Lebanon</b></td>
			<td  bgcolor="#EBEBEB" width="13%">961</td></tr><tr class="o">
			  <td width=150  colspan=2>MTC Touch (LibanCell)</td></tr><tr class="o">
			    <td   bgcolor="#EBEBEB" width="84%"><b><!-- 164 -->Libya</b></td>
			<td  bgcolor="#EBEBEB" width="13%">218</td></tr><tr class="o">
			  <td width=150  colspan=2>El Madar</td></tr><tr class="o">
			    <td   bgcolor="#EBEBEB" width="84%"><b><!-- 165 -->Liechtenstein</b></td>
			<td  bgcolor="#EBEBEB" width="13%">423</td></tr><tr class="o">
			  <td width=150  colspan=2>Mobilkom LIE AG</td></tr><tr class="o">
			    <td width=150  colspan=2>Orange (VIAG EuroPlatform)</td></tr><tr class="o">
			      <td width=150  colspan=2>Swisscom (Telecom FL,Comfone)</td></tr><tr class="o">
			        <td width=150  colspan=2>Tele2 AG (Tango)</td></tr><tr class="o">
			          <td   bgcolor="#EBEBEB" width="84%"><b><!-- 166 -->Lithuania</b></td>
			<td  bgcolor="#EBEBEB" width="13%">370</td></tr><tr class="o">
			  <td width=150  colspan=2>Bite GSM (UAB)</td></tr><tr class="o">
			    <td width=150  colspan=2>Omnitel GSM</td></tr><tr class="o">
			      <td width=150  colspan=2>Tele2</td></tr><tr class="o">
			        <td   bgcolor="#EBEBEB" width="84%"><b><!-- 167 -->Luxembourg</b></td>
			<td  bgcolor="#EBEBEB" width="13%">352</td></tr><tr class="o">
			  <td width=150  colspan=2>Millicom SA</td></tr><tr class="o">
			    <td width=150  colspan=2>P&T LuxGSM (EPT)</td></tr><tr class="o">
			      <td width=150  colspan=2>Tango (Millicom)</td></tr><tr class="o">
			        <td width=150  colspan=2>VOX</td></tr><tr class="o">
			          <td   bgcolor="#EBEBEB" width="84%"><b><!-- 169 -->Macau</b></td>
			<td  bgcolor="#EBEBEB" width="13%">853</td></tr><tr class="o">
			  <td width=150  colspan=2>CTM (Telemovel)</td></tr><tr class="o">
			    <td width=150  colspan=2>Hutchison MAC</td></tr><tr class="o">
			      <td   bgcolor="#EBEBEB" width="84%"><b><!-- 170 -->Macedonia</b></td>
			<td  bgcolor="#EBEBEB" width="13%">389</td></tr><tr class="o">
			  <td width=150  colspan=2>Cosmofon</td></tr><tr class="o">
			    <td width=150  colspan=2>Mobimak (Post&Tele,Makedonski)</td></tr><tr class="o">
			      <td   bgcolor="#EBEBEB" width="84%"><b><!-- 315 -->Madagascar</b></td>
			<td  bgcolor="#EBEBEB" width="13%">261</td></tr><tr class="o">
			  <td width=150  colspan=2>Madacom</td></tr><tr class="o">
			    <td width=150  colspan=2>Orange (Antaris,SMM)</td></tr><tr class="o">
			      <td   bgcolor="#EBEBEB" width="84%"><b><!-- 171 -->Malawi</b></td>
			<td  bgcolor="#EBEBEB" width="13%">265</td></tr><tr class="o">
			  <td width=150  colspan=2>CELTEL</td></tr><tr class="o">
			    <td width=150  colspan=2>Telekom Networks (Callpoint)</td></tr><tr class="o">
			      <td   bgcolor="#EBEBEB" width="84%"><b><!-- 173 -->Malaysia</b></td>
			<td  bgcolor="#EBEBEB" width="13%">60</td></tr><tr class="o">
			  <td width=150  colspan=2>Celcom</td></tr><tr class="o">
			    <td width=150  colspan=2>Digi</td></tr><tr class="o">
			      <td width=150  colspan=2>Maxis (Binariang)</td></tr><tr class="o">
			        <td width=150  colspan=2>TimeCel (Adam,Time Wireles)</td></tr><tr class="o">
			          <td width=150  colspan=2>TMTouch (Telekom Cellular)</td></tr><tr class="o">
			            <td   bgcolor="#EBEBEB" width="84%"><b><!-- 175 -->Maldives</b></td>
			<td  bgcolor="#EBEBEB" width="13%">960</td></tr><tr class="o">
			  <td width=150  colspan=2>Dhiraagu</td></tr><tr class="o">
			    <td   bgcolor="#EBEBEB" width="84%"><b><!-- 177 -->Mali</b></td>
			<td  bgcolor="#EBEBEB" width="13%">223</td></tr><tr class="o">
			  <td width=150  colspan=2>Malitel-SA</td></tr><tr class="o">
			    <td   bgcolor="#EBEBEB" width="84%"><b><!-- 178 -->Malta</b></td>
			<td  bgcolor="#EBEBEB" width="13%">356</td></tr><tr class="o">
			  <td width=150  colspan=2>Go Mobile</td></tr><tr class="o">
			    <td width=150  colspan=2>Vodafone Malta Ltd</td></tr><tr class="o">
			      <td   bgcolor="#EBEBEB" width="84%"><b><!-- 180 -->Martinique</b></td>
			<td  bgcolor="#EBEBEB" width="13%">596</td></tr><tr class="o">
			  <td width=150  colspan=2>Bouygues Telecom</td></tr><tr class="o">
			    <td width=150  colspan=2>Orange (France Caraibe Mobiles)</td></tr><tr class="o">
			      <td   bgcolor="#EBEBEB" width="84%"><b><!-- 181 -->Mauritania</b></td>
			<td  bgcolor="#EBEBEB" width="13%">222</td></tr><tr class="o">
			  <td width=150  colspan=2>Mattel</td></tr><tr class="o">
			    <td width=150  colspan=2>Mauritel Mobiles</td></tr><tr class="o">
			      <td   bgcolor="#EBEBEB" width="84%"><b><!-- 182 -->Mauritius</b></td>
			<td  bgcolor="#EBEBEB" width="13%">230</td></tr><tr class="o">
			  <td width=150  colspan=2>Cellplus</td></tr><tr class="o">
			    <td width=150  colspan=2>Emtel</td></tr><tr class="o">
			      <td   bgcolor="#EBEBEB" width="84%"><b><!-- 184 -->Mexico</b></td>
			<td  bgcolor="#EBEBEB" width="13%">52</td></tr><tr class="o">
			  <td width=150  colspan=2>Telefonica Movistar (Pegaso GSM)</td></tr><tr class="o">
			    <td   bgcolor="#EBEBEB" width="84%"><b><!-- 186 -->Moldova</b></td>
			<td  bgcolor="#EBEBEB" width="13%">373</td></tr><tr class="o">
			  <td width=150  colspan=2>MoldCell</td></tr><tr class="o">
			    <td width=150  colspan=2>VoxTel</td></tr><tr class="o">
			      <td   bgcolor="#EBEBEB" width="84%"><b><!-- 187 -->Monaco (Kosovo)</b></td>
			<td  bgcolor="#EBEBEB" width="13%">377</td></tr><tr class="o">
			  <td width=150  colspan=2>Monaco Telecom</td></tr><tr class="o">
			    <td   bgcolor="#EBEBEB" width="84%"><b><!-- 188 -->Mongolia</b></td>
			<td  bgcolor="#EBEBEB" width="13%">976</td></tr><tr class="o">
			  <td width=150  colspan=2>MobiCom</td></tr><tr class="o">
			    <td   bgcolor="#EBEBEB" width="84%"><b><!-- 190 -->Morocco</b></td>
			<td  bgcolor="#EBEBEB" width="13%">212</td></tr><tr class="o">
			  <td width=150  colspan=2>Maroc Telecom (IAM,Itisallat al Majghrib)</td></tr><tr class="o">
			    <td width=150  colspan=2>Medi Telecom</td></tr><tr class="o">
			      <td   bgcolor="#EBEBEB" width="84%"><b><!-- 192 -->Mozambique</b></td>
			<td  bgcolor="#EBEBEB" width="13%">258</td></tr><tr class="o">
			  <td width=150  colspan=2>mCel (Moz Cellulcar,TDM)</td></tr><tr class="o">
			    <td width=150  colspan=2>Vodacom</td></tr><tr class="o">
			      <td   bgcolor="#EBEBEB" width="84%"><b><!-- 194 -->Namibia</b></td>
			<td  bgcolor="#EBEBEB" width="13%">264</td></tr><tr class="o">
			  <td width=150  colspan=2>MTC</td></tr><tr class="o">
			    <td   bgcolor="#EBEBEB" width="84%"><b><!-- 196 -->Nepal</b></td>
			<td  bgcolor="#EBEBEB" width="13%">977</td></tr><tr class="o">
			  <td width=150  colspan=2>Doorsanchar (Nepal Telecom,NTC)</td></tr><tr class="o">
			    <td   bgcolor="#EBEBEB" width="84%"><b><!-- 197 -->Netherlands</b></td>
			<td  bgcolor="#EBEBEB" width="13%">31</td></tr><tr class="o">
			  <td width=150  colspan=2>KPN Telecom B.V.</td></tr><tr class="o">
			    <td width=150  colspan=2>Orange (Dutchtone)</td></tr><tr class="o">
			      <td width=150  colspan=2>T-Mobile (BEN)</td></tr><tr class="o">
			        <td width=150  colspan=2>Tele2 (Netherlands) B.V.</td></tr><tr class="o">
			          <td width=150  colspan=2>Telfort (O2)</td></tr><tr class="o">
			            <td width=150  colspan=2>Vodafone (Libertel)</td></tr><tr class="o">
			              <td   bgcolor="#EBEBEB" width="84%"><b><!-- 311 -->Netherlands Antilles</b></td>
			<td  bgcolor="#EBEBEB" width="13%">599</td></tr><tr class="o">
			  <td width=150  colspan=2>TelCell (St Maarten)</td></tr><tr class="o">
			    <td width=150  colspan=2>UTS (Curacao+Antelecom)</td></tr><tr class="o">
			      <td   bgcolor="#EBEBEB" width="84%"><b><!-- 200 -->New Caledonia</b></td>
			<td  bgcolor="#EBEBEB" width="13%">687</td></tr><tr class="o">
			  <td width=150  colspan=2>OPT (Mobilis)</td></tr><tr class="o">
			    <td   bgcolor="#EBEBEB" width="84%"><b><!-- 201 -->New Zealand</b></td>
			<td  bgcolor="#EBEBEB" width="13%">64</td></tr><tr class="o">
			  <td width=150  colspan=2>Telecom New Zealand</td></tr><tr class="o">
			    <td width=150  colspan=2>Vodafone (BellSouth)</td></tr><tr class="o">
			      <td   bgcolor="#EBEBEB" width="84%"><b><!-- 203 -->Niger</b></td>
			<td  bgcolor="#EBEBEB" width="13%">227</td></tr><tr class="o">
			  <td width=150  colspan=2>Celtel</td></tr><tr class="o">
			    <td   bgcolor="#EBEBEB" width="84%"><b><!-- 204 -->Nigeria</b></td>
			<td  bgcolor="#EBEBEB" width="13%">234</td></tr><tr class="o">
			  <td width=150  colspan=2>Globe</td></tr><tr class="o">
			    <td width=150  colspan=2>MTN</td></tr><tr class="o">
			      <td width=150  colspan=2>Vee Networks (Econet)</td></tr><tr class="o">
			        <td   bgcolor="#EBEBEB" width="84%"><b><!-- 208 -->Norway</b></td>
			<td  bgcolor="#EBEBEB" width="13%">47</td></tr><tr class="o">
			  <td width=150  colspan=2>NetCom</td></tr><tr class="o">
			    <td width=150  colspan=2>Telenor Mobil AS</td></tr><tr class="o">
			      <td   bgcolor="#EBEBEB" width="84%"><b><!-- 209 -->Oman</b></td>
			<td  bgcolor="#EBEBEB" width="13%">968</td></tr><tr class="o">
			  <td width=150  colspan=2>GTO</td></tr><tr class="o">
			    <td   bgcolor="#EBEBEB" width="84%"><b><!-- 210 -->Pakistan</b></td>
			<td  bgcolor="#EBEBEB" width="13%">92</td></tr><tr class="o">
			  <td width=150  colspan=2>Mobilink</td></tr><tr class="o">
			    <td width=150  colspan=2>Telenor</td></tr><tr class="o">
			      <td width=150  colspan=2>UFone (PAKTEL)</td></tr><tr class="o">
			        <td width=150  colspan=2>Warid Telecom</td></tr><tr class="o">
			          <td   bgcolor="#EBEBEB" width="84%"><b><!-- 212 -->Palestine</b></td>
			<td  bgcolor="#EBEBEB" width="13%">9725</td></tr><tr class="o">
			  <td width=150  colspan=2>Palestine Cellular (Jawwal)</td></tr><tr class="o">
			    <td   bgcolor="#EBEBEB" width="84%"><b><!-- 213 -->Panama</b></td>
			<td  bgcolor="#EBEBEB" width="13%">507</td></tr><tr class="o">
			  <td width=150  colspan=2>Cable & Wireless</td></tr><tr class="o">
			    <td   bgcolor="#EBEBEB" width="84%"><b><!-- 215 -->Paraguay</b></td>
			<td  bgcolor="#EBEBEB" width="13%">595</td></tr><tr class="o">
			  <td width=150  colspan=2>Hola Paraguay</td></tr><tr class="o">
			    <td width=150  colspan=2>Hutchinson Telecom</td></tr><tr class="o">
			      <td width=150  colspan=2>Núcleo S.A.</td></tr><tr class="o">
			        <td   bgcolor="#EBEBEB" width="84%"><b><!-- 216 -->Peru</b></td>
			<td  bgcolor="#EBEBEB" width="13%">51</td></tr><tr class="o">
			  <td width=150  colspan=2>Nextel</td></tr><tr class="o">
			    <td width=150  colspan=2>TIM</td></tr><tr class="o">
			      <td   bgcolor="#EBEBEB" width="84%"><b><!-- 217 -->Philippines</b></td>
			<td  bgcolor="#EBEBEB" width="13%">63</td></tr><tr class="o">
			  <td width=150  colspan=2>Globe Telecom</td></tr><tr class="o">
			    <td width=150  colspan=2>Islacom</td></tr><tr class="o">
			      <td width=150  colspan=2>Nextel Communications</td></tr><tr class="o">
			        <td width=150  colspan=2>Smart Communications</td></tr><tr class="o">
			          <td width=150  colspan=2>Sun Cellular (DIGITEL)</td></tr><tr class="o">
			            <td   bgcolor="#EBEBEB" width="84%"><b><!-- 220 -->Poland</b></td>
			<td  bgcolor="#EBEBEB" width="13%">48</td></tr><tr class="o">
			  <td width=150  colspan=2>Era (Heyah,Polska Telefonia Cyfrowa)</td></tr><tr class="o">
			    <td width=150  colspan=2>Orange (Idea, PTK Centertel)</td></tr><tr class="o">
			      <td width=150  colspan=2>PlusGSM (PolKomTel, SamiSwoi)</td></tr><tr class="o">
			        <td   bgcolor="#EBEBEB" width="84%"><b><!-- 223 -->Portugal</b></td>
			<td  bgcolor="#EBEBEB" width="13%">351</td></tr><tr class="o">
			  <td width=150  colspan=2>Main Road Tele. (Optimus)</td></tr><tr class="o">
			    <td width=150  colspan=2>TMN</td></tr><tr class="o">
			      <td width=150  colspan=2>Vodafone (Telecel)</td></tr><tr class="o">
			        <td   bgcolor="#EBEBEB" width="84%"><b><!-- 225 -->Puerto Rico</b></td>
			<td  bgcolor="#EBEBEB" width="13%">1787</td></tr><tr class="o">
			  <td width=150  colspan=2>AT&T Wireless</td></tr><tr class="o">
			    <td   bgcolor="#EBEBEB" width="84%"><b><!-- 226 -->Qatar</b></td>
			<td  bgcolor="#EBEBEB" width="13%">974</td></tr><tr class="o">
			  <td width=150  colspan=2>Qatar Telecom</td></tr><tr class="o">
			    <td   bgcolor="#EBEBEB" width="84%"><b><!-- 227 -->Reunion</b></td>
			<td  bgcolor="#EBEBEB" width="13%">262</td></tr><tr class="o">
			  <td width=150  colspan=2>Orange (France Telecom)</td></tr><tr class="o">
			    <td width=150  colspan=2>Societe Reun Dradiotel</td></tr><tr class="o">
			      <td   bgcolor="#EBEBEB" width="84%"><b><!-- 228 -->Romania</b></td>
			<td  bgcolor="#EBEBEB" width="13%">40</td></tr><tr class="o">
			  <td width=150  colspan=2>Cosmorom</td></tr><tr class="o">
			    <td width=150  colspan=2>
			Vodafone</td></tr><tr class="o">
			  <td width=150  colspan=2>Orange (Dialog, Mobil Rom)</td></tr><tr class="o">
			    <td   bgcolor="#EBEBEB" width="84%"><b><!-- 229 -->Russia</b></td>
			<td  bgcolor="#EBEBEB" width="13%">7</td></tr><tr class="o">
			  <td width=150  colspan=2>Dontelecom</td></tr><tr class="o">
			    <td width=150  colspan=2>Ermak RMS</td></tr><tr class="o">
			      <td width=150  colspan=2>Far East Cellular Systems</td></tr><tr class="o">
			        <td width=150  colspan=2>KB Impuls (Beeline)</td></tr><tr class="o">
			          <td width=150  colspan=2>Kuban</td></tr><tr class="o">
			            <td width=150  colspan=2>MegaFon (North-West,JSC,Sonic Duo)</td></tr><tr class="o">
			              <td width=150  colspan=2>Mobile Communications Systems</td></tr><tr class="o">
			                <td width=150  colspan=2>Mobile TeleSystems</td></tr><tr class="o">
			                  <td width=150  colspan=2>New telephone company</td></tr><tr class="o">
			                    <td width=150  colspan=2>Prim Telephon</td></tr><tr class="o">
			                      <td width=150  colspan=2>Siberia Cellular Systems</td></tr><tr class="o">
			                        <td width=150  colspan=2>SMARTS (Zao)</td></tr><tr class="o">
			                          <td width=150  colspan=2>Tele2</td></tr><tr class="o">
			                            <td width=150  colspan=2>TELECOM-XX1</td></tr><tr class="o">
			                              <td width=150  colspan=2>Telesot Alania</td></tr><tr class="o">
			                                <td width=150  colspan=2>Uraltel Ltd</td></tr><tr class="o">
			                                  <td width=150  colspan=2>Vimpelcom</td></tr><tr class="o">
			                                    <td   bgcolor="#EBEBEB" width="84%"><b><!-- 232 -->Rwanda</b></td>
			<td  bgcolor="#EBEBEB" width="13%">250</td></tr><tr class="o">
			  <td width=150  colspan=2>Rwandacell (MTN)</td></tr><tr class="o">
			    <td   bgcolor="#EBEBEB" width="84%"><b><!-- 238 -->Samoa</b></td>
			<td  bgcolor="#EBEBEB" width="13%">1</td></tr><tr class="o">
			  <td width=150  colspan=2>Blue Sky</td></tr><tr class="o">
			    <td   bgcolor="#EBEBEB" width="84%"><b><!-- 335 -->Satellite-Thuraya</b></td>
			<td  bgcolor="#EBEBEB" width="13%">882</td></tr><tr class="o">
			  <td width=150  colspan=2>Thuraya</td></tr><tr class="o">
			    <td   bgcolor="#EBEBEB" width="84%"><b><!-- 241 -->Saudi Arabia</b></td>
			<td  bgcolor="#EBEBEB" width="13%">966</td></tr><tr class="o">
			  <td width=150  colspan=2>Mobily</td></tr><tr class="o">
			    <td width=150  colspan=2>Saudi Telecom (STC, Al Jawal)</td></tr><tr class="o">
			      <td   bgcolor="#EBEBEB" width="84%"><b><!-- 242 -->Senegal</b></td>
			<td  bgcolor="#EBEBEB" width="13%">221</td></tr><tr class="o">
			  <td width=150  colspan=2>SonaTel (Alize)</td></tr><tr class="o">
			    <td   bgcolor="#EBEBEB" width="84%"><b><!-- 325 -->Serbia & Montenegro (Yugoslavia)</b></td>
			<td  bgcolor="#EBEBEB" width="13%">381</td></tr><tr class="o">
			  <td width=150  colspan=2>Mobilna Telefonija Srbije</td></tr><tr class="o">
			    <td width=150  colspan=2>Mobtel</td></tr><tr class="o">
			      <td width=150  colspan=2>MONET</td></tr><tr class="o">
			        <td width=150  colspan=2>Promonte</td></tr><tr class="o">
			          <td width=150  colspan=2>Telekom Srbija</td></tr><tr class="o">
			            <td   bgcolor="#EBEBEB" width="84%"><b><!-- 243 -->Seychelles</b></td>
			<td  bgcolor="#EBEBEB" width="13%">248</td></tr><tr class="o">
			  <td width=150  colspan=2>Cable and Wireless</td></tr><tr class="o">
			    <td width=150  colspan=2>Telecom Seychelles (Airtel)</td></tr><tr class="o">
			      <td   bgcolor="#EBEBEB" width="84%"><b><!-- 244 -->Sierra Leone</b></td>
			<td  bgcolor="#EBEBEB" width="13%">232</td></tr><tr class="o">
			  <td width=150  colspan=2>Celtel S.L. Ltd.</td></tr><tr class="o">
			    <td   bgcolor="#EBEBEB" width="84%"><b><!-- 245 -->Singapore</b></td>
			<td  bgcolor="#EBEBEB" width="13%">65</td></tr><tr class="o">
			  <td width=150  colspan=2>M1</td></tr><tr class="o">
			    <td width=150  colspan=2>Singtel (1800)</td></tr><tr class="o">
			      <td width=150  colspan=2>SingTel (900)</td></tr><tr class="o">
			        <td width=150  colspan=2>Singtel - Paging</td></tr><tr class="o">
			          <td width=150  colspan=2>StarHub Pte Ltd.</td></tr><tr class="o">
			            <td   bgcolor="#EBEBEB" width="84%"><b><!-- 248 -->Slovakia</b></td>
			<td  bgcolor="#EBEBEB" width="13%">421</td></tr><tr class="o">
			  <td width=150  colspan=2>Eurotel Bratislava as</td></tr><tr class="o">
			    <td width=150  colspan=2>Orange (Globtel)</td></tr><tr class="o">
			      <td   bgcolor="#EBEBEB" width="84%"><b><!-- 249 -->Slovenia</b></td>
			<td  bgcolor="#EBEBEB" width="13%">386</td></tr><tr class="o">
			  <td width=150  colspan=2>Mobitel GSM</td></tr><tr class="o">
			    <td width=150  colspan=2>SiMobil (Vodafone)</td></tr><tr class="o">
			      <td width=150  colspan=2>Vega (Western Wireless)</td></tr><tr class="o">
			        <td   bgcolor="#EBEBEB" width="84%"><b><!-- 252 -->South Africa</b></td>
			<td  bgcolor="#EBEBEB" width="13%">27</td></tr><tr class="o">
			  <td width=150  colspan=2>Cell C</td></tr><tr class="o">
			    <td width=150  colspan=2>MTN</td></tr><tr class="o">
			      <td width=150  colspan=2>Vodacom</td></tr><tr class="o">
			        <td   bgcolor="#EBEBEB" width="84%"><b><!-- 253 -->Spain</b></td>
			<td  bgcolor="#EBEBEB" width="13%">34</td></tr><tr class="o">
			  <td width=150  colspan=2>Amena (Auna,Retevision)</td></tr><tr class="o">
			    <td width=150  colspan=2>Telefonica (Movistar)</td></tr><tr class="o">
			      <td width=150  colspan=2>Vodafone (Airtel Movil)</td></tr><tr class="o">
			        <td width=150  colspan=2>Xfera Moviles- S.A.</td></tr><tr class="o">
			          <td   bgcolor="#EBEBEB" width="84%"><b><!-- 256 -->Sri Lanka</b></td>
			<td  bgcolor="#EBEBEB" width="13%">94</td></tr><tr class="o">
			  <td width=150  colspan=2>Celltel</td></tr><tr class="o">
			    <td width=150  colspan=2>Mobitel</td></tr><tr class="o">
			      <td width=150  colspan=2>MTN Networks (Pvt) Ltd</td></tr><tr class="o">
			        <td   bgcolor="#EBEBEB" width="84%"><b><!-- 235 -->St. Lucia</b></td>
			<td  bgcolor="#EBEBEB" width="13%">1758</td></tr><tr class="o">
			  <td width=150  colspan=2>AT&T</td></tr><tr class="o">
			    <td width=150  colspan=2>Digicel</td></tr><tr class="o">
			      <td   bgcolor="#EBEBEB" width="84%"><b><!-- 237 -->St. Vincent and The Grenadines</b></td>
			<td  bgcolor="#EBEBEB" width="13%">1</td></tr><tr class="o">
			  <td width=150  colspan=2>Digicel</td></tr><tr class="o">
			    <td   bgcolor="#EBEBEB" width="84%"><b><!-- 257 -->Sudan</b></td>
			<td  bgcolor="#EBEBEB" width="13%">249</td></tr><tr class="o">
			  <td width=150  colspan=2>SDN (MobiTel)</td></tr><tr class="o">
			    <td   bgcolor="#EBEBEB" width="84%"><b><!-- 259 -->Swaziland</b></td>
			<td  bgcolor="#EBEBEB" width="13%">268</td></tr><tr class="o">
			  <td width=150  colspan=2>Swazi MTN</td></tr><tr class="o">
			    <td   bgcolor="#EBEBEB" width="84%"><b><!-- 260 -->Sweden</b></td>
			<td  bgcolor="#EBEBEB" width="13%">46</td></tr><tr class="o">
			  <td width=150  colspan=2>Europolitan (Vodafone)</td></tr><tr class="o">
			    <td width=150  colspan=2>Hi3G Access AB</td></tr><tr class="o">
			      <td width=150  colspan=2>Spring Mobile</td></tr><tr class="o">
			        <td width=150  colspan=2>Tele2 (Comviq)</td></tr><tr class="o">
			          <td width=150  colspan=2>Telia (Sonera,Mobitel)</td></tr><tr class="o">
			            <td   bgcolor="#EBEBEB" width="84%"><b><!-- 262 -->Switzerland</b></td>
			<td  bgcolor="#EBEBEB" width="13%">41</td></tr><tr class="o">
			  <td width=150  colspan=2>Orange</td></tr><tr class="o">
			    <td width=150  colspan=2>Sunrise (TDC,diax)</td></tr><tr class="o">
			      <td width=150  colspan=2>Swisscom AG (Natel)</td></tr><tr class="o">
			        <td   bgcolor="#EBEBEB" width="84%"><b><!-- 263 -->Syria</b></td>
			<td  bgcolor="#EBEBEB" width="13%">963</td></tr><tr class="o">
			  <td width=150  colspan=2>Spacetel</td></tr><tr class="o">
			    <td width=150  colspan=2>SyriaTel</td></tr><tr class="o">
			      <td   bgcolor="#EBEBEB" width="84%"><b><!-- 264 -->Taiwan</b></td>
			<td  bgcolor="#EBEBEB" width="13%">886</td></tr><tr class="o">
			  <td width=150  colspan=2>Chunghwa-LDM- (GSM)</td></tr><tr class="o">
			    <td width=150  colspan=2>CT2 Service</td></tr><tr class="o">
			      <td width=150  colspan=2>FarEasTone</td></tr><tr class="o">
			        <td width=150  colspan=2>KGT (DCS)</td></tr><tr class="o">
			          <td width=150  colspan=2>Mobitai (GSM)</td></tr><tr class="o">
			            <td width=150  colspan=2>TCC (DCS)</td></tr><tr class="o">
			              <td width=150  colspan=2>TransAsia</td></tr><tr class="o">
			                <td   bgcolor="#EBEBEB" width="84%"><b><!-- 267 -->Tajikistan</b></td>
			<td  bgcolor="#EBEBEB" width="13%">992</td></tr><tr class="o">
			  <td width=150  colspan=2>Indigo</td></tr><tr class="o">
			    <td   bgcolor="#EBEBEB" width="84%"><b><!-- 268 -->Tanzania</b></td>
			<td  bgcolor="#EBEBEB" width="13%">255</td></tr><tr class="o">
			  <td width=150  colspan=2>Celltel</td></tr><tr class="o">
			    <td width=150  colspan=2>MIC (Mobitel)</td></tr><tr class="o">
			      <td width=150  colspan=2>Tritel (T) Ltd.</td></tr><tr class="o">
			        <td width=150  colspan=2>Vodacom (T) Ltd.</td></tr><tr class="o">
			          <td width=150  colspan=2>Zantel Ltd.</td></tr><tr class="o">
			            <td   bgcolor="#EBEBEB" width="84%"><b><!-- 269 -->Thailand</b></td>
			<td  bgcolor="#EBEBEB" width="13%">66</td></tr><tr class="o">
			  <td width=150  colspan=2>AIS (1-2-call)</td></tr><tr class="o">
			    <td width=150  colspan=2>Digital (Hello, Virtual for AIS)</td></tr><tr class="o">
			      <td width=150  colspan=2>Orange</td></tr><tr class="o">
			        <td width=150  colspan=2>TAC (DTAC)</td></tr><tr class="o">
			          <td   bgcolor="#EBEBEB" width="84%"><b><!-- 271 -->Togo</b></td>
			<td  bgcolor="#EBEBEB" width="13%">228</td></tr><tr class="o">
			  <td width=150  colspan=2>Togocel</td></tr><tr class="o">
			    <td   bgcolor="#EBEBEB" width="84%"><b><!-- 274 -->Trinidad and Tobago</b></td>
			<td  bgcolor="#EBEBEB" width="13%">1</td></tr><tr class="o">
			  <td width=150  colspan=2>Telcom Services (TSTT)</td></tr><tr class="o">
			    <td   bgcolor="#EBEBEB" width="84%"><b><!-- 275 -->Tunisia</b></td>
			<td  bgcolor="#EBEBEB" width="13%">216</td></tr><tr class="o">
			  <td width=150  colspan=2>Tunisiana (Osracom)</td></tr><tr class="o">
			    <td width=150  colspan=2>Tunisie Telecom (Tunicell,Tuntel)</td></tr><tr class="o">
			      <td   bgcolor="#EBEBEB" width="84%"><b><!-- 276 -->Turkey</b></td>
			<td  bgcolor="#EBEBEB" width="13%">90</td></tr><tr class="o">
			  <td width=150  colspan=2>Aycell</td></tr><tr class="o">
			    <td width=150  colspan=2>IS-TIM (Aria)</td></tr><tr class="o">
			      <td width=150  colspan=2>Telsim</td></tr><tr class="o">
			        <td width=150  colspan=2>Turkcell</td></tr><tr class="o">
			          <td   bgcolor="#EBEBEB" width="84%"><b><!-- 277 -->Turkmenistan</b></td>
			<td  bgcolor="#EBEBEB" width="13%">993</td></tr><tr class="o">
			  <td width=150  colspan=2>BCTI</td></tr><tr class="o">
			    <td   bgcolor="#EBEBEB" width="84%"><b><!-- 280 -->Uganda</b></td>
			<td  bgcolor="#EBEBEB" width="13%">256</td></tr><tr class="o">
			  <td width=150  colspan=2>CelTel (Clovergem)</td></tr><tr class="o">
			    <td width=150  colspan=2>MTN</td></tr><tr class="o">
			      <td width=150  colspan=2>Uganda Telecom (UTL Telecel)</td></tr><tr class="o">
			        <td   bgcolor="#EBEBEB" width="84%"><b><!-- 108 -->UK</b></td>
			<td  bgcolor="#EBEBEB" width="13%">44</td></tr><tr class="o">
			  <td width=150  colspan=2>Hutchison 3G UK Ltd</td></tr><tr class="o">
			    <td width=150  colspan=2>O2 (BT Cellnet)</td></tr><tr class="o">
			      <td width=150  colspan=2>Orange</td></tr><tr class="o">
			        <td width=150  colspan=2>T-Mobile</td></tr><tr class="o">
			          <td width=150  colspan=2>Vodafone</td></tr><tr class="o">
			            <td   bgcolor="#EBEBEB" width="84%"><b><!-- 281 -->Ukraine</b></td>
			<td  bgcolor="#EBEBEB" width="13%">380</td></tr><tr class="o">
			  <td width=150  colspan=2>Astelit</td></tr><tr class="o">
			    <td width=150  colspan=2>Golden Telecom Bancomsvyaz</td></tr><tr class="o">
			      <td width=150  colspan=2>Kyivstar GSM</td></tr><tr class="o">
			        <td width=150  colspan=2>UMC</td></tr><tr class="o">
			          <td   bgcolor="#EBEBEB" width="84%"><b><!-- 289 -->United Arab Emirates</b></td>
			<td  bgcolor="#EBEBEB" width="13%">971</td></tr><tr class="o">
			  <td width=150  colspan=2>Etisalat</td></tr><tr class="o">
			    <td   bgcolor="#EBEBEB" width="84%"><b><!-- 290 -->Uruguay</b></td>
			<td  bgcolor="#EBEBEB" width="13%">598</td></tr><tr class="o">
			  <td width=150  colspan=2>Antel</td></tr><tr class="o">
			    <td   bgcolor="#EBEBEB" width="84%"><b><!-- 284 -->USA</b></td>
			<td  bgcolor="#EBEBEB" width="13%">1</td></tr><tr class="o">
			  <td width=150  colspan=2>Alltel</td></tr><tr class="o">
			    <td width=150  colspan=2>AT&T</td></tr><tr class="o">
			      <td width=150  colspan=2>Cingular</td></tr><tr class="o">
			        <td width=150  colspan=2>Cingular-Bellsouth</td></tr><tr class="o">
			          <td width=150  colspan=2>Cingular-Pacific Bell</td></tr><tr class="o">
			            <td width=150  colspan=2>Nextel</td></tr><tr class="o">
			              <td width=150  colspan=2>Sprint</td></tr><tr class="o">
			                <td width=150  colspan=2>T-Mobile</td></tr><tr class="o">
			                  <td width=150  colspan=2>T-Mobile: PCS One</td></tr><tr class="o">
			                    <td width=150  colspan=2>T-Mobile: Powertel</td></tr><tr class="o">
			                      <td width=150  colspan=2>Unallocated Prefixes</td></tr><tr class="o">
			                        <td width=150  colspan=2>US Cellular</td></tr><tr class="o">
			                          <td width=150  colspan=2>Verizon</td></tr><tr class="o">
			                            <td   bgcolor="#EBEBEB" width="84%"><b><!-- 291 -->Uzbekistan</b></td>
			<td  bgcolor="#EBEBEB" width="13%">998</td></tr><tr class="o">
			  <td width=150  colspan=2>Coscom</td></tr><tr class="o">
			    <td width=150  colspan=2>DAEWOO (Unitel)</td></tr><tr class="o">
			      <td width=150  colspan=2>JV Uzdunrobita</td></tr><tr class="o">
			        <td   bgcolor="#EBEBEB" width="84%"><b><!-- 294 -->Venezuela</b></td>
			<td  bgcolor="#EBEBEB" width="13%">58</td></tr><tr class="o">
			  <td width=150  colspan=2>DigiCel</td></tr><tr class="o">
			    <td width=150  colspan=2>Digitel</td></tr><tr class="o">
			      <td width=150  colspan=2>Infonet</td></tr><tr class="o">
			        <td   bgcolor="#EBEBEB" width="84%"><b><!-- 295 -->Vietnam</b></td>
			<td  bgcolor="#EBEBEB" width="13%">84</td></tr><tr class="o">
			  <td width=150  colspan=2>Mobifone (VMS)</td></tr><tr class="o">
			    <td width=150  colspan=2>Viettel</td></tr><tr class="o">
			      <td width=150  colspan=2>Vinaphone (VTS)</td></tr><tr class="o">
			        <td   bgcolor="#EBEBEB" width="84%"><b><!-- 299 -->Yemen</b></td>
			<td  bgcolor="#EBEBEB" width="13%">967</td></tr><tr class="o">
			  <td width=150  colspan=2>MPC (Sabafon)</td></tr><tr class="o">
			    <td width=150  colspan=2>Spacetel</td></tr><tr class="o">
			      <td   bgcolor="#EBEBEB" width="84%"><b><!-- 303 -->Zambia</b></td>
			<td  bgcolor="#EBEBEB" width="13%">260</td></tr><tr class="o">
			  <td width=150  colspan=2>CelTel</td></tr><tr class="o">
			    <td width=150  colspan=2>MTN (Telecel)</td></tr><tr class="o">
			      <td   bgcolor="#EBEBEB" width="84%"><b><!-- 305 -->Zimbabwe</b></td>
			<td  bgcolor="#EBEBEB" width="13%">263</td></tr><tr class="o">
			  <td width=150  colspan=2>Econet</td></tr><tr class="o">
			    <td width=150  colspan=2>NetOne</td></tr><tr class="o">
	      <td width=150  colspan=2>Telecel (P+T Corp.)</td></tr>        </table>

			<p>
			<p>
			<p>
			<p>
			<p>
			<p>
	  <p></td>
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
</body>
</html>