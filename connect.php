<HTML>
<HEAD>
<META http-equiv="Content-Type" content="text/html;charset=UTF-8">
</HEAD>
<BODY>
<?php
$s = mysql_connect("localhost","root","root") or die("실패입니다.");
print "성공입니다.";
mysql_select_db("db1",$s);
$r=mysql_query("show tables");
$result = mysql_fetch_array($r);
print $result[0];
mysql_close($s);
?>
</BODY>
</HTML>