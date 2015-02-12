<HTML>
<HEAD>
<META http-equiv="Content-Type" content="text/html;charset=UTF-8">
</HEAD>
<BODY>
<?php
require_once("info.php");
require_once("1.php");
$connect = new SimBBS();
$connect ->connect($SERV, $USER, $PASS, $DB);
$search = $_POST["search"];
$re = mysql_query("SELECT * FROM tbk WHERE mess LIKE '%$search%'");
$connect -> tbk_list($re);
print "<br><a href='simple.php'>메인으로</a>";
?>
</BODY>
</HTML>
