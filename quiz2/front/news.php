<fieldset class="w100 flex">
    <legend>目前位置：首頁＞最新文章區</legend>
    

    <table class="w80 ma">
        <tr >
            <td class="w50 ">標題</td>
            <td class="w50 ">內容</td>
        </tr>

        <?php
            $news = $News->all(['sh'=>1]);
            foreach ($news as  $value) {
        ?>

        <tr>
            <td class="clo"><?=$value['title']?></td>
            <td><?=$value['text']?></td>
        </tr>

        <?php
            }
        ?>
    </table>
</fieldset>