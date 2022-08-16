<?php
include "../base.php";

$acc = $_POST['acc'];
$pw = $_POST['pw'];

$chk = $Admin->math("count","id",['acc'=>$acc,'pw'=>$pw]);

if($chk>=1){

    $_SESSION['admin']=$acc;
    to("../back.php");
}else{
echo '<script>';
echo 'alert("帳號或密碼輸入錯誤")';
echo '</script>';
to("./index.php?do=login");
}


?>

