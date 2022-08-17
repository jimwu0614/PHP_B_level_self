<style>
    .smpic{
        width: 300px;
        height: 30px;
    }
</style>

<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli">網站標題管理</p>
    <form method="post"  action="./api/editMenu.php">
        <table width="100%">
            
                <tr class="yel">
                    <td width="30%">主選單名稱</td>
                    <td width="30%">選單連結網址</td>
                    <td width="11%">次選單數</td>
                    <td width="7%">顯示</td>
                    <td width="7%">刪除</td>
                    <td></td>
                </tr>

        <?php
        $rows = $Menu->all(['parent'=>0]);
        foreach($rows as $value){
            // dd($value);
        ?>
                
                <tr>
                    <td><input type="text" name="text[]" value="<?=$value['text']?>"></td>
                    <td><input type="text" name="url[]" value="<?=$value['url']?>"></td>
                    <td><?=$Menu->math("count","id",['parent'=>$value['id']])?></td>
                    <td><input type="checkbox" name="sh[]" value="<?=$value['id']?>" <?=$value['sh']==1?"checked":''?>></td>
                    <td><input type="checkbox" name="del[]" value="<?=$value['id']?>"></td>
                    <td>
                        <input type="button" onclick="op('#cover','#cvr','./modal/update.php?id=<?=$value['id']?>&from=Menu_update')"value="編輯次選單">
                        <input type="hidden" name="id[]" value="<?=$value['id'];?>">
                    </td>
                </tr>
        <?php
        }
        ?>
            
        </table>
        <table style="margin-top:40px; width:70%;">
            <tbody>
                <tr>
                    <td width="200px"><input type="button" onclick="op('#cover','#cvr','./modal/update.php?from=Menu_add')"
                            value="新增主選單"></td>
                    <td class="cent">
                    
                        <input type="submit" value="修改確定">
                        <input type="reset" value="重置">
                    </td>
                </tr>
            </tbody>
        </table>

    </form>
</div>