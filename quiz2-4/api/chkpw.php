<?php
include_once "../base.php";
$chk = $User->math('count','id',['acc'=>$_POST['acc'],'pw'=>$_POST['pw']]);

if ($chk>=1 && $_POST['acc']=='admin') {
    $_SESSION['user'] = $_POST['acc'];
    echo "2";
} else if($chk>=1){
    $_SESSION['user'] = $_POST['acc'];
    echo 1;
}else{
    echo 0;
}

?>