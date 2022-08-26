<form action="./api/editnews.php" method="post">
    <table class="w80 ma">
        <tr>
            <td class="w10">編號</td>
            <td class="w70">標題</td>
            <td class="w10">顯示</td>
            <td class="w10">刪除</td>
        </tr>
        <?php

        $count = $News->math('count', 'id', ['sh' => 1]);
        $div = 3;
        $pages = ceil($count / $div);
        $now = $_GET['p'] ?? 1;
        $start = ($now - 1) * $div;


        $rows = $News->all( "limit $start,$div");
        foreach ($rows as $key => $value) {
        ?>
            <tr>
                <td class="clo ct"><?= $value['id'] ?>.</td>
                <td><?= $value['title'] ?></td>
                <td><input type="checkbox" name="sh[]" value="<?= $value['id'] ?>" <?= ($value['sh'] == 1) ? 'checked' : '' ?>></td>
                <td><input type="checkbox" name="del[]" value="<?= $value['id'] ?>"></td>
                <input type="hidden" name="id[]" value="<?= $value['id'] ?>">
            </tr>
        <?php
        }
        ?>
    </table>

    <div class="ct">
        <?php
        if ($now != 1) {
            $per = ($now - 1);
            echo "<a href='?do=news&p=$per'><</a>";
        }


        for ($i = 1; $i <= $pages; $i++) {
            $size = ($now == $i) ? '24px' : '18px';
            echo "<a style='font-size: $size;' href='?do=news&p=$i'>$i</a>";
        }




        if ($now < $pages) {
            $next = ($now + 1);
            echo "<a href='?do=news&p=$next'>></a>";
        }
        ?>
    </div>
    <div class="ct">    
        <input class="ma" type="submit" value="確定修改">
    </div>
</form>