<?php

echo $S_id = $_GET['S_id'];

include 'config.php';

$sql = "DELETE FROM students WHERE S_id = $S_id";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful");

header("Location: http://localhost/crud/index.php");

mysqli_close($conn);

?>