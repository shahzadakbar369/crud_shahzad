<?php 

include 'config.php';

if(isset($_POST['submit'])) {
$S_Name = $_POST['Name'];
$S_FName = $_POST['Fathername'];
$S_Class = $_POST['Class'];
$S_rNO = $_POST['Rollno'];



$sql3="INSERT INTO students (S_Name,S_FName,S_Class,S_rNO) 
        VALUES('$S_Name','$S_FName','$S_Class','$S_rNO')";

if(mysqli_query($conn, $sql3)){
    echo "Your Table Dropped Successfully!";
}
 else {
    echo "No Data Record Found!";
    die("Query Unsuccessful");
}

}

//$result = mysqli_query($conn, $sql1) or die("Query Unsuccessful");
header("Location: http://localhost/crud/index.php");

mysqli_close($conn);
?>