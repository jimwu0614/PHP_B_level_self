<style>
    .s{
        display: block;
        background-color: #ccc;
    }
</style>
<fieldset>
    <legend>目前位置：首頁＞問卷調查＞<?=$Que->find(['id'=>$_GET['id']])['text']?></legend>

    <h3 ><?=$Que->find(['id'=>$_GET['id']])['text']?></h3>

    <table class="w80 ma">
<?php
$opts = $Que->all(['subject'=>$_GET['id']]);
foreach ($opts as $key => $value) {
    $totalnum = $Que->find(['id'=>$_GET['id']])['total'];
    $optnum = $Que->find(['id'=>$value['id']])['total'];
    $persent =(round($optnum/$totalnum,2))*100;
?>
    <tr>
        <td class="w60"><?=$key+1?>.<?=mb_substr($value['text'],2,100) ?></td>
        <td class="w10"><?=$value['total']?>票(<?=$persent?>%)</td>
        <td class="w30"><div style=" background-color: #ccc; width: <?=$persent?>%;"> &nbsp;</div></td>
    </tr>


<?php
}

?>
    </table>
</fieldset>
