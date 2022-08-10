<?php
include "../base.php";

$acc=$_POST['acc'];
echo $User->math("count","acc",['acc'=>$acc]);
?>