<?php
include_once "../base.php";
$title = $_POST['title'];

$rows = $News->find(['title'=>$title]);



    echo $rows['text'];


?>


