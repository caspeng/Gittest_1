<?php
require_once("info.php");
$connect = mysql_connect($SERV,$USER,$PASS) or die ("fail");
mysql_select_db($DB);

print <<<eot1
<HTML>
<HEAD>
<META http-equiv="Content-Type" content="text/html;charset=UTF-8">
<TITLE>메인 화면 </TITLE>
</HEAD>
<BODY>
<IMG SRC="parent.gif">
<FONT SIZE="7" COLOR="indigo">
SQL 카페 게시판 입니다.
</FONT>
<BR><BR>
확인하고자하는 스레드 번호
<HR>
<FONT SIZE="5"> 스레드 목록 </FONT>
<BR>
eot1;

/**************클라이언트 IP 주소 ******************************/
$ip = getenv("REMOTE_ADDR");
$th_d=isset($_GET["th"])? htmlspecialchars($_GET["th"]) : null;
if($th_d<>""){
	mysql_query("INSERT INTO tbj0 (thread,date, ipaddr) VALUES ('$th_d',now(),'$ip')");
}
/**************tbj0의 모든 데이터 추출 ***************/
$re = mysql_query("SELECT * FROM tbj0");
while($result=mysql_fetch_array($re)){
	print <<<eot2
	<A HREF="board.php?gn=$result[0]"> $result[0]  $result[1]</A>
	<BR>
	$result[2] 작성<BR><BR>
eot2;
}
/**************DB종료*********************/
mysql_close($connect);

print <<<eot3
	<HR>	
	<FONT size ="5">
		스레드 작성
		</FONT>
	<BR>
		여기에 새로운 스레드를 작성합니다.
	<BR>
	<FORM METHOD="GET ACTION="board_top.php">
	새로작성할 스레드의 제목
	<INPUT TYPE="text NAME="th" SIZE="50">
	<BR>
	<INPUT TYPE="submit" VALUE="확인">
	</FORM>
	<HR>
	<FONT SIZE="5">
	메시지 검색
	</FONT>
	<A HREF="board_search.php"> 검색을 하려면 여기를 누르세요 </A>
	<HR>
	</BODY>
	</HTML>
eot3;
?>
	