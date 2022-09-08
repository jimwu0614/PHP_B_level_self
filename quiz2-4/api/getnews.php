<?php
include "../base.php";
$title = $News->find(['title'=>$_POST['title']]);

    echo $title['text'];

?>
