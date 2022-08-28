<fieldset>
    <legend>目前位置：首頁＞問卷調查＞<?=$Que->find(['id'=>$_GET['id']])['text']?></legend>

    <h3 ><?=$Que->find(['id'=>$_GET['id']])['text']?></h3>
    <form action="./api/vote.php" method="post">

    <?php
    $opts = $Que->all(['subject'=>$_GET['id']]);
    foreach ($opts as $key => $value) {
    ?>
        <input type="radio" name="opt" value="<?=$value['id']?>"><?=mb_substr($value['text'],2,100) ?><br>
    <?php
    }
    
    ?>

        <div>
            <input type="hidden" name="id" value="<?=$_GET['id']?>">
            <input type="submit" value="我要投票">
        </div>
    </form>
</fieldset>
