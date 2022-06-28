<?php
include "admin_Template/header.php";
include "admin_Template/nav.php";
?>



<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h5 mb-0 text-gray-800">Send Notifications</h1>
        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
    </div>

    <div class="card shadow ">
        <div  class="card-header">
            <h5 class="text text-center "><b>Notifications to Waste Suppliers</b></h5>

        </div>

        <div class="card card-body">


                <form action="../dbconfig.php" method="POST">
                    <?php  include_once '../connection.php';
                         if (isset($_POST['aproved_btn'])) {
                    # code...
                    $aproved_id=$_POST['aproved_id'];
                    
                    //echo $aproved_id;
                    $sql= "SELECT * FROM waste WHERE id = '$aproved_id';";
                    
                    
                    
                    $query=mysqli_query($conn,$sql);

                    while ($row = mysqli_fetch_assoc($query)) {
                        ?>

                    <div class="from-group col" > 
                        <label>Amount</label><br>
                        <input class="form-control border-success" type="number" value="<?php echo $row['price']; ?>" name="amount" required >
                    </div>
                    
                    <br>

                    <div class="from-group row">
                        <div class="from-group col">
                        <label for="driverName">Driver Name :
                        <input class="form-control border-success" type="text"  name="driverName" required>
                        </label>
                        </div>
                        <div class="from-group col">
                        <label for="carNumber">CarNumber :
                        <input class="form-control border-success" type="text"   name="carNumber" required>
                        </label>
                        </div>
                        <div class="from-group col">
                        <label for="contact">Contact :
                        <input class="form-control border-success" type="text" name="contact" required>
                        </label>
                        </div>
                
                    </div>
                    

                    <br>

                     <div class="from-group col">
                        <label>Waste Category</label>
                        <select name="category" id="" class="form-control border-success" required>
                            <option  selected ><?php echo $row['category']; ?></option>
                            <option value="plastic">Plastic</option>
                            <option value="polythene">Polythene</option>
                            <option value="electronic">Electronic</option>
                            <option value="can">Can</option>
                        </select>
                    </div> 

                    <br>
        
                    <div class="from-group col" > 
                        <label>Quantity</label><br>
                        <input class="form-control border-success" type="number" value="<?php echo $row['quantity']; ?>" name="quantity" required >
                    </div>

                    
                        <input type="text" name="supplierName" value="<?php echo $row['supplierName'];?>" hidden>
                    
                    <br>


                <div class="modal-footer bg-success">
                    <button type="button" class="btn btn-danger" >Cancle</button>
            
                    <button name="send_notification" type="submit" class="btn btn-primary">Send</button>
                </div>
                <?php
            }
        }
                ?>
          </form>

                             
        </div> 
    </div>



   

</div>
<!-- /.container-fluid -->




<?php
include "admin_Template/footer.php";
?>













