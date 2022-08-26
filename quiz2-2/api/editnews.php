<?php

include_once "../base.php";


$id = $_POST['id'];

if (!empty($_POST['del'])) {
    $del = $_POST['del'];
    foreach ($id as $key => $value) {
        if (in_array($value,$del)) {
            $News->del(['id'=>$value]);
        }
    }
   
}



if (!empty($_POST['sh'])) {
    $sh = $_POST['sh'];
    foreach ($id as $key => $value) {
    if (in_array($value,$sh)) {
        $News->save(['id'=>$value,'sh'=>'1']);
    } else {
        $News->save(['id'=>$value,'sh'=>'0']);
    }
    }

}

to("../back.php?do=news");
