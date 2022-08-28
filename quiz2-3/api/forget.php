<?php
include "../base.php";

$chk = $User->math("count","id",['email'=>$_POST['email']]);

if ($chk) {
    echo "您的密碼為:". $User->find(['email'=>$_POST['email']])['pw'];
} else {
    echo '查無此資料';
}






?>
