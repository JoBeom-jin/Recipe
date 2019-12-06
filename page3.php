<?php
$dsn = "mysql:host=localhost;port=3306;dbname=beomjin1;charset=utf8";

try {
    $db = new PDO($dsn, "beomjin22", "root1234");
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    

?>


<div style="padding: 55px 35px;height:1000px;background-image: url(img/board_back.png); background-repeat: no-repeat; background-size: 100% 100%;">
<button style="margin-bottom:10px;width:100px;" type="button" onclick="location.href='board_form.php' ">글쓰기</button>
<br>
<?php


    $query = "SELECT * FROM board";

    $stmt = $db->prepare($query);
    $stmt->execute();

    $stmt->setFetchMode(PDO::FETCH_BOTH); // PDO::FETCH_ASSOC, PDO::FETCH_NUM
    // 1 row 씩 가져오기
    while($row= $stmt->fetch()) {
    echo '<div style="margin:20px; padding: 40px 30px;display:inline-block;width:400px;height:400px;background-image: url(img/memo.gif); background-repeat: no-repeat;background-size: 100% 100%;">';
    echo '아이디: '.$row[id].'<br />';
    echo '제목: <a href=content.php?numbers='.$row[numbers].'> '.$row[title].'</a><br />';
    echo '작성자: '.$row[name].'<br />';
    echo '내용: ';
    echo '<br>';
    echo nl2br($row[content]).'<br />';
    echo '</div>';
    

    }

    


} catch(PDOException $e) {
    echo $e->getMessage();
}
?>

</div>