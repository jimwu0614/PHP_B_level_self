<fieldset>
    <legend>目前位置：首頁＞問卷調查</legend>

    <table class="w80 ma">

        <tr>
            <td class="w10">編號</td>
            <td class="w60">問卷題目</td>
            <td class="w10">投票總數</td>
            <td class="w10">結果</td>
            <td class="w10">狀態</td>
        </tr>

    <?php
    $rows = $Que->all(['subject' => 0]);
    foreach ($rows as $key => $value) {
    ?>
        <tr>
            <td><?=$key+1?>.</td>
            <td><?=$value['text']?></td>
            <td><?=$value['total']?></td>
            <td><a href="?do=result&id=<?=$value['id']?>">結果</a></td>
            <td>
    <?php
    if (isset($_SESSION['user'])) {
        echo "<a href='?do=vote&id={$value['id']}'>參與投票</a>";
    } else {
        echo "請先登入";
    }
    
    ?>
            </td>
        </tr>
    <?php
    }
    ?>

    </table>


</fieldset>