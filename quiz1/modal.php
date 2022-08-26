<?php

include "./base.php";
$from = $_GET['from'];
$id = $_GET['id']??'';

switch ($from) {
    case 'Title_add':
        ?>
            <h1 class="cent">新增標題區圖片</h1>
            <hr>
            <form action="./api/update.php" method="post" enctype="multipart/form-data">
                <table class="ma">
                    <tr>
                        <td>標題區圖片:</td>
                        <td><input type="file" name="img" ></td>
                    </tr>
                    <tr>
                        <td>標題區替代文字:</td>
                        <td><input type="text" name="text" ></td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" value="新增">
                            <input type="reset" value="重置">
                        </td>
                        <td><input type="hidden" name="from" value="<?=$from?>"></td>
                    </tr>

                </table>
            </form>
        <?php
        break;
    

    case 'Title_edit':
        ?>
            <h1 class="cent">更新標題區圖片</h1>
            <hr>
            <form action="./api/update.php" method="post" enctype="multipart/form-data">
                <table class="ma">
                    <tr>
                        <td>標題區圖片:</td>
                        <td><input type="file" name="img" ></td>
                    </tr>

                    <tr>
                        <td>
                            <input type="submit" value="更新">
                            <input type="reset" value="重置">
                        </td>
                        <td>
                            <input type="hidden" name="from" value="<?=$from?>">
                            <input type="hidden" name="id" value="<?=$_GET['id']?>">
                        </td>
                    </tr>

                </table>
            </form>
        <?php
        break;
    

    case 'Ad_add':
        ?>
            <h1 class="cent">新增動態文字廣告</h1>
            <hr>
            <form action="./api/update.php" method="post" enctype="multipart/form-data">
                <table class="ma">
                    <tr>
                        <td>動態文字廣告:</td>
                        <td><input type="text" name="text" ></td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" value="新增">
                            <input type="reset" value="重置">
                        </td>
                        <td><input type="hidden" name="from" value="<?=$from?>"></td>
                    </tr>

                </table>
            </form>
        <?php
        break;
    

    case 'Mvim_add':
        ?>
            <h1 class="cent">新增動畫圖片</h1>
            <hr>
            <form action="./api/update.php" method="post" enctype="multipart/form-data">
                <table class="ma">
                    <tr>
                        <td>動畫圖片:</td>
                        <td><input type="file" name="img" ></td>
                    </tr>

                    <tr>
                        <td>
                            <input type="submit" value="新增">
                            <input type="reset" value="重置">
                        </td>
                        <td><input type="hidden" name="from" value="<?=$from?>"></td>
                    </tr>

                </table>
            </form>
        <?php
        break;
    

    case 'Mvim_edit':
        ?>
            <h1 class="cent">更新動畫圖片</h1>
            <hr>
            <form action="./api/update.php" method="post" enctype="multipart/form-data">
                <table class="ma">
                    <tr>
                        <td>動畫圖片:</td>
                        <td><input type="file" name="img" ></td>
                    </tr>

                    <tr>
                        <td>
                            <input type="submit" value="更新">
                            <input type="reset" value="重置">
                        </td>
                        <td>
                            <input type="hidden" name="from" value="<?=$from?>">
                            <input type="hidden" name="id" value="<?=$_GET['id']?>">
                        </td>
                    </tr>

                </table>
            </form>
        <?php
        break;
    

    case 'Image_add':
        ?>
            <h1 class="cent">新增校園映象資料</h1>
            <hr>
            <form action="./api/update.php" method="post" enctype="multipart/form-data">
                <table class="ma">
                    <tr>
                        <td>校園映象資料:</td>
                        <td><input type="file" name="img" ></td>
                    </tr>

                    <tr>
                        <td>
                            <input type="submit" value="新增">
                            <input type="reset" value="重置">
                        </td>
                        <td><input type="hidden" name="from" value="<?=$from?>"></td>
                    </tr>

                </table>
            </form>
        <?php
        break;
    

    case 'Image_edit':
        ?>
            <h1 class="cent">更新校園映像圖片</h1>
            <hr>
            <form action="./api/update.php" method="post" enctype="multipart/form-data">
                <table class="ma">
                    <tr>
                        <td>校園映像圖片:</td>
                        <td><input type="file" name="img" ></td>
                    </tr>

                    <tr>
                        <td>
                            <input type="submit" value="更新">
                            <input type="reset" value="重置">
                        </td>
                        <td>
                            <input type="hidden" name="from" value="<?=$from?>">
                            <input type="hidden" name="id" value="<?=$_GET['id']?>">
                        </td>
                    </tr>

                </table>
            </form>
        <?php
        break;
    

    case 'News_add':
        ?>
            <h1 class="cent">新增最新消息資料</h1>
            <hr>
            <form action="./api/update.php" method="post" enctype="multipart/form-data">
                <table class="ma">
                    <tr>
                        <td>最新消息資料:</td>
                        <td><textarea name="text" cols="50" rows="5"></textarea></td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" value="新增">
                            <input type="reset" value="重置">
                        </td>
                        <td><input type="hidden" name="from" value="<?=$from?>"></td>
                    </tr>

                </table>
            </form>
        <?php
        break;
    

    case 'Admin_add':
        ?>
        <h1 class="cent">新增動態文字廣告</h1>
        <hr>
        <form action="./api/update.php" method="post" enctype="multipart/form-data">
            <table class="ma">
                <tr>
                    <td>帳號:</td>
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
                    <td>
                        <input type="submit" value="新增">
                        <input type="reset" value="重置">
                    </td>
                    <td><input type="hidden" name="from" value="<?=$from?>"></td>
                </tr>

            </table>
        </form>
    <?php
        break;
    

    case 'Menu_add':
        ?>
            <h1 class="cent">新增主選單</h1>
            <hr>
            <form action="./api/update.php" method="post" enctype="multipart/form-data">
                <table class="ma">
                    <tr>
                        <td>主選單名稱:</td>
                        <td><input type="text" name="text" ></td>
                    </tr>
                    <tr>
                        <td>主選單連結網址:</td>
                        <td><input type="text" name="url" ></td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" value="新增">
                            <input type="reset" value="重置">
                        </td>
                        <td><input type="hidden" name="from" value="<?=$from?>"></td>
                    </tr>

                </table>
            </form>
        <?php
        break;
    

    case 'Menu_edit':
        ?>
        <h1 class="cent">編輯次選單</h1>
        <hr>
        <form action="./api/update.php" method="post" enctype="multipart/form-data">
            <table class="ma" id="formbody">
                <tr>
                    <td class="w40">次選單名稱:</td>
                    <td class="w40">次選單連結網址:</td>
                    <td class="w20">刪除</td>
                </tr>
                <?php
                	$rows = $Menu->all(['par'=>$_GET['id']]);
                    foreach ($rows as $key => $value) {
                ?>
                <tr>
                    <td><input type="text" name="text[]" value="<?=$value['text']?>"></td>
                    <td><input type="text" name="url[]" value="<?=$value['url']?>"></td>
                    <td><input type="checkbox" name="del[]" value="<?=$value['id']?>"></td>
                    <input type="hidden" name="subid[]" value="<?=$value['id']?>">

                </tr>
                <?php
                    }
                ?>
            </table>

            <table class="ma">
                <tr>
                    <td>
                        <input type="hidden" name="from" value="Sub_edit">
                        <input type="hidden" name="mainid" value="<?=$_GET['id']?>">
                    </td>
                    <td >
                        <input type="submit" value="修改確定">
                        <input type="reset" value="重置">
                        <button type="button" onclick="more()">更多次選單</button>
                    </td>
                </tr>

            </table>
        </form>
    <?php
        break;
    

    case 'value':
        # code...
        break;
    

}


?>

<script>
    function more() {
        $('#formbody').append(`<tr>
                    <td><input type="text" name="text2[]" value=""></td>
                    <td><input type="text" name="url2[]" value=""></td>
                    <td></td>
                </tr>
        `)
    }
</script>