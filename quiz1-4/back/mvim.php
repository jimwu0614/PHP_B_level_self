<style>
.img{
    width: 100px;
    height: 68px;
}

</style>
<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli">動畫圖片管理</p>
    <form method="post" action="./api/edit.php">
        <table width="100%">
            <tbody>
                <tr class="yel">
                    <td class="w70">動畫圖片</td>
                    <td class="w10">顯示</td>
                    <td class="w10">刪除</td>
                    <td class="w10"></td>
                </tr>
                <?php
                $rows = $Mvim->all();
                foreach ($rows as $key => $value) {
                ?>
                <tr>
                    <td class="ct"><img class="img " src="./upload/<?=$value['img']?>" alt=""></td>
                    <td><input type="checkbox" name="sh[]" value="<?=$value['id']?>" <?=$value['sh']?'checked':''?>></td>
                    <td><input type="checkbox" name="del[]" value="<?=$value['id']?>"></td>
                    <td><input type="button" value="更新圖片" onclick="op('#cover','#cvr','model.php?from=editMvim&id=<?=$value['id']?>')"></td>
                </tr>
                <input type="hidden" name="from" value="Mvim">
                <input type="hidden" name="id[]" value="<?=$value['id']?>">
                <?php
                }
                ?>
            </tbody>
        </table>
        <table style="margin-top:40px; width:70%;">
            <tbody>
                <tr>
                    <td width="200px"><input type="button" onclick="op('#cover','#cvr','model.php?from=addMvim')" value="新增動畫圖片"></td>
                    <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
                </tr>
            </tbody>
        </table>

    </form>
</div>