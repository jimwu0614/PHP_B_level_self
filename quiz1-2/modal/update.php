<?php
$from = $_GET['from'];
if (isset($_GET['id'])) {
    
    $id = $_GET['id'];
}

switch ($from) {
    case 'title_update':
?>
        <h1 class="cent">更新標題圖片</h1>
        <hr>
        <form action="./api/upload.php" method="post" enctype="multipart/form-data" class="cent">
            <label for="img">標題區圖片:</label>
            <input type="file" name="img" id="">
            <input type="hidden" name="from" value="<?=$from?>">
            <input type="hidden" name="id" value="<?=$id?>">
            <br>
            <input type="submit" value="更新">
            <input type="reset" value="重置">
        </form>

<?php
        break;

    case 'title_add':
?>
        <h1 class="cent">新增標題圖片</h1>
        <hr>
        <form action="./api/upload.php" method="post" enctype="multipart/form-data" class="cent">
            <label for="img">標題區圖片:</label>
            <input type="file" name="img" >
            <br>
            <label for="img">標題區替代文字:</label>
            <input type="text" name="text" >

            <input type="hidden" name="from" value="<?=$from?>">
            <input type="hidden" name="id" value="<?=$id?>">
            <br>
            <input type="submit" value="新增">
            <input type="reset" value="重置">
        </form>

<?php
        break;

    case 'ad':
?>
        <h1 class="cent">新增動態文字廣告</h1>
        <hr>
        <form action="./api/upload.php" method="post" enctype="multipart/form-data" class="cent">

            <label for="img">動態文字廣告:</label>
            <input type="text" name="text" >

            <input type="hidden" name="from" value="<?=$from?>">
            <input type="hidden" name="id" value="<?=$id?>">
            <br>
            <input type="submit" value="新增">
            <input type="reset" value="重置">
        </form>

<?php
        break;

    case 'mvim_add':
?>
        <h1 class="cent">新增動畫圖片</h1>
        <hr>
        <form action="./api/upload.php" method="post" enctype="multipart/form-data" class="cent">
            <label for="img">動畫圖片:</label>
            <input type="file" name="img" >

            <input type="hidden" name="from" value="<?=$from?>">
            <input type="hidden" name="id" value="<?=$id?>">
            <br>
            <input type="submit" value="新增">
            <input type="reset" value="重置">
        </form>

<?php
        break;

    case 'mvim_update':
?>
        <h1 class="cent">更新動畫圖片</h1>
        <hr>
        <form action="./api/upload.php" method="post" enctype="multipart/form-data" class="cent">
            <label for="img">動畫圖片:</label>
            <input type="file" name="img" id="">
            <input type="hidden" name="from" value="<?=$from?>">
            <input type="hidden" name="id" value="<?=$id?>">
            <br>
            <input type="submit" value="更新">
            <input type="reset" value="重置">
        </form>

<?php
        break;

    case '__':
?>


<?php
        break;

    case '__':
?>


<?php
        break;

    case '__':
?>


<?php
        break;

    case '__':
?>


<?php


}

?>