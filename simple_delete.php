<HTML>
<HEAD>
<META http-equiv="Content-Type" content="text/html;charset=UTF-8">
</HEAD>
<BODY>
<?php
require_once("info.php");
require_once("1.php");
$connect = new SimBBs();
$connect ->connect($SERV, $USER, $PASS, $DB);
$num = $_POST["num"];
if(preg_match("/[^0-9]/",$num)){
		print "<br>숫자만 입력<br><br>";
		}
	else{
		mysql_query("DELETE FROM tbk WHERE number=$num");
	}
$connect -> close();
print "<br><a href='simple.php'>메인으로</a>";
?>
</BODY>
</HTML>