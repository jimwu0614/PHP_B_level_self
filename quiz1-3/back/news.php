<style>
    .img{
        width: 200px;
        height: 100px;
    }
</style>
<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli">動畫圖片管理</p>
    <form method="post" action="./api/editMvim.php">
        <table width="100%">
            <tbody>
                <tr class="yel">
                    <td class="w50">動畫圖片</td>
                    <td class="w10">顯示</td>
                    <td class="w10">刪除</td>
                    <td class="w30"></td>
                </tr>
                <?php
                $rows = $Mvim->all();
                foreach ($rows as $key => $value) {
                ?>
                <tr>
                    <td><img class="img" src="./img/<?=$value['img']?>" ></td>
                    <td><input type="checkbox" name="sh[]" value="<?=$value['id']?>" <?=($value['sh']==1)?'checked':''?>></td>
                    <td><input type="checkbox" name="del[]" value="<?=$value['id']?>"></td>
                    <td><input type="button" onclick="op('#cover','#cvr','modal.php?from=edit_Mvim&id=<?=$value['id']?>')" value="更換動畫"></td>
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
                    <td width="200px"><input type="button" onclick="op('#cover','#cvr','modal.php?from=add_Mvim')" value="新增動畫圖片"></td>
                    <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置">
                    </td>
                </tr>
            </tbody>
        </table>

    </form>
</div>