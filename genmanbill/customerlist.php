<?php include('core/config.php'); ?>
<?php include_once('includes/headhtml.php'); ?>


  	<div class="card">
        <div class="card-header">
          <h3 class="card-title"><i class="fa fa-gear"></i> Router Settings &nbsp; | &nbsp;&nbsp;<i onclick="location.reload();" class="fa fa-refresh pointer " title="Reload data"></i></h3>
        </div>
        <div class="overflow box-bordered mr-t-10" style="max-height: 75vh">
              <table id="dataTable" class="table table-bordered table-hover text-left">
            <tr>
                <th>Action</th>
                <th>ID</th>
                <th>Customer Name</th>
                <th>Account No</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Duedate</th>
                <th>Status</th>
                <th>Province Code</th>
                <th>Plan</th>
                <th>Address</th>
            </tr>
            
            <!..       Php for displaying all user   ..>
            <?php
                //Query to get all data from user table
                $sql = "SELECT * FROM customer";
            
                //Execute Query
                $res = mysqli_query($conn,$sql);
            
                //Check if the query is executed
                if($res==TRUE){
                    //Count rows if we have  data in database or not
                    $count = mysqli_num_rows($res);// Function to get all the rows in database
                    
                    //check the number of rows
                    if($count>0){
                        //We have data in database
                        while($rows= mysqli_fetch_assoc($res)){
                            //using while loop to get data on database
                            //While loop will always run aslong as we have data in database
                            
                            //get individual data
                            $id=$rows['id'];
                            $cname=$rows['Cname'];
                            $accountno=$rows['AccountNum'];
                            $email=$rows['Email'];
                            $phone=$rows['Phone'];
                            $duedate=$rows['Duedate'];
                            $status=$rows['Status'];
                            $province=$rows['Province'];
                            $plan=$rows['Plan'];
                            $address=$rows['Address'];
                            
                            //Display the data to page
                ?>
                            
                            
                            <tr>
                                <td>
                                    <a href="customer-delete.php?id=<?php echo $id;?>"><i class="fa fa-minus-square text-danger pointer remove-coverage" title="Remove"></i></a>
                                    <a href="customer-update.php?id=<?php echo $id;?>"><i class="fa fa-edit text-info pointer remove-coverage" title="Edit"></i></a>
                                </td>
                                <td><?php echo $id;?></td>
                                <td><?php echo $cname;?></td>
                                <td><?php echo $accountno;?></td>
                                <td><?php echo $email;?></td>
                                <td><?php echo $phone;?></td>
                                <td><?php echo $duedate;?></td>
                                <td><?php echo $status;?></td>
                                <td><?php echo $province;?></td>
                                <td><?php echo $plan;?></td>
                                <td><?php echo $address;?></td>
                            </tr>
            
            
            
            <?php
                            
                            
                            
                        }
                    }else{
                        //We have no data in database
                    }
                        
                    
                }
            
            ?>

        </table>
            </div>
          
        </div>
   

<?php include_once('includes/footerhtml.php'); ?>