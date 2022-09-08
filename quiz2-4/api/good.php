<?php
include "../base.php";
$chk = $News->find($_POST['id']);

if ($_POST['good']=='讚') {
    $chk['good']++;
    $News->save($chk);
    $Log->save(['user'=>$_SESSION['user'],'good'=>$_POST['id']]);
}else if ($_POST['good']=='收回讚') {
    $chk['good']--;
    $News->save($chk);
    $Log->del(['user'=>$_SESSION['user'],'good'=>$_POST['id']]);
}
?>