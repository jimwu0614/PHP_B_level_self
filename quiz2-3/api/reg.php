<?php
include "../base.php";

$acc = $_POST['acc'];
$pw = $_POST['pw'];
$email = $_POST['email'];

$User->save(['acc'=>$acc,'pw'=>$pw,'email'=>$email]);
?>