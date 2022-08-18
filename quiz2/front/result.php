<?php
$id = $_GET['id'];
$title = $Que->find($id)
?>
<fieldset>
    <legend>目前位置＞問卷調查＞<?=$title['text']?></legend>

    <h3><?=$title['text']?></h3>
    <div class="w100">


        <?php

            $opts = $Que->all(['queid'=>$id]);
            $total= $title['count'];

            // $rate = $opts[];
            foreach ($opts as $key => $opt) {
                $per = round($opt['count']/$total,2)*100;
        ?>
        <div class="flex" style="justify-content: flex-start;">
            <div class="w40 mb">
                <span><?=$key + 1?>.</span>
                <span><?=$opt['text']?></span>
            </div>
            
            <div class="flex w50" style="justify-content: flex-start;">
            <span class="w20">&nbsp;&nbsp;&nbsp;&nbsp;<?=$opt['count']?>票</span>
            <span class="w20"><?=$per?>%</span>
            <span style="background: #ccc;display:inline-block; height:30px; width:<?=$per?>%"></span>
            </div>
        </div>
        <?php
            }
        ?>

        <button onclick="location.href='?do=que'" style="margin-left: 200px;margin-top: 30px;" >返回</button>



    </div>





</fieldset>