<style>

</style>
<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli">最新消息資料管理</p>
    <form method="post" action="./api/edit.php">
        <table width="100%">
            <tbody>
                <tr class="yel">
                    <td class="w80">最新消息資料內容</td>
                    <td class="w10">顯示</td>
                    <td class="w10">刪除</td>
                </tr>
                <?php
                $rows = $News->all();
                foreach ($rows as $key => $value) {
                ?>
                <tr>
                    <td><textarea name="text[]"  cols="70" rows="3"><?=$value['text']?></textarea></td>
                    <td><input type="checkbox" name="sh[]" value="<?=$value['id']?>" <?=$value['sh']?'checked':''?>></td>
                    <td><input type="checkbox" name="del[]" value="<?=$value['id']?>"></td>
                </tr>
                <input type="hidden" name="from" value="News">
                <input type="hidden" name="id[]" value="<?=$value['id']?>">
                <?php
                }
                ?>
            </tbody>
        </table>
        <table style="margin-top:40px; width:70%;">
            <tbody>
                <tr>
                    <td width="200px"><input type="button" onclick="op('#cover','#cvr','model.php?from=addNews')" value="新增最新消息資料"></td>
                    <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
                </tr>
            </tbody>
        </table>

    </form>
</div>