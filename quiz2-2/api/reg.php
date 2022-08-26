<?php
include_once "../base.php";
$acc = $_POST['acc'];
$pw = $_POST['pw'];
$email = $_POST['email'];

$chk = $User->math('count','id',['acc'=>$acc]);

if ($chk==0) {
    $res = $User->save(['acc'=>$acc,'pw'=>$pw,'email'=>$email]);
    echo "註冊完成，歡迎加入";
} else {
    echo "帳號重複";
}


?>