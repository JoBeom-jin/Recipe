<?php
$dsn = "mysql:host=localhost;port=3306;dbname=beomjin1;charset=utf8";

try {
    $db = new PDO($dsn, "beomjin22", "root1234");
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    $numbers = $_GET[numbers];
    $password = $_POST[password];

    $query = "SELECT password FROM board where numbers=$numbers ";
    
        $stmt = $db->prepare($query);
        $stmt->execute();
    
    
    $stmt->setFetchMode(PDO::FETCH_BOTH); // PDO::FETCH_ASSOC, PDO::FETCH_NUM
    // 1 row 씩 가져오기
    $row= $stmt->fetch();  

    if($password == $row[password]){
        $sql = "DELETE FROM board WHERE numbers=$numbers";

    // use exec() because no results are returned
    $db->exec($sql);
    echo '<script>';
        echo 'alert("삭제되었습니다.");';
        echo '</script>';

        echo '<meta http-equiv="Refresh" content="0; URL=index2.php">';
    }
    else{
        echo '<script>';
        echo 'alert("비밀번호가 틀립니다.");';
        echo 'history.go(-1);';
        echo '</script>';
    }

    


} catch(PDOException $e) {
    echo $e->getMessage();
}




?>

