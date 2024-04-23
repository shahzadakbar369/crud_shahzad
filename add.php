<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Add New Record</h2>
    <form class="post-form" action="savedata.php" method="post">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="Name" />
        </div>
        <div class="form-group">
            <label>FatherName</label>
            <input type="text" name="Fathername" />
        </div>
        <div class="form-group">
            <label>Class</label>
            <select name="Class">
                <option value="" selected disabled>Select Class</option>
                <?php 
                 include 'config.php';
                 
                 $sql = "SELECT * FROM sclass";
                 $result = mysqli_query($conn, $sql) or die("Query Unsuccessful");
                
                 while($row = mysqli_fetch_assoc($result)){
                
                ?>
                <option value="<?php echo $row['Cid']; ?>"><?php echo $row['Cclass']; ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label>Rollno</label>
            <input type="text" name="Rollno" />
        </div>
        <input class="submit" type="submit" name="submit" value="Save"  />
    </form>
</div>
</div>
</body>
</html>
