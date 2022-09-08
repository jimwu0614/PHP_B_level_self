<?php
include "../base.php";

$parent = $Que->find($_POST['parent']);
$parent['total']++;
$Que->save($parent);

$opt = $Que->find($_POST['opt']);
$opt['total']++;
$Que->save($opt);


to("../index.php?do=result&id={$_POST['parent']}");

?>