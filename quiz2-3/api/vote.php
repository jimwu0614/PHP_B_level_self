<?php
include_once "../base.php";

$sub = $Que->find(['id'=>$_POST['subject']]);
$sub['total']++;
$Que->save($sub);


$opt = $Que->find(['id'=>$_POST['opt']]);
$opt['total']++;
$Que->save($opt);
to("../index.php?do=result&id={$_POST['subject']}");
?>