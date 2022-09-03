<fieldset>
    <legend>帳號管理</legend>

    <form action="./api/deluser.php" method="post">
        <table class="w80 ma">
            <tr>
                <td class="w40 clo">帳號</td>
                <td class="w40 clo">密碼</td>
                <td class="w20 clo">刪除</td>
            </tr>

            <?php
            $rows = $User->all();
            foreach ($rows as $key => $value) {
        ?>
            <tr>
                <td><?=$value['acc']?></td>
                <td>****</td>
                <td><input type="checkbox" name="del[]" value="<?=$value['id']?>"></td>
                <input type="hidden" name="id[]" value="<?=$value['id']?>">
            </tr>

            <?php
            }
        
        ?>
        </table>   
        <div class="ma ct">
            <input type="submit" value="確定刪除">
            <input type="reset" value="清空選取">
        </div>
    </form>



    <h1>新增會員</h1>
    <form  method="post">
        <table class="w80 ma">
            <h4 >*請設定您要註冊的帳號密碼(最長12個字元)</h4>
            <tr>
                <td class="clo">Step1:登入帳號</td>
                <td><input type="text" name="acc" id="acc" ></td>
            </tr>
            <tr>
                <td class="clo">Stpe2:登入密碼</td>
                <td><input type="password" name="pw" id="pw"></td>
            </tr>
            <tr>
                <td class="clo">Step3:再次確認密碼</td>
                <td><input type="password" name="pw2" id="pw2"></td>
                <td></td>
            </tr>
            <tr>
                <td class="clo">Ste43:信箱(忘記密碼時使用)</td>
                <td><input type="text" name="email" id="email"></td>
            </tr>
            <tr>
                <td><button onclick="reg()" type="submit">註冊</button><button type="reset">清除</button></td>
                <td></td>
            </tr>
        </table>
    </form>
</fieldset>
<script>
    function reg(){

    let acc = $("#acc").val();
    let pw = $("#pw").val();
    let pw2 = $("#pw2").val();
    let email = $("#email").val();
    if (acc==''|| pw==''|| pw2==''|| email=='') {
        alert("不可空白")
    }

        $.post("./api/chkacc.php",{acc},(res)=>{
            if (res==1) {
                alert("帳號重複");
            }else{
                $.post('./api/reg.php',{acc,pw,email},(res2)=>{
                    location.reload();
                })
            }
    
        })
    }
</script>