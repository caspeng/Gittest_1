<HTML>
<HEAD>
<META http-equiv="Content-Type" content="text/html;charset=UTF-8">
</HEAD>
<BODY>
<?php
$connect = mysql_connect("localhost","root","root") or die ("fail");
mysql_select_db("db1");
$search = $_POST["search"];
$re = mysql_query("SELECT * FORM tbk WHERE LIKE '%$search%'");

while($result = mysql_fetch_array($re)){
		print $result[0];
	print " : ";
	print $result[1];
	print " : ";
	print $result[2];
	print "<br>";
	
}
mysql_close($connect);
print "<br><a href='simple.php'>메인으로</a>";
?>
</BODY>
</HTML
