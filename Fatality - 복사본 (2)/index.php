
<?php
   function makeOption(){
        $arr=array("선택하세요", "동대문","동대문역사문화공원","충무로","명동","회현","서울역","숙대입구","삼각지",
        "신용산","이촌","동작","총신대입구","사당");
      for ($i=0;$i<14;$i++){
        $name=$arr[$i];
         echo "<option value=".$name.">".$name."</option>";
    }
}
?>

<?php 
   function agreeAlert1(){
    if (agree=="disagree"){
       echo("<script language='javascript'>agreeAlert();</script>");
    }
}
?>


<!Doctype>
<html>
    <head>
        <title>해커톤</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="style.css">
        <script src="newbtnscript.js"></script>
        <link href="http://fonts.googleapis.com/earlyaccess/nanumpenscript.css" rel="stylesheet">
    </head>

    <body style ="text-align: center">
        <!-- <script>
            var map=new Map();
            map.put("id","test");
            var a=map.get("id");
            document.write(a);
        </script> -->
        <h1 id="every">이 자리는 너의 숙명</h1>
        <div id="back">
            <form method="get" action="form_app.js">
                <p>출발역
                        <select name="start" onchange="handleOnChange(this);fuck();">
                            <?php makeOption(); ?> 
                        </select>
                        <div id="result"></div>
                        <br>
                        출발 시간 입력
                            <input type="text" id="go"/>
                            <button class="gobtn" type="button" onclick="printName();fuck();">입력</button>
                            <div id='result'></div>
                            
                    
                </p>
                <p>
                    도착역
                    <select name="end" size="1">
                        <?php makeOption(); ?>
                    </select>
                </p>
                <p>전화번호
                    <input type="tel" placeholder="010-0000-0000" patern="[0-9]{3}-[0,9]{4}-[0-9]{4}">
                </p>
                <p>개인정보 동의
                    <input type="radio" name="decision" value="agree">동의
                    <input type="radio" name="decision" value="disagree">비동의
                </p>
                <button type="button" name="data" onclick="agreeAlert(decision.value)" >전송</button>
                <input type="reset" value="취소">    
            </form>
        </div>
        

        <br> <br> <br> <br> 
        <a href="nosit.php"><div id="wantSeat">앉을래요</div></a> &nbsp; &nbsp; &nbsp; <a href="yessit.php"><div id="wantSeat">앉았어요</div></a>
         
    </body>
</html>

