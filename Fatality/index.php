<?php
   function makeOption(){
        $arr=array("동대문","동대문역사문화공원","충무로","명동","회현","서울역","숙대입구","삼각지",
        "신용산","이촌","동작","총신대입구","사당");
      for ($i=0;$i<13;$i++){
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
        <script src="subway.js"></script>
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
                    
                    <select onchange="categoryChange(this)"  name="start" size="1">
                    <?php makeOption(); ?> 
                    </select>
                    <select id="good">
                        <option>출발 시간 입력</option>
                    </select>
                    
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
        <script>
            function categoryChange(e) { 
               var target = document.getElementById("good");
               <?php echo makeArray(e.value);?>;
            }
           
        </script>
            
    </body>
</html>


   function makeArray(value){
      $conn = mysqli_connect("192.168.0.12", "hack", "1234" , "station");
         $sql = "SELECT name, time FROM ".e.value;
         $result = mysqli_query($conn, $sql);
         if (mysqli_num_rows($result) > 0) {
         while($row = mysqli_fetch_assoc($result)) {
         echo "번호: " . $row["name"]. " 시간:" . $row["time"]. "<br>";
         }
         }else{
         echo "테이블에 데이터가 없습니다.";
         }
         mysqli_close($conn);
   }