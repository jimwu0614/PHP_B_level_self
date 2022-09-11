<?php
include_once "./base.php";
$from = $_GET['from'];
switch ($from) {
    case 'addTitle':
        ?>
        <h1 class="ct">新增網站標題圖片</h1>
        <hr>
        <form action="./api/update.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="from" value="<?=$from?>">
            <table class="w80 ma">
                <tr>
                    <td>標題區圖片:</td>
                    <td><input type="file" name="img" id=""></td>
                </tr>
                <tr>
                    <td>標題區替代文字:</td>
                    <td><input type="text" name="text" id=""></td>
                </tr>
                <tr>
                    <td><input type="submit" value="新增"><input type="reset" value="重置"></td>
                    <td></td>
                </tr>
            </table>
        </form>
        <?php
        break;
    
    case 'editTitle':
        ?>
        <h1 class="ct">更新網站標題圖片</h1>
        <hr>
        <form action="./api/update.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="from" value="<?=$from?>">
            <table class="w80 ma">
                <tr>
                    <td>標題區圖片:</td>
                    <td><input type="file" name="img" id=""></td>
                </tr>
                <tr>
                    <td>標題區替代文字:</td>
                    <td><input type="text" name="text" id=""></td>
                </tr>
                <tr>
                    <td><input type="submit" value="更新"><input type="reset" value="重置"></td>
                    <td><input type="hidden" name="id" value="<?=$_GET['id']?>"></td>
                </tr>
            </table>
        </form>
        <?php
        break;
    
    case 'addAd':
        ?>
        <h1 class="ct">新增動態文字廣告</h1>
        <hr>
        <form action="./api/update.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="from" value="<?=$from?>">
            <table class="w80 ma">

                <tr>
                    <td>動態文字廣告:</td>
                    <td><input type="text" name="text" ></td>
                </tr>

            </table>
            <div class="ct"><input type="submit" value="新增"><input type="reset" value="重置"></div>
        </form>
        <?php
        break;
    
    case 'addMvim':
        ?>
        <h1 class="ct">新增動畫圖片</h1>
        <hr>
        <form action="./api/update.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="from" value="<?=$from?>">
            <table class="w80 ma">
                <tr>
                    <td>動畫圖片:</td>
                    <td><input type="file" name="img" id=""></td>
                </tr>

                <tr>
                    <td><input type="submit" value="新增"><input type="reset" value="重置"></td>
                    <td></td>
                </tr>
            </tr>
            </table>
        </form>
        <?php
        break;
    
    case 'editMvim':
        ?>
        <h1 class="ct">更新動畫圖片</h1>
        <hr>
        <form action="./api/update.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="from" value="<?=$from?>">
            <table class="w80 ma">
                <tr>
                    <td>動畫圖片:</td>
                    <td><input type="file" name="img" id=""></td>
                </tr>

                <tr>
                    <td><input type="submit" value="更新"><input type="reset" value="重置"></td>
                    <td><input type="hidden" name="id" value="<?=$_GET['id']?>"></td>
                </tr>
            </table>
        </form>
        <?php
        break;
    
    case 'addImage':
        ?>
        <h1 class="ct">新增校園映像圖片</h1>
        <hr>
        <form action="./api/update.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="from" value="<?=$from?>">
            <table class="w80 ma">
                <tr>
                    <td>校園映像圖片:</td>
                    <td><input type="file" name="img" id=""></td>
                </tr>

                <tr>
                    <td><input type="submit" value="新增"><input type="reset" value="重置"></td>
                    <td></td>
                </tr>
            </tr>
            </table>
        </form>
        <?php
        break;
    
    case 'editImage':
        ?>
        <h1 class="ct">更新校園映像圖片</h1>
        <hr>
        <form action="./api/update.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="from" value="<?=$from?>">
            <table class="w80 ma">
                <tr>
                    <td>校園映像圖片:</td>
                    <td><input type="file" name="img" id=""></td>
                </tr>

                <tr>
                    <td><input type="submit" value="更新"><input type="reset" value="重置"></td>
                    <td><input type="hidden" name="id" value="<?=$_GET['id']?>"></td>
                </tr>
            </table>
        </form>
        <?php
        break;
    
    case 'addNews':
        ?>
        <h1 class="ct">新增最新消息資料</h1>
        <hr>
        <form action="./api/update.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="from" value="<?=$from?>">
            <table class="w80 ma">

                <tr>
                    <td class="w30">最新消息資料:</td>
                    <td><textarea name="text"  cols="50" rows="3"></textarea></td>
                </tr>

            </table>
            <div class="ct"><input type="submit" value="新增"><input type="reset" value="重置"></div>
        </form>
        <?php
        break;
    
    case 'addAdmin':
        ?>
        <h1 class="ct">新增管理者帳號</h1>
        <hr>
        <form action="./api/update.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="from" value="<?=$from?>">
            <table class="w80 ma">
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
            </table>
            <div class="ct"><input type="submit" value="新增"><input type="reset" value="重置"></div>
        </form>
        <?php
        break;
    
    case 'addMenu':
        ?>
        <h1 class="ct">新增主選單</h1>
        <hr>
        <form action="./api/update.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="from" value="<?=$from?>">
            <table class="w80 ma ct">
                <tr>
                    <td>主選單名稱:</td>
                    <td>主選單連結網址:</td>
                </tr>
                <tr>
                    <td><input type="text" name="text" ></td>
                    <td><input type="text" name="url" ></td>
                </tr>
            </table>
            <div class="ct"><input type="submit" value="新增"><input type="reset" value="重置"></div>
        </form>
        <?php
        break;
    
    case 'editMenu':
        ?>
        <h1 class="ct">編輯次選單</h1>
        <hr>
        <form action="./api/update.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="from" value="<?=$from?>">
            <table class="w80 ma ct" id="table">
                <tr id="thead">
                    <td>主選單名稱:</td>
                    <td>主選單連結網址:</td>
                    <td></td>
                </tr>
        <?php
            $parent = $_GET['id'];
            // echo $parent;
            $rows = $Menu->all(['parent'=>$parent]);
            foreach ($rows as $key => $value) {
        ?>
                <tr>
                    <td><input type="text" name="text1[]" value="<?=$value['text']?>"></td>
                    <td><input type="text" name="url1[]" value="<?=$value['url']?>"></td>
                    <td><input type="checkbox" name="del[]" value="<?=$value['id']?>"></td>
                </tr>
                <input type="hidden" name="id[]" value="<?=$value['id']?>">
        <?php
            }
        ?>


            </table>
            <input type="hidden" name="parent" value="<?=$parent?>">
            <div class="ct"><input type="submit" value="修改確定"><input type="reset" value="重置"><input type="button" onclick="more()" value="更多次選單"></div>
        </form>
        <?php
        break;
    
    case 'value':
        ?>

        <?php
        break;
    
    case 'value':
        ?>

        <?php
        break;
            
}
?>
<script>
    function more(){
        $("#table").append(`<tr>
                                <td><input type="text" name="text2[]" ></td>
                                <td><input type="text" name="url2[]" ></td>
                                <td></td>
                            </tr>`);
    }
</script>