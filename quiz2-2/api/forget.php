<?php
include_once "../base.php";

echo $User->find(['email'=>$_POST['email']])['pw']


?>