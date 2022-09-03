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
            <td><input type="submit" value="更換"><input type="reset" value="重置"></td>
            <td></td>
        </tr>
    </table>
</form>

<?php
        break;
    case 'Ad':
    ?>

<h1 class="cent">新增動態文字廣告</h1>
<hr>
<form action="./api/update.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="from" value="<?=$from?>">
    <table class="ma">
        <tr>
            <td>動態文字廣告:</td>
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
    case 'add_Mvim':
    ?>

<h1 class="cent">新增動畫圖片</h1>
<hr>
<form action="./api/update.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="from" value="<?=$from?>">
    <table class="ma">
        <tr>
            <td>動畫圖片:</td>
            <td><input type="file" name="img"></td>
        </tr>
        <tr>
            <td><input type="submit" value="新增"><input type="reset" value="重置"></td>
            <td></td>
        </tr>
    </table>
</form>

<?php
        break;
    case 'edit_Mvim':
    ?>

<h1 class="cent">更換動畫圖片</h1>
<hr>
<form action="./api/update.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="from" value="<?=$from?>">
    <table class="ma">
        <tr>
            <td>動畫圖片:</td>
            <td><input type="file" name="img"></td>
            <input type="hidden" name="id" value="<?=$_GET['id']?>">
        </tr>
        <tr>
            <td><input type="submit" value="更換"><input type="reset" value="重置"></td>
            <td></td>
        </tr>
    </table>
</form>



<?php
        break;
    case 'add_Image':
    ?>

<h1 class="cent">新增校園映像圖片</h1>
<hr>
<form action="./api/update.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="from" value="<?=$from?>">
    <table class="ma">
        <tr>
            <td>校園映像圖片:</td>
            <td><input type="file" name="img"></td>
        </tr>
        <tr>
            <td><input type="submit" value="新增"><input type="reset" value="重置"></td>
            <td></td>
        </tr>
    </table>
</form>


<?php
        break;
    case 'edit_Image':
    ?>

<h1 class="cent">更換校園映像圖片</h1>
<hr>
<form action="./api/update.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="from" value="<?=$from?>">
    <table class="ma">
        <tr>
            <td>校園映像圖片:</td>
            <td><input type="file" name="img"></td>
            <input type="hidden" name="id" value="<?=$_GET['id']?>">
        </tr>
        <tr>
            <td><input type="submit" value="更換"><input type="reset" value="重置"></td>
            <td></td>
        </tr>
    </table>
</form>


<?php
        break;
    case 'add_News':
    ?>

<h1 class="cent">新增動態文字廣告</h1>
<hr>
<form action="./api/update.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="from" value="<?=$from?>">
    <table class="ma">
        <tr>
            <td>動態文字廣告:</td>
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
    case 'News':
    ?>

<h1 class="cent">新增動態文字廣告</h1>
<hr>
<form action="./api/update.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="from" value="<?=$from?>">
    <table class="ma">
        <tr>
            <td>動態文字廣告:</td>
            <td><textarea name="text" cols="50" rows="7"></textarea></td>
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
}
?>