<?php include('core/config.php'); ?>
<?php include_once('includes/headhtml.php'); ?>
<?php 
  if (!isset($_SESSION['genman'])){
    redirect_to("login.php");
  }  
?>
<?php 



  if(isset($_POST['save'])){
    $servicename = $_POST['servicename'];
    $information = $_POST['information'];

    $sql = "INSERT INTO services(Servicename,Information) VALUES(?,?)";
    $stmt = $db->prepare($sql);
    $rs = $stmt->execute([$servicename,$information]);
    
    if($rs){
      //
      $msg = 'Coverage area added.';
    }else{
      $msg = 'There were problems while adding coverage area.';
    }
  }


?>

  	<div class="card">
        <div class="card-header">
          <h3 class="card-title"><i class="fa fa-gear"></i> Services Section &nbsp; | &nbsp;&nbsp;<i onclick="location.reload();" class="fa fa-refresh pointer " title="Reload data"></i></h3>
        </div>
        <div class="card-body">
          <div class="row">          

                            <!-- Category -->

                            <div class="col-6">
                            <div class="col-12">
                              <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Category of Services</h3>
                                    </div>
                                <div class="card-body">    
                              <form method="POST" action="">
                              <table class="table table-sm">
                              <tbody><tr>
                              <td class="align-middle">Category Name  </td><td><input class="form-control" type="text" size="15" maxlength="50" name="servicename" title="Hotspot Name" value="" required="1"></td>
                              </tr>
                              <tr>
                              <td class="align-middle">Information  </td><td><input class="form-control" type="text" size="15" maxlength="500" name="information" title="DNS Name [IP->Hotspot->Server Profiles->DNS Name]" value="" required="1"></td>
                              </tr>                              
                              <tr>
                              <td>&nbsp;</td>
                              <td>
                                  <div class="input-group-4">
                                    <input class="group-item group-item-md" type="submit" style="cursor: pointer;" name="save" value="Save">
                                  </div>
                              </td>
                              </tr>                                                           
                              </tbody>
                              </table>
                              </form>
                              </div>
                              </div>
                              </div>
                              </div>

                            <!-- Category -->

          </div>
          <!-- end of row -->
        </div>
        <!-- end of card body -->
    </div>
    <!-- end of card -->

<?php include_once('includes/footerhtml.php'); ?>