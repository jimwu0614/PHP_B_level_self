<?php
include "../base.php";

$chk = $User->math('count','id',['acc'=>$_POST['acc'],'pw'=>$_POST['pw']]);

if ($chk>=1 && $_POST['acc']=='admin' && $_POST['pw']==1234) {
    echo 2;
    $_SESSION['user'] = $_POST['acc'];
}else if($chk>=1){
    echo 1;
    $_SESSION['user'] = $_POST['acc'];
}else{
    echo 0;
}


