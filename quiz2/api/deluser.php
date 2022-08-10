<?php
include_once "../base.php";


if (!empty($_POST)) {
    # code...
    $list = $_POST['del'];

    dd($list);
    foreach ($list as $value){
        echo $value;
        
        $User->del($value);
    };
}

to("./back.php?do=users")

?>