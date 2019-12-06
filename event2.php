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
body {font-family: Arial, Helvetica, sans-serif;}

#myImg {
margin-left:35%;
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
  margin-top:10px
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
}

/* Caption of Modal Image */
#caption {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
}

/* Add Animation */
.modal-content, #caption {  
  -webkit-animation-name: zoom;
  -webkit-animation-duration: 0.6s;
  animation-name: zoom;
  animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
  from {-webkit-transform:scale(0)} 
  to {-webkit-transform:scale(1)}
}

@keyframes zoom {
  from {transform:scale(0)} 
  to {transform:scale(1)}
}

/* The Close Button */
.close {
  position: absolute;
  top: 15px;
  right: 35px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
  .modal-content {
    width: 100%;
  }
}
</style>



<h2></h2>


<?php

$query = "SELECT * FROM event";

    $stmt = $db->prepare($query);
    $stmt->execute();


$stmt->setFetchMode(PDO::FETCH_BOTH); // PDO::FETCH_ASSOC, PDO::FETCH_NUM
// 1 row 씩 가져오기

$number = $_GET[number];

echo $number;


$query = "SELECT * FROM event where number = $number";

    $stmt = $db->prepare($query);
    $stmt->execute();


$stmt->setFetchMode(PDO::FETCH_BOTH); // PDO::FETCH_ASSOC, PDO::FETCH_NUM
// 1 row 씩 가져오기

while($row= $stmt->fetch()) {
    
  echo '<div style="width:700px;height:200px;display:inline-block;">';
  echo '<a href=event_1.php?number='.$row[number].'>';
  echo '<img id="myImg" src="'.$row[img1].'" alt="Snsadow" style="width:800px;height:1000px; position:relative; left:45%;"/>';
  echo '</a>';
  
  echo '</div>';
  
}


 ?>




