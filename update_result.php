<?php
$dsn = "mysql:host=localhost;port=3306;dbname=beomjin1;charset=utf8";

try {
    $db = new PDO($dsn, "beomjin22", "root1234");
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $numbers = $_GET[numbers];
    

    $query="UPDATE board set title='$_POST[title]', name='$_POST[name]', content='$_POST[content]' where numbers=$numbers  ";
    $stmt = $db->prepare($query);
    $stmt->execute();

    echo 'alert("수정되었습니다.");';
    echo '</script>';

    echo '<meta http-equiv="Refresh" content="0; URL=index2.php">';

    


} catch(PDOException $e) {
    echo $e->getMessage();
}




?>

