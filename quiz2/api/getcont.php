<?php
include "../base.php";

if (isset($_POST['type'])) {
  $type = $_POST['type'];
// echo $type;

$result = $News->all(['title'=>$type]);
foreach($result as $row){
  // dd($row);
echo "<pre>";
echo "<div>{$row['text']}</div>";
echo "</pre>";
}
}



?>

