<?php
include "../base.php";

if (!empty($_POST['del'])) {
    foreach ($_POST['id'] as $value) {
        if (in_array($value,$_POST['del'])) {
            $User->del($value);
        }
    }
}
to("../back.php?do=user");

?>