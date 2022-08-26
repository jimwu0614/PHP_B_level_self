<?php
include_once "../base.php";
$type = $_POST['header'];

$rows = $News->all(['type'=>$type]);

foreach ($rows as $key => $value) {
    echo "<div class='blue' onclick='getnews(this)'>";
    echo $value['title'];
    echo "</div>";
}
?>


