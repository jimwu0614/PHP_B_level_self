<style>
    .per{
        height: 20px;
        background-color: #666;
    }
</style>
<fieldset>
    <legend>目前位置：首頁＞問卷調查＞<?=$Que->find($_GET['id'])['text']?></legend>

    <h2><?=$Que->find($_GET['id'])['text']?></h2>

        <table class="w80 ma">
        <?php
        $rows = $Que->all(['parent'=>$_GET['id']]);
        foreach ($rows as $key => $value) {
            $all = $Que->find($_GET['id'])['total'];
            $optnum = $value['total'] ;
            $per = round($optnum / $all,2)*100;
        ?>
        <tr>
            <td class="w40"><?=$value['text']?></td>
            <td class="w15"><?=$value['total']?>票(<?=$per?>)%</td>
            <td class="w45"><div class="per" style="width: <?=$per?>%;"></div></td>
        </tr>
        <?php
        }
        ?>
        </table>
        
   
</fieldset>