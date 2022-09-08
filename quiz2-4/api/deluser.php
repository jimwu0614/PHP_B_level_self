<?php
include "../base.php";

if (isset($_POST['del'])) {
    foreach ($_POST['id'] as $key => $value) {
        if (in_array($value,$_POST['del'])) {
            $User->del($value);
        }
    }
}
to("../back.php?do=user");
?>