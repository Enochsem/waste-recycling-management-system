<?php
include "client_Template/header.php";
include "client_Template/nav.php";
?>




<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h5 mb-0 text-gray-800">Request</h1>

        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
    </div>

    <div class="card shadow ">
        <div  class="card-header">
            <h5 class="text text-center "><b>Request Pick Up</b></h5>
                 <?php
                 if (!empty($_SESSION['success'])) {
                    echo "<br><h6 class='text text-center text-white bg-success'>".$_SESSION['success']."</h6>";
                    unset($_SESSION['success']);
                }if (!empty($_SESSION['status'])) {
                    echo "<br><h6 class='text text-center text-white bg-danger'>".$_SESSION['status']."</h6>";
                    unset($_SESSION['status']);
                 }  ?> 
                <!--  modal Trigger with a button -->
                <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal">Make Request</button>
                
        </div>

        <div class="card card-body">

            <div id="reg_students" class="table-responsive">
                <table class="table  table-bordered" id="mainTable"  >
                    <thead>
                        <tr>
                            <th>Product name</th>
                            <th>Product Category</th>
                            <th>Price</th>
                            <th>Weight</th>
                            <th>Quantity </th>
                           <!--  <th>Edit</th> -->
                            <th>Delete </th>
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
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['category']; ?></td>
                            <td><?php echo $row['price']; ?></td>
                            <td><?php echo $row['weight']; ?></td>
                            <td><?php echo $row['quantity']; ?></td>
                           

                           <!--  <td>
                                
                                <form action=".php" method="POST">
                                <input type="hidden" value="<?php echo $row['id']; ?>" name="">
                                <button class="btn btn-primary" name="edit_student_btn"><i class="fas fa-user-edit"></i></button>
                                </form>

                            </td>
 -->
                            <td>
                                <form action="../dbconfig.php" method="POST">
                                <input type="hidden" value="<?php echo $row['id']; ?>" name="delete_id">
                                <button class="btn btn-danger" name="delete_waste">
                                    <i class="fas fa-trash-alt"></i></button>
                                </form>
                            </td>
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






<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header bg-success">
        <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
        <h4 class="modal-title-center text-white">Add New Product</h4>
      </div>

        <div>
          <form action="../dbconfig.php" method="POST" enctype="multipart/form-data">
            <div class="modal-body">

                    <div class="from-group col" > 
                        <label>Product name</label><br>
                        <input name="name" class="form-control border-success" type="text" placeholder="eg: Plastic rubber"  required >
                    </div>
                    
                    <br>

                    <div class="form-group">
                        <label for="description">Product Description</label> 
                        <textarea name="description" class="form-control border-success"  id="Product_Description" cols="10" rows="5" placeholder="Enter Product Description"></textarea>
                    </div>

                    <label class="text text-center">Product detail</label>
                    <div class="from-group row">
                        <div class="from-group col">
                        <label for="price">Price :
                        <input name="price" class="form-control border-success" type="number" placeholder="GH 50" required>
                        </label>
                        </div>
                        <div class="from-group col">
                        <label for="weight">Weight :
                        <input class="form-control border-success" type="number" placeholder="10 Kg" name="weight" required>
                        </label>
                        </div>
                        <div class="from-group col">
                        <label for="quantity">Quantity :
                        <input class="form-control border-success" type="number" placeholder="5 bags" name="quantity">
                        </label>
                        </div>

                
                    </div>
                    <!-- rowbreak -->

        
                    <div class="from-group col">
                        <label>Category</label>
                        <select name="category" id="" class="form-control border-success" required>
                            <option value="Category" selected hidden>Choose a Category</option>
                            <option value="plastic">Plastic</option>
                            <option value="polythene">Polythene</option>
                            <option value="electronic">Electronic</option>
                            <option value="can">Can</option>
                        </select>
                    </div>  

                
                    <br>
                    
                    <div class="from-group col">
                        <label for="product_name">Upload Image</label>
                        <input class="form-control border-success" type="file" name="imglink"  > 
                        </div>
                    </div>

                    <br>

                <div class="modal-footer bg-success">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancle</button>
            
                    <button name="request" type="submit" class="btn btn-primary">Save</button>
                </div>

          </form>
        </div>   

    </div>

  </div>
</div>


