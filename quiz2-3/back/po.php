<fieldset>
    <legend>最新文章管理</legend>
    <form action="./api/editnews.php" method="post">
        <table class="w80 ma">
            <tr>
                <td class="w20">編號</td>
                <td class="w60">標題</td>
                <td class="w10">顯示</td>
                <td class="w10">刪除</td>
            </tr>
            <?php
            $count = $News->math('count', 'id', ['sh' => 1]);
            $div = 3;
            $pages = ceil($count / $div);
            $now = $_GET['p'] ?? '1';
            $start = ($now - 1) * $div;
            $rows = $News->all("limit $start,$div");
            foreach ($rows as $key => $value) {
            ?>
                <tr>
                    <td><?= $value['id'] ?>.</td>
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

            if ($now > 1) {
                $pre = ($now - 1);
                echo " <a href='back.php?do=po&p=$pre'><</a>";
            }

            for ($i = 1; $i <= $pages; $i++) {
                $size = ($i == $now) ? '24px' : '18px';
                echo " <a style='font-size: $size;'  href='back.php?do=po&p=$i'>$i</a>";
            }


            if ($now < $pages) {
                $aft = ($now + 1);
                echo " <a href='back.php?do=po&p=$aft'>></a>";
            }


            ?>
        </div>
        <div class="ct">
            <input type="submit" value="確認修改">
        </div>

    </form>
</fieldset>