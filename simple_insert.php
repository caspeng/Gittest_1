<HTML>
<HEAD>
<META http-equiv="Content-Type" content="text/html;charset=UTF-8">
</HEAD>
<BODY>
<?php
require_once("1.php");
require_once("info.php");
$connect = new SimBBs();
$connect ->connect($SERV, $USER, $PASS, $DB);
$name= $_POST["name"];
$massage = $_POST["massage"];
mysql_query("INSERT INTO tbk (name,mess) values('$name','$massage')");
$connect ->tbk_list();
$connect ->close();
print "<br>";
print "<br><a href='simple.php'>메인으로</a>";
?>
</BODY>
</HTML>
