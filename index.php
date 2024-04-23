<?php
include 'header.php';
?>
<div id="main-content">
    <h2>All Records</h2>
    <table cellpadding="7px">

    <?php 
    include 'config.php';
    
    $sql = "SELECT * FROM students 
    JOIN sclass 
    WHERE students.S_Class = sclass.Cid";
    $result = mysqli_query($conn, $sql) or die("Query Unsuccessful");
    if(mysqli_num_rows($result) > 0){
    ?>
        <thead>
        <th>S. no</th>
        <th>Name</th>
        <th>Father Name</th>
        <th>Class</th>
        <th>Roll no</th>
        </thead>
        <tbody>
        <?php
        while($row = mysqli_fetch_assoc($result)){
        ?>
            <tr>


                <td><?php echo $row['S_id']; ?></td>
                <td><?php echo $row['S_Name']; ?></td>
                <td><?php echo $row['S_FName']; ?></td>
                <td><?php echo $row['Cclass']; ?></td>
                <td><?php echo $row['S_rNO']; ?></td>
                <td>
                    <a href='edit.php?S_id=<?php echo $row['S_id']; ?>'>Edit</a>
                    <a href='delete-inline.php?S_id=<?php echo $row['S_id']; ?>'>Delete</a>
                </td>
            </tr>
           <?php } ?>
        </tbody>
    </table>
    <?php }else{
        echo "<h2>No Record Found</h2>";

        mysqli_close($conn);
    } ?>
</div>
</div>
</body>
</html>
