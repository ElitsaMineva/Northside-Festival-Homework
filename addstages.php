<?php

#Page header
$siteTitle = 'Add stage';
$siteName = 'Add stage';
$siteDescription = 'Please fill out the form below with information about the stage.';

include('includes/header.php');
?>


  <i class="fa fa-plus fa-3x">
    </i>
    <form action="addingstages.php" method="post">
        <div class="form-group">
            <label for="stagename">Stage name:</label>
            <input type="text" name="stagename" id="stagename" class="form-control" placeholder="Northside Festival">
        </div><!--END stagename field -->
        
        <div class="form-group">
            <label for="websitename">Website:</label>
            <input type="text" name="websitename" id="websitename" class="form-control" placeholder="http://northside.dk/">
        </div><!--END websitename field -->
        
        <input type="submit" value="Add stage" class="btn btn-primary btn-block">
        
       
    </form>
    <aside id="asidestage"></aside>
    
    <?php include('includes/footer.php');  ?>