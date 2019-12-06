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

<html>
<head>
<title>나만의 레시피</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/style.css">
</head>

<body>




<div style="width:1500px; height:650px; border:3px solid black;text-align:center;margin-left:200px;margin-top:100px">

<?php
$num = $_GET[num];

$query = "SELECT * FROM food where num=$num ";

    $stmt = $db->prepare($query);
    $stmt->execute();


$stmt->setFetchMode(PDO::FETCH_BOTH); // PDO::FETCH_ASSOC, PDO::FETCH_NUM
// 1 row 씩 가져오기
while($row= $stmt->fetch()) {
echo '<h1 class="glow">'.$row[food_name].'</h1>';
echo '<div style="width:700px; height:450px; float:left;margin-left:50px;margin-top:10px;">';
echo '<img src="'.$row[img_url].'" alt="Lights" style="width:100%;height:473px">';
echo '</div>';

echo '<div style="width:700px; height:473px; border:1px solid black; float:left;margin-top:10px;text-align:left">';
echo '<h2>'.$row[recipe].'</h2>';
echo '</div>';
}
?>

<a href="index1.php">
<div style="width:700px; height:450px; float:left;margin-left:950px;margin-top:10px;">
<input type=button style="width:100pt;height:40pt;font-size:20px" value="뒤로"></a>
</div>


</div>


</body>
</html>


