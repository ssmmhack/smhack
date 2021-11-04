<!DOCTYPE html>
<meta charset="UTF-8">
<?php
function print_title(){
    if(isset($_GET['id'])){
        echo $_GET['id'];
    }
    else{
        echo "Welcome";
    }
}
function print_description(){
    if(isset($_GET['id'])){
    echo file_get_contents("data/".$_GET['id']);
    }
    else{
        echo "Hello, PHP";
        }
    }
function print_image(){
    if(isset($_GET['id'])){
        $image = $_GET['id'];
        echo "<img src='$image.jpg' width= 90%>";
    }
    else echo "<img src='all.jpg' width=90%>";
}
    
    
function print_list(){
    $list = scandir('./data');

        $i=0;
        while($i < count($list)){
            if($list[$i] != '.'){
                if ($list[$i] != '..'){
                    echo "<li><a href =\"all.php?id=$list[$i]\">$list[$i]</a></li>\n";
                }
            }
            $i = $i +1;
        }
}
?>
<html lang="en">
<head>
    
    <link rel="stylesheet" href="allstyle.css">
</head>
<body>
    <h3><u><a href="all.php">ALL</a></u></h3>
    <div id="choose">
        메뉴를 선택하면 상세정보를 볼 수 있어요~
    </div>
    <div id="grid">
        <ol>
            <?php
            print_list();
            ?>
        </ol>
        <div id= "ingrid">
            <h5>
                <?php
                print_title();
                ?>
            </h5>
            
            <?php
                print_image(); ?>
        </div>
        <div id="des">
            <?
            print_description();
            ?>
        </div>
    </div>
    <form action="update_process.php" method = "post">
    <input type="hidden" name="old_title" value="<?=$_GET['id']?>">
        <p>
            <input type="text" name="title"
            placeholder="Title" value="<?php print_title(); ?>">
        </p>
        <p>
            <textarea name="description" palceholder="Description">
                <?php print_description();?>
            </textarea>
        </p>
        <p>
            <input type="submit">
        </p>
    </form>

</body>
</html>