<?php
$dsn = "mysql:host=localhost;port=3306;dbname=beomjin1;charset=utf8";

try {
    $db = new PDO($dsn, "beomjin22", "root1234");
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    $query="INSERT INTO board (id, password, title, name, content, date)
VALUES
('$_POST[id]','$_POST[password]','$_POST[title]','$_POST[name]','$_POST[content]',now())";

    $stmt = $db->prepare($query);
    $stmt->execute();
 
   
    

} catch(PDOException $e) {
    echo $e->getMessage();
}

include 'header.php';
?>




<div style="padding: 55px 35px;height:500px;background-image: url(img/board_back.png); background-repeat: no-repeat; background-size: 100% 100%;">


        <?php
            echo "글 작성이 완료되었습니다.";
        ?>
    <button style="margin-bottom:10px;width:100px;" type="button" onclick="location.href='index2.php' ">닫기</button>
</div>

<? include 'footer.php'; ?>