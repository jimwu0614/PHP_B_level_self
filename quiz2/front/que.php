<fieldset>
    <legend>目前位置＞問卷調查</legend>

    <div class="w100">
        <table class="w100"> 
            <tr>
                <td class="w10">編號</td>
                <td class="w50">問卷題目</td>
                <td class="w10">投票總數</td>
                <td class="w15">結果</td>
                <td class="w15">狀態</td>
            </tr>

            <?php
            $ques = $Que->all(['queid'=>0]);
            foreach($ques as $key=>$que){
            ?>

            <tr>
                <td><?=$key + 1?>.</td>
                <td><?=$que['text']?></td>
                <td><?=$que['count']?></td>
                <td><a href="?do=result&id=<?=$que['id']?>">結果</a></td>
                <td>
                    <?php
                        if (isset($_SESSION['user'])) {
                            echo "<a href='?do=vote&id={$que['id']}'>參與投票</a>";
                        }else{
                            echo "請先登入";
                        }
                    ?>
                    
                </td>
            </tr>


            <?php
            }
            ?>

        </table>

    </div>





</fieldset>