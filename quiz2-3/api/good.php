<?php
include "../base.php";

if ($_POST['like']=="讚") {
    $Log->save(['user'=>$_SESSION['user'],'good'=>$_POST['id']]);
    $newsgood = $News->find(['id'=>$_POST['id']]);
    $newsgood['good']++;
    $News->save($newsgood);
} else {
    $Log->del(['user'=>$_SESSION['user'],'good'=>$_POST['id']]);
    $newsgood = $News->find(['id'=>$_POST['id']]);
    $newsgood['good']--;
    $News->save($newsgood);
}



?>
