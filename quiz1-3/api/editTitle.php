<?php
include "../base.php";

if(isset($_POST['del'])){
    foreach ($_POST['id'] as $key => $del) {
        if (in_array($del,$_POST['del'])) {
            $Title->del(['id'=>$del]);
        }
    }
}

foreach ($_POST['id'] as $key => $value) {
    if ($_POST['sh']==$value) {    
        $Title->save(['id'=>$value,'text'=>$_POST['text'][$key],'sh'=>1]);
    }else{
        $Title->save(['id'=>$value,'text'=>$_POST['text'][$key],'sh'=>0]);

    }
}
to("../back.php?do=title")

?>
