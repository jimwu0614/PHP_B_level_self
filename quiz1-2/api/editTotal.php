<?php
include "../base.php";


$total = $_POST['total'];

$Total->save(['id'=>1,'total'=>$total]);

to('../back.php?do=total');



?>