<?php

#Page header
$siteTitle = 'Add date';
$siteName = 'Add date';
$siteDescription = 'Please fill out the form below with information about Northside Festival.';

include('includes/header.php');
?>


<i class="fa fa-plus fa-3x">
    </i>
    <form action="addingperform.php" method="post">
        <div class="form-group">
            <label for="titlename">Title:</label>
            <input type="text" name="titlename" id="titlename" class="form-control" placeholder="Northside Festival">
        </div><!--END titlename field -->
        
        <div class="form-group">
            <label for="descriptionname">Description:</label>
            <textarea name="descriptionname" id="descriptionname" rows="5" class="form-control"></textarea>
        </div><!--END descriptionname field -->
        
        <div class="form-group">
            <label for="pricename">Price:</label>
            <input type="number" name="pricename" id="pricename" class="form-control" min="0" max="4000" step="1">
        </div><!--END pricename field -->
        
        <?php
        
        # include database connection
        include('includes/connectdb.php');
        
        # Create a SQL-query to the database
        $bandQuery = "SELECT id, bandname FROM bands";
        
        # Execute the SQL-query $bandQuery
        $resultBandQuery = mysqli_query($dbc, $bandQuery);
        
        # Create a SQL-query to the database
        $stageQuery = "SELECT id, stagename FROM stages";
        
        # Execute the SQL-query $stageQuery
        $resultStageQuery = mysqli_query($dbc, $stageQuery);
        
        ?>
        
        
        <div class="form-group">
            <label for="bands">Band:</label>
            <select name="bandid" id="bandid" class="form-control">
            <!-- Looping through array with bandnames -->
            
            <?php  while($row = mysqli_fetch_array($resultBandQuery)): ?>
                <option value="<?php echo $row['id']; ?>"><?php echo $row['bandname']; ?></option>
            <!--END of while-looping -->
            <?php endwhile; ?>
            </select>
        </div><!--END bands field -->
        
        <div class="form-group">
            <label for="stages">Stage:</label>
            <select name="stageid" id="stageid" class="form-control">
            <!-- Looping through array with stagenames -->
            
            <?php  while($row = mysqli_fetch_array($resultStageQuery)): ?>
                <option value="<?php echo $row['id']; ?>"><?php echo $row['stagename']; ?></option>
            <!--END of while-looping -->
            <?php endwhile; ?>
            </select>
        </div><!--END stage field   -->
        
        <input type="submit" value="Add date" class="btn btn-primary btn-block">
    </form>
    <aside id="asideperform">
        
    </aside>
    
    <?php include('includes/footer.php'); ?>
    
   
  
 






