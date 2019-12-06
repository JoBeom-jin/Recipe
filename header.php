<!DOCTYPE html>
<html lang="en">
<head>
<title>나만의 레시피</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="top_bar">
    <?php
session_start();
include_once($_SERVER['DOCUMENT_ROOT'] . "/db-connect.php");
$id = $_GET['s_id'];



$is_logged = $_SESSION['is_logged'];
$s_id = $_SESSION['s_id'];
if($is_logged=='YES') {
  echo '<a href="logout.php">로그아웃</a>';
}
else {
  echo '<a href="join_form.php">회원가입</a>';
  echo '<a href="login_form.php">로그인</a>';
}



?>
 
    
      </div>
      
      <div class="header" >
        <a href="index.php"><img src="img/logo.png" style="width:400px; height:280px;" /></a>
      </div>

      <div class="navbar" style="border-bottom:1px solid black;">
  <a href="index1.php">레시피 찾기</a>
  <a href="event_in.php">이벤트</a>
  <a href="index2.php">레시피 공유</a>
  <a href="mypage_in.php">마이페이지</a>
</div>