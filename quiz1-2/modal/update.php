<?php
include "../base.php";
$from = $_GET['from'];
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}

switch ($from) {
    case 'Title_update':
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

    case 'Title_add':
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

    case 'Ad':
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

    case 'Mvim_add':
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

    case 'Mvim_update':
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

    case 'Image_add':
?>
        <h1 class="cent">新增校園映象圖片</h1>
        <hr>
        <form action="./api/upload.php" method="post" enctype="multipart/form-data" class="cent">
            <label for="img">校園映象圖片:</label>
            <input type="file" name="img" >

            <input type="hidden" name="from" value="<?=$from?>">
            <input type="hidden" name="id" value="<?=$id?>">
            <br>
            <input type="submit" value="新增">
            <input type="reset" value="重置">
        </form>

<?php
        break;

    case 'Image_update':
?>
        <h1 class="cent">更新校園映象圖片</h1>
        <hr>
        <form action="./api/upload.php" method="post" enctype="multipart/form-data" class="cent">
            <label for="img">校園映象圖片:</label>
            <input type="file" name="img" id="">
            <input type="hidden" name="from" value="<?=$from?>">
            <input type="hidden" name="id" value="<?=$id?>">
            <br>
            <input type="submit" value="更新">
            <input type="reset" value="重置">
        </form>

<?php
        break;

    case 'News':
?>
        <h1 class="cent">新增最新消息資料</h1>
        <hr>
        <form action="./api/upload.php" method="post" enctype="multipart/form-data" class="cent">

            <label for="img">最新消息資料:</label>
            <textarea name="text[]" class="w80"  cols="10" rows="3"></textarea>

            <input type="hidden" name="from" value="<?=$from?>">
            <input type="hidden" name="id" value="<?=$id?>">
            <br>
            <input type="submit" value="新增">
            <input type="reset" value="重置">
        </form>

<?php
        break;

    case 'Admin':

?>
        <h1 class="cent">新增管理者帳號</h1>
        <hr>
        <form action="./api/upload.php" method="post" enctype="multipart/form-data" class="cent">

            <label for="img">帳號:</label>
            <input style="width:250px;" type="text" name="acc" >
            <br>
            
            <label for="img">密碼:</label>
            <input style="width:250px;" type="password" name="pw" >
            <br>
            
            <label for="img">確認密碼:</label>
            <input style="width:250px;" type="password" name="password2" >
            <br>

            <input type="hidden" name="from" value="<?=$from?>">

            <br>
            <input type="submit" value="新增">
            <input type="reset" value="重置">
        </form>
       

<?php
        break;

    case 'Menu_add':
?>
        <h1 class="cent">新增主選單</h1>
        <hr>
        <form action="./api/upload.php" method="post" enctype="multipart/form-data" class="cent">

            <label style="margin-right: 80px;" >主選單名稱:</label>
            <label >主選單網址:</label>
            <br>
            <input type="text" name="text" >
            <input type="text" name="url" >

            <input type="hidden" name="from" value="<?=$from?>">

            <br>
            <input type="submit" value="新增">
            <input type="reset" value="重置">
        </form>

<?php
        break;

    case 'Menu_update':
?>
        <h1 class="cent">編輯次選單</h1>
        <hr>
        <form action="./api/upload.php" method="post" enctype="multipart/form-data" class="cent">
            <table class="w80 marg-at" id="menutable">
                <tr>
                    <td class="w40">次選單名稱</td>
                    <td class="w40">次選單連結網址</td>
                    <td class="w20">刪除</td>
                </tr>
<?php
    $menus = $Menu->all(['parent'=>$id]);
    
    foreach ($menus as $menu) {
?>
                <tr>
                    <td ><input type="text" name="text[]" value="<?=$menu['text']?>"></td>
                    <td ><input type="text" name="url[]" value="<?=$menu['url']?>"></td>
                    <td ><input type="checkbox" name="del[]" value="<?=$menu['id']?>"></td>
                         <input type="hidden" name="subid[]" value="<?=$menu['id']?>">
                </tr>
<?php
    }

?>

            </table>

            <input type="hidden" name="from" value="<?=$from?>">
            <input type="hidden" name="parent" value="<?=$id?>">
            <br>
            <input type="submit" value="更新">
            <input type="reset" value="重置">
            <input type="button" onclick="more()" value="更多次選單">
        </form>
       
<?php


}

?>

<script>
    function more(){
        $("#menutable").append(`<tr> <td ><input type="text" name="text2[]" id=""></td> <td ><input type="text" name="url2[]" id=""></td> <td></td> </tr>`)}
</script>