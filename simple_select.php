<HTML>
<HEAD>
<META http-equiv="Content-Type" content="text/html;charset=UTF-8">
</HEAD>
<BODY>
<?php
	require_once("info.php");
	require_once("1.php");
   		$connect = new SimBBS();
   		$connect->connect($SERV, $USER, $PASS, $DB);
   		$connect->tbk_list();
		$connect->close();
	print "<br><a href='simple.php'>메인으로</a>";
?>
</BODY>
</HTML>