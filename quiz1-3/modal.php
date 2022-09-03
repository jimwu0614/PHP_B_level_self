<?php
$from = $_GET['from'];


switch ($from) {
    case 'add_Title':
?>
<h1 class="cent">新增標題區圖片</h1>
<hr>
<form action="./api/update.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="from" value="<?=$from?>">
    <table class="ma">
        <tr>
            <td>標題區圖片:</td>
            <td><input type="file" name="img"></td>
        </tr>
        <tr>
            <td>標題區替代文字:</td>
            <td><input type="text" name="text"></td>
        </tr>
        <tr>
            <td><input type="submit" value="新增"><input type="reset" value="重置"></td>
            <td></td>
        </tr>
    </table>
</form>
<?php
        break;
    case 'edit_Title':
    ?>
<h1 class="cent">更換標題區圖片</h1>
<hr>
<form action="./api/update.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="from" value="<?=$from?>">
    <table class="ma">
        <tr>
            <td>標題區圖片:</td>
            <td><input type="file" name="img"></td>
            <input type="hidden" name="id" value="<?=$_GET['id']?>">
        </tr>
        <tr>
            <td><input type="submit" value="新增"><input type="reset" value="重置"></td>
            <td></td>
        </tr>
    </table>
</form>

<?php
        break;
    case '':
    ?>


<?php
        break;
    case '':
    ?>


<?php
        break;
    case '':
    ?>


<?php
        break;
    case '':
    ?>


<?php
        break;
    case '':
    ?>


<?php
        break;
    case '':
    ?>


<?php
        break;
    case '':
    ?>


<?php
        break;
    case '':
    ?>


<?php
        break;
    case '':
    ?>


<?php
        break;
    case '':
    ?>


<?php
        break;
}
?>