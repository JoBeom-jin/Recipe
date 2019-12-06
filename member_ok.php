<?php
$dsn = "mysql:host=localhost;port=3306;dbname=beomjin1;charset=utf8";

try {
    $db = new PDO($dsn, "beomjin22", "root1234");
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    $query="INSERT INTO member (s_id, password, s_name, phone, gender)
VALUES
('$_POST[s_id]','$_POST[password]','$_POST[s_name]','$_POST[phone]','$_POST[gender]')";

    $stmt = $db->prepare($query);
    $stmt->execute();
 
   
    

} catch(PDOException $e) {
    echo $e->getMessage();
}
?>
<meta charset="utf-8" />
<script type="text/javascript">alert('회원가입이 완료되었습니다.');</script>
<meta http-equiv="refresh" content="0 url=/index.php">