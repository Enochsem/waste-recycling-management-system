<?php
include "client_Template/header.php";
include "client_Template/nav.php";
?>




<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Notification</h1>
        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
    </div>

    
    <div class="card shadow ">
        <div  class="card-header">
            <h5 class="text text-center "><b>Transaction Notification</b></h5>

        </div>

        <div class="card card-body">

            <div id="" class="table-responsive">
                <table class="table  table-bordered" id="mainTable"  >
                    <thead>
                        <tr>
                            <th>Amount</th>
                            <th>Drivers name</th>
                            <th>Car Number</th>
                            <th>Contact</th>
                            <th>Waste Category </th>
                            <th>Quantity</th>
                            <th>Status</th>
                            <!-- <th>Edit</th>
                            <th>Delete </th> -->
                        </tr>
                    </thead>
                    <tbody>
                        
                        <?php 
                        include_once '../connection.php';
                      
                        $sql="SELECT * FROM paste;";

                       
                         
                          if ($query=mysqli_query($conn,$sql)) {
                            # code...
                            while ( $row=mysqli_fetch_assoc($query)) {
                              # code...
                              ?>
                        <tr>
                            <td><?php echo $row['amount']; ?></td>
                            <td><?php echo $row['dirverName']; ?></td>
                            <td><?php echo $row['carNumber']; ?></td>
                            <td><?php echo $row['price']; ?></td>
                            <td><?php echo $row['waste']; ?></td>
                            <td><?php echo $row['quantity']; ?></td>
                            <td><?php 
                            if( $row['status']==1){
                                echo"Accepted";
                            }else{echo "Pending";}
                             
                            ?></td>
                            
                            <!-- echo $row['sticker']; -->

                            <!-- <td>
                                
                                <form action="h.php" method="POST">
                                <input type="hidden" value="" name="">
                                <button class="btn btn-primary" name="edit_student_btn"><i class="fas fa-user-edit"></i></button>
                                </form>

                            </td>

                            <td>
                                <form action="m.php" method="POST">
                                <input type="hidden" value="" name="">
                                <button class="btn btn-danger" name="delete_student_btn">
                                    <i class="fas fa-trash-alt"></i></button>
                                </form>
                            </td> -->
                        </tr>
                        <?php 
                           }
                          }else{echo "No records";}
                        ?>
                    </tbody>
                </table>
                </div>
                    <button onclick="printcontent('reg_students')" class="btn btn-success btn-block">Print me</button>
                </div>

            </div>
        </div> 
    </div>
   

</div>
<!-- /.container-fluid -->




<?php
include "client_Template/footer.php";
?>