<?php
ob_start ();
session_start ();
if (@$_SESSION ["Login"] != "go") {
	header ( "Location: login.php" );
	exit ();
}

?>
<?php
if(isset($_POST[NameOfUnit])&&isset($_POST[OldNumberOfProperty])&&isset($_POST[NewNumberOfProperty])
&&isset($_POST[SerialNumber])&&isset($_POST[TypeOfCapsole])&&isset($_POST[Weight])&&isset($_POST[WhereInstalled])
&&isset($_POST[date1])&&isset($_POST[Considerations])){

$runit=$_POST[NameOfUnit];
$_OldNumberOfProperty=$_POST[OldNumberOfProperty];
$_NewNumberOfProperty=$_POST[NewNumberOfProperty];
$_SerialNumber=$_POST[SerialNumber];
$_TypeOfCapsole=$_POST[TypeOfCapsole];
$_Weight=$_POST[Weight];
$_WhereInstalled=$_POST[WhereInstalled];
$_ConSidaration=$_POST[Considerations];
$nLasaharge=$_POST[date1];
if($_NewNumberOfProperty!=""){
$server=mysql_connect("localhost","root","");
mysql_select_db("quenchfiredb", $server);
mysql_query('set character set utf8;');  	
$myq="SELECT * FROM quenchfire_t WHERE  NumberOfNewProperty='$_NewNumberOfProperty' ";
$m=mysql_query($myq,$server);
$rmyq=0;
while($myraw=mysql_fetch_row($m))
$rmyq=$myraw;
if($runit=="")$runit=$rmyq[0];
else{
$unitquery="SELECT Name FROM unit WHERE Number='$runit'";
$unit=mysql_query($unitquery,$server);
while($raw=mysql_fetch_row($unit))
$runit=$raw[0];}
if($_OldNumberOfProperty=="")$_OldNumberOfProperty=$rmyq[1];
if($_SerialNumber=="")$_SerialNumber=$rmyq[3];
if($_TypeOfCapsole=="")$_TypeOfCapsole=$rmyq[4];
if($_Weight=="")$_Weight=$rmyq[5];
if($_WhereInstalled=="")$_WhereInstalled=$rmyq[6];
if($nLasaharge==""){$tLasaharge=$rmyq[7];$tNextCharge=$rmyq[8];}
else{list ( $gyear, $gmonth, $gday ) = preg_split ( '/-/', $nLasaharge );
$tLasaharge=$gyear."/". $gmonth ."/".$gday;
$tNextCharge=($gyear+1)."/". $gmonth ."/".$gday;}
if($_ConSidaration=="")$_ConSidaration=$rmyq[9];

$query=mysql_query("UPDATE quenchfire_t SET NameOfUnit='$runit', NumberOfOldProperty='$_OldNumberOfProperty',
SerialNumber='$_SerialNumber', TypeOfCapsole='$_TypeOfCapsole', Weight='$_Weight',
 WhereInstall='$_WhereInstalled', LastCharge='$tLasaharge', 
 NextCharge='$tNextCharge', Considerations='$_ConSidaration'
  WHERE NumberOfNewProperty='$_NewNumberOfProperty'",$server);
$count=mysql_affected_rows();
if($count>0)
echo ("<script type = 'text/javascript'>
alert(' ویرایش اطلاعات کپسول  با موفقیت انجام شد');
</script>");
else 
echo ("<script type = 'text/javascript'>
alert(' ویرایش اطلاعات کپسول  با موفقیت انجام نشد');
</script>");
}
unset($_POST[NameOfUnit]);
unset($_POST[OldNumberOfProperty]);
unset($_POST[NewNumberOfProperty]);
unset($_POST[SerialNumber]);
unset($_POST[TypeOfCapsole]);
unset($_POST[Weight]);
unset($_POST[WhereInstalled]);
unset($_POST[DateOfLastCharge]);
unset($_POST[DateOfNextCharge]);
unset($_POST[Considerations]);
}
?>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<head>
<title>ویرایش اطلاعات کپسول</title>

<div
	style="position: absolute; top: 8px; right: 0px; width: 1000px; height: 70px;"
	align="right"><img src="Image/img0012.gif" align="right" width="2000"
	height="70"></div>
<div
	style="position: absolute; top: 30px; left: 0px; width: 1000px; height: 45px;"
	align="left"><a href="ph1.php"><input type="button" value="بازگشت" /></a>
<a href="logout.php"><input type="button" value="خروج" /></a></div>
<div style="position: absolute; top: 10px; right: 20px;" align="right">
<p><font color="336699" face="B Nazanin" size="5">ویرایش اطلاعات کپسول
</font></p>
</div>

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
	
<?php
$server = mysql_connect ( "localhost", "root", "" );
mysql_select_db ( "quenchfiredb", $server );
$table = mysql_query ( "SELECT * FROM quenchfire_t ", $server );
?>
<form action="updatekapsool.php" method="post" dir="rtl">
<div  style="position: absolute; width:500; top: 250px; right:600px;"align="right"><p><font face="B Nazanin" size="4"> ابتدا شماره اموال جدید کپسول را وارد کرده<br> 
پس از وارد کردن اطلاعات کپسول و 
زدن دکمه ثبت در صورت  معتبر بودن  شماره اموال جدید
، پیغام تایید ویرایش  کپسول نمایش داده می شود
<br>در صورت خالی گذاشتن هر یک از مشخصه های زیر همان مقادیر قبلی برای کپسول با شماره اموال جدید وارد شده ثبت میشود
<br>تاریخ آخرین شارژ  کپسول را با استفاده از تقویم اعلام کنید</font><br>

</p></div><div style="position: absolute;  top: 100px; right:20px;"align="right"><p>
<font face="B Nazanin" size="4" color="white">   شماره اموال جدید کپسولی  که قصد ویرایش اطلاعات آن را دارید در کادر مقابل وارد کنید ،شماره اموال جدید: </font>
<input type="text" ID="NewNumberOfProperty" name="NewNumberOfProperty"></p></div>



<table      align="right"   style="  top:250px; right:20px; position:fixed;  border-style:outset;border-color:00CCFF;   "; 
cellpadding="4" cellspacing="5" >

<thead><td colspan="6"><img src='Image/data_add.png' /><b> 	ویرایش اطلاعات کپسول  </b></td></thead>
<tbody>
<tr>
<td>عنوان واحد</td>
<td >
	<?php
		echo ("<select name='NameOfUnit'>");
		$server=mysql_connect("localhost","root","");
		mysql_select_db("quenchfiredb", $server);
		mysql_query('set character set utf8;');  
		$query="SELECT * from unit";
		 $table=mysql_query($query,$server);
		 echo ("<option ></option>");
		while ($raw=mysql_fetch_row($table)){{
				echo ("<option value= $raw[1] >$raw[0]</option>");}}
		echo ("</select>");
	?>
</td>
	<td  rowspan="9" >
	<div>تم تقویم : 
		<a href="#" id="defaultTheme" onclick="return setActiveStyleSheet(this, 'winter');">زمستان</a>|
		<a href="#" onclick="return setActiveStyleSheet(this, 'blue');">آبی</a>|
		<a href="#" onclick="return setActiveStyleSheet(this, 'summer');">تابستان</a>|
		<a href="#" onclick="return setActiveStyleSheet(this, 'green');">سبز</a>|
		<a href="#" onclick="return setActiveStyleSheet(this, 'system');">سیستم</a><br /><a>تاریخ شارژ بعدی</a><br />
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
	</td>
</tr>
<tr>
	<td><label for="OldNumberOfProperty"> شماره اموال قدیم </label></td>
	<td ><input type="text" ID="OldNumberOfProperty" name="OldNumberOfProperty"></td>
</tr>

<tr>
	<td> <label for="SerialNumber"> شماره سریال </label></td>
	<td><input type="text" ID="SerialNumber" name="SerialNumber"><br/></td>
</tr>
<tr>
	<td>نوع کپسول</td>
	<td> 
		<select name="TypeOfCapsole">
			<option value=""></option>
			<option value="BCF">
			BCF</option>
			<option value="CO2">
			CO2</option>
			<option value="اب وگآز">
			اب وگآز</option>
			<option value="پودر گآز">
			پودر گآز</option>
			<option value="ندارد">
			ندارد</option>
		</select>
	</td>
</tr>
<tr>
	<td> <label for="Weight"> وزن</label></td>
	<td><input type="text" ID="Weight"name="Weight"></td>
</tr>
<tr>
	<td>محل نصب </td>
	<td ><input type="text" ID="WhereInstalled" name="WhereInstalled"></td>
</tr>
	<td >ملا حظات </td>
	<td >
		<select name="Considerations">
		<option value=""></option>
			<option value="انبار مرکزی">
			انبار مرکزی</option>
			<option value="برق و کامپیوتر">
			برق و کامپیوتر
			</option>
			<option value="بهداشت">
			بهداشت</option>
			<option value="پژوهشکده لیزر">
			پژوهشکده لیزر</option>
			<option value="پشتیبانی">
			پشتیبانی</option>
			<option value="خوابگاه خواهران">
			خوابگاه خواهران</option>
			<option value="دانشکده ادبیات">
			دانشکده ادبیات</option>
			<option value="دندان پژشکی">
			دندان پژشکی</option>
			<option value="رستوران شماره 1">
			رستوران شماره 1</option>
			<option value="رستوران شماره 3">
			رستوران شماره 3</option>
			<option value="سازمان مرکزی قدیم">
			سازمان مرکزی قدیم</option>
			<option value="علوم زمین">
			علوم زمین</option>
			<option value="کوی پسران">
			کوی پسران</option>
			<option value="گروه فیزیک">
			گروه فیزیک</option>
			<option value="مدیریت حراست">
			مدیریت حراست</option>
			<option value="مدیریت پشتیبانی">
			مدیریت پشتیبانی</option>
			<option value="مهدکودک">
			مهدکودک</option>
			<option value="نگهبانی برادران">
			نگهبانی برادران </option>
			<option value="نگهبانی درکه">
			نگهبانی درکه</option>
			<option value=" ">
			" "</option>
		</select>
	</td>
</tr>

<tr>

</tbody>
<tfoot>
	<td colspan="6" align="left"><input type="submit" value="  ثبت  "></input></td>
</table>
 </form>
</body>
</html>
<?php
ob_end_flush ();
?>
