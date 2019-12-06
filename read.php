<?php
$dsn = "mysql:host=localhost;port=3306;dbname=beomjin1;charset=utf8";

try {
    $db = new PDO($dsn, "beomjin22", "root1234");
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    

    

    


} catch(PDOException $e) {
    echo $e->getMessage();
}




?>


<div style="padding: 55px 35px;height:auto;background-image: url(img/board_back.png); background-repeat: no-repeat; background-size: 100% 100%;">

    
<center>

<table border="1" align="center" width="800" style="border-color:black;background:gray;border-collapse: collapse;">

<?php



$numbers = $_GET[numbers];
$query1 = "UPDATE board set hit=hit+1 where numbers=$numbers";

$stmt = $db->prepare($query1);
    $stmt->execute();
$query = "SELECT * FROM board where numbers=$numbers";


    $stmt = $db->prepare($query);
    $stmt->execute();

    $stmt->setFetchMode(PDO::FETCH_BOTH); // PDO::FETCH_ASSOC, PDO::FETCH_NUM
    // 1 row 씩 가져오기
    while($row= $stmt->fetch()) {
    echo '<tr>';
    echo '<td style="text-align:center" colspan="6">';
    echo  $row[title];
    echo '</td>';
    echo '</tr>';

    echo '<tr>';

    echo '<td width="100" style="text-align:center">';
    echo  '작성자';
    echo '</td>';

    echo '<td width="200">';
    echo  $row[name];
    echo '</td>';

    echo '<td width="100" style="text-align:center">';
    echo  '날짜';
    echo '</td>';

    echo '<td width="200">';
    echo  $row[date];
    echo '</td>';    


    echo '<td width="80" style="text-align:center">';
    echo  '조회수';
    echo '</td>';

    echo '<td width="120">';
    echo  $row[hit];
    echo '</td>';

    echo '</tr>';
    
    echo '<tr>';
    echo '<td colspan="6" style="height:300px">';
    echo nl2br($row[content]);
    echo '</td>';
    echo '</tr>';

    echo '<tr>';
    echo '<td colspan="6">';
    echo '<a style="float:right" method=post href=password.php?numbers='.$row[numbers].'><font color=black>[삭제]</font></a>';
    echo '<a style="float:right" method=post href=password2.php?numbers='.$row[numbers].'><font color=black>[수정]</font></a>';
    echo '</td>';
    echo '</tr>';
    
    }

    


?>
</table>


    <form method="post" action=comment_ok.php?numbers=<?=$numbers?>>
    <input type="textarea" name="comment" style="width:700px;height:50px;" />
    <button style="width:100px;height:50px;">작성</button>
    </form>

    </center>


    <?php
session_start();
$query = "SELECT * FROM comment where write_num=$numbers";

    $stmt = $db->prepare($query);
    $stmt->execute();


$stmt->setFetchMode(PDO::FETCH_BOTH); // PDO::FETCH_ASSOC, PDO::FETCH_NUM
// 1 row 씩 가져오기
while($row= $stmt->fetch()) {
  

  echo '<div style="margin-top:5px;background:#b6aeae;width:800px;height:120px; margin:auto;border-bottom:1px solid black;">';
  echo '<img src="img/user.png" alt="Mountains" style="margin-left:5px;display:inline-block;margin-top:5px;width:80px;height:80px;">&nbsp&nbsp';
  echo '<p style="position:relative;bottom:65px;display:inline-block;">ID:'.$row[id].'&nbsp&nbsp&nbsp&nbsp</p>';
  echo '<p style="position:relative;bottom:65px;display:inline-block;">'.$row[date].'</p>';
  echo '<p style="position:relative;right:200px;bottom:15px;display:inline-block;">'.$row[comment].'</p>';
  if($_SESSION[s_id]==$row[id]){  
  echo '<a href=delete_comment.php?num='.$row[num].'><p style="float:right;margin-right:10px;">[삭제]</p></a>';
  }
  echo '</div>';
  
}


 ?>

 
    



    
    </div>