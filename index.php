
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
         <script>
               var map=new Map();
               map.put("id","test");
               var a=map.get("id");
               document.write(a);
         </script>

         <h1 id="every">이 자리는 너의 숙명</h1>
         
         <div id="back">
               <form method="get" action="form_app.js">
                  <p>출발역
                     <select name="start" size="1">
                           <script>makeOption()</script>  
                     </select>
                     <select name="startTime" size="1">
                           <script></script>
                     </select>
                  </p>
                  <p>
                     도착역
                     <select name="end" size="1">
                           <script>makeOption()</script>
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
         <a href="noseat.php"><div id="wantSeat">앉을래요</div></a> &nbsp; &nbsp; &nbsp; <a href="yesseat.php"><div id="wantSeat">앉았어요</div></a>
      </body>
   </html>

<?php
   $conn = mysqli_connect("192.168.0.12", "hack", "1234" , "station");
   $sql = "SELECT name, time FROM 동대문";
   $result = mysqli_query($conn, $sql);
   if (mysqli_num_rows($result) > 0) {
   while($row = mysqli_fetch_assoc($result)) {
   echo "번호: " . $row["name"]. " 시간:" . $row["time"]. "<br>";
   }
   }else{
   echo "테이블에 데이터가 없습니다.";
   }
   mysqli_close($conn); // 디비 접속 닫기
?>