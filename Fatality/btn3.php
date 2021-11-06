<?php
$list = array();
$list = [];

for($i=0; $i<32; $i++){
    $list[] = 0;
}
?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Train Seat Booking</title>
    <link rel="stylesheet" href="btn.css"/>
</head>
<body>
    <div class="container">
        <label id="train">
            3번칸
        </label>
    </div>
    <ul class = "showcase">
        <li>
            <div class="grey"> </div>
            <small>no answer</small>
        </li>
        <li>
            <div class="grey yellow"> </div>
            <small>sit</small>
        </li>
        <li>
            <div class="grey red"> </div>
            <small>leave</small>
        </li>
        <li>
            <div class="grey green"> </div>
            <small>able</small>
        </li>
    </ul>
    <div class="contianer">
    <div class="screen"></div>

    <?php
    $i =0;
    while ($i < 32){
        if ($i == 16){?>
            <br><br><br> <?php
        }
        if ($list[$i] == 0){?>
            <div class="grey"></div><?php
        }
        $i = $i+1;        
    }
    ?>
    <br> <div class="screen"></div>
    </div>
    
</body>
</html>