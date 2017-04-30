<?php
ob_start ();
session_start ();
if (@$_SESSION ["Login"] != "go") {
	header ( "Location: login.php" );
	exit ();
}

?>
<?php

if (isset ( $_GET ["Nunit"] )) {
	$_unit = $_GET ["Nunit"];
	
	$server = mysql_connect ( "localhost", "root", "" );
	mysql_select_db ( "quenchfiredb", $server );
	mysql_query ( 'set character set utf8;' );
	$query = "SELECT * FROM unit WHERE Name='$_unit'";
	$r = mysql_query ( $query );
	$e= mysql_numrows ( $r );
	if($e==0){
	$query = "INSERT INTO  unit (Name,Number ) VALUES('$_unit','')";
	if (mysql_query ( $query )) 
		{echo("<script type = 'text/javascript'>alert('اضافه کردن واحد جدید با موفقیت انجام شد');</script>");}
	else 
		{echo ("<script type = 'text/javascript'>alert('اضافه کردن واحد جدید با موفقیت انجام نشد');</script>");}
	
	}else{echo ("<script type = 'text/javascript'>alert('خطا:نام واحد وارد شده تکراری می باشد ');</script>");}

}
?>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<head>
<title>اضافه کردن واحد جدید</title>
<div
	style="position: absolute; top: 8px; right: 0px; width: 1000px; height: 70px;"
	align="right"><img src="Image/img0012.gif" align="right" width="2000"
	height="70"></div>
<div
	style="position: absolute; top: 30px; left: 0px; width: 1000px; height: 45px;"
	align="left"><a href="ph1.php"><input type="button" value="بازگشت" /></a>
<a href="logout.php"><input type="button" value="خروج" /></a></div>
<div style="position: absolute; top: 10px; right: 20px;" align="right">
<p><font color="336699" face="B Nazanin" size="5">اضافه کردن واحد جدید
</font></p>
</div>
</head>
<body background="Image/page1_bkgrnd.png";>
<form action="newunit.php" method="get" dir="rtl">
<div style="position: absolute;  top: 100px; right:20px;"align="right"><p><font face="B Nazanin" size="4"> پس از وارد کردن نام واحد و زدن دکمه تایید در صورت تکراری نبودن  نام واحد ، پیغام درج واحد نمایش داده می شود.</p></font></p></div>
<table    align="right"   style="  right:20px; margin-top: 200; position:fixed;  border-style:outset;border-color:00CCFF;   "; cellpadding="20" cellspacing="5">

<thead>

		<td colspan="3">
		<p><b> اضافه کردن واحد جدید </b></p>
		</td>

	</thead>
	<tr>
		<td rowspan="2"><img src='Image/data_add.png' /></td>
		<td><label for="IUnit"> نام واحد جدید</label></td>
		<td><input type="text" name="Nunit" ID="IUnit" /> <br />
		</td>
	</tr>

	<tr>
		<td colspan="3" align="center"><input type="submit" name="SBubtton"
			ID="ISB" value="  تایید   "> <br />
		</td>
	</tr>
</table>
</form>
</body>
</html>
<?php
ob_end_flush ();
?>
