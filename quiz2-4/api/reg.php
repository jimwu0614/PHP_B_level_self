<?php
include "../base.php";

$chk = $User->math('count','id',['acc'=>$_POST['acc']]);
if ($chk>=1) {
    echo "帳號重複";
} else {
    $User->save(['acc'=>$_POST['acc'],'pw'=>$_POST['pw'],'email'=>$_POST['email']]);
    echo "註冊完成,歡迎加入";
}

?>