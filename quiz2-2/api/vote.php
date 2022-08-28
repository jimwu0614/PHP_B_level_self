<?php
include "../base.php";



if (isset($_POST['opt'])) {
    $opt = $_POST['opt'];
    $opt2 = $Que->find($opt);
    $opt2['total']++;
    $Que->save($opt2);
}




$queid = $_POST['id'];

if (isset($_POST['opt'])) {    
    $que2 = $Que->find($queid);
    $que2['total']++;
    $Que->save($que2);
}


to("../index.php?do=result&id=$queid");
?>