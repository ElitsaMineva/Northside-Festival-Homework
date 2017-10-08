<?php

#Page header
$siteTitle = 'Add band';
$siteName = 'Add band';
$siteDescription = 'Please fill out the form below with information about the band.';

include('includes/header.php');
?>
   
    <i class="fa fa-plus fa-3x">
    </i>
    <form action="addingbands.php" method="post">
        <div class="form-group">
            <label for="bandname">Band name:</label>
            <input type="text" name="bandname" id="bandid" class="form-control" placeholder="Northside Festival">
        
        <input type="submit" value="Add Band" class="btn btn-primary btn-block">
        
        </div><!--END form-group -->
    </form>
    <aside id="asideband"></aside>
    
    <?php include('includes/footer.php');  ?>
    
    
    
    
    
    
    
    
    
    
    
    