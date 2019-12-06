<div style="padding: 55px 35px;height:500px;background-image: url(img/board_back.png); background-repeat: no-repeat; background-size: 100% 100%;">
<?php $numbers=$_GET[numbers] ?>
    <center>
    <form action=del_test.php?numbers=<?=$numbers ?> method="post">
    비밀번호: <input type="password" name="password"></br></br>
    <input type="submit" value="확인">
    <input onclick="history.go(-1)" type="button" value="취소" >
    </form>
</center>
    
    </div>