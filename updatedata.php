<?php
$S_id = $_POST['S_id'];
$S_Name = $_POST['S_Name'];
$S_FName = $_POST['S_FName'];
$S_Class = $_POST['S_Class'];
$S_rNO = $_POST['S_rNO'];


include 'config.php';

$sql = "UPDATE students SET S_Name = '$S_Name' ,S_FName = '$S_FName', S_Class = '$S_Class', S_rNO = '$S_rNO' WHERE S_id = $S_id"; 
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful");

header("Location: http://localhost/crud/index.php");

mysqli_close($conn);
?>