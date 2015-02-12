<?
$test= array('test'=>'1234','test2'=>'3445');
$test_json = json_encode($test);
print $test_json."<br>";
$test2 = json_decode($test_json);
print_r ($test2);
?>