<?php
ob_start ();
session_start ();
if (@$_SESSION ["Login"] != "go") {
	header ( "Location: login.php" );
	exit ();
}?>
<?php
	if(isset($_POST[Number])){
		$NUM=$_POST[Number];
		$server=mysql_connect("localhost","root","");
		mysql_select_db("quenchfiredb", $server);
		mysql_query('set character set utf8;');
		$query=mysql_query("DELETE FROM quenchfire_t WHERE NumberOfNewProperty=$NUM",$server);
		$count=mysql_affected_rows();
		if($count>0)
			echo ("<script type = 'text/javascript'>
			alert('کپسول  از سیستم حذف گردید');
			</script>");
		else 
			echo ("<script type = 'text/javascript'>
			alert('کپسولی با این شماره موجود نمی باشد');
			</script>");
		unset($_POST[Number]);}
?>

<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<head>
<title>حذف کپسول</title>
<div  style="position: absolute;top:  8px;right:0px; width: 1000px; height: 70px;"align="right" >
	<img src="Image/img0012.gif" align="right" width="2000" height="70"></div>
<div style="position: absolute;  top: 30px; left:0px; width: 1000px; height: 45px;"align="left">
 	<a  href="ph1.php"  ><input type="button" value="بازگشت"  /></a>
	<a href="logout.php" ><input type="button" value="خروج" /></a></div>
	<div style="position: absolute;  top: 10px; right:20px;"align="right"><p><font color="336699" face="B Nazanin" size="5">حذف یک کپسول موجود در سیستم </font>   </p></div>
</head>
<body background="Image/page1_bkgrnd.png";>
	<form action="deleteKapsool.php" method="post" dir="rtl" >
	<div style="position: absolute;  top: 100px; right:20px;"align="right"><p><font face="B Nazanin" size="4"> پس از وارد کردن شماره کپسول  و زدن دکمه حذف در صورت معتبر بودن شماره کالا وارد شده تمام اطلاعات مربوط به آن کپسول از سیستم حذف می شود و پیغام تایید حذف نمایش داده می شود.</p></font></p></div>
	<table      align="right"   style="  right:20px; margin-top: 200; position:fixed;  border-style:outset;border-color:00CCFF;   "; cellpadding="20" cellspacing="5">
		<thead><tr><th colspan="2"> حذف یک کپسول موجود در سیستم</th> </tr></thead>
		<tr>
			<td> &nbsp  شماره کپسول &nbsp </td>	
			<td rowspan="2"><input type="text" ID="Number" name="Number" >
					</br></br>
					<p align="left"><input type="submit" value="  حذف  "></p>
			</td>
		</tr>
		<tr>
		<td align="center"> <img src='Image/delete.png'/></td>
		</table>
	 </form>
</body>
</html>
<?php
ob_end_flush ();
?>