<?php
$dsn = "mysql:host=localhost;port=3306;dbname=beomjin1;charset=utf8";

try {
    $db = new PDO($dsn, "beomjin22", "root1234");
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    $num = $_GET[num];

    $query = "DELETE FROM comment where num=$num ";
    
        $stmt = $db->prepare($query);
        $stmt->execute();
    
    
        echo '<script>';
        echo 'alert("삭제되었습니다.");';
        echo '</script>';
        
        echo '<script>';
        echo 'history.go(-1);';
        echo '</script>';
    


} catch(PDOException $e) {
    echo $e->getMessage();
}




?>

