<?php
include "../base.php";
$id = $_POST['id'];
$good = $_POST['good'];
$user = $_SESSION['user'];

$news = $News->find(['id'=>$id]);

if ($good=="讚") {
    $news['good']++;
    $News->save($news);
    $Log->save(['user'=>$user,'good'=>$id]);

} else {
    $news['good']--;
    $News->save($news);
    $Log->save(['user'=>$user,'good'=>$id]);

}


?>
