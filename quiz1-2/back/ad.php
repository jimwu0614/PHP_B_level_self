<style>
input[type=text]
{
	width:80%;
}
</style>

<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli">動態文字廣告管理</p>
    <form method="post"  action="./api/editad.php">
        <table width="100%">
            
                <tr class="yel">
                    <td width="80%">網站標題</td>
                    <td width="10%">顯示</td>
                    <td width="10%">刪除</td>
                </tr>

        <?php
        $rows = $Ad->all();
        foreach($rows as $value){
            // dd($value);
        ?>
                
                <tr>

                    <td><input type="text" name="text[]"  value="<?=$value['text']?>" class="w80"></td>
                    <td><input type="checkbox" name="sh[]" value="<?=$value['id']?>" <?=$value['sh']==1?"checked":''?>></td>
                    <td><input type="checkbox" name="del[]" value="<?=$value['id']?>"></td>
                    <input type="hidden" name="id[]" value="<?=$value['id']?>">

                </tr>
        <?php
        }
        ?>
            
        </table>
        <table style="margin-top:40px; width:70%;">
            <tbody>
                <tr>
                    <td width="200px"><input type="button" onclick="op('#cover','#cvr','./modal/update.php?from=ad')"
                            value="新增動態文字廣告"></td>
                    <td class="cent">
                    
                        <input type="submit" value="修改確定">
                        <input type="reset" value="重置">
                    </td>
                </tr>
            </tbody>
        </table>

    </form>
</div>