<?php
include_once "../base.php";
$Que->save(['text'=>$_POST['subject']]);
$subj = $Que->find(['text'=>$_POST['subject']])['id'];
foreach ($_POST['opt'] as $key => $value) {
    if (!empty($value)) {
        $Que->save(['text'=>$value,'parent'=>$subj]);
    }
}
to("../back.php?do=que");

?>