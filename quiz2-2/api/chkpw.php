<?php
include_once "../base.php";
$acc = $_POST['acc'];
$pw = $_POST['pw'];
$chk = $User->math("count","id",['acc'=>$acc,'pw'=>$pw]);

if ($chk>=1) {
    $_SESSION['user'] = $acc;
}
    echo $chk;

?>