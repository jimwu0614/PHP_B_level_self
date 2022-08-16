<style>
    .smpic{
        width: 200px;
        height: 100px;
        margin: 0 80px;
    }
    a{
        text-decoration: none;
    }
</style>

<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli">校園映象資料管理</p>
    <form method="post"  action="./api/editImage.php">
        <table width="100%">
            
                <tr class="yel">
                    <td width="45%">校園映象資料圖片</td>
                    <td width="10%">顯示</td>
                    <td width="10%">刪除</td>
                    <td width="35%"></td>
                </tr>

        <?php

        $count = $Image->math("count","id");
        $div = 3; 
        $pages = ceil($count/$div);
        // echo $pages;
        $now = $_GET['p']??1;
        $start = ($now - 1 ) * $div;

        $rows = $Image->all("limit $start,$div");
        foreach($rows as $value){
            // dd($value);
        ?>
                
                <tr>
                    <td><img class="smpic cent" src="./img/<?=$value['img']?>" alt=""></td>
                    <td><input type="checkbox" name="sh[]" value="<?=$value['id']?>" <?=$value['sh']==1?"checked":''?>></td>
                    <td><input type="checkbox" name="del[]" value="<?=$value['id']?>"></td>
                    <td>
                        <input type="button" onclick="op('#cover','#cvr','./modal/update.php?id=<?=$value['id']?>&from=Image_update')"value="更換圖片">
                        <input type="hidden" name="id[]" value="<?=$value['id'];?>">
                    </td>
                </tr>
        <?php
        }
        ?>
            
        </table>

    <div class="cent">
        <?php
            if($now - 1>0){
                $before = $now - 1
        ?>
            <a href="?do=image&p=<?=$before?>"><</a>
        <?php
            }
        ?>
        
        <?php
        for ($i=1; $i <= $pages; $i++) {
            $font = ($now==$i)?"24px":"18px";
        ?>
        <a style="font-size: <?=$font?>;" href="?do=image&p=<?=$i?>"><?=$i?></a>
        <?php
        }
        
        ?>
        <?php
            if(($now + 1)<=$pages){
                $after = $now - 1
        ?>
            <a href="?do=image&p=<?=$after?>">></a>
        <?php
            }
        ?>
    </div>
        <table style="margin-top:40px; width:70%;">
            <tbody>
                <tr>
                    <td width="200px"><input type="button" onclick="op('#cover','#cvr','./modal/update.php?from=Image_add')"
                            value="新增校園映象圖片"></td>
                    <td class="cent">
                    
                        <input type="submit" value="修改確定">
                        <input type="reset" value="重置">
                    </td>
                </tr>
            </tbody>
        </table>

    </form>
</div>