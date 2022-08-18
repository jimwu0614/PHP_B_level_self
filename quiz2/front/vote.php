<?php
$id = $_GET['id'];
$title = $Que->find($id)
?>
<fieldset>
    <legend>目前位置＞問卷調查＞<?=$title['text']?></legend>

    <h3><?=$title['text']?></h3>
    <div class="w100">
        <form action="./api/vote.php" method="post">

        <?php
            $opts = $Que->all(['queid'=>$id]);
            foreach ($opts as $key => $opt) {
        ?>
            <input type="radio" name="opt" id="" value="<?=$opt['id']?>"><?=$opt['text']?><br>
            <input type="hidden" name="id" value="<?=$_GET['id']?>">
            <input type="hidden" name="queid" value="<?=$opt['queid']?>">

        <?php
            }
        ?>

        <input style="margin-left: 200px;margin-top: 30px;" type="submit" value="我要投票">

        </form>

    </div>





</fieldset>