<style>
    .smpic{
        width: 200px;
        height: 100px;
        margin: 0 80px;
    }
</style>

<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli">動畫圖片管理</p>
    <form method="post"  action="./api/editMvim.php">
        <table width="100%">
            
                <tr class="yel">
                    <td width="45%">動畫圖片</td>
                    <td width="10%">顯示</td>
                    <td width="10%">刪除</td>
                    <td width="35%"></td>
                </tr>

        <?php
        $rows = $Mvim->all();
        foreach($rows as $value){
            // dd($value);
        ?>
                
                <tr>
                    <td><img class="smpic cent" src="./img/<?=$value['img']?>" alt=""></td>
                    <td><input type="checkbox" name="sh[]" value="<?=$value['id']?>" <?=$value['sh']==1?"checked":''?>></td>
                    <td><input type="checkbox" name="del[]" value="<?=$value['id']?>"></td>
                    <td>
                        <input type="button" onclick="op('#cover','#cvr','./modal/update.php?id=<?=$value['id']?>&from=Mvim_update')"value="更換動畫">
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
                    <td width="200px"><input type="button" onclick="op('#cover','#cvr','./modal/update.php?from=Mvim_add')"
                            value="新增動畫圖片"></td>
                    <td class="cent">
                    
                        <input type="submit" value="修改確定">
                        <input type="reset" value="重置">
                    </td>
                </tr>
            </tbody>
        </table>

    </form>
</div>