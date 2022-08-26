<?php

include_once "../base.php";


$id = $_POST['id'];

if (!empty($_POST['del'])) {
    $del = $_POST['del'];
}

foreach ($id as $key => $value) {
    if (in_array($value,$del)) {
        $User->del(['id'=>$value]);
    }

}

to("../back.php?do=user");

?>