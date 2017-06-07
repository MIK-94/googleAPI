<?php
if ( $_SERVER["REQUEST_METHOD"] == "POST" ) {
$latitude = $_POST['lat'];
$longitude = $_POST['lng'];
$message = $_POST['txt'];
   
$username = "pokemon"; 
$password = "0000"; 
$hostname = "localhost"; 
$databasename = "id223860_mybase"; 

$conn = new mysqli($hostname, $username, $password, $databasename) or die('Невозможно открыть базу');

$sql = "INSERT INTO mytable(lat,lng,text) VALUES ('$latitude','$longitude','$message')";
$result = $conn->query($sql); 

if ($result = 'true'){
    echo "Информация занесена в базу данных";
}else{
    echo "Информация не занесена в базу данных";
}
$conn->close();
} else { echo "Извините, здесь вы ничего сохранить не можете, пожалуйста перейдите в главную форму"; }
?>
