<?php
ob_start ();
session_start ();
if (@$_SESSION ["Login"] != "go") {
	header ( "Location: login.php" );
	exit ();}?>
<?php
if (isset($_GET["Nuser"])&&isset($_GET["NPass"])) {
$_user = $_GET ["Nuser"];
$_Pass = $_GET ["NPass"];

$server = mysql_connect ( "localhost", "root", "" );
mysql_select_db ( "quenchfiredb", $server );
$query = "INSERT INTO  user_t (UserName,PassWord,SessionID ) VALUES
('$_user','$_Pass','0')";
if(mysql_query ( $query )){
//$numrows = mysql_numrows ( $r );
//if ($numrows > 0) {
	echo ("<script type = 'text/javascript'>
alert('اضافه کردن کاربر جدید با موفقیت انجام شد');
</script>");
	
} else {
	echo ("<script type = 'text/javascript'>
alert('اضافه کردن کاربر جدید با موفقیت انجام نشد');
</script>");
}}?>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<head>
<div
	style="position: absolute; top: 8px; right: 0px; width: 1000px; height: 70px;"
	align="right"><img src="Image/img0012.gif" align="right" width="2000"
	height="70"></div>
<div
	style="position: absolute; top: 30px; left: 0px; width: 1000px; height: 45px;"
	align="left"><a href="ph1.php"><input type="button" value="بازگشت" /></a>
<a href="logout.php"><input type="button" value="خروج" /></a></div>
<div style="position: absolute; top: 10px; right: 20px;" align="right">
<p><font color="336699" face="B Nazanin" size="5">تاریخ شارژ بعدی
</font></p>
</div>

<title> تاریخ شارژ بعدی </title>
<link rel="stylesheet" type="text/css" media="all" href="skins/aqua/theme.css" title="Aqua" />
		<link rel="alternate stylesheet" type="text/css" media="all" href="calendar/skins/calendar-blue.css" title="winter" />
		<link rel="alternate stylesheet" type="text/css" media="all" href="calendar/skins/calendar-blue2.css" title="blue" />
		<link rel="alternate stylesheet" type="text/css" media="all" href="calendar/skins/calendar-brown.css" title="summer" />
		<link rel="alternate stylesheet" type="text/css" media="all" href="calendar/skins/calendar-green.css" title="green" />
		<link rel="alternate stylesheet" type="text/css" media="all" href="calendar/skins/calendar-system.css" title="system" />
		<script type="text/javascript" src="calendar/jalali.js"></script>
		<script type="text/javascript" src="calendar/calendar.js"></script>
		<script type="text/javascript" src="calendar/calendar-setup.js"></script>
		<script type="text/javascript" src="calendar/calendar-fa.js"></script>
<script type="text/javascript">
var oldLink = null;
function setActiveStyleSheet(link, title) {
  var i, a, main;
  for(i=0; (a = document.getElementsByTagName("link")[i]); i++) {
    if(a.getAttribute("rel").indexOf("style") != -1 && a.getAttribute("title")) {
      a.disabled = true;
      if(a.getAttribute("title") == title) a.disabled = false;}}
  if (oldLink) oldLink.style.fontWeight = 'normal';
  oldLink = link;
  link.style.fontWeight = 'bold';
  return false;}
</script>
<style type="text/css">
.calendar {direction: rtl;}
#flat_calendar_1, #flat_calendar_2{width: 200px;}
.example {padding: 10px;}
.display_area {background-color: #FFFF88}
</style>
</head>
<body background="Image/page1_bkgrnd.png";>

<form action="NextCharge.php" method="get" dir="rtl" style="border-style: hidden" target="_blank"><thead>
<div style="position: absolute;  top: 100px; right:20px;"align="right"><p><font face="B Nazanin" size="4"> پس از وارد کردن  مدت زمان  و زدن دکمه نمایش ،لیست تمام کپسول هایی که تا مدت تعیین شده شارژ آنها به پایان می رسد، نمایش داده می شود.</p></font></p></div>
	
	
	<table  style="  margin-top: 190px;position:fixed;  float:right; margin-left:80px; margin-right: 60px; border-style:outset;border-color:00CCFF;"cellpadding="10" cellspacing="10" >
		
		<td><p><b>  انتخاب مدت زمان </b> </p></td>
	</thead>
	<tr>
		<td rowspan="5"><img src='Image/calendar.png' /></td>
		<td><label for="time"> مدت زمان</label></td>
		<td>
		<select name="time">
			<option value="7">
			یک هفته</option>
			<option value="1">
			24ساعت
			</option>
			<option value="2">
			48ساعت</option>
			<option value="3">
			72ساعت</option>
			<option value="30">
			یک ماه</option>
			<option value="9999">
			نمایش همه</option>
		</select>
	</td>
	</tr>
	<tr>
		<td><label for="Nday"> تعداد روز</label></td>
		<td><input type="text" name="Nday" ><br /></td>
	</tr>
	<tr><td><label for="Nweek"> تعداد هفته</label></td><td><input type="text" name="Nweek" ><br /></td>	 </tr>
	<tr>
		<td><label for="NMounth"> تعداد ماه</label></td>
		<td><input type="text" name="NMounth" ></td>
	</tr>
	<tr><td  align="left"><input type="submit" name="SBubtton"ID="ISB" value="نمایش"> <br /></td></tr>
</table>
</form>
</body>
</html>
<?php
ob_end_flush(); 
?>
