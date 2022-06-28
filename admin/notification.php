<?php
include "admin_Template/header.php";
include "admin_Template/nav.php";
?>




<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h5 mb-0 text-gray-800">Notifications</h1>

        
                 
        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
    </div>

    <div class="card shadow ">
        <div  class="card-header">
            <h5 class="text text-center "><b>Waste Suppliers</b></h5>
            <?php
                 if (!empty($_SESSION['success'])) {
                    echo "<br><h6 class='text text-center text-white bg-success'>".$_SESSION['success']."</h6>";
                    unset($_SESSION['success']);
                }if (!empty($_SESSION['status'])) {
                    echo "<br><h6 class='text text-center text-white bg-danger'>".$_SESSION['status']."</h6>";
                    unset($_SESSION['status']);
                 }  ?> 
        </div>

        <div class="card card-body">

            <div id="Suppliers" class="table-responsive">
                <table class="table  table-bordered" id="mainTable"  >
                    <thead>
                        <tr>
                            <th>Supplier Name</th>
                            <th>Product Name</th>
                            <th>Location</th>
                            <th>Contact</th>
                            <!-- <th>Waste Type</th> -->
                            <th>Waste Category </th>
                            <th>Cost</th>
                            <th>Weight</th>
                            <th>Quantity</th>
                            <!-- <th>Date-Time</th> -->
                            <th>Aprove</th>
                            <!-- <th>Reject </th> -->
                        </tr>
                    </thead>
                    <tbody>
                         <?php 
                        include_once '../connection.php';
                      
                        $sql="SELECT * FROM waste;";
                         
                          if ($query=mysqli_query($conn,$sql)) {
                            # code...
                            while ( $row=mysqli_fetch_assoc($query)) {
                              # code...
                              ?>
                    
                        <tr>
                            <td><?php echo $row['supplierName']; ?></td>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['location']; ?></td>
                            <td><?php echo $row['contact']; ?></td>
                            
                            <td><?php echo $row['category']; ?></td>
                            <td><?php echo "GH".$row['price']; ?></td>
                            <td><?php echo $row['weight']."Kg"; ?></td>
                            <td><?php echo $row['quantity']; ?></td>
                            <td>
                                
                                <form action="send_notification.php" method="POST">
                                <input type="text" value="<?php echo $row['id']; ?>" name="aproved_id" hidden>
                                <input type="text" value="<?php echo $row['supplierName']; ?>" name="supplierName" hidden>
                                <button class="btn btn-success" name="aproved_btn"><i class="fas fa-check"></i></button>
                                </form>

                            </td>

                            <!-- <td>
                                <form action="../dbconfig.php" method="POST">
                                <input type="hidden" value="" name="delete_id">
                                <button class="btn btn-danger" name="delete_student_btn">
                                    <i class="fas fa-times"></i></button>
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
                    <button onclick="printcontent('Suppliers')" class="btn btn-success btn-block">Print me</button>
                </div>

            </div>
        </div> 
    </div>



   

</div>
<!-- /.container-fluid -->




<?php
include "admin_Template/footer.php";
?>

