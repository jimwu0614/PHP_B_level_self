<style>

</style>

<fieldset>
    <legend>忘記密碼</legend>

    <div>請輸入信箱以查詢密碼</div>
    <div><input type="email" name="email" id="email"></div>
    <div class="res"></div>
    <button onclick="forget()">尋找</button>


</fieldset>

<script>
    function forget(){
        let email = $('#email').val();
        $.post("./api/forget.php",{email},(res)=>{
            $(".res").html('您的密碼為:'+res);
        })
    }

</script>