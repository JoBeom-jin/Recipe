<?php
$dsn = "mysql:host=localhost;port=3306;dbname=beomjin1;charset=utf8";

try {
    $db = new PDO($dsn, "beomjin22", "root1234");
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    

?>

<center>

<div style="padding: 55px 35px;height:1000px;background-color:#CEECF5">
<br>

<div style="width:50%;border:1px solid black;">
<p style="text-align:center">내가 작성한 글</p>
<table border="1" align="center" width="800" style="border-collapse: collapse;">
<tr>
<td>제목</td>
<td>내용</td>
<td>작성자</td>
<td>아이디</td>
<td></td>
<?php
    session_start();

    $s_id = $_SESSION['s_id'];

    $query = "SELECT * FROM board where id = '$s_id'";

    $stmt = $db->prepare($query);
    $stmt->execute();

    $stmt->setFetchMode(PDO::FETCH_BOTH); // PDO::FETCH_ASSOC, PDO::FETCH_NUM
    // 1 row 씩 가져오기
    while($row= $stmt->fetch()) {
    echo '<tr>';
    echo '<td>';
    echo $row[title];
    echo '</td>';

    echo '<td width="370">';
    echo nl2br($row[content]);
    echo '</td>';

    echo '<td>';
    echo $row[name];
    echo '</td>';

    echo '<td>';
    echo $row[id];
    echo '</td>';

    echo '<td>';
    echo '<a method=post href=password.php?numbers='.$row[numbers].'><font color=black>[삭제]</font></a>';
    echo '</td>';

    echo '</tr>';
    
    


    }

    


} catch(PDOException $e) {
    echo $e->getMessage();
}
?>
</table>
</div>


</div>

</center>