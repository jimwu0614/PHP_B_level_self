<style>
    .box{
        display: flex;
        width: 100%;
    }
</style>

<h3>目前位置：首頁＞分類網誌＞<span id="head"></span></h3>

<div class="box">
    <fieldset style="width: 30%;">
        <legend>網誌分類</legend>
        <div class="blue" id="title1" onclick="getnews()">健康新知</div>
        <div class="blue" id="title2" onclick="getnews()">菸害防制</div>
        <div class="blue" id="title3" onclick="getnews()">癌症防治</div>
        <div class="blue" id="title4" onclick="getnews()">慢性病防治</div>
    </fieldset>
    
    <fieldset style="width: 70%;">
        <legend>文章列表</legend>
    </fieldset>
</div>
<script>
    function getnews(){
    let type = $(this).text();
    console.log(type);
    
    $("#head").text(type);    
}

</script>