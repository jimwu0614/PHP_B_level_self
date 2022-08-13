<?php
include "../base.php";

if (isset($_POST['type'])) {
  $type = $_POST['type'];
// echo $type;

$result = $News->all(['type'=>$type]);
foreach($result as $row){
    echo "<div class='blue' onclick='getcont(this)'>{$row['title']}</div>";
}
}



?>