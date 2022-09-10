<?php
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
        <h1 class="ct">更新動態文字廣告</h1>
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
    
    case 'value':
        ?>

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
    
    case 'value':
        ?>

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
    
    case 'value':
        ?>

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
    
    case 'value':
        ?>

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