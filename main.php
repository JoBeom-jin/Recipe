<?php
$dsn = "mysql:host=localhost;port=3306;dbname=beomjin1;charset=utf8";

try {
    $db = new PDO($dsn, "beomjin22", "root1234");
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    

    

    


} catch(PDOException $e) {
    echo $e->getMessage();
}




?>

<style type="text/css">	
	/* banner */
	.banner {position: relative; width: 1200px; height: 580px; top: 0px;  margin:0 auto; padding:0; overflow: hidden;float:left; margin-right:50px;}
	.banner ul {position: absolute; margin: 0px; padding:0; list-style: none; }
	.banner ul li {float: left; width: 1200px; height: 580px; margin:0; padding:0;}

</style>
<div class="contents" style="background:#CBE7E1;height:580px;" >


		<div class="banner" >
			<ul>
				<li><img src="img/main1.jpg" width="1200px" height="580px"></li>
				<li><img src="img/main2.jpg" width="1200px" height="580px"></li>
				<li><img src="img/main3.jpg" width="1200px" height="580px"></li>
				<li><img src="img/main4.jpg" width="1200px" height="580px"></li>
				<li><img src="img/main5.jpg" width="1200px" height="580px"></li>
</ul>
    </div>
    

    <div>

  <h2 class="large-font"; style="margin-top: auto; margin-bottom: auto;  font-size:50px">이달의 우수 게시글</h2>
  <div style="width:600px;height:480px; border:1px solid black;float:right;margin-right:20px;font-size:25px;padding-left:30px;padding-top:30px;">

  <?php



$query = "SELECT * FROM board ORDER BY hit DESC limit 1";


$stmt = $db->prepare($query);
$stmt->execute();

$stmt->setFetchMode(PDO::FETCH_BOTH); // PDO::FETCH_ASSOC, PDO::FETCH_NUM
// 1 row 씩 가져오기
while($row= $stmt->fetch()) {
echo '아이디: '.$row[id].'<br />';
echo '제목: '.$row[title].'<br />';
echo '작성자: '.$row[name].'<br />';
echo '내용: ';
echo '<br>';
echo nl2br($row[content]).'<br />';



}

?>

</div>
</div>

    
	</div>

<div style="background-color:ivory">

  <h2 class="large-font"; style="margin-top: auto; margin-bottom: auto; backgro;background-color: #EBE8D1; font-size:50px">레시피 공유</h2>
</div>




<!-- The App Section -->
<div class="container9">
  <div class="row9">
    <div class="column-66">
      <h1 class="xlarge-font"><b>밥</b></h1>
      
      <h2 class="large-font";style="font-size:28px";>나는 꼭 밥을 먹어야 한다면</h2>
    </div>
    <div class="column-33">
    <a href="index1.php">
	<img src="img/main_rice.jpg " width="500" height="400"alt="" />
       </div>
  </div>
</div>



<!-- Clarity Section -->
<div class="container9" style="background-color:#6d2e0fdb; padding: 9px";>
  <div class="row9">
    <div class="column-33" >
    <a href="index1.php">
	<img src="img/main_noodle.jpg"float:center width="500" height="400"alt=""  />
</a>
    </div>
    <div class="column-66">
      <h1 class="xlarge-font"><b>면</b></h1>
      <h2  class="large-font";style="font-size:28px">간단하면서 맛있는걸 먹고 싶다면</h2>
    </div>
  </div>
</div></div>



<div class="section fp-section fp-table" id="section-third" data-anchor="fourth-section"> 
<!-- The App Section -->
<div class="container9">
  <div class="row9">
    <div class="column-66">
      <h1 class="xlarge-font"><b>국</b></h1>
      <h2  class="large-font";style="font-size:28px">국물에 밥을 말아 먹고 싶다면</h2>
    </div>
    <div class="column-33">
    <a href="index1.php">
	<img src="img/main_soup.jpg"width="500" height="400"alt="" /></a>
    </div>
  </div>
</div>
	
	
	
	
	
	<div class="container9" style="background-color:#6d2e0fdb">
  <div class="row9">
    <div class="column-33">
    <a href="index1.php">
	<img src="img/main_jang.jpg"width="500" height="400"alt="" />
</a>
    </div>
    <div class="column-66">
      <h1 class="xlarge-font"><b>반찬</b></h1>
      <h2  class="large-font";style="font-size:28px">고기반찬</h2>
    </div>
  </div>
	</div>
		</div>





















<div class="no2" style="background:#EBAE8D">
  <h2>오늘 뭐 먹지?</h2>
  <p>뭘 먹을지 고민하는 사람들에게 유용한 룰렛!</p>




<img src="img/one.png" id="wheel"><br>
<img src="img/arrow.png" id="peg"><br>
<button id="button">돌리기</button>
<script>
// Cache our elements.
var wheel = document.querySelector("#wheel"),
    button = document.querySelector("#button"),
    
    // Initialise a random number variable. As zero.
    rando = 0;

// When we click the button...
var spin_wheel = function () {
  
  // Generate a random number that'll determine how many degrees the wheel spins.
  // We want it to spin 8 times (2880 degrees) and then land somewhere, so we'll add between 0 and 360 degrees to that.
  // We add this to the already-created "rando" variable so that we can spin the wheel multiple times.
  rando += (Math.random() * 360) + 2880;
  
  // And spin the wheel to the random position we just generated!
  // Gotta cover ourselves with vendor prefixes.
  wheel.style.webkitTransform = "rotate(" + rando + "deg)";
  wheel.style.mozTransform = "rotate(" + rando + "deg)";
  wheel.style.msTransform = "rotate(" + rando + "deg)";
  wheel.style.transform = "rotate(" + rando + "deg)";
  
}

button.addEventListener("click", spin_wheel, false);




</script>

</div>

<div class="no3" style="background:#B8E2F7">
  <h2>나만의 레시피 공유</h2>
  <p >자신만의 독특한 레시피를 많은 사람들과 공유하자!</p>



<a href="index2.php">
<!-- Photo Grid -->
<div class="row2"> 
  <div class="column2">
    <img src="img/6.jpg" style="width:100%;height:150px";>
    <img src="img/7.jpg" style="width:100%;height:150px";>
    <img src="img/8.jpg" style="width:100%;height:150px";>
    <img src="img/9.jpg" style="width:100%;height:100px";>
    <img src="img/10.jpg" style="width:100%;height:150px";>

  </div>
  <div class="column2">
    <img src="img/11.jpg" style="width:100%;height:200px";>
    <img src="img/12.jpg" style="width:100%;height:100px";>
    <img src="img/13.jpg" style="width:100%;height:170px";>
    <img src="img/14.jpg" style="width:100%;height:238px";>

  </div>  
  <div class="column2">
    <img src="img/15.jpg" style="width:100%;height:160px";>
    <img src="img/16.jpg" style="width:100%;height:130px";>
    <img src="img/17.jpg" style="width:100%;height:180px";>
    <img src="img/18.jpg" style="width:100%;height:120px";>
    <img src="img/19.jpg" style="width:100%;height:110px";>

  </div>
  <div class="column2">
    <img src="img/20.jpg" style="width:100%;height:186px";>
    <img src="img/21.jpg" style="width:100%;height:180px";>
    <img src="img/rice1.jpg" style="width:100%;height:200px";>
    <img src="img/22.jpg" style="width:100%;height:140px";>

  </div>
</div>

</a>


</div>





<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script language="JavaScript">
<!--
	$(document).ready(function() {
		var $banner = $(".banner").find("ul");

		var $bannerWidth = $banner.children().outerWidth();//이미지의 폭
		var $bannerHeight = $banner.children().outerHeight(); // 높이
		var $length = $banner.children().length;//이미지의 갯수
		var rollingId;

		//정해진 초마다 함수 실행
		rollingId = setInterval(function() { rollingStart(); }, 6000);//다음 이미지로 롤링 애니메이션 할 시간차
    
		function rollingStart() {
			$banner.css("width", $bannerWidth * $length + "px");
			$banner.css("height", $bannerHeight + "px");
			//alert(bannerHeight);
			//배너의 좌측 위치를 옮겨 준다.
			$banner.animate({left: - $bannerWidth + "px"}, 2000, function() { //숫자는 롤링 진행되는 시간이다.
				//첫번째 이미지를 마지막 끝에 복사(이동이 아니라 복사)해서 추가한다.
				$(this).append("<li>" + $(this).find("li:first").html() + "</li>");
				//뒤로 복사된 첫번재 이미지는 필요 없으니 삭제한다.
				$(this).find("li:first").remove();
				//다음 움직임을 위해서 배너 좌측의 위치값을 초기화 한다.
				$(this).css("left", 0);
				//이 과정을 반복하면서 계속 롤링하는 배너를 만들 수 있다.
			});
		}
	}); 
//-->  
</script>


