<?php
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
    

    case 'value':
        # code...
        break;
    

    case 'value':
        # code...
        break;
    

    case 'value':
        # code...
        break;
    

    case 'value':
        # code...
        break;
    

    case 'value':
        # code...
        break;
    

}


?>