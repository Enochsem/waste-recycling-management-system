<?php
include "client_Template/header.php";
include "client_Template/nav.php";
include '../methods.php';
?>




<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h4 mb-0 text-gray-800">Dashboard</h1>
        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Earnings Monthly -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success border-bottom-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                              Earnings</div>
                             <?php
                             
                             include_once '../connection.php';
                             
                                $amount =0;
                                $sql="SELECT * FROM paste ;";

                            
                                
                                if ($query=mysqli_query($conn,$sql)) {
                                    
                                    $row=mysqli_fetch_assoc($query);
                                    $amount += $row['amount'];
                               
                             ?>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo "GH".$amount; ?></div>
                            <?php
                             
                            }
                            ?>
                        </div>
                        <div class="col-auto">
                        <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Plastic Waste Collected -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary border-bottom-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Confirmed Request </div>
                                <?php 
                              
                              numberOf("paste","Confirmed");
                            ?>
                            <!-- <div class="h5 mb-0 font-weight-bold text-gray-800">25 Bags</div> -->
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!--Electronic Waste Collected -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success border-bottom-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Bags of Waste</div>
                                <?php
                             
                             include_once '../connection.php';
                             
                                $amount =0;
                                $sql="SELECT * FROM paste ;";

                            
                                
                                if ($query=mysqli_query($conn,$sql)) {
                                    
                                    while($row=mysqli_fetch_assoc($query)){;
                                    $amount += $row['quantity'];
                                }
                             ?>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $amount; ?></div>
                            <?php
                             
                            }
                            ?>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

       
        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning  border-bottom-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Pick-up Pending Requests</div>
                            <?php 
                              numberOf("waste","Request");
                            ?>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Notification -->
    <div class="row">

    </div>

   

   

</div>
<!-- /.container-fluid -->




<?php
include "client_Template/footer.php";
?>