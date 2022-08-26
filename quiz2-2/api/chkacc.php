<?php
include_once "../base.php";
$acc = $_POST['acc'];
$chk = $User->math("count","id",['acc'=>$acc]);
echo $chk;


?>