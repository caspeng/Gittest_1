<?php
if($_POST['id'] === 'caspeng'){
    if($_POST['password'] === '1'){
        echo 'right';
    } else {
        echo 'password wrong';
    }   
} else {
    echo 'id wrong';
}
?>