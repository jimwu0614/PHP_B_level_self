<?php
include "../base.php";


$bottom = $_POST['bottom'];

$Bottom->save(['id'=>1,'bottom'=>$bottom]);

to('../back.php?do=bottom');



?>