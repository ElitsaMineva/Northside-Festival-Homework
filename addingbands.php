<?php

#Page header
$siteTitle = 'Add band';
$siteName = 'Add band';
$siteDescription = '';

include('includes/header.php');
?>

<?php
    # Connecting to the database
    include('includes/connectdb.php');

    # Get data from submit-form and store it in variables
    $bandname = $_POST['bandname'];

    #Prepare SQL-query for insert-operation
    $query = "INSERT INTO bands (id, bandname) VALUES(NULL, '$bandname')";

    # EXECUTING SQL-query 
    mysqli_query($dbc, $query) or die('Error querying the database!');

?>

    <div id="divspace" class="panel panel-default">
        <div class="panel-heading panel panel-success">Success...</div>
        <div class="panel-body">
            <h2>You have now added <?php echo $bandname ?> to the platform archive.</h2>
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
    
    











