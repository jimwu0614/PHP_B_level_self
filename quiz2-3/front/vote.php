<fieldset>
    <legend>目前位置：首頁＞問卷調查＞<?=$Que->find($_GET['id'])['text']?></legend>

    <h2><?=$Que->find($_GET['id'])['text']?></h2>

    <form action="./api/vote.php" method="post">
        <?php
        $rows = $Que->all(['parent'=>$_GET['id']]);
        foreach ($rows as $key => $value) {
        ?>
        <input type="radio" name="opt" value="<?=$value['id']?>"><?=$value['text']?><br>
        <input type="hidden" name="subject" value="<?=$_GET['id']?>">
        <?php
        }
        ?>
        <div class="ct"><input type="submit" value="我要投票"></div>
    </form>
</fieldset>