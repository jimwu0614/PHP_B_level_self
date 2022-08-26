<h3>目前位置：首頁＞分類網誌＞ <span id="header"></span></h3>
<div class="flex">
    <fieldset class="w20">
        <legend>分類網誌</legend>

        <div class="w80">
            <div class="blue" onclick="getlist(this)">健康新知</div>
            <div class="blue" onclick="getlist(this)">菸害防治</div>
            <div class="blue" onclick="getlist(this)">癌症防治</div>
            <div class="blue" onclick="getlist(this)">慢性病防治</div>
        </div>
    </fieldset>
    <fieldset class="w70">
        <legend>文章列表</legend>
        <div id="content"></div>
    </fieldset>
</div>
<script>
    getlist('<div class="blue" onclick="getlist(this)">健康新知</div>');
    function getlist(type) {
        let header = $(type).text();
        $("#header").text(header); 
        $.post("./api/getlist.php",{header},(res)=>{
            $('#content').html(res);
        })

    }
    function getnews(type) {
        let title = $(type).text();
        // console.log(title);
        $.post("./api/getnews.php",{title},(res)=>{
            $('#content').html(res);
        })

    }
</script>