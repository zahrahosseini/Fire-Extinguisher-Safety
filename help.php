<?php
ob_start(); 
session_start();
if(@$_SESSION["Login"]!="go")
{
	header("Location: login.php");
	exit();
}?>


<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<head>
<title>راهنمای سیستم</title>
<div  style="position: absolute;top:  8px;right:0px; width: 1000px; height: 70px;"align="right" >
	<img src="Image/img0012.gif" align="right" width="2000" height="70"></div>
<div style="position: absolute;  top: 30px; left:0px; width: 1000px; height: 45px;"align="left">
 	<a  href="ph1.php"  ><input type="button" value="بازگشت"  /></a>
	<a href="logout.php" ><input type="button" value="خروج" /></a></div>
	<div style="position: absolute;  top: 10px; right:20px;"align="right"><p><font color="336699" face="B Nazanin" size="5">راهنمای سیستم </font>   </p></div>
<br><br><br><br>
<style>
<!--
 p.MsoNormal
	{mso-style-parent:"";
	margin-bottom:.0001pt;
	font-size:12.0pt;
	font-family:"Times New Roman";
	margin-left:0in; margin-right:0in; margin-top:0in}
span.htmlval1
	{color:blue}
-->
</style>
<meta name="GENERATOR" content="Microsoft FrontPage 5.0">
<meta name="ProgId" content="FrontPage.Editor.Document">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>&#1575;&#1605;&#1705;&#1575;&#1606;&#1575;&#1578; &#1587;&#1740;&#1587;&#1578;&#1605;</title>
<style>
<!--
 p.MsoNormal
	{mso-style-parent:"";
	margin-bottom:.0001pt;
	font-size:12.0pt;
	font-family:"Times New Roman";
	margin-left:0in; margin-right:0in; margin-top:0in}
span.htmlval1
	{color:blue}
-->
</style>
</head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<body background="Image/page1_bkgrnd.png" bgcolor="#7D9EC0" text="#000000" style="scrollbar-face-color: #ECE9D8; scrollbar-arrow-color: #000000; scrollbar-3dlight-color: #ECE9D8; scrollbar-darkshadow-color: #716F64; scrollbar-highlight-color: #FFFFFF; scrollbar-shadow-color: #ACA899; scrollbar-track-color: #D4D0C8;">


<p dir="rtl">&nbsp;</p>
<p style="text-align: right; line-height: 150%; unicode-bidi: embed; direction: rtl; margin-right: 0.25in" class="MsoNormal" dir="rtl">
<font face="Nina">
<span style="line-height: 150%; color: green; font-size: 14pt" lang="FA">&#1575;&#1605;&#1705;&#1575;&#1606;&#1575;&#1578; 
&#1587;&#1740;&#1587;&#1578;&#1605;:</span></font></p>
<p style="text-align: right; line-height: 150%; text-indent: -9pt; unicode-bidi: embed; direction: rtl; margin-right: 0.5in" class="MsoNormal" dir="rtl">
<font face="Nina"><span style="color: black">·</span></font><span style="font-variant: normal; font-style: normal; font-family: Nina; color: black; font-size: 7pt">&nbsp;&nbsp;
</span><font face="Nina"><span style="color: black" dir="rtl" lang="FA">&#1605;&#1588;&#1575;&#1607;&#1583;&#1607; 
&#1605;&#1607;&#1604;&#1578; &#1576;&#1575;&#1602;&#1740; &#1605;&#1575;&#1606;&#1583;&#1607; &#1576;&#1585;&#1575;&#1740; &#1588;&#1575;&#1585;&#1688; &#1605;&#1580;&#1583;&#1583; &#1705;&#1662;&#1587;&#1608;&#1604; &#1607;&#1575;</span></font></p>
<p style="text-align: right; line-height: 150%; text-indent: -9pt; unicode-bidi: embed; direction: rtl; margin-right: 0.5in" class="MsoNormal" dir="rtl">
<font face="Nina"><span style="color: black">·</span></font><span style="font-variant: normal; font-style: normal; font-family: Nina; color: black; font-size: 7pt">&nbsp;&nbsp;
</span><font face="Nina"><span style="color: black" dir="rtl" lang="FA">&#1575;&#1601;&#1586;&#1608;&#1583;&#1606; 
&#1608;&#1575;&#1581;&#1583; &#1580;&#1583;&#1740;&#1583;</span></font></p>
<p style="text-align: right; line-height: 150%; text-indent: -9pt; unicode-bidi: embed; direction: rtl; margin-right: 0.5in" class="MsoNormal" dir="rtl">
<font face="Nina"><span style="color: black">·</span></font><span style="font-variant: normal; font-style: normal; font-family: Nina; color: black; font-size: 7pt">&nbsp;&nbsp;
</span><font face="Nina"><span style="color: black" dir="rtl" lang="FA">&#1581;&#1584;&#1601; &#1608;&#1575;&#1581;&#1583; 
&#1605;&#1608;&#1580;&#1608;&#1583;</span></font></p>
<p style="text-align: right; line-height: 150%; text-indent: -9pt; unicode-bidi: embed; direction: rtl; margin-right: 0.5in" class="MsoNormal" dir="rtl">
<font face="Nina"><span style="color: black">·</span></font><span style="font-variant: normal; font-style: normal; font-family: Nina; color: black; font-size: 7pt">&nbsp;&nbsp;
</span><font face="Nina"><span style="color: black" dir="rtl" lang="FA">&#1575;&#1601;&#1586;&#1608;&#1583;&#1606; 
&#1705;&#1662;&#1587;&#1608;&#1604; &#1580;&#1583;&#1740;&#1583;</span></font></p>
<p style="text-align: right; line-height: 150%; text-indent: -9pt; unicode-bidi: embed; direction: rtl; margin-right: 0.5in" class="MsoNormal" dir="rtl">
<font face="Nina"><span style="color: black">·</span></font><span style="font-variant: normal; font-style: normal; font-family: Nina; color: black; font-size: 7pt">&nbsp;&nbsp;
</span><font face="Nina"><span style="color: black" dir="rtl" lang="FA">&#1581;&#1584;&#1601; 
&#1705;&#1662;&#1587;&#1608;&#1604; &#1605;&#1608;&#1580;&#1608;&#1583;</span></font></p>
<p style="text-align: right; line-height: 150%; text-indent: -9pt; unicode-bidi: embed; direction: rtl; margin-right: 0.5in" class="MsoNormal" dir="rtl">
<font face="Nina"><span style="color: black">·</span></font><span style="font-variant: normal; font-style: normal; font-family: Nina; color: black; font-size: 7pt">&nbsp;&nbsp;
</span><font face="Nina"><span style="color: black" dir="rtl" lang="FA">&#1580;&#1587;&#1578;&#1580;&#1608; 
&#1576;&#1585;&#1575;&#1587;&#1575;&#1587;:</span></font></p>
<p style="text-align: right; line-height: 150%; text-indent: -9pt; unicode-bidi: embed; direction: rtl; margin-right: 1in" class="MsoNormal" dir="rtl">
<font face="Nina">
<span style="line-height: 150%; color: black; font-size: 11pt">o</span></font><span style="line-height: 150%; font-variant: normal; font-style: normal; font-family: Nina; color: black; font-size: 7pt">&nbsp;
</span><font face="Nina">
<span style="line-height: 150%; color: black; font-size: 11pt" dir="rtl" lang="FA">
&#1606;&#1608;&#1593; &#1705;&#1662;&#1587;&#1608;&#1604;</span></font></p>
<p style="text-align: right; line-height: 150%; text-indent: -9pt; unicode-bidi: embed; direction: rtl; margin-right: 1in" class="MsoNormal" dir="rtl">
<font face="Nina">
<span style="line-height: 150%; color: black; font-size: 11pt">o</span></font><span style="line-height: 150%; font-variant: normal; font-style: normal; font-family: Nina; color: black; font-size: 7pt">&nbsp;
</span><font face="Nina">
<span style="line-height: 150%; color: black; font-size: 11pt" dir="rtl" lang="FA">
&#1608;&#1586;&#1606; &#1705;&#1662;&#1587;&#1608;&#1604; </span></font></p>
<p style="text-align: right; line-height: 150%; text-indent: -9pt; unicode-bidi: embed; direction: rtl; margin-right: 1in" class="MsoNormal" dir="rtl">
<font face="Nina">
<span style="line-height: 150%; color: black; font-size: 11pt">o</span></font><span style="line-height: 150%; font-variant: normal; font-style: normal; font-family: Nina; color: black; font-size: 7pt">&nbsp;
</span><font face="Nina">
<span style="line-height: 150%; color: black; font-size: 11pt" dir="rtl" lang="FA">
&#1608;&#1575;&#1581;&#1583;&#1740; &#1705;&#1607; &#1705;&#1662;&#1587;&#1608;&#1604; &#1583;&#1585; &#1570;&#1606; &#1606;&#1589;&#1576; &#1588;&#1583;&#1607;</span></font></p>
<p style="text-align: right; line-height: 150%; text-indent: -9pt; unicode-bidi: embed; direction: rtl; margin-right: 0.5in" class="MsoNormal" dir="rtl">
<span class="htmlval1"><font face="Nina"><span style="color: black">·</span></font><span style="font-variant: normal; font-style: normal; font-family: Nina; color: black; font-size: 7pt">&nbsp;&nbsp;
</span></span><font face="Nina"><span dir="rtl"><span class="htmlval1">
<span style="color: black" lang="AR-SA">&#1576;&#1585;&#1608;&#1586; &#1585;&#1587;&#1575;&#1606;&#1610; &#1605;&#1581;&#1604; &#1606;&#1589;&#1576; &#1705;&#1662;&#1587;&#1608;&#1604; &#1583;&#1585; &#1608;&#1575;&#1581;&#1583;</span></span></span></font></p>
<p style="text-align: right; line-height: 150%; text-indent: -9pt; unicode-bidi: embed; direction: rtl; margin-right: 0.5in" class="MsoNormal" dir="rtl">
<span class="htmlval1"><font face="Nina"><span style="color: black">·</span></font><span style="font-variant: normal; font-style: normal; font-family: Nina; color: black; font-size: 7pt">&nbsp;&nbsp;
</span></span><font face="Nina"><span dir="rtl"><span class="htmlval1">
<span style="color: black" lang="AR-SA">&#1576;&#1585;&#1608;&#1586; &#1585;&#1587;&#1575;&#1606;&#1610; &#1593;&#1606;&#1608;&#1575;&#1606; &#1608;&#1575;&#1581;&#1583;</span></span></span></font></p>
<p style="text-align: right; line-height: 150%; text-indent: -9pt; unicode-bidi: embed; direction: rtl; margin-right: 0.5in" class="MsoNormal" dir="rtl">
<span class="htmlval1"><font face="Nina"><span style="color: black">·</span></font><span style="font-variant: normal; font-style: normal; font-family: Nina; color: black; font-size: 7pt">&nbsp;&nbsp;
</span></span><font face="Nina"><span dir="rtl"><span class="htmlval1">
<span style="color: black" lang="AR-SA">&#1576;&#1585;&#1608;&#1586; &#1585;&#1587;&#1575;&#1606;&#1610; &#1578;&#1575;&#1585;&#1610;&#1582; &#1575;&#1582;&#1585;&#1610;&#1606; &#1588;&#1575;&#1585;&#1688;</span></span></span></font></p>
<div style="mso-element: para-border-div; border-left: medium none; border-right: medium none; border-top: medium none; border-bottom: 1.5pt double #003300; margin-left: 0in; margin-right: 27pt; padding-left: 0in; padding-right: 0in; padding-top: 0in; padding-bottom: 1pt" dir="rtl">
  <p style="text-align: right; line-height: 150%; unicode-bidi: embed; direction: rtl; border: medium none; padding: 0in" class="MsoNormal" dir="rtl">
  <font face="Nina"><span style="color: black" lang="FA">&nbsp;</span></font></div>
<p style="text-align: right; line-height: 150%; unicode-bidi: embed; direction: rtl; margin-right: 0.25in" class="MsoNormal" dir="rtl">
<font face="Nina"><span style="color: green" lang="FA">&#1605;&#1588;&#1575;&#1607;&#1583;&#1607; &#1605;&#1607;&#1604;&#1578; &#1576;&#1575;&#1602;&#1740; &#1605;&#1575;&#1606;&#1583;&#1607; 
&#1576;&#1585;&#1575;&#1740; &#1588;&#1575;&#1585;&#1688; &#1605;&#1580;&#1583;&#1583; &#1705;&#1662;&#1587;&#1608;&#1604; &#1607;&#1575;</span></font></p>
<div style="mso-element: para-border-div; mso-border-bottom-alt: solid windowtext .5pt; border-left: medium none; border-right: medium none; border-top: medium none; border-bottom: 1pt solid windowtext; margin-left: 0in; margin-right: 27pt; padding-left: 0in; padding-right: 0in; padding-top: 0in; padding-bottom: 1pt" dir="rtl">
  <p style="text-align: right; line-height: 150%; unicode-bidi: embed; direction: rtl; border: medium none; padding: 0in" class="MsoNormal" dir="rtl">
  <font face="Nina"><span style="color: black" lang="FA">&#1588;&#1575;&#1585;&#1688; &#1740;&#1705; &#1705;&#1662;&#1587;&#1608;&#1604; &#1662;&#1585; &#1662;&#1587; &#1575;&#1586; 
  &#1740;&#1705; &#1587;&#1575;&#1604; &#1576;&#1607; &#1662;&#1575;&#1740;&#1575;&#1606; &#1605;&#1740; &#1585;&#1587;&#1583; .&#1576;&#1575; &#1575;&#1606;&#1578;&#1582;&#1575;&#1576; &#1607;&#1585; &#1740;&#1705; &#1575;&#1586; &#1578;&#1575;&#1585;&#1740;&#1582; &#1607;&#1575;&#1740; &#1578;&#1593;&#1740;&#1740;&#1606; &#1588;&#1583;&#1607; &#1583;&#1585;&#1604;&#1740;&#1606;&#1705; &#1578;&#1575;&#1585;&#1740;&#1582; 
  &#1588;&#1575;&#1585;&#1688; &#1605;&#1740; &#1578;&#1608;&#1575;&#1606; &#1604;&#1740;&#1587;&#1578; &#1705;&#1662;&#1587;&#1608;&#1604; &#1607;&#1575;&#1740;&#1740; &#1585;&#1575; &#1705;&#1607; &#1578;&#1575; &#1570;&#1606; &#1586;&#1605;&#1575;&#1606; &#1605;&#1607;&#1604;&#1578; &#1588;&#1575;&#1585;&#1688;&#1588;&#1575;&#1606; &#1576;&#1607; &#1575;&#1578;&#1605;&#1575;&#1605; &#1605;&#1740; &#1585;&#1587;&#1583; &#1585;&#1575; 
  &#1605;&#1588;&#1575;&#1607;&#1583;&#1607; &#1705;&#1585;&#1583;. </span></font></p>
  <p style="text-align: right; line-height: 150%; unicode-bidi: embed; direction: rtl; border: medium none; padding: 0in" class="MsoNormal" dir="rtl">
 </p>
  <p style="text-align: right; line-height: 150%; unicode-bidi: embed; direction: rtl; border: medium none; padding: 0in" class="MsoNormal" dir="rtl">
  <font face="Nina"><span style="color: black" dir="ltr">&nbsp;</span></font></div>
<p style="text-align: right; line-height: 150%; unicode-bidi: embed; direction: rtl" class="MsoNormal" dir="rtl">
<font face="Nina"><span style="color: green" lang="FA">&#1581;&#1584;&#1601; &#1608;&#1575;&#1581;&#1583; &#1605;&#1608;&#1580;&#1608;&#1583;</span></font></p>
<p style="text-align: right; line-height: 150%; unicode-bidi: embed; direction: rtl" class="MsoNormal" dir="rtl">
<font face="Nina"><span lang="FA">&#1583;&#1585; &#1589;&#1608;&#1585;&#1578;&#1740; &#1705;&#1607;&nbsp; &#1606;&#1575;&#1605; &#1608;&#1575;&#1581;&#1583; &#1608;&#1575;&#1585;&#1583; &#1588;&#1583;&#1607; &#1583;&#1585; &#1587;&#1740;&#1587;&#1578;&#1605; &#1605;&#1608;&#1580;&#1608;&#1583; 
&#1576;&#1575;&#1588;&#1583;&#1548; &#1570;&#1606; &#1608;&#1575;&#1581;&#1583; &#1576;&#1607; &#1607;&#1605;&#1585;&#1575;&#1607; &#1575;&#1591;&#1604;&#1575;&#1593;&#1575;&#1578; &#1605;&#1585;&#1576;&#1608;&#1591; &#1576;&#1607; &#1705;&#1662;&#1587;&#1608;&#1604; &#1607;&#1575;&#1740; &#1606;&#1589;&#1576; &#1588;&#1583;&#1607; &#1583;&#1585; &#1570;&#1606; &#1608;&#1575;&#1581;&#1583; &#1575;&#1586; &#1587;&#1740;&#1587;&#1578;&#1605; 
&#1581;&#1584;&#1601; &#1605;&#1740; &#1711;&#1585;&#1583;&#1583;.</span></font></p>
<p style="text-align: right; line-height: 150%; unicode-bidi: embed; direction: rtl" class="MsoNormal" dir="rtl">&nbsp;</p>
<p style="text-align: right; line-height: 150%; unicode-bidi: embed; direction: rtl" class="MsoNormal" dir="rtl">
</p>
<div style="mso-element: para-border-div; mso-border-bottom-alt: solid windowtext .5pt; border-left: medium none; border-right: medium none; border-top: medium none; border-bottom: 1pt solid windowtext; padding-left: 0in; padding-right: 0in; padding-top: 0in; padding-bottom: 1pt" dir="rtl">
  <p style="text-align: right; line-height: 150%; unicode-bidi: embed; direction: rtl; border: medium none; padding: 0in" class="MsoNormal" dir="rtl">
  <font face="Nina"><span lang="AR-SA">&nbsp;</span></font></div>
<p style="text-align: right; line-height: 150%; unicode-bidi: embed; direction: rtl" class="MsoNormal" dir="rtl">
<font face="Nina"><span lang="AR-SA">&nbsp;</span></font></p>
<p style="text-align: right; line-height: 150%; unicode-bidi: embed; direction: rtl" class="MsoNormal" dir="rtl">
<font face="Nina"><span style="color: green" lang="FA">&#1575;&#1601;&#1586;&#1608;&#1583;&#1606; &#1705;&#1662;&#1587;&#1608;&#1604; &#1580;&#1583;&#1740;&#1583;:</span></font></p>
<p style="text-align: right; line-height: 150%; unicode-bidi: embed; direction: rtl; margin-right: 27pt" class="MsoNormal" dir="rtl">
<font face="Nina"><span style="color: black" lang="FA">&#1575;&#1591;&#1604;&#1575;&#1593;&#1575;&#1578;&nbsp; &#1607;&#1585; &#1705;&#1662;&#1587;&#1608;&#1604; &#1588;&#1575;&#1605;&#1604; 
&#1605;&#1608;&#1575;&#1585;&#1583; &#1586;&#1740;&#1585; &#1575;&#1587;&#1578;:</span></font></p>
<p style="text-align: right; line-height: 150%; text-indent: -0.25in; unicode-bidi: embed; direction: rtl; margin-right: 99pt" class="MsoNormal" dir="rtl">
<span style="line-height: 150%; color: black; font-size: 10pt">
<font face="Nina">1.</font><span style="font-variant: normal; font-style: normal; font-family: Nina; font-size: 7pt">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><font face="Nina">
<span style="line-height: 150%; color: black; font-size: 10pt" dir="rtl" lang="FA">
&#1606;&#1608;&#1593; &#1705;&#1662;&#1587;&#1608;&#1604;</span></font></p>
<p style="text-align: right; line-height: 150%; text-indent: -0.25in; unicode-bidi: embed; direction: rtl; margin-right: 99pt" class="MsoNormal" dir="rtl">
<span style="line-height: 150%; color: black; font-size: 10pt">
<font face="Nina">2.</font><span style="font-variant: normal; font-style: normal; font-family: Nina; font-size: 7pt">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><font face="Nina">
<span style="line-height: 150%; color: black; font-size: 10pt" dir="rtl" lang="FA">
&#1608;&#1586;&#1606; &#1705;&#1662;&#1587;&#1608;&#1604;</span></font></p>
<p style="text-align: right; line-height: 150%; text-indent: -0.25in; unicode-bidi: embed; direction: rtl; margin-right: 99pt" class="MsoNormal" dir="rtl">
<span style="line-height: 150%; color: black; font-size: 10pt">
<font face="Nina">3.</font><span style="font-variant: normal; font-style: normal; font-family: Nina; font-size: 7pt">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><font face="Nina">
<span style="line-height: 150%; color: black; font-size: 10pt" dir="rtl" lang="FA">
&#1608;&#1575;&#1581;&#1583;&#1740; &#1705;&#1607; &#1705;&#1662;&#1587;&#1608;&#1604; &#1583;&#1585; &#1570;&#1606; &#1606;&#1589;&#1576; &#1588;&#1583;&#1607; &#1575;&#1587;&#1578;</span></font></p>
<p style="text-align: right; line-height: 150%; text-indent: -0.25in; unicode-bidi: embed; direction: rtl; margin-right: 99pt" class="MsoNormal" dir="rtl">
<span style="line-height: 150%; color: black; font-size: 10pt">
<font face="Nina">4.</font><span style="font-variant: normal; font-style: normal; font-family: Nina; font-size: 7pt">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><font face="Nina">
<span style="line-height: 150%; color: black; font-size: 10pt" dir="rtl" lang="FA">
&#1605;&#1581;&#1604; &#1606;&#1589;&#1576; &#1705;&#1662;&#1587;&#1608;&#1604; &#1583;&#1585; &#1608;&#1575;&#1581;&#1583;</span></font></p>
<p style="text-align: right; line-height: 150%; text-indent: -0.25in; unicode-bidi: embed; direction: rtl; margin-right: 99pt" class="MsoNormal" dir="rtl">
<span style="line-height: 150%; color: black; font-size: 10pt">
<font face="Nina">5.</font><span style="font-variant: normal; font-style: normal; font-family: Nina; font-size: 7pt">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><font face="Nina">
<span style="line-height: 150%; color: black; font-size: 10pt" dir="rtl" lang="FA">
&#1588;&#1605;&#1575;&#1585;&#1607; &#1575;&#1605;&#1608;&#1575;&#1604; &#1602;&#1583;&#1740;&#1605;</span></font></p>
<p style="text-align: right; line-height: 150%; text-indent: -0.25in; unicode-bidi: embed; direction: rtl; margin-right: 99pt" class="MsoNormal" dir="rtl">
<span style="line-height: 150%; color: black; font-size: 10pt">
<font face="Nina">6.</font><span style="font-variant: normal; font-style: normal; font-family: Nina; font-size: 7pt">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><font face="Nina">
<span style="line-height: 150%; color: black; font-size: 10pt" dir="rtl" lang="FA">
&#1588;&#1605;&#1575;&#1585;&#1607; &#1575;&#1605;&#1608;&#1575;&#1604; &#1580;&#1583;&#1740;&#1583;</span></font></p>
<p style="text-align: right; line-height: 150%; text-indent: -0.25in; unicode-bidi: embed; direction: rtl; margin-right: 99pt" class="MsoNormal" dir="rtl">
<span style="line-height: 150%; color: black; font-size: 10pt">
<font face="Nina">7.</font><span style="font-variant: normal; font-style: normal; font-family: Nina; font-size: 7pt">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><font face="Nina">
<span style="line-height: 150%; color: black; font-size: 10pt" dir="rtl" lang="FA">
&#1588;&#1605;&#1575;&#1585;&#1607; &#1587;&#1585;&#1740;&#1575;&#1604;</span></font></p>
<p style="text-align: right; line-height: 150%; text-indent: -0.25in; unicode-bidi: embed; direction: rtl; margin-right: 99pt" class="MsoNormal" dir="rtl">
<span style="line-height: 150%; color: black; font-size: 10pt">
<font face="Nina">8.</font><span style="font-variant: normal; font-style: normal; font-family: Nina; font-size: 7pt">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><font face="Nina">
<span style="line-height: 150%; color: black; font-size: 10pt" dir="rtl" lang="FA">
&#1578;&#1575;&#1585;&#1740;&#1582; &#1570;&#1582;&#1585;&#1740;&#1606; &#1588;&#1575;&#1585;&#1688;</span></font></p>
<p style="text-align: right; line-height: 150%; text-indent: -0.25in; unicode-bidi: embed; direction: rtl; margin-right: 99pt" class="MsoNormal" dir="rtl">
<span style="line-height: 150%; color: black; font-size: 10pt">
<font face="Nina">9.</font><span style="font-variant: normal; font-style: normal; font-family: Nina; font-size: 7pt">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><font face="Nina">
<span style="line-height: 150%; color: black; font-size: 10pt" dir="rtl" lang="FA">
&#1605;&#1604;&#1575;&#1581;&#1592;&#1575;&#1578;</span></font></p>
<p style="text-align: right; line-height: 150%; unicode-bidi: embed; direction: rtl; margin-right: 27pt" class="MsoNormal" dir="rtl">
<font face="Nina"><span style="color: black" lang="FA">&#1588;&#1605;&#1575;&#1585;&#1607; &#1575;&#1605;&#1608;&#1575;&#1604; &#1580;&#1583;&#1740;&#1583; &#1607;&#1585; &#1705;&#1662;&#1587;&#1608;&#1604; 
&#1740;&#1705;&#1578;&#1575; &#1605;&#1740; &#1576;&#1575;&#1588;&#1583; &#1608;&#1583;&#1585; &#1589;&#1608;&#1585;&#1578; &#1583;&#1585;&#1580; &#1588;&#1605;&#1575;&#1585;&#1607; &#1578;&#1705;&#1585;&#1575;&#1585;&#1740; &#1662;&#1740;&#1594;&#1575;&#1605; &#1582;&#1591;&#1575; &#1606;&#1605;&#1575;&#1740;&#1588; &#1583;&#1575;&#1583;&#1607; &#1605;&#1740; &#1588;&#1608;&#1583;.</span></font></p>
<p style="text-align: right; line-height: 150%; unicode-bidi: embed; direction: rtl; margin-right: 27pt" class="MsoNormal" dir="rtl">
<font face="Nina"><span style="color: black" lang="FA">&#1578;&#1575;&#1585;&#1740;&#1582;&nbsp; &#1588;&#1575;&#1585;&#1688; &#1576;&#1593;&#1583;&#1740; &#1740;&#1705; &#1587;&#1575;&#1604; 
&#1662;&#1587; &#1575;&#1586; &#1570;&#1582;&#1585;&#1740;&#1606; &#1578;&#1575;&#1585;&#1740;&#1582; &#1588;&#1575;&#1585;&#1688; &#1605;&#1740; &#1576;&#1575;&#1588;&#1583; &#1705;&#1607; &#1576;&#1607; &#1591;&#1608;&#1585; &#1582;&#1608;&#1583;&#1705;&#1575;&#1585; &#1605;&#1581;&#1575;&#1587;&#1576;&#1607; &#1608; &#1576;&#1607; &#1575;&#1591;&#1604;&#1575;&#1593;&#1575;&#1578; &#1587;&#1740;&#1587;&#1578;&#1605; &#1575;&#1601;&#1586;&#1608;&#1583;&#1607; 
&#1605;&#1740; &#1588;&#1608;&#1583;.</span></font></p>
<p style="text-align: right; line-height: 150%; unicode-bidi: embed; direction: rtl; margin-right: 27pt" class="MsoNormal" dir="rtl">&nbsp;</p>
<p style="text-align: right; line-height: 150%; unicode-bidi: embed; direction: rtl; margin-right: 27pt" class="MsoNormal" dir="rtl">&nbsp;</p>
<p style="text-align: right; line-height: 150%; unicode-bidi: embed; direction: rtl; margin-right: 27pt" class="MsoNormal" dir="rtl">
<font face="Nina"><span style="color: black" lang="FA">
</span></font></p>
<p style="text-align: right; line-height: 150%; unicode-bidi: embed; direction: rtl; margin-right: 27pt" class="MsoNormal" dir="rtl">&nbsp;</p>
<p style="text-align: right; line-height: 150%; unicode-bidi: embed; direction: rtl; margin-right: 27pt" class="MsoNormal" dir="rtl">&nbsp;</p>
<div style="mso-element: para-border-div; mso-border-bottom-alt: solid windowtext .5pt; border-left: medium none; border-right: medium none; border-top: medium none; border-bottom: 1pt solid windowtext; padding-left: 0in; padding-right: 0in; padding-top: 0in; padding-bottom: 1pt" dir="rtl">
  <p style="text-align: right; line-height: 150%; unicode-bidi: embed; direction: rtl; border: medium none; padding: 0in" class="MsoNormal" dir="rtl">
  <font face="Nina"><span lang="FA">&nbsp;</span></font></div>
<p style="text-align: right; line-height: 150%; unicode-bidi: embed; direction: rtl" class="MsoNormal" dir="rtl">
<font face="Nina"><span lang="FA">&nbsp;</span></font></p>
<p style="text-align: right; line-height: 150%; unicode-bidi: embed; direction: rtl; margin-right: 0.25in" class="MsoNormal" dir="rtl">
<font face="Nina"><span style="color: green" lang="FA">&#1580;&#1587;&#1578;&#1580;&#1608; &#1576;&#1585;&#1575;&#1587;&#1575;&#1587;:</span></font></p>
<p style="text-align: right; line-height: 150%; text-indent: -0.25in; unicode-bidi: embed; direction: rtl; margin-right: 81pt" class="MsoNormal" dir="rtl">
<font face="Nina">
<span style="line-height: 150%; color: black; font-size: 10pt">·</span></font><span style="line-height: 150%; font-variant: normal; font-style: normal; font-family: Nina; color: black; font-size: 7pt">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span><font face="Nina">
<span style="line-height: 150%; color: black; font-size: 10pt" dir="rtl" lang="FA">
&#1606;&#1608;&#1593; &#1705;&#1662;&#1587;&#1608;&#1604;</span></font></p>
<p style="text-align: right; line-height: 150%; text-indent: -0.25in; unicode-bidi: embed; direction: rtl; margin-right: 81pt" class="MsoNormal" dir="rtl">
<font face="Nina">
<span style="line-height: 150%; color: black; font-size: 10pt">·</span></font><span style="line-height: 150%; font-variant: normal; font-style: normal; font-family: Nina; color: black; font-size: 7pt">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span><font face="Nina">
<span style="line-height: 150%; color: black; font-size: 10pt" dir="rtl" lang="FA">
&#1608;&#1586;&#1606; &#1705;&#1662;&#1587;&#1608;&#1604; </span></font></p>
<p style="text-align: right; line-height: 150%; text-indent: -0.25in; unicode-bidi: embed; direction: rtl; margin-right: 81pt" class="MsoNormal" dir="rtl">
<font face="Nina">
<span style="line-height: 150%; color: black; font-size: 10pt">·</span></font><span style="line-height: 150%; font-variant: normal; font-style: normal; font-family: Nina; color: black; font-size: 7pt">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span><font face="Nina">
<span style="line-height: 150%; color: black; font-size: 10pt" dir="rtl" lang="FA">
&#1608;&#1575;&#1581;&#1583;&#1740; &#1705;&#1607; &#1705;&#1662;&#1587;&#1608;&#1604; &#1583;&#1585; &#1570;&#1606; &#1606;&#1589;&#1576; &#1588;&#1583;&#1607;</span></font></p>
<p style="text-align: right; line-height: 150%; unicode-bidi: embed; direction: rtl" class="MsoNormal" dir="rtl">
<font face="Nina"><span lang="FA">&#1583;&#1585; &#1589;&#1608;&#1585;&#1578;&#1740; &#1705;&#1607; &#1607;&#1585; &#1587;&#1607; &#1605;&#1588;&#1582;&#1589;&#1607; &#1608;&#1575;&#1585;&#1583; &#1588;&#1583;&#1607; &#1576;&#1575;&#1588;&#1583; &#1604;&#1740;&#1587;&#1578; 
&#1578;&#1605;&#1575;&#1605; &#1705;&#1662;&#1587;&#1608;&#1604; &#1607;&#1575; &#1740;&#1740; &#1705;&#1607; &#1606;&#1608;&#1593; &#1608; &#1608;&#1586;&#1606; &#1608; &#1608;&#1575;&#1581;&#1583; &#1570;&#1606; &#1576;&#1575; &#1607;&#1585; &#1587;&#1607; &#1605;&#1588;&#1582;&#1589;&#1607; &#1605;&#1591;&#1575;&#1576;&#1602;&#1578; &#1583;&#1575;&#1588;&#1578;&#1607; &#1576;&#1575;&#1588;&#1583; &#1606;&#1605;&#1575;&#1740;&#1588; 
&#1583;&#1575;&#1583;&#1607; &#1605;&#1740; &#1588;&#1608;&#1583;.</span></font></p>
<div style="mso-element: para-border-div; mso-border-bottom-alt: solid windowtext .5pt; border-left: medium none; border-right: medium none; border-top: medium none; border-bottom: 1pt solid windowtext; padding-left: 0in; padding-right: 0in; padding-top: 0in; padding-bottom: 1pt" dir="rtl">
  <p style="text-align: right; line-height: 150%; unicode-bidi: embed; direction: rtl; border: medium none; padding: 0in" class="MsoNormal" dir="rtl">&nbsp;</p>
  <p style="text-align: right; line-height: 150%; unicode-bidi: embed; direction: rtl; border: medium none; padding: 0in" class="MsoNormal" dir="rtl">
  <font face="Nina"><span style="color: green" lang="FA">
 </span></font></p>
  <p style="text-align: right; line-height: 150%; unicode-bidi: embed; direction: rtl; border: medium none; padding: 0in" class="MsoNormal" dir="rtl">&nbsp;</p>
  <p style="text-align: right; line-height: 150%; unicode-bidi: embed; direction: rtl; border: medium none; padding: 0in" class="MsoNormal" dir="rtl">&nbsp;</p>
  <p style="text-align: right; line-height: 150%; unicode-bidi: embed; direction: rtl; border: medium none; padding: 0in" class="MsoNormal" dir="rtl">&nbsp;</div>
<p style="text-align: right; line-height: 150%; unicode-bidi: embed; direction: rtl" class="MsoNormal" dir="rtl">
<font face="Nina"><span lang="FA">&nbsp;</span></font></p>
<p dir="rtl">&nbsp;</p>

</body>

</html>

<?php
ob_end_flush(); 
?>