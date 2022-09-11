<style>
.img{
    width: 100px;
    height: 68px;
}

</style>
<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli">校園映像資料管理</p>
    <form method="post" action="./api/edit.php">
        <table width="100%">
            <tbody>
                <tr class="yel">
                    <td class="w70">校園映像</td>
                    <td class="w10">顯示</td>
                    <td class="w10">刪除</td>
                    <td class="w10"></td>
                </tr>
                <?php
                $count = $Image->math("count",'id',['sh'=>1]);
                $div = 3;
                $pages = ceil($count/$div);
                $now = $_GET['p']??1;
                $start = ($now-1)*$div;
                $rows = $Image->all("limit $start,$div");
                foreach ($rows as $key => $value) {
                ?>
                <tr>
                    <td class="ct"><img class="img " src="./upload/<?=$value['img']?>" alt=""></td>
                    <td><input type="checkbox" name="sh[]" value="<?=$value['id']?>" <?=$value['sh']?'checked':''?>></td>
                    <td><input type="checkbox" name="del[]" value="<?=$value['id']?>"></td>
                    <td><input type="button" value="更新圖片" onclick="op('#cover','#cvr','model.php?from=editImage&id=<?=$value['id']?>')"></td>
                </tr>
                <input type="hidden" name="from" value="Image">
                <input type="hidden" name="id[]" value="<?=$value['id']?>">
                <?php
                }
                ?>
            </tbody>
        </table>
        <div  class="ct">
        <?php
        if ($now>1) {
            $pev = $now-1;
            echo "<a href='?do=image&p=$pev'><</a>";
        }
        for ($i=1; $i <=$pages ; $i++) { 
            $size = ($now==$i)?'24px':'18px';
            echo "<a style='font-size: $size;' href='?do=image&p=$i'>$i</a>";
        }
        if ($now<$pages) {
            $aft = $now+1;
            echo "<a href='?do=image&p=$aft'>></a>";
        }
        ?>
        </div>
        <table style="margin-top:40px; width:70%;">
            <tbody>
                <tr>
                    <td width="200px"><input type="button" onclick="op('#cover','#cvr','model.php?from=addImage')" value="新增校園映像"></td>
                    <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
                </tr>
            </tbody>
        </table>

    </form>
</div>