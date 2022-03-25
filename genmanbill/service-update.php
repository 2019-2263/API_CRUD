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
          <h3 class="card-title"><i class="fa fa-gear"></i> Update customer information&nbsp; | &nbsp;&nbsp;<i onclick="location.reload();" class="fa fa-refresh pointer " title="Reload data"></i></h3>
        </div>
        <div class="card-body">
          <div class="row">          
          <div class="col-6">
          
          

          <div class="col-12">

          <?php 
          if(isset($msg)){
            echo '<div style="padding: 6px;"><span> ' . $msg .' </span></div>';
          }
        ?>
              <?php
               if(isset($_GET['id'])){
                     
                        $id = $_GET['id'];
                
                            $sql2 = "SELECT * FROM services WHERE id=$id";
            
                            //Execute Query
                            $res2 = mysqli_query($conn,$sql2);
                            $rows2= mysqli_fetch_assoc($res2);
                            
                            //get individual data
                            $id2 = $rows2['id'];
                            $servicename2 = $rows2['Servicename'];
                            $information2=$rows2['Information'];
                            
                            //Display the data to page
                }
                ?>

            <div class="card">
              
             <div class="card-header">
               <h3 class="card-title">Customer Information </h3>
             </div>
             <div class="card-body">
               <form method="POST" action="" enctype="multipart/form-data">
      <table class="table table-sm">
        <tbody>
            <tr>
            <td class="align-middle">Service Name </td><td><input class="form-control" type="text" size="15" name="servicename" title="IP MikroTik / IP Cloud MikroTik" value="<?php echo $servicename2; ?>" required="1">
            </td>
            </tr>
        <tr>
          <td class="align-middle">Information</td><td>
            <input class="form-control" id="usermk" type="text" size="15" name="information" title="User MikroTik" value="<?php echo $information2; ?>" required="1">
                
          </td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>
              <div class="input-group-4">
                <input class="group-item group-item-md" type="submit" style="cursor: pointer;" name="submit" value="Save">
              </div>
              

              
                
            </td>
          </tr>
      </tbody></table>
      </form>
    </div>
  </div>  	
  <div id="ping">
  </div>	
</div>
</div>
          </div>
              </div>
    </div>
<?php   
    //Check if the button is clicked by user
    if(isset($_POST['submit']))
    {
        //1.get the data from form 
        $servicename = $_POST['servicename'];
        $information = $_POST['information'];
        
        //2.sql query to save data to database
        $sql = " UPDATE services SET 
            Servicename='$servicename',
            Information='$information'
            WHERE id = $id2
        
        ";
        //execute query and finally save to database
 
        $res = mysqli_query($conn, $sql) or die(mysqli_error());
        
        //dispay the result if executed or not
    }
?>



<?php include_once('includes/footerhtml.php'); ?>