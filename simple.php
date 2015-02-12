<HTML>
<HEAD>
<META http-equiv="Content-Type" content="text/html;charset=UTF-8">
</HEAD>
<BODY>
<FORM METHOD="post" ACTION="simple_select.php">
메시지를 표시<br>
<INPUT TYPE="submit" VALUE="확인"><br>
</FORM>
<FORM METHOD="post" ACTION="simple_insert.php">
이름 입력 <INPUT TYPE="text" name="name"><br>
메시지 입력 <INPUT TYPE="text" name="massage"><br>
<INPUT TYPE="submit" VALUE="확인"><br>
<FORM METHOD="post" ACTION="simple_search.php">
검색 키워드 입력 <INPUT TYPE="text" NAME="search"><br>
<INPUT TYPE="submit" VALUE="확인"><br>
</FORM>
<?php
print "---------------------------<br>";
print "현재정보<br>";
require_once("info.php");
require_once("1.php");
$connect = new SimBBS();
$connect -> connect($SERV,$USER,$PASS,$DB);
$re = mysql_query("SELECT * FROM tbk ORDER BY number");
print "<FORM METHOD='post' ACTION='simple_delete.php'>";
while($result=mysql_fetch_array($re)){
		print "<input type='submit' value='$result[0]' name='num' />";
		print " : " ;
		print $result[1];
		print " : ";
		print $result[2];
		print "<br>";
}
print "</FORM>";
$connect -> close();
?>
</BODY>
</HTML>
