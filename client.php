<?php

print "당신의  IP 주소는 : ".getenv("REMOTE_ADDR");
print "<br>";
print "당신의 호스트 이름은 : ".gethostbyaddr(getenv("REMOTE_ADDR"));
print "<br>";
print "당신의 브라우저는 : ".getenv("HTTP_USER_AGENT");
?>