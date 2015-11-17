<?php
//ini_set('display_errors',1);
//ini_set('display_startup_errors',1);

//Author Asim Abinash (asim062390@gmail.com)
require_once('simple_html_dom.php');

$url=$_GET['url'];
if(!isset($url)){
    $url="http://google.com";
}
$html = file_get_html($url);
foreach($html->find('META') as $tmp){
                //print_r($tmp);
                $metainfo[] = $tmp->attr;
                //echo $tmp->content;
}

//echo "<pre>";
//print_r($metainfo);
//echo "</pre>";
?>
<html>
    <head>
        <style>
#main {
    margin:80px auto;
    width:500px;
}
h1 {
    font:bold 40px/38px helvetica, verdana, sans-serif;
    margin:0;
}
h1 a {
    color:#600;
    text-decoration:none;
}
p {
    background: #ECECEC;
    font:10px/14px verdana, sans-serif;
    margin:8px 0 15px;
    border: 1px #CCC solid;
    padding: 15px;
}
.item {
    padding:10px;
}
        </style>
    </head>
    <body>
        <div class="main">
        <?php
            foreach($metainfo as $temp2){
                echo "<div class='item'><pre><p>";
                print_r($temp2);
                echo "</p></pre></div>";
            }
            ?>
            </div>
        </div>
    </body>
</html>