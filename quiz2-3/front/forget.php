<fieldset>
    <legend>忘記密碼</legend>
    <div>請輸入信箱以查詢密碼</div>
    <div><input type="text" name="email" id="email"></div>
    <div id="res"></div>
    <div><button class="submit">尋找</button></div>
</fieldset>
<script>
    $(".submit").on("click",()=>{

        let email = $('#email').val();
        $.post("./api/forget.php",{email},(res)=>{
            $("#res").text(res);
        })
    })
</script>