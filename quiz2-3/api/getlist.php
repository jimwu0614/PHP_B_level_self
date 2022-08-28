<?php
include "../base.php";

$list = $News->all(['type'=>$_POST['type']]);

foreach ($list as $key => $value) {
    echo "<div class='blue' onclick='getnews(this)'>";
    echo "{$value['title']}";
    echo "</div>";
}

?>
