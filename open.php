<?php
$username = "id223860_admin"; 
$password = "lolipop"; 
$hostname = "localhost"; 
$databasename = "id223860_test"; 

$conn = new mysqli($hostname, $username, $password, $databasename) or die('Невозможно открыть базу');
   // Формируем запрос из таблицы
   $sql = "SELECT * FROM mytable";
   $result = $conn->query($sql); 

$lat = array();
$lng = array();
$txt = array();
   // В цикле перебираем все записи таблицы и выводим их
   while ($row = $result->fetch_assoc())
   {
      $lat = $row['lat'];
      $lng = $row['lng'];
      $txt = $row['text'];

echo $lat.'||';
echo $lng.'||';
echo $txt.'||';
//header('Content-Type: application/json');
//echo json_encode($lat);
//echo json_encode($lng);
//echo json_encode($txt);
   }
$conn->close();
?>