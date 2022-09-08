<?php
include "../base.php";

echo $User->math('count','id',['acc'=>$_POST['acc']]);
?>