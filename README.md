# PHP_Blevel_self
自己練習的乙級



0714第一題第一次練習


0815第一題第二次
0817結束



較易忘記的:

base.php:
加 return


第一題:
    陣列顯示:
    
            foreach ($id as $key => $value) {
                if (isset($_POST['sh']) && in_array($value,$sh)) {
                    save(); 
                }else{
                    save();
                }
            }
            
   動畫輪播:
   
      把<div>挪到<script>上
        加一個  ww();
        
        在裡面跑回圈用lin.push()
        
        
