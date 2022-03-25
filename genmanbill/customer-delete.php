<?php include('core/config.php'); ?>
<?php require_once('core/initialize.php'); ?>
<?php 
  if (!isset($_SESSION['genman'])){
    redirect_to("login.php");
  }
?>

<?php include_once('includes/headhtml.php'); ?>

  	<div class="card">
        <div class="card-header">
          <h3 class="card-title"><i class="fa fa-gear"></i> Delete Customer&nbsp; | &nbsp;&nbsp;<i onclick="location.reload();" class="fa fa-refresh pointer " title="Reload data"></i></h3>
        </div>
        <div class="card-body">
          <div class="row">          
          <div class="col-6">
          
              <h1>Customer successfully deleted</h1>
          

          <div class="col-12">
<?php

    if(isset($_GET['id'])){
        
        //get the value and delete
        $id = $_GET['id'];
        
        
        //delete data in data base 
        $sql = "DELETE FROM customer WHERE id=$id";
        
        $res = mysqli_query($conn,$sql);
        //redirect to manange-food with message
        
    }else{
        
        
    }

?>
              </div>
              </div>
            </div>
        </div>
</div>
<?php include_once('includes/footerhtml.php'); ?>