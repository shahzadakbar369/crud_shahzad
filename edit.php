<?php include 'header.php'; ?>

<div id="main-content">
    <h2>Update Record</h2>

    <?php 
    include 'config.php';
    
    $S_id = $_GET['S_id'];
    $sql = "SELECT * FROM students WHERE S_id = $S_id";
    $result = mysqli_query($conn, $sql) or die("Query Unsuccessful");
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
        
    ?>

    <form class="post-form" action="updatedata.php" method="post">
      <div class="form-group">
          <label>Name</label>
          <input type="hidden" name="S_id" value="<?php echo $row['S_id'] ?>"/>
          <input type="text" name="S_Name" value="<?php echo $row['S_Name'] ?>"/>
      </div>
      <div class="form-group">
          <label>Father Name</label>
          <input type="text" name="S_FName" value="<?php echo $row['S_FName'] ?>"/>
      </div>
      <div class="form-group">
          <label>Class</label>
          <?php
          $sql1 = "SELECT * FROM sclass";
          $result1 = mysqli_query($conn, $sql1) or die("Query Unsuccessful");
          if(mysqli_num_rows($result1) > 0){
            echo '<select name="S_Class">';
              while($row1 = mysqli_fetch_assoc($result1)){
                if($row['S_Class'] == $row1['Cid']){
                    $select = "Selected";
                }else{
                    $select = "";
                }
            
            echo  "<option value='{$row1['Cid']}'> {$row1['Cclass']}</option>";
              }
             echo "</select>";
            }
          ?>
      </div>
      <div class="form-group">
          <label>Roll no</label>
          <input type="text" name="S_rNO" value="<?php echo $row['S_rNO'] ?>"/>
      </div>
      <input class="submit" type="submit" value="Update"/>
    </form>
    <?php }    
        } ?>
</div>
</div>
</body>
</html>
