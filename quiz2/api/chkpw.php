<?php
include "../base.php";

$acc=$_POST['acc'];
$pw=$_POST['pw'];
$chk = $User->math("count","pw",['acc'=>$pw]);

if ($chk==1) {
    $_SESSION['user']=$acc;
}
    echo $chk;

?>