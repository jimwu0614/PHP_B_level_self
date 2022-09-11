<?php
include_once "../base.php";
$chk = $Admin->math('count','id',['acc'=>$_POST['acc'],'pw'=>$_POST['pw']]);
if ($chk) {
    $_SESSION['admin']=$_POST['acc'];
    to("../back.php");
} else {
    ?>
    <script>
        alert("帳號或密碼錯誤");
        location.href="../index.php?do=login"
    </script>
    <?php
}

?>