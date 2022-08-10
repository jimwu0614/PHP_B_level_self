<?php
include "../base.php";
$result=$User->find(['email'=>$_POST['mail']]);

if (empty($result)) {
    echo "查無此資料";
} else {
    echo "您的密碼為:".$result['pw'];
    # code...
}

// dd($result)
?>