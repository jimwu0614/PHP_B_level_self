<style>
    .box {
        display: flex;
        width: 100%;
    }
</style>

<h3>目前位置：首頁＞分類網誌＞<span id="head"></span></h3>

<div class="box">
    <fieldset style="width: 30%;">
        <legend>網誌分類</legend>
        <div class="blue" onclick="getnews(this)">健康新知</div>
        <div class="blue" onclick="getnews(this)">菸害防治</div>
        <div class="blue" onclick="getnews(this)">癌症防治</div>
        <div class="blue" onclick="getnews(this)">慢性病防治</div>
    </fieldset>

    <fieldset style="width: 70%;">
        <legend>文章列表</legend>
        <div id="content"></div>
    </fieldset>
</div>
<script>
    getnews('健康新知');


    function getnews(list) {
        let type = $(list).text();
        // console.log(type);
        $("#head").text(type);
        $.post("./api/getnews.php", {type}, (list) => {
            $("#content").html(list)
        })

    }


    function getcont(list) {
        let type = $(list).text();
        console.log(type);
    
        $.post("./api/getcont.php", {type}, (list) => {
            $("#content").html(list)
        })
    }
</script>