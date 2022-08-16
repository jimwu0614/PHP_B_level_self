<style>
input[type=text]
{
	width:80%;
}
</style>

<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli">最新消息資料管理</p>
    <form method="post"  action="./api/editNews.php">
        <table width="100%">
            
                <tr class="yel">
                    <td width="80%">最新消息資料內容</td>
                    <td width="10%">顯示</td>
                    <td width="10%">刪除</td>
                </tr>

        <?php

        $count = $News->math("count","id");
        $div = 4; 
        $pages = ceil($count/$div);
        $now = $_GET['p']??1;
        $start = ($now - 1 ) * $div;


        $rows = $News->all("limit $start,$div");
        foreach($rows as $value){
            // dd($value);
        ?>
                
                <tr>
                        
                    <td><textarea name="text[]" class="w80"  cols="10" rows="3"><?=$value['text']?></textarea></td>
                    <td><input type="checkbox" name="sh[]" value="<?=$value['id']?>" <?=$value['sh']==1?"checked":''?>></td>
                    <td><input type="checkbox" name="del[]" value="<?=$value['id']?>"></td>
                    <input type="hidden" name="id[]" value="<?=$value['id']?>">

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
            <a href="?do=news&p=<?=$before?>"><</a>
        <?php
            }
        ?>
        
        <?php
        for ($i=1; $i <= $pages; $i++) {
            $font = ($now==$i)?"24px":"18px";
        ?>
        <a style="font-size: <?=$font?>;" href="?do=news&p=<?=$i?>"><?=$i?></a>
        <?php
        }
        
        ?>
        <?php
            if(($now + 1)<=$pages){
                $after = $now - 1
        ?>
            <a href="?do=news&p=<?=$after?>">></a>
        <?php
            }
        ?>
    </div>

        <table style="margin-top:40px; width:70%;">
            <tbody>
                <tr>
                    <td width="200px"><input type="button" onclick="op('#cover','#cvr','./modal/update.php?from=News')"
                            value="新增最新消息資料"></td>
                    <td class="cent">
                    
                        <input type="submit" value="修改確定">
                        <input type="reset" value="重置">
                    </td>
                </tr>
            </tbody>
        </table>

    </form>
</div>