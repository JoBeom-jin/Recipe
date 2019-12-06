<?php

session_start();    
include_once($_SERVER['DOCUMENT_ROOT'] . "/db-connect.php");
$id  = $_POST['s_id'];
$pwd = $_POST['password'];

//select 문
$sql = "SELECT * FROM member WHERE s_id = '$id'";



$result = $db->query($sql);
//fetch 한줄 fetchall 모두
$row = $result->fetch(PDO::FETCH_ASSOC); 
if( $row['password'] == $pwd){
    $_SESSION['is_logged'] = "YES";
    $_SESSION['s_id'] = $id;
    echo '<script>';
    echo 'alert("'.$id.'님 환영합니다.");';
    echo '</script>';
    echo '<meta http-equiv="Refresh" content="0; URL=index.php">';
}else{
    $_SESSION['is_logged'] = "NO";
    echo '<script>';
    echo 'alert("아이디 또는 비밀번호가 틀립니다.");';
    echo 'history.go(-1);';
    echo '</script>';
}

?>
