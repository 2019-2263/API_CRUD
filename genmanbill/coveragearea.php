<?php include('core/config.php'); ?>
<?php include_once('includes/headhtml.php'); ?>
<?php 
  if (!isset($_SESSION['genman'])){
    redirect_to("login.php");
  }  
?>
<?php 

  $sql = "SELECT * FROM address GROUP BY province";
  $stmt = $db->prepare($sql);
  $rs = $stmt->execute([]);

  if($rs){
    $addressdata = $stmt->fetchAll(PDO::FETCH_ASSOC);        
  }


  if(isset($_POST['save'])){
    $name = $_POST['cname'];
    $address = $_POST['address'];
    $province = $_POST['province'];
    $information = $_POST['information'];

    $sql = "INSERT INTO coveragearea (name,address,province,information) VALUES(?,?,?,?)";
    $stmt = $db->prepare($sql);
    $rs = $stmt->execute([$name,$address,$province,$information]);
    
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
          <h3 class="card-title"><i class="fa fa-gear"></i> Coverage Area &nbsp; | &nbsp;&nbsp;<i onclick="location.reload();" class="fa fa-refresh pointer " title="Reload data"></i></h3>
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

				      <div class="card">
                
        	     <div class="card-header">
            	   <h3 class="card-title">Coverage Information </h3>
        	     </div>
        	     <div class="card-body">
                 <form method="POST" action="">
				<table class="table table-sm">
					<tbody><tr>
	  					<td class="align-middle">Name </td><td><input class="form-control" type="text" size="15" name="coveragename" title="IP MikroTik / IP Cloud MikroTik" value="" required="1"></td>
					</tr>
					<tr>
						<td class="align-middle">Address  </td><td><input class="form-control" id="address" type="text" size="25" name="address" title="User MikroTik" value="" required="1"></td>
					</tr>
					<tr>
						<td class="align-middle">Province  </td><td>
							<select name="province" class="group-item group-item-m">
                  <!-- <option>- Select a Province -</option> -->
                  <?php 
                    if(!empty($addressdata)){
                      foreach($addressdata as $province){
                        echo '<option value="' . $province['province'] .  '">' . $province['province'] . '</option>';
                      }
                    }

                  ?>
              </select>
						</td>
					</tr>
          <tr>
						<td class="align-middle">Information  </td><td>
              <input class="form-control" id="usermk" type="text" size="15" name="information" title="User MikroTik" value="" required="1">             
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
    </div><?php   
    //Check if the button is clicked by user
    if(isset($_POST['submit']))
    {
        //1.get the data from form 
        $coveragename = $_POST['coveragename'];
        $address = $_POST['address'];
        $province = $_POST['province'];
        $information = $_POST['information'];
        
        //2.sql query to save data to database
        $sql = "INSERT INTO coveragearea SET
            name='$coveragename',
            address='$address',
            province='$province',
            information='$information'
        
        ";
        //execute query and finally save to database
 
        $res = mysqli_query($conn, $sql) or die(mysqli_error());
        
        //dispay the result if executed or not
    }
?>

<?php include_once('includes/footerhtml.php'); ?>