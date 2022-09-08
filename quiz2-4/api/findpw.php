<?php
include "../base.php";

$chk = $User->find(['email'=>$_POST['mail']]);
if ($chk) {
    
    echo "您的密碼為:".$User->find(['email'=>$_POST['mail']])['pw'];
} else {
    echo "查無此資料";
}

?>