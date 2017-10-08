<?php

#Page header
$siteTitle = 'Add stage';
$siteName = 'Add stage';
$siteDescription = '';

include('includes/header.php');
?>

<?php
    # Connecting to the database
    include('includes/connectdb.php');

    # Get data from submit-form and store it in variables
    $stagename = $_POST['stagename'];
    $websitename = $_POST['websitename'];

    #Prepare SQL-query for insert-operation
    $query = "INSERT INTO stages (id, stagename, website) VALUES(NULL, '$stagename', '$websitename')";

    # EXECUTING SQL-query 
    mysqli_query($dbc, $query) or die('Error querying the database!');

?>

 <div id="divspace" class="panel panel-default">
        <div class="panel-heading panel panel-success">Success...</div>
        <div class="panel-body">
            <h2>You have now added <?php echo $stagename; ?> to Northside Festival.</h2>
        </div><!--END panel-body -->
        <div class="panel-footer">
            <button class="btn btn-primary btn-block" onclick="goBack()" >Go Back
            </button>
        </div><!--END panel-footer-->
    </div><!--END divspace -->
<?php 

    #Close database-connection
    mysqli_close($dbc);
?>
   
<script>
    function goBack() {
        window.history.back();
    }
</script>
    
    
<?php include('includes/footer.php'); ?>












