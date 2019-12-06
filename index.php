<?php
$dsn = "mysql:host=localhost;port=3306;dbname=beomjin1;charset=utf8";

try {
    $db = new PDO($dsn, "beomjin22", "root1234");
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    // $query = "SELECT * FROM video";

    // $stmt = $db->prepare($query);
    // $stmt->execute();

    

    


} catch(PDOException $e) {
    echo $e->getMessage();
}


include 'header.php';
    include 'main.php';
    include 'footer.php';


?>