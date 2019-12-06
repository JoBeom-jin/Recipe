<div style="padding: 55px 35px;height:500px;background-image: url(img/board_back.png); background-repeat: no-repeat; background-size: 100% 100%;">

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

    $sql = "SELECT id,title,name,content FROM board where numbers=$numbers";

    $stmt = $db->prepare($sql);
        $stmt->execute();
    
    
    $stmt->setFetchMode(PDO::FETCH_BOTH); // PDO::FETCH_ASSOC, PDO::FETCH_NUM
    // 1 row 씩 가져오기
    $row2= $stmt->fetch(); 

    echo '글 수정<br><br>';
    echo '아이디: '.$row2[id].'</br>';

    echo '<form action=update_result.php?numbers='.$numbers.' method="post">';

    
    
    echo '제목: '.'<INPUT type=text name=title size=20 maxlength=25 value='.$row2[title].'></br>';
    echo '작성자: '.'<INPUT type=text name=name size=20 maxlength=25 value='.$row2[name].'></br>';
    echo '내용: '.'<textarea name=content rows=4 cols=50 >'.$row2[content].'</textarea></br>';
    echo '<input type="submit" value="수정">';
    echo '</form>';
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

</div>