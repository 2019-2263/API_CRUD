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
          <h3 class="card-title"><i class="fa fa-gear"></i> Customer &nbsp; | &nbsp;&nbsp;<i onclick="location.reload();" class="fa fa-refresh pointer " title="Reload data"></i></h3>
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
               <h3 class="card-title">Customer Information </h3>
             </div>
             <div class="card-body">
               <form method="POST" action="">
      <table class="table table-sm">
        <tbody><tr>
            <td class="align-middle">Customer's Name </td><td><input class="form-control" type="text" size="15" name="cname" title="IP MikroTik / IP Cloud MikroTik" value="" required="1"></td>
        </tr>
        <tr>
          <td class="align-middle">Account No.  </td><td><input class="form-control" id="usermk" type="text" size="10" name="accNo" title="User MikroTik" value="" required="1"></td>
        </tr>
        <tr>
          <td class="align-middle">Email  </td><td><input class="form-control" id="usermk" type="text" size="10" name="email" title="User MikroTik" value="" required="1"></td>
        </tr>
        <tr>
          <td class="align-middle">Password  </td><td><input class="form-control" id="usermk" type="password" name="password" title="User MikroTik" value="" required="1"></td>
        </tr>
        <tr>
          <td class="align-middle">Confirm Password  </td><td><input class="form-control" id="usermk" type="conpassword" name="address" title="User MikroTik" value="" required="1"></td>
        </tr>
        <tr>
          <td class="align-middle">Mobile Number </td><td><input class="form-control" id="usermk" type="number" size="11" name="phone" title="User MikroTik" value="" required="1"></td>
        </tr>
        <tr>
          <td class="align-middle">Due Date  </td><td><input class="form-control" id="usermk" type="text" size="10" name="dueDate" title="User MikroTik" value="" required="1"></td>
        </tr>
        <tr>
          <td class="align-middle">Password  </td><td><input class="form-control" id="usermk" type="text" name="adpass" title="User MikroTik" value="" required="1"></td>
        </tr>
        <tr>
          <td class="align-middle">Status  </td><td>
            <select name="status" class="group-item group-item-m">
                <option>- Select Status -</option>
                <option>Active</option>
                <option>Inactive</option>
                <option>Waiting</option>
                
            </select>
          </td>
        </tr>
        <tr>
          <td class="align-middle">Coverage Area  </td><td>
            <select name="province" class="group-item group-item-m">
                                        <?php
                                    //Code to get active categories in the database
                                    //Query to get data in database
                                    $sql =" SELECT * FROM coveragearea";
                                    
                                    //execute query
                                    $res = mysqli_query($conn,$sql);
                                    
                                    //count rows on database 
                                    $count = mysqli_num_rows($res);
                                    
                                    if($count>0){
                                        
                                        while($rows = mysqli_fetch_assoc($res)){
                                        
                                        $id =$rows['id'];
                                        $province =$rows['province'];
                                        ?>
                                        <option value="<?php echo $id; ?> "><?php echo $province;?></option>
                                         <?php   
                                    }
                                    }else{
                                        ?>
                                        <option value="0">No Coverage area</option>
                                        <?php
                                    }
                                    
                                    ?>
                                    
                                </select>
          </td>
        </tr>
        <tr>
          <td class="align-middle">Internet Plan  </td><td>
            <select name="plan" class="group-item group-item-m">
                <!-- <option>- Select a Province -</option> -->
                <?php 
                  if(!empty($coverages)){
                    foreach($coverages as $coverage){
                      echo '<option value="' . $coverage['id'] .  '">' . $coverage['name'] . '</option>';
                    }
                  }

                ?>
            </select>
          </td>
        </tr>
        <tr>
          <td class="align-middle">Address  </td><td>
            <input class="form-control" id="usermk" type="text" size="15" name="address" title="User MikroTik" value="" required="1">             
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
        $cname = $_POST['cname'];
        $accNo = $_POST['accNo'];
        $email= $_POST['email'];
        $phone = $_POST['phone'];
        $dueDate = $_POST['dueDate'];
        $status = $_POST['status'];
        $province = $_POST['province'];
        $plan = $_POST['plan'];
        $address = $_POST['address'];
        $password = $_POST['password'];
        
        //2.sql query to save data to database
        $sql = "INSERT INTO customer SET
            Cname='$cname',
            AccountNum='$accNo',
            Email='$email',
            Phone= $phone,
            Duedate='$dueDate',
            Status='$status',
            Province='$province',
            Plan='$plan',
            Address='$address',
            Password='$password'
        
        ";
        //execute query and finally save to database
 
        $res = mysqli_query($conn, $sql) or die(mysqli_error());
        
        //dispay the result if executed or not
    }
?>



<?php include_once('includes/footerhtml.php'); ?>