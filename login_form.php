<?php   
include "/db-connect.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>우리만 믿고 따라와</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/style.css">
</head>
<body>


      
      <div class="header">
        <a href="index.php"><img src="img/logo.png" style="width:400px; height:280px;" /></a>
      </div>
	  <center>
    <div class="main">
        
	<div id="login_box">
		<h1>로그인</h1>							
			<form method="post" action="login_ok.php">
				<table align="center" border="0" cellspacing="0" width="300">
        			<tr>
            			<td width="130" colspan="1"> 
                		<input type="text" name="s_id" class="inph">
            		</td>
            		<td rowspan="2" align="center" width="100" > 
                		<button type="submit" id="btn" >로그인</button>
            		</td>
        		</tr>
        		<tr>
            		<td width="130" colspan="1"> 
               		<input type="password" name="password" class="inph">
            	</td>
        	</tr>
        	<tr>
           		<td colspan="3" align="center" class="mem"> 
              	<a href="/member/member.php">회원가입 하시겠습니까?</a>
           </td>
        </tr>
    </table>
  </form>
</div>

</div>
</center>
</body>
</html>