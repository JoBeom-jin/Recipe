<?php   
include "/db-connect.php"; ?>

			<center>
    <div class="main">
        

	<form method="post" action="member_ok.php">
		<h1>회원가입 폼</h1>
			<fieldset>
				<legend>입력사항</legend>
					<table>
						<tr>
							<td>아이디</td>
							<td><input type="text" size="35" name="s_id" placeholder="아이디"></td>
						</tr>
						<tr>
							<td>비밀번호</td>
							<td><input type="password" size="35" name="password" placeholder="비밀번호"></td>
						</tr>
						<tr>
							<td>이름</td>
							<td><input type="text" size="35" name="s_name" placeholder="이름"></td>
						</tr>
						<tr>
							<td>전화번호</td>
							<td><input type="text" size="35" name="phone" placeholder="전화번호"></td>
						</tr>
						<tr>
							<td>성별</td>
							<td>남<input type="radio" name="gender" value="남"> 여<input type="radio" name="gender" value="여"></td>
						</tr>

					</table>

				<input type="submit" value="가입하기" /><input type="reset" value="다시쓰기" />
			
		</fieldset>
    </form>
    
</center>
