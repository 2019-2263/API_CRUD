<?php include('core/config.php'); ?>
<?php include_once('includes/headhtml.php'); ?>


  	<div class="card">
        <div class="card-header">
          <h3 class="card-title"><i class="fa fa-gear"></i> Service List &nbsp; | &nbsp;&nbsp;<i onclick="location.reload();" class="fa fa-refresh pointer " title="Reload data"></i></h3>
        </div>
        <div class="overflow box-bordered mr-t-10" style="max-height: 75vh">
              <table id="dataTable" class="table table-bordered table-hover text-left">
            <tr>
                <th>Action</th>
                <th>ID</th>
                <th>Service</th>
                <th>Information</th>
            </tr>
            
            <!..       Php for displaying all user   ..>
            <?php
                //Query to get all data from user table
                $sql = "SELECT * FROM services";
            
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
                            $servicename=$rows['Servicename'];
                            $information=$rows['Information'];
                            
                            //Display the data to page
                ?>
                            
                            
                            <tr>
                                <td>
                                    <a href="service-delete.php?id=<?php echo $id;?>"><i class="fa fa-minus-square text-danger pointer remove-coverage" title="Remove"></i></a>
                                    <a href="service-update.php?id=<?php echo $id;?>"><i class="fa fa-edit text-info pointer remove-coverage" title="Edit"></i></a>
                                </td>
                                <td><?php echo $id;?></td>
                                <td><?php echo $servicename;?></td>
                                <td><?php echo $information;?></td>
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