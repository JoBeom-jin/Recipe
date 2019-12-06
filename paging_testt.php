<?php
$dsn = "mysql:host=localhost;port=3306;dbname=beomjin1;charset=utf8";


$db = new PDO($dsn, "beomjin22", "root1234");
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

include "db_info.php";

$posts_num = 5;

$query = "SELECT * FROM board";

    $stmt = $db->prepare($query);
    $stmt->execute();

    $stmt->setFetchMode(PDO::FETCH_BOTH); 

$total = mysql_result($result1, 0, 0);

$page_num = ceil($total/$posts_num);

$page_start = $posts_num * $page_seq;

$query = "SELECT * FROM board";

    $stmt = $db->prepare($query);
    $stmt->execute();

    $stmt->setFetchMode(PDO::FETCH_BOTH); // PDO::FETCH_ASSOC, PDO::FETCH_NUM
    // 1 row 씩 가져오기
    while($data= $stmt->fetch()) {
    echo "$data[numbers] </br>";
}

$pagegroup = 5;

$pagegroup_seq = ceil($page_num+1)/$pagegroup;

$pagegroup_start = ($pagegroup_seq-1) * $pagegroup + 1;

$pagegroup_end = $pagegroup_start + $pagegroup;

$prevgroup = $pagegroup_seq - 1;

$prevgroup_start = ($prevgroup - 1) * $pagegroup;
$nextgroup = $pagegroup_seq + 1;

$nextgroup_start = ($nextgroup - 1) * $pagegroup;

if($pagegroup_seq != 1){
    echo "[<a href='$PHP_SELF?page_seq=$prevgroup_start'>☜</a>]";
}


for($i = $pagegroup_start; $i<=$pagegroup_end; $i++){

 if($i>$page_num){break;}

    $i=$i-1;

     echo "[<a href='$PHP_SELF?page_seq=$i'>$i</a>]";

 }


 if($page_num > ($nextgroup + 1)){
     echo "[<a href='$PHP_SELF?page_seq=$nextgroup_start'>☞</a>]";
 }



echo 'ddddd';

?>

