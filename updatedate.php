<?php
ob_start ();
session_start ();
if (@$_SESSION ["Login"] != "go") {
	header ( "Location: login.php" );
	exit ();
}

?>
<?php
if (isset($_GET["Number"])&&isset($_GET["date1"])) {
$_Number = $_GET ["Number"];
$_last = $_GET ["date1"];
list ( $gyear, $gmonth, $gday ) = preg_split ( '/-/', $_last );
$tLasaharge=$gyear."/". $gmonth ."/".$gday;
$tNextCharge=($gyear+1)."/". $gmonth ."/".$gday;
$server = mysql_connect ( "localhost", "root", "" );
mysql_select_db ( "quenchfiredb", $server );
mysql_query('set character set utf8;'); 
$query=mysql_query("UPDATE quenchfire_t SET LastCharge='$tLasaharge' , NextCharge='$tNextCharge' 
WHERE  NumberOfNewProperty='$_Number'",$server);
$count=mysql_affected_rows();
if($count>0){
	echo ("<script type = 'text/javascript'>
alert('تغییر تاریخ شارژ با موفقیت انجام شد');
</script>");
	
} else {
	echo ("<script type = 'text/javascript'>
alert('تغییر تاریخ شارژ با موفقیت انجام نشد');
</script>");
}
}

?>

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
<p><font color="336699" face="B Nazanin" size="5">ویرایش تاریخ آخرین شارژ 
</font></p>
</div>

<title>ویرایش تاریخ آخرین شارژ</title>
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
<form action="updatedate.php" method="get" dir="rtl">
<table    align="right"   style="  right:20px; margin-top: 100; position:fixed;  border-style:outset;border-color:00CCFF;   ";
 cellpadding="15" cellspacing="5">
	<thead><td colspan="3"><img src='Image/date-time_preferences.png' /><p><b> ویرایش تاریخ آخرین شارژ </b> </p></td></thead>
	<tr><td><label for="INO"> شماره اموال جدید</label><input type="text" name="Number" ID="INO" /> <br /></td></tr>
	<tr><td><div>تم تقویم : 
		<a href="#" id="defaultTheme" onclick="return setActiveStyleSheet(this, 'winter');">زمستان</a>|
		<a href="#" onclick="return setActiveStyleSheet(this, 'blue');">آبی</a>|
		<a href="#" onclick="return setActiveStyleSheet(this, 'summer');">تابستان</a>|
		<a href="#" onclick="return setActiveStyleSheet(this, 'green');">سبز</a>|
		<a href="#" onclick="return setActiveStyleSheet(this, 'system');">سیستم</a><br /><a>تاریخ شارژ بعدی*</a><br />
		<script type="text/javascript">
		setActiveStyleSheet(document.getElementById("defaultTheme"), "winter");
		</script>
		</div>
	<div class="example"> 
			<form method="post" action="#">	
			<input  id="date_input_7" type="text" name="date1" />
			</form>
			<div id="flat_calendar_1"></div>
			<script type="text/javascript">
				Calendar.setup({
					inputField   : "date_input_7",
					flat         : "flat_calendar_1",   // id of the input field
					ifFormat     : "%Y-%m-%d",       // format of the input field
        			dateType	 : 'jalali',
        			weekNumbers  : true 
				});
			</script>
			</div>
	<td></tr>
	<tr><td  align="center"><input type="submit" name="SBubtton"ID="ISB" value="تایید"> <br /></td></tr>
</table>
</form>
</body>
</html>
<?php
ob_end_flush(); 
?>
