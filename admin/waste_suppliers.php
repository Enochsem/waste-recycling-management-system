<?php
include "admin_Template/header.php";
include "admin_Template/nav.php";
?>




<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h5 mb-0 text-gray-800">Suppliers</h1>
        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
    </div>

    <div class="card shadow ">
        <div  class="card-header">
            <h5 class="text text-center "><b>Waste Suppliers</b></h5>

                <!--  modal Trigger with a button -->
                <!-- <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal">Add Suppliers</button> -->
                
        </div>

        <div class="card card-body">

            <div id="Suppliers"  class="table-responsive">
                <table class="table  table-bordered" id="mainTable"  >
                    <thead>
                        <tr>
                            <th>Supplier Name</th>
                            <th>Business Name</th>
                            <th>Location</th>
                            <th>Contact</th>
                            <th>Email </th>
                            <th>Edit</th>
                            <th>Delete </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        include_once '../connection.php';
                      
                        $sql="SELECT * FROM clients;";
                         
                          if ($query=mysqli_query($conn,$sql)) {
                            # code...
                            while ( $row=mysqli_fetch_assoc($query)) {
                              # code...
                              ?>
                        <tr>
                            <td><?php echo $row['username']; ?></td>
                            <td><?php echo $row['businessName']; ?></td>
                            <td><?php echo $row['location']; ?></td>
                            <td><?php echo $row['contact']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            
                            <td>
                                
                                <form action="../dbconfig.php" method="POST">
                                <input type="text" value="<?php echo $row['id']; ?>" name="edit_student_id" hidden>
                                <button class="btn btn-primary" name="editSupplier"><i class="fas fa-user-edit"></i></button>
                                </form>

                            </td>

                            <td>
                                <form action="../dbconfig.php" method="POST">
                                <input type="text" value="<?php echo $row['id']; ?>" name="delete_id" hidden>
                                <button class="btn btn-danger" name="deleteSupplier">
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






<!-- Modal -->
<!-- <div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

   
    <div class="modal-content">
      <div class="modal-header bg-success">
        <h4 class="modal-title-center text-white">Add Suppler</h4>
      </div>

        <div>
          <form action="" method="POST">
            <div class="modal-body">

                    <div class="from-group col" > 
                        <label>Business name</label><br>
                        <input class="form-control border-success" type="text" placeholder="eg: Vida Ent." name="" required >
                    </div>
                    
                    <br>

                    <div class="from-group row">
                        <label for="">Suppler Name</label>
                        <div class="from-group col">
                        <label for="price">First Name :
                        <input class="form-control border-success" type="text" placeholder="First Name" name="firstName" required>
                        </label>
                        </div>
                        <div class="from-group col">
                        <label for="weight">Surname :
                        <input class="form-control border-success" type="text" placeholder="Surname" name="lastName" required>
                        </label>
                        </div>
                
                    </div>
                    
                    
                    <br>
        
                    <div class="from-group col" > 
                        <label>Location</label><br>
                        <input class="form-control border-success" type="text" placeholder="eg: Accra" name="location" required >
                    </div>

                    <br>

                    <div class="from-group col" > 
                        <label>Contact</label><br>
                        <input class="form-control border-success" type="text" placeholder="eg: +233 000 000 001" name="contact" required >
                    </div>

                    <br>

                    <div class="from-group col" > 
                        <label>email</label><br>
                        <input class="form-control border-success" type="email" placeholder="eg: a@providermail.domain" name="email" required >
                    </div>

                    <br>

                <div class="modal-footer bg-success">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancle</button>
            
                    <button name="supplier" type="submit" class="btn btn-primary">Save</button>
                </div>

          </form>
        </div>   

    </div>

  </div>
</div> -->


