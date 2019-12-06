<?php

session_start();    
include_once($_SERVER['DOCUMENT_ROOT'] . "/db-connect.php");

$numbers= $_GET[numbers];

if($_SESSION['is_logged']=="NO"){
  echo  '<script>alert("로그인을 해주세요");</script>';
  echo  '<meta http-equiv="Refresh" content="0; URL=login_form.php">';  
}
else{
//select 문
$sql="INSERT INTO comment (id, comment, date, write_num)
VALUES
('$_SESSION[s_id]','$_POST[comment]',now(),'$_GET[numbers]')";

$stmt = $db->prepare($sql);
    $stmt->execute();
 
 echo '<meta http-equiv="Refresh" content="0; URL=content.php?numbers='.$numbers.'">';
}

?>

