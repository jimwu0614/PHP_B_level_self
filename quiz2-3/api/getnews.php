<?php
include "../base.php";

$list = $News->find(['title'=>$_POST['title']]);


    echo "<div >";
    dd($list['text']);
    echo "</div>";


?>
