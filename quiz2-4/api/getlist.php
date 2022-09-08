<?php
include "../base.php";
$title = $News->all(['type' => $_POST['type']]);
foreach ($title as $key => $value) {
    echo "<div class='blue title' onclick='getnews(this)'>{$value['title']}</div>";
}
?>


