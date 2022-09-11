<style>

    input[type=text],input[type=password]
    {
        width:80%;
    }
</style>
<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli">選單管理</p>
    <form method="post" action="./api/edit.php">
        <table width="100%">
            <tbody>
                <tr class="yel">
                    <td class="w30">主選單名稱</td>
                    <td class="w30">選單連結網址</td>
                    <td class="w10">次選單數</td>
                    <td class="w10">顯示</td>
                    <td class="w10">刪除</td>
                    <td class="w10"></td>
                </tr>
                <?php
                $rows = $Menu->all(['parent'=>0]);
                foreach ($rows as $key => $value) {
                ?>
                <tr>
                    <td><input type="text" name="text[]" value="<?=$value['text']?>"></td>
                    <td><input type="text" name="url[]" value="<?=$value['url']?>"></td>
                    <td><?=$Menu->math('count','id',['parent'=>$value['id']])?></td>
                    <td><input type="checkbox" name="sh[]" value="<?=$value['id']?>"></td>
                    <td><input type="checkbox" name="del[]" value="<?=$value['id']?>"></td>
                    <td><input type="button" onclick="op('#cover','#cvr','model.php?from=editMenu&id=<?=$value['id']?>')" value="編輯次選單"></td>
                </tr>
                <input type="hidden" name="from" value="Menu">
                <input type="hidden" name="id[]" value="<?=$value['id']?>">
                <?php
                }
                ?>
            </tbody>
        </table>
        <table style="margin-top:40px; width:70%;">
            <tbody>
                <tr>
                    <td width="200px"><input type="button" onclick="op('#cover','#cvr','model.php?from=addMenu')" value="新增主選單"></td>
                    <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
                </tr>
            </tbody>
        </table>

    </form>
</div>