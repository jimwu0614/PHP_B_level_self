<?php
include "../base.php";

if (isset($_POST['del'])) {
    foreach ($_POST['id'] as $key => $value) {
        if (in_array($value,$_POST['del'])) {
            $News->del($value);
        }
    }
}
if (isset($_POST['sh'])) {
    foreach ($_POST['id'] as $key => $value) {
        if (in_array($value,$_POST['sh'])) {
            $News->save(['id'=>$value,'sh'=>1]);
        }else{
            $News->save(['id'=>$value,'sh'=>0]);

        }
    }
}
to("../back.php?do=news");
?>