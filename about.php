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
<title>بانک اطلاعاتی اطفا حریق دانشگاه شهید بهشتی</title>
<div  style="position: absolute;top:  8px;right:0px; width: 1000px; height: 70px;"align="right" >
	<img src="Image/img0012.gif" align="right" width="2000" height="70"></div>
<div style="position: absolute;  top: 30px; left:0px; width: 1000px; height: 45px;"align="left">
 	<a  href="ph1.php"  ><input type="button" value="بازگشت"  /></a>
	<a href="logout.php" ><input type="button" value="خروج" /></a></div>
	<div style="position: absolute;  top: 10px; right:20px;"align="right"><p><font color="336699" face="B Nazanin" size="5">بانک اطلاعاتی اطفا حریق دانشگاه شهید بهشتی </font>   </p></div>
<style>
 p.MsoNormal
	{mso-style-parent:"";
	margin-bottom:.0001pt;
	font-size:12.0pt;
	font-family:"Times New Roman";
	margin-left:0in; margin-right:0in; margin-top:0in}
span.htmlval1
	{color:blue}
</style>
</head>
<body background="Image/page1_bkgrnd.png" bgcolor="#7D9EC0" text="#000000" style="scrollbar-face-color: #ECE9D8; scrollbar-arrow-color: #000000; scrollbar-3dlight-color: #ECE9D8; scrollbar-darkshadow-color: #716F64; scrollbar-highlight-color: #FFFFFF; scrollbar-shadow-color: #ACA899; scrollbar-track-color: #D4D0C8;">

<br><br><br>
<p class="MsoNormal" dir="RTL" style="text-align:right;line-height:150%;direction:
rtl;unicode-bidi:embed"><span lang="FA" style="color: black">&nbsp;</span></p>
<p class="MsoNormal" dir="RTL" style="text-align:right;line-height:150%;direction:
rtl;unicode-bidi:embed"><span lang="FA" style="color: black"><font size="4">
سیستم بانک اطلاعاتی ا طفا حریق شامل اطلاعاتی درباره کپسول های&nbsp; اطفا حریق واحد 
های مختلف دانشگاه شهید بهشتی می باشد.</font></span></p>
<p class="MsoNormal" dir="RTL" style="text-align:right;line-height:150%;direction:
rtl;unicode-bidi:embed"><span lang="FA" style="color: black"><font size="4">این 
اطلاعات به شرح زیر می باشند:</font></span></p>
<p class="MsoNormal" dir="RTL" style="text-align: right; text-indent: -9.0pt; line-height: 150%; direction: rtl; unicode-bidi: embed; margin-right: .5in">
<span style="font-family: Symbol; color: black">·<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;
</span></span><span lang="FA" style="color: black" dir="RTL">نوع کپسول</span></p>
<p class="MsoNormal" dir="RTL" style="text-align: right; text-indent: -9.0pt; line-height: 150%; direction: rtl; unicode-bidi: embed; margin-right: .5in">
<span style="font-family: Symbol; color: black">·<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;
</span></span><span lang="FA" style="color: black" dir="RTL">وزن کپسول</span></p>
<p class="MsoNormal" dir="RTL" style="text-align: right; text-indent: -9.0pt; line-height: 150%; direction: rtl; unicode-bidi: embed; margin-right: .5in">
<span style="font-family: Symbol; color: black">·<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;
</span></span><span lang="FA" style="color: black" dir="RTL">واحدی که کپسول در 
آن نصب شده است</span></p>
<p class="MsoNormal" dir="RTL" style="text-align: right; text-indent: -9.0pt; line-height: 150%; direction: rtl; unicode-bidi: embed; margin-right: .5in">
<span style="font-family: Symbol; color: black">·<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;
</span></span><span lang="FA" style="color: black" dir="RTL">محل نصب کپسول در 
واحد</span></p>
<p class="MsoNormal" dir="RTL" style="text-align: right; text-indent: -9.0pt; line-height: 150%; direction: rtl; unicode-bidi: embed; margin-right: .5in">
<span style="font-family: Symbol; color: black">·<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;
</span></span><span lang="FA" style="color: black" dir="RTL">شماره اموال قدیم</span></p>
<p class="MsoNormal" dir="RTL" style="text-align: right; text-indent: -9.0pt; line-height: 150%; direction: rtl; unicode-bidi: embed; margin-right: .5in">
<span style="font-family: Symbol; color: black">·<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;
</span></span><span lang="FA" style="color: black" dir="RTL">شماره اموال جدید</span></p>
<p class="MsoNormal" dir="RTL" style="text-align: right; text-indent: -9.0pt; line-height: 150%; direction: rtl; unicode-bidi: embed; margin-right: .5in">
<span style="font-family: Symbol; color: black">·<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;
</span></span><span lang="FA" style="color: black" dir="RTL">شماره سریال</span></p>
<p class="MsoNormal" dir="RTL" style="text-align: right; text-indent: -9.0pt; line-height: 150%; direction: rtl; unicode-bidi: embed; margin-right: .5in">
<span style="font-family: Symbol; color: black">·<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;
</span></span><span lang="FA" style="color: black" dir="RTL">تاریخ آخرین شارژ</span></p>
<p class="MsoNormal" dir="RTL" style="text-align: right; text-indent: -9.0pt; line-height: 150%; direction: rtl; unicode-bidi: embed; margin-right: .5in">
<span style="font-family: Symbol; color: black">·<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;
</span></span><span lang="FA" style="color: black" dir="RTL">تاریخ&nbsp; شارژ بعدی</span></p>
<p class="MsoNormal" dir="RTL" style="text-align: right; text-indent: -9.0pt; line-height: 150%; direction: rtl; unicode-bidi: embed; margin-right: .5in">
<span style="font-family: Symbol; color: black">·<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;
</span></span><span lang="FA" style="color: black" dir="RTL">ملاحظات</span></p>
<p class="MsoNormal" dir="RTL" style="margin-right:.25in;text-align:right;
line-height:150%;direction:rtl;unicode-bidi:embed">
<span lang="FA" style="color: black">&nbsp;</span></p>
<p class="MsoNormal" dir="RTL" style="margin-right:.25in;text-align:right;
line-height:150%;direction:rtl;unicode-bidi:embed">
<span lang="FA" style="color: black">&nbsp;</span></p>
<p class="MsoNormal" dir="RTL" style="margin-right:.25in;text-align:right;
line-height:150%;direction:rtl;unicode-bidi:embed"><b>
<span lang="FA" style="font-size: 14.0pt; line-height: 150%; color: black">
امکانات سیستم:</span></b></p>
<p class="MsoNormal" dir="RTL" style="text-align: right; text-indent: -9.0pt; line-height: 150%; direction: rtl; unicode-bidi: embed; margin-right: .5in">
<span style="font-family: Symbol; color: black">·<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;
</span></span><span lang="FA" style="color: black" dir="RTL">مشاهده مهلت باقی 
مانده برای شارژ مجدد کپسول ها</span></p>
<p class="MsoNormal" dir="RTL" style="text-align: right; text-indent: -9.0pt; line-height: 150%; direction: rtl; unicode-bidi: embed; margin-right: .5in">
<span style="font-family: Symbol; color: black">·<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;
</span></span><span lang="FA" style="color: black" dir="RTL">افزودن واحد جدید</span></p>
<p class="MsoNormal" dir="RTL" style="text-align: right; text-indent: -9.0pt; line-height: 150%; direction: rtl; unicode-bidi: embed; margin-right: .5in">
<span style="font-family: Symbol; color: black">·<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;
</span></span><span lang="FA" style="color: black" dir="RTL">حذف واحد موجود</span></p>
<p class="MsoNormal" dir="RTL" style="text-align: right; text-indent: -9.0pt; line-height: 150%; direction: rtl; unicode-bidi: embed; margin-right: .5in">
<span style="font-family: Symbol; color: black">·<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;
</span></span><span lang="FA" style="color: black" dir="RTL">افزودن کپسول جدید</span></p>
<p class="MsoNormal" dir="RTL" style="text-align: right; text-indent: -9.0pt; line-height: 150%; direction: rtl; unicode-bidi: embed; margin-right: .5in">
<span style="font-family: Symbol; color: black">·<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;
</span></span><span lang="FA" style="color: black" dir="RTL">حذف کپسول موجود</span></p>
<p class="MsoNormal" dir="RTL" style="text-align: right; text-indent: -9.0pt; line-height: 150%; direction: rtl; unicode-bidi: embed; margin-right: .5in">
<span style="font-family: Symbol; color: black">·<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;
</span></span><span lang="FA" style="color: black" dir="RTL">جستجو براساس:</span></p>
<p class="MsoNormal" dir="RTL" style="text-align: right; text-indent: -9.0pt; line-height: 150%; direction: rtl; unicode-bidi: embed; margin-right: 1.0in">
<span style="font-size: 11.0pt; line-height: 150%; font-family: Courier New; color: black">
o<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp; </span></span>
<span lang="FA" style="font-size: 11.0pt; line-height: 150%; color: black" dir="RTL">
نوع کپسول</span></p>
<p class="MsoNormal" dir="RTL" style="text-align: right; text-indent: -9.0pt; line-height: 150%; direction: rtl; unicode-bidi: embed; margin-right: 1.0in">
<span style="font-size: 11.0pt; line-height: 150%; font-family: Courier New; color: black">
o<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp; </span></span>
<span lang="FA" style="font-size: 11.0pt; line-height: 150%; color: black" dir="RTL">
وزن کپسول </span></p>
<p class="MsoNormal" dir="RTL" style="text-align: right; text-indent: -9.0pt; line-height: 150%; direction: rtl; unicode-bidi: embed; margin-right: 1.0in">
<span style="font-size: 11.0pt; line-height: 150%; font-family: Courier New; color: black">
o<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp; </span></span>
<span lang="FA" style="font-size: 11.0pt; line-height: 150%; color: black" dir="RTL">
واحدی که کپسول در آن نصب شده</span></p>
<p class="MsoNormal" dir="RTL" style="text-align: right; text-indent: -9.0pt; line-height: 150%; direction: rtl; unicode-bidi: embed; margin-right: .5in">
<span class="htmlval1"><span style="font-family: Symbol; color: black">·<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;
</span></span></span><span dir="RTL"><span class="htmlval1">
<span lang="AR-SA" style="color:black">بروز رساني محل نصب کپسول در واحد</span></span></span></p>
<p class="MsoNormal" dir="RTL" style="text-align: right; text-indent: -9.0pt; line-height: 150%; direction: rtl; unicode-bidi: embed; margin-right: .5in">
<span class="htmlval1"><span style="font-family: Symbol; color: black">·<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;
</span></span></span><span dir="RTL"><span class="htmlval1">
<span lang="AR-SA" style="color:black">بروز رساني عنوان واحد</span></span></span></p>
<p class="MsoNormal" dir="RTL" style="text-align: right; text-indent: -9.0pt; line-height: 150%; direction: rtl; unicode-bidi: embed; margin-right: .5in">
<span style="font-family: Symbol; color: black">·<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;
</span></span><span dir="RTL"><span class="htmlval1">
<span lang="AR-SA" style="color:black">بروز رساني تاريخ اخرين شارژ</span></span></span></p>
<p class="MsoNormal" dir="RTL" style="margin-right:.25in;text-align:right;
line-height:150%;direction:rtl;unicode-bidi:embed">
<span lang="FA" style="color: black">&nbsp;</span></p>
<p class="MsoNormal" dir="RTL" style="margin-right:.25in;text-align:right;
line-height:150%;direction:rtl;unicode-bidi:embed">
<span lang="FA" style="color: black">&nbsp;</span></p>
<p class="MsoNormal" dir="RTL" style="margin-right:.25in;text-align:right;
line-height:150%;direction:rtl;unicode-bidi:embed">
<span dir="LTR" style="color: black">&nbsp;</span></p>
<p class="MsoNormal" dir="RTL" style="text-align:right;line-height:150%;direction:
rtl;unicode-bidi:embed"><span lang="FA" style="color: black">&nbsp;</span></p>
<p class="MsoNormal" style="line-height:150%">
<span lang="FA" dir="RTL" style="color: black">&nbsp;</span></p>
</body>
</html>
<?php
ob_end_flush(); 
?>