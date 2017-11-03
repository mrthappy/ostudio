<?php
echo __FILE__;
echo __DIR__;
echo file_exists(__FILE__)?"yes":"no";
echo file_exists(__DIR__)?"yes":"no";
echo "<br/>";
echo is_file(__DIR__)?"yes":"no";
?>





<!DOCTYPE html>



<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <h>hello woedl </h1>
     <li><a href="test.php?link=link" class="menu_links">HOME</a></li>
     <li><a href="test.php?link=all"class="menu_links">PROJECT</a></li>
   <?php
    if(isset($_GET["link"])):
    $set=$_GET["link"];
    else:
    $set="";
    endif;
    switch($set){
        case "link":
            include("t.php");
            break;
        case "all":
        include("all.php");
        break;
        default:
        include("header.php");
    }
    ?>
    
</body>
</html>
