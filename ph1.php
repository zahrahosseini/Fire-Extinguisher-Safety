<?php
ob_start ();
session_start ();
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<!--<meta http-equiv="Content-Language" content="fa">-->
<title> صفحه اصلی</title>
<script>
function funTime(){
	var Time=new Date();
	var H=Time.getHours();
	var M=Time.getMinutes();
	var S=Time.getSeconds();
	var Clock=H+":"+M+":"+S;
	Font.innerText="ساعت:"+Clock;
	setTimeout("funTime()",1000);
}
</script>
</head>
<body onload="funTime()" background="Image/page1_bkgrnd.png">
<div style="position: relative;  right:10 px; top: 150px;  z-index: 13;" align="left">
<script type="text/javascript" src="stmenu.js"></script>
<a href="http://www.dhtml-menu-builder.com"  style="display:none;visibility:hidden;">Javascript DHTML Drop Down Menu Powered by dhtml-menu-builder.com</a>
<script type="text/javascript">

stm_bm(["menu3b81",900,"","Image/blank.gif",0,"","",2,0,250,200,1000,1,0,0,"","",0,0,1,2,"default","hand","",1,25],this);
stm_bp("p0",[1,4,0,0,0,2,30,13,100,"",-2,"",-2,50,0,0,"#999999","transparent","Image/line.gif",3,0,0,"#000000","Image/up.gif",23,210,0,"transparent","",3,"",-1,-1,0,"transparent","Image/rightline.gif",3,"Image/down.gif",22,210,0,"transparent","",3,"",-1,-1,0,"Image/transparent","Image/leftline.gif",3,"Image/leftup.gif","Image/rightup.gif","Image/rightdown.gif","Image/leftdown.gif",19,23,18,23,18,22,19,22]);
stm_ai("p0i0",[6,1,"#999999","",-1,-1,0]);



stm_ai("p0i1",[0,"سیستم"
,"","",-1,-1,0,"","_self","","","Image/eventplanning.png","Image/eventplanning.png",30,25,0,"","",0,0,0,2,1,"#BAD9E2",0,"#BAD9E2",0,"Image/round13_m.gif","Image/round13_m.gif",3,3,0,0,"#FFFFFF #9FD1E0 #9FD1E0 #FFFFFF","#999999","#000000","#000000","bold 9pt 'Arial','Verdana'","bold 9pt 'Arial','Verdana'",0,0,"Image/round13_l.gif","Image/round13_l.gif","Image/round13_r.gif","Image/round13_r.gif",5,5,26],206,0);
stm_aix("p0i2","p0i0",[]);
stm_ai("p0i3",[0,"کاربر"
,"","",-1,-1,0,"","_self","","","Image/icon_users.png","Image/icon_users.png",25,25,0,"Image/arrow_34[1].gif","Image/arrow_34.gif",13,12,0,2,1,"#FFFFF7",1,"#FFFFFF",0,"","",3,3,0,0,"#C8E5EE","#000000","#000000","#000000","10pt 'Arial','Verdana'","12pt 'Arial','Verdana'",0,0,"","","","",0,0,0],206,40);
stm_bpx("p1","p0",[1,1,-10,0,8,1,25,0,100,"",-2,"",-2,50,0,0,"#999999","#CCE8F0","",3,0,0,"#999999","Image/up.gif",23,140,0,"transparent","",3,"",-1,-1,0,"transparent","Image/rightline.gif",3,"Image/down.gif",22,140]);
stm_aix("p1i0","p0i3",[0,"افزودن کاربر جدید","","",-1,-1,0,"newUser.php","_self","","","Image/icon_texteditor.png","Image/icon_texteditor.png",25,25,0,"","",0,0,0,2,1,"#CCCCCC",1,"#FFFFFF",0,"","",3,3,0,0,"#C8E5EE","#000000","#000000","#000000","10pt Arial","11pt Arial"],130,0);
stm_aix("p1i1","p1i0",[0,"حذف کاربر",
                       "","",-1,-1,0,"deleteuser.php","_self","","","Image/icon_update.png","Image/icon_update.png"],130,0);
stm_aix("p1i2","p1i0",[0,"وبرایش اطلاعات کاربر","","",-1,-1,0,"changePassWord.php","_self","","","Image/icon_update.png","Image/icon_update.png"],130,0);
stm_ep();

stm_aix("p0i4","p0i0",[]);
stm_aix("p0i5","p0i1",[0,"اطلاعات پایه","","",-1,-1,0,"","_self","","","Image/forms.png","Image/forms.png"],206,0);
stm_aix("p0i6","p0i0",[]);
stm_aix("p0i7","p0i3",[0,"کپسول","","",-1,-1,0,"","_self","","","Image/kapsool.png","Image/kapsool.png",30,30],206,40);
stm_bpx("p2","p1",[]);
stm_aix("p2i0","p1i0",[0,"افزودن کپسول جدید","","",-1,-1,0,"Insert.php","_self"],130,0);
stm_aix("p2i1","p1i0",[0,"حذف کپسول","","",-1,-1,0,"deleteKapsool.php","_self"],130,0);
stm_aix("p2i2","p1i2",[0,"ویرایش کپسول","","",-1,-1,0,"updatekapsool.php","_self"],130,0);
stm_aix("p2i3","p1i2",[0,"ویرایش تاریخ آخرین شارژ","","",-1,-1,0,"updatedate.php","_self"],130,0);
stm_ep();


stm_aix("p0i8","p0i0",[]);
stm_aix("p0i9","p0i3",[0,"واحد","","",-1,-1,0,"","_self","","","Image/dian.gif","Image/dianmove.gif",10,7],206,40);
stm_bpx("p3","p1",[]);
stm_aix("p3i0","p1i0",[0,"افزودن واحد جدید","","",-1,-1,0,"newunit.php","_self","","","Image/dian.gif","Image/dianmove.gif",10,7],130,0);
stm_aix("p3i1","p1i0",[0,"حذف واحد","","",-1,-1,0,"deleteUnit.php","_self","","","Image/dian.gif","Image/dianmove.gif",10,7],130,0);
stm_aix("p3i2","p1i2",[0,"ویرایش اطلاعات واحد","","",-1,-1,0,"updateunitname.php","_self","","","Image/dian.gif","Image/dianmove.gif",10,7],130,0);
stm_ep();


stm_aix("p0i10","p0i0",[]);
stm_aix("p0i11","p0i1",[0,"گزارش"
,"","",-1,-1,0,"","_self","","","Image/goalsgrid.png","Image/goalsgrid.png"],206,0);
stm_aix("p0i12","p0i0",[]);
stm_aix("p0i13","p0i3",[0,"جستجو","","",-1,-1,0,"report.php","_self","","","Image/dian1.gif","Image/dianmove.gif",10,7,0,"","",0,0],206,40);
stm_aix("p0i14","p0i0",[]);
stm_aix("p0i15","p0i13",[0,"گزارش شارژ بعدی","","",-1,-1,0,"selectTime.php","_self","","","Image/dian1.gif","Image/dianmove.gif",10,7,0,"","",0,0],206,40);
stm_aix("p0i16","p0i0",[]);
stm_aix("p0i17","p0i13",[0,"گزارش تعداد کپسول ها","","",-1,-1,0,"chartt.php","_self","","","Image/dian1.gif","Image/dianmove.gif",10,7,0,"","",0,0],206,40);
stm_ep();
stm_em();
//-->
</script>

</div>

<div id="cont">
<div id="wb_Shape2"
	style="position: absolute; left: 0px; top: 0px; width: 100%; height: 51px; z-index: 5;"
	align="left"><img src="Image/img0012.gif" id="Shape2" align="top"
	alt="" title="" border="0" width="100%" height="51"></div>
 
<div id="wb_Shape4"
	style="position: absolute; left: 10px; top: 5px; width: 80; height: 100; z-index: 10;"
	align="left"><img src="Image/logo.bmp" id="Shape4" align="top"
	alt="" title="" border="0" width="80" height="100"></div>
	
<div id="wb_Shape3"
	style="position: absolute; right: 0px; top: 68px; width: 100%; height: 49px; z-index: 6;"
	align="left"><img src="Image/img0006.png" id="Shape3" align="top" alt="" title="" border="0" width="100%" height="49"></div>

<div id="wb_Shape1"
	style="position: absolute; right: 0px; top: 100; width: 300; height: 100%; z-index: 1;"
	align="left"><img src="Image/img0007.png" id="Shape1" align="top" alt="" title="" border="0" width="300" height="100%"></div>


<div id="wb_Shape6"
	style="position: absolute; left: 442px; top: 8px; width: 384px; height: 78px; z-index: 7;"
	align="center"><img src="Image/img0014.png" id="Shape6" align="top"
	alt="" title="" border="0" width="384" height="78"></div>

<div id="wb_Text1"
	style="position: absolute; left: 471px; top: 25px; width: 344px; height: 45px; z-index: 8;"
	align="left"><font style="font-size: 17px" color="#639CCE"
	face="Tahoma">بانک اطلاعات اطفا حریق دانشگاه شهید بهشتی</font></div>

<div id="wb_Text2"
	style="position: absolute; left: 100px; top: 50px; width: 341px; height: 18px; z-index: 9;"
	align="left"><font style="font-size: 18px" color="#000000" face="B Nazanin"><b>
<p ID="Font"></p>
</b></font></div>


<div style="position: absolute; left: 100; top: 120; "align="left">
<a href="about.php"><font face="B Nazanin"><b>در باره سیستم</b></font></a> </div>

<div style="position: absolute; left: 10px; top: 120; "align="left">
<a href="help.php"><font face="B Nazanin" ><b>راهنما سیستم</b></font></a> </div>

<div style="position: absolute; right: 5px; top: 120; z-index: 14; "align="right">
<a href="logout.php" ><input type="button" value="خروج" /></a></div>

</div>

</body>
</html>

<?php
ob_end_flush ();
?>
