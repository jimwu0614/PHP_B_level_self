<?php
include "../base.php";

if (isset($_POST['del'])) {
    foreach ($_POST['id'] as $value) {
        if (in_array($value,$_POST['del'])) {
            $News->del($value);
        }
    }
}
if (isset($_POST['sh'])) {
    foreach ($_POST['id'] as $value) {
        if (in_array($value,$_POST['sh'])) {
            $chk = $News->find($value);
            $chk['sh']=1;
            // dd($chk);
            $News->save($chk);
        }else{
            $chk = $News->find($value);
            $chk['sh']=0;
            // dd($chk);
            $News->save($chk);

        }
    }
}
to("../back.php?do=po");

?>