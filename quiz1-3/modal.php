<?php
include "./base.php";
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

<h1 class="cent">新增最新消息資料</h1>
<hr>
<form action="./api/update.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="from" value="<?=$from?>">
    <table class="ma">
        <tr>
            <td>最新消息資料:</td>
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
    case 'Admin':
    ?>

<h1 class="cent">新增管理者帳號</h1>
<hr>
<form action="./api/update.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="from" value="<?=$from?>">
    <table class="ma">
        <tr>
            <td>管理者帳號:</td>
            <td><input type="text" name="acc" ></td>
        </tr>
        <tr>
            <td>密碼:</td>
            <td><input type="password" name="pw" ></td>
        </tr>
        <tr>
            <td>確認密碼:</td>
            <td><input type="password" name="pw2" ></td>
        </tr>
        <tr>
            <td><input type="submit" value="新增"><input type="reset" value="重置"></td>
            <td></td>
        </tr>
    </table>
</form>

<?php
        break;
    case 'add_Menu':
    ?>

<h1 class="cent">新增主選單</h1>
<hr>
<form action="./api/update.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="from" value="<?=$from?>">
    <table class="ma">
        <tr>
            <td>主選單名稱:</td>
            <td><input type="text" name="text" ></td>
        </tr>
        <tr>
            <td>主選單網址:</td>
            <td><input type="text" name="url" ></td>
        </tr>
        <tr>
            <td><input type="submit" value="新增"><input type="reset" value="重置"></td>
            <td></td>
        </tr>
    </table>
</form>

<?php
        break;
    case 'edit_Menu':
    $subjectid = $_GET['id'];
    ?>
<h1 class="cent">編輯次選單</h1>
<hr>
<form action="./api/update.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="from" value="<?=$from?>">
    
    <table class="ma" id="tbody">
        <tr>
            <td class="w40">次選單名稱</td>
            <td class="w40">次選單連結網址</td>
            <td class="w20">刪除</td>
        </tr>
    <?php
    $rows = $Menu->all(['parent'=>$subjectid]);
    foreach ($rows as $key => $value) {
    ?>
    <tr >
        <td><input type="text" name="text[]" value="<?=$value['text']?>"></td>
        <td><input type="text" name="url[]" value="<?=$value['url']?>"></td>
        <td><input type="checkbox" name="del[]" value="<?=$value['id']?>"></td>
        <input type="hidden" name="id[]" value="<?=$value['id']?>">
    </tr>
    <?php
    }
    ?>
    </table>
    <input type="hidden" name="subjectid" value="<?=$subjectid?>">
    <div class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"><input type="button" value="更多次選單" onclick="more()"></div>
</form>

<?php
        break;
}
?>

<script>
    function more() {
        $("#tbody").append(`
        <tr>
            <td><input type="text" name="text2[]"></td>
            <td><input type="text" name="url2[]"></td>
            <td></td>
        </tr>
        `)
    }
</script>