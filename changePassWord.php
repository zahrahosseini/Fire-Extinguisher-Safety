<?php
ob_start ();
session_start ();
if (@$_SESSION ["Login"] != "go") {
	header ( "Location: login.php" );
	exit ();
}
?>
<?php
if (isset ( $_GET ["olduser"] ) && isset ( $_GET ["oldpass"] )&& isset ( $_GET ["newpass"] )&&isset ( $_GET ["newname"] )) {
	$newname =$_GET ["newname"];
	if ($newname=="")$newname = $_GET ["olduser"];
	$_user = $_GET ["olduser"];
	$_Pass = $_GET ["oldpass"];
	$newpass = $_GET ["newpass"];
	if($_user!="" && $_Pass!=""&& $newpass!=""){
		$server = mysql_connect ( "localhost", "root", "" );
		mysql_select_db ( "quenchfiredb", $server );
		mysql_query('set character set utf8;');
		$firstquery = "SELECT UserName from user_t  WHERE  UserName='$_user' AND PassWord='$_Pass'";
		$t=mysql_query ( $firstquery, $server );
		$e=0;
		if($newname!=$_user){
			$query = "SELECT * FROM user_t WHERE UserName='$newname'";
			$r = mysql_query ( $query );
			$e= mysql_numrows ( $r );}
		if (mysql_num_rows($t)>0 && $e==0){
			$query = mysql_query("UPDATE user_t SET PassWord='$newpass' , UserName='$newname'  
			WHERE UserName='$_user' AND PassWord='$_Pass' ",$server);
			echo ("<script type = 'text/javascript'>alert('عملیات با موفقیت انجام شد');</script>");}
		else echo ("<script type = 'text/javascript'>alert('تغییر کلمه عبور کاربر انجام نشد!!!');</script>");
	}
	unset($_GET ["olduser"]);
	unset($_GET ["oldpass"]);
	unset($_GET ["newname"]);
	unset($_GET ["newpass"]);}
?>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<head>
<title>ویرایش نام کاربری و
کلمه عبور</title>
<div
	style="position: absolute; top: 8px; right: 0px; width: 1000px; height: 70px;"
	align="right"><img src="Image/img0012.gif" align="right" width="2000"
	height="70"></div>
<div
	style="position: absolute; top: 30px; left: 0px; width: 1000px; height: 45px;"
	align="left"><a href="ph1.php"><input type="button" value="بازگشت" /></a>
<a href="logout.php"><input type="button" value="خروج" /></a></div>
<div style="position: absolute; top: 10px; right: 20px;" align="right">
<p><font color="336699" face="B Nazanin" size="5"> ویرایش نام کاربری و
کلمه عبور </font></p>
</div>
</head>
<body background="Image/page1_bkgrnd.png";>

<form action="changePassword.php" method="get" dir="rtl">
<div style="position: absolute; top: 100px; right: 20px;" align="right">
<p><font face="B Nazanin" size="4"> پس از وارد کردن نام کاربری ،کلمه
عبور ،کلمه عبور و نام کاربری جدید و زدن دکمه تایید در صورت تکراری نبودن نام کاربری ، پیغام تایید
ویرایش نمایش داده می شود. <br>در صورت وارد نکردن نام کاربری جدید همان نام کاربری قبلی ثبت می شود.</p>
</font>
</p>
</div>
<table border="3" align="right"
	style="right: 20px; margin-top: 200; position: fixed; border-style: outset; border-color: 00CCFF;"
	; cellpadding="15" cellspacing="5">
	<thead>
		<td colspan="3">ویرایش نام کاربری و کلمه عبور </b></td>
	</thead>
	<tr>
		<td rowspan="4"><img src='Image/data_edit.png' /></td>
		<td><label for="IUser"> نام کاربری</label></td>
		<td><input type="text" name="olduser" id="IUser" /></td>
	</tr>
	<tr>
		<td><label for="IPass">کلمه عبور فعلی</label></td>
		<td><input type="password" name="oldpass" ID="IPass" /></td>
	</tr>
	<tr>
		<td><label for="IName"> نام کاربری جدید</label></td>
		<td><input type="text" name="newname" ID="IName" /></td>
	</tr>
	<tr>
		<td><label for="IiPass"> کلمه عبور جدید</label></td>
		<td><input type="password" name="newpass" ID="IiPass" /></td>
	</tr>
	<tr>
		<td colspan="3" align="center"><input type="submit" name="SBubtton"
			ID="ISB" value="تایید"></td>
	</tr>
</table>
</form>
</body>
</html>
<?php
ob_end_flush ();
?>