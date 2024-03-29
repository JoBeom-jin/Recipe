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


<style>
* {
  box-sizing: border-box;
}



/* Center website */
.main {
  max-width: 1000px;
  margin: auto;
}

h1 {
  font-size: 50px;
  word-break: break-all;
}

.row {
  margin: 10px -16px;
}

/* Add padding BETWEEN each column */
.row,
.row > .column {
  padding: 8px;
}

/* Create three equal columns that floats next to each other */
.column {
  float: left;
  width: 33.33%;
  display: none; /* Hide all elements by default */
}

/* Clear floats after rows */ 
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Content */
.content {
  background-color: white;
  padding: 10px;
}

/* The "show" class is added to the filtered elements */
.show {
  display: block;
}

/* Style the buttons */
.btn {
  width:24.6%;
  border: none;
  outline: none;
  padding: 12px 16px;
  background-color: white;
  cursor: pointer;
}

.btn:hover {
  background-color: #ddd;
}

.btn.active {
  background-color: #666;
  color: white;
}
</style>


<!-- MAIN (Center website) -->
<div class="main">


<div id="myBtnContainer" style="margin-top:20px">
  <button class="btn" onclick="filterSelection('famous')">밥</button>
  <button class="btn" onclick="filterSelection('nature')">면</button>
  <button class="btn" onclick="filterSelection('cars')">국</button>
  <button class="btn" onclick="filterSelection('people')">반찬</button>
</div>

<!-- Portfolio Gallery Grid -->




<div class="row">
<?php

$query = "SELECT * FROM food where food_num = 11";

    $stmt = $db->prepare($query);
    $stmt->execute();


$stmt->setFetchMode(PDO::FETCH_BOTH); // PDO::FETCH_ASSOC, PDO::FETCH_NUM
// 1 row 씩 가져오기
while($row= $stmt->fetch()) {
  echo '<div class="column famous">';
  echo '<div class="content">';
  echo '<a href=page2.php?num='.$row[num].' method=post>';
  echo '<img src="'.$row[img_url].'" alt="Mountains" style="width:300px;height:200px;"></a>';
  echo '<h4>'.$row[food_name].'</h4>';
  echo '</div>';
  echo '</div>';
}


 ?>
  








  <?php

$query = "SELECT * FROM food where food_num = 22";

    $stmt = $db->prepare($query);
    $stmt->execute();


$stmt->setFetchMode(PDO::FETCH_BOTH); // PDO::FETCH_ASSOC, PDO::FETCH_NUM
// 1 row 씩 가져오기
while($row= $stmt->fetch()) {
  echo '<div class="column nature">';
  echo '<div class="content">';
  echo '<a href=page2.php?num='.$row[num].' method=post>';
  echo '<img src="'.$row[img_url].'" alt="Mountains" style="width:300px;height:200px;"></a>';
  echo '<h4>'.$row[food_name].'</h4>';
  echo '</div>';
  echo '</div>';
}


 ?>
  

  
  <?php

$query = "SELECT * FROM food where food_num = 33";

    $stmt = $db->prepare($query);
    $stmt->execute();


$stmt->setFetchMode(PDO::FETCH_BOTH); // PDO::FETCH_ASSOC, PDO::FETCH_NUM
// 1 row 씩 가져오기
while($row= $stmt->fetch()) {
  echo '<div class="column cars">';
  echo '<div class="content">';
  echo '<a href=page2.php?num='.$row[num].' method=post>';
  echo '<img src="'.$row[img_url].'" alt="Mountains" style="width:300px;height:200px;"></a>';
  echo '<h4>'.$row[food_name].'</h4>';
  echo '</div>';
  echo '</div>';
}


 ?>



<?php

$query = "SELECT * FROM food where food_num = 44";

    $stmt = $db->prepare($query);
    $stmt->execute();


$stmt->setFetchMode(PDO::FETCH_BOTH); // PDO::FETCH_ASSOC, PDO::FETCH_NUM
// 1 row 씩 가져오기
while($row= $stmt->fetch()) {
  echo '<div class="column people">';
  echo '<div class="content">';
  echo '<a href=page2.php?num='.$row[num].' method=post>';
  echo '<img src="'.$row[img_url].'" alt="Mountains" style="width:300px;height:200px;"></a>';
  echo '<h4>'.$row[food_name].'</h4>';
  echo '</div>';
  echo '</div>';
}


 ?>
  
  
  
  
  
<!-- END GRID -->
</div>

<!-- END MAIN -->
</div>

<script>
filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("column");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}


// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>

</body>
</html>

