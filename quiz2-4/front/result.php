<style>
    .gray{
        height: 20px;
        background-color: #888;
    }
</style>
<fieldset>
    <legend>目前位置:首頁＞問卷調查＞<?=$Que->find($_GET['id'])['text']?></legend>
   
    <h3>目前位置:首頁＞問卷調查＞<?=$Que->find($_GET['id'])['text']?></h3>
    <table class="ma w80">
    <?php
    $rows = $Que->all(['parent'=>$_GET['id']]);
    foreach ($rows as $key => $value) {
    $count = $Que->find($_GET['id'])['total'];
    $per = round($value['total']/$count,2)*100
    ?>
    <tr>
        <td class="w50"><?=$value['text']?></td>
        <td class="w10"><?=$value['total']?>(<?=$per?>%)</td>
        <td class="w40"><div class="gray" style="width: <?=$per?>%;"> </div></td>
    </tr>
    <?php
    }
    ?>
    </table>
    <div class="ct"><a href="?do=que"><button>返回</button></a></div>
</fieldset>