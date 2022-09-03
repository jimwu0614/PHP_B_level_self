<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli">選單管理</p>
    <form method="post" action="./api/editMenu.php">
        <table width="100%">
            <tbody>
                <tr class="yel">
                    <td width="33%">主選單名稱</td>
                    <td width="33%">選單連結網址</td>
                    <td width="10%">次選單數</td>
                    <td width="7%">顯示</td>
                    <td width="7%">刪除</td>
                    <td></td>
                </tr>
                <?php
                $rows = $Menu->all(['parent'=>0]);
                foreach ($rows as $key => $value) {
                ?>
                <tr>
                    <td><input type="text" name="text[]" value="<?=$value['text']?>"></td>
                    <td><input type="text" name="url[]" value="<?=$value['url']?>"></td>
                    <td><?=$Menu->math('count','id',['parent'=>$value['id']])?></td>
                    <td><input type="checkbox" name="sh[]" value="<?=$value['id']?>" <?=($value['sh']==1)?'checked':''?>></td>
                    <td><input type="checkbox" name="del[]" value="<?=$value['id']?>"></td>
                    <td><input type="button" onclick="op('#cover','#cvr','modal.php?from=edit_Menu&id=<?=$value['id']?>')" value="編輯次選單"></td>
                    <input type="hidden" name="id[]" value="<?=$value['id']?>">
                </tr>
                <?php
                }
                ?>
                
            </tbody>
        </table>
        <table style="margin-top:40px; width:70%;">
            <tbody>
                <tr>
                    <td width="200px"><input type="button" onclick="op('#cover','#cvr','modal.php?from=add_Menu')" value="新增主選單"></td>
                    <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置">
                    </td>
                </tr>
            </tbody>
        </table>

    </form>
</div>