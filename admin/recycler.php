<?php
include "admin_Template/header.php";
include "admin_Template/nav.php";
?>




<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h5 mb-0 text-gray-800">Recycler</h1>
        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
    </div>

    <div class="card shadow ">
        <div  class="card-header">
            <h5 class="text text-center "><b>Third-party Recycler</b></h5>

                 <?php
                 if (!empty($_SESSION['success'])) {
                    echo "<br><h6 class='text text-center text-white bg-success'>".$_SESSION['success']."</h6>";
                    unset($_SESSION['success']);
                }if (!empty($_SESSION['status'])) {
                    echo "<br><h6 class='text text-center text-white bg-danger'>".$_SESSION['status']."</h6>";
                    unset($_SESSION['status']);
                 }  ?> 
                 
                <!--  modal Trigger with a button -->
                <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal">Add Recycler</button>
                
        </div>

        <div class="card card-body">

            <div id="Recycler" class="table-responsive">
                <table class="table  table-bordered" id="mainTable"  >
                    <thead>
                        <tr>
                            <th>Recycler name</th>
                            <th>Contact</th>
                            <th>Location</th>
                            <!-- <th>Edit</th> -->
                            <th>Delete </th>
                        </tr>
                    </thead>
                    <tbody>
                        
                         <?php 
                        include_once '../connection.php';
                      
                        $sql="SELECT * FROM recyclers;";
                         
                          if ($query=mysqli_query($conn,$sql)) {
                            # code...
                            while ( $row=mysqli_fetch_assoc($query)) {
                              # code...
                              ?>
                        <tr>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['contact']; ?></td>
                            <td><?php echo $row['location']; ?></td>

                           <!--  <td>
                                
                                <form action="" method="POST">
                                <input type="hidden" value="" name="">
                                <button class="btn btn-primary" name=""><i class="fas fa-user-edit"></i></button>
                                </form>

                            </td> -->

                            <td>
                                <form action="../dbconfig.php" method="POST">
                                <input type="hidden" value="<?php echo $row['id']; ?>" name="delete_id">
                                <button class="btn btn-danger" name="delete_recycler">
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
                    <button onclick="printcontent('Recycler')" class="btn btn-success btn-block">Print me</button>
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
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header bg-success">
        <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
        <h4 class="modal-title-center text-white">Add Third-party Recycler</h4>
      </div>

        <div>
          <form action="../dbconfig.php" method="POST">
            <div class="modal-body">

                    <div class="from-group col" > 
                        <label>Recycler name</label><br>
                        <input class="form-control border-success" type="text" placeholder="eg:  Kofi Baah" name="name" required >
                    </div>
                    
                    <br>

                    <div class="from-group row">
                        <div class="from-group col">
                        <label for="contact">Contact :
                        <input class="form-control border-success" type="text" placeholder="eg: +233 000 000 001" name="contact" required>
                        </label>
                        </div>
                        <div class="from-group col">
                        <label for="location">Location :
                        <input class="form-control border-success" type="text" placeholder="eg: Tema" name="location" required>
                        </label>
                        </div>

                
                    </div>
                    <!-- rowbreak -->

                    <br>

                <div class="modal-footer bg-success">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancle</button>
            
                    <button name="recycler" type="submit" class="btn btn-primary">Save</button>
                </div>

          </form>
        </div>   

    </div>

  </div>
</div>


