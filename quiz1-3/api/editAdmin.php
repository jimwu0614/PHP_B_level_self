<?php
include "../base.php";

// dd($_POST);

if(isset($_POST['del'])){
    foreach ($_POST['id'] as $key => $del) {
        if (in_array($del,$_POST['del'])) {
            $Admin->del(['id'=>$del]);
        }
    }
}




    foreach ($_POST['id'] as $key => $value) {
            $Admin->save(['id'=>$value,'acc'=>$_POST['acc'][$key],'pw'=>$_POST['pw'][$key]]);
    }



to("../back.php?do=admin")

?>
