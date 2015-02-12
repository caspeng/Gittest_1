<?php
require_once("info.php");
$connect = mysql_connect($SERV,$USER,$PASS) or die ("fail");
mysql_select_db($DB);

$gn_d=$_GET["gn"];

if(preg_match("/[0-9]",$gn_d)){
	$na_d=isset($_GET["na"])?htmlspecialchars($_GET["na"]):null;
	$na_d=isset($_GET["me"])?htmlspecialchars($_GET["me"]):null;
}

$ip = getenv("REMOTE_ADDR");
$re=mysql_query("SELECT thread FROM tbj0 WHERE gnum=$gn_d");
$result=mysql_fetch_array($re);
$thread_com="[".$gn_d." ".$result[0]."]";
print <<<eot2
<HTML>
<HEAD>
<META http-equiv="Content-Type"
	content="text/html;charset=UTF-8">
	<TITLE> SQL카페 $thread_com 스레드 </TITLE>
	</HEAD>
	<BODY>
	<FONT SIZE="7">$thread_com 스레드!</FONT>
	<BR><BR>
	<FONT SIZE="5">
	$thread_com의 메세지
	</FONT>
	<BR>
eot2;

if($na_d<>""){
	mysql_query("INSERT INTO tbj1 VALUES (0,'$na_d','$me_d'.now(),$gn_d,'$ip')");
}

print <BR>;

$re =mysql_query("SELECT * FROM tbj1 WHERE gnum=$gn_d ORDER BY date");
$i =1;
while($result=mysql_fetch_array($re)){
	print "$i($result[0]):<U>$result[1]</U>:$result[3]<BR>";
	print nl2br ($result[2]);
	print "<br><br>";
		$i++;
}
mysql_close($connect);

print <<<eot3
	<HR>	
	<FONT size ="5">
		$thread_com 에메세지를 작성하세요
		</FONT>
	
	<FORM METHOD="GET ACTION="board_top.php">
	이름 <INPUT TYPE="text" NAME="na"><BR>
	메시지 <BR>
	<TEXTAREA NAME="me" ROWS="10" COLS="70"></TEXTAREA>
	<BR>
	<INPUT TYPE="hidden" NAME="gn" VALUE=$gn_d>
	<INPUT TYPE="submit" VALUE="확인">
	</FORM>
	<HR>
	<A HREF="board_top.php"> 스레드 목록으로 </A>
	<HR>
	</BODY>
	</HTML>
eot3;
}else{
	print "스레드를 선택하세요 <br>";
	print "<A HREF="board_top.php"> 스레드 목록으로 </A>";

}
?>
	