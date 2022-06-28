<?php
include "admin_Template/header.php";
include "admin_Template/nav.php";
?>




<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h5 mb-0 text-gray-800">Waste</h1>
        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
    </div>

    <div class="card shadow ">
        <div  class="card-header">
            <h5 class="text text-center "><b>Waste Category</b></h5>

                <!--  modal Trigger with a button -->
                <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal">Add Waste</button>
                
        </div>

        <div class="card card-body">

            <div id="" class="table-responsive">
                <table class="table  table-bordered" id="mainTable"  >
                    <thead>
                        <tr>
                            <th>Sachet Rubbers</th>
                            <th>Polythene Bags</th>
                            <th>Plastic bottles</th>
                            <th>Electronic Waste</th>
                            <th>Edit</th>
                            <th>Delete </th>
                        </tr>
                    </thead>
                    <tbody>
                    
                        <tr>
                            <td>text</td>
                            <td>text</td>
                            <td>text</td>
                            <td>text</td>
                            <!-- echo $row['sticker']; -->

                            <td>
                                
                                <form action="student_register_edit.php" method="POST">
                                <input type="hidden" value="<?php echo $row['id']; ?>" name="edit_student_id">
                                <button class="btn btn-primary" name="edit_student_btn"><i class="fas fa-user-edit"></i></button>
                                </form>

                            </td>

                            <td>
                                <form action="dbconfig.php" method="POST">
                                <input type="hidden" value="<?php echo $row['id']; ?>" name="delete_id">
                                <button class="btn btn-danger" name="delete_student_btn">
                                    <i class="fas fa-trash-alt"></i></button>
                                </form>
                            </td>
                        </tr>
                        
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
          <form action="" method="POST">
            <div class="modal-body">

                    <div class="from-group col" > 
                        <label>Recycler name</label><br>
                        <input class="form-control border-success" type="text" placeholder="eg: Plastic rubber" name="" required >
                    </div>
                    
                    <br>

                    <div class="from-group row">
                        <div class="from-group col">
                        <label for="price">Price :
                        <input class="form-control border-success" type="number" placeholder="GH 50" name="price" required>
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
                            <option value="Category" selected hidden>Choose Waste a Category</option>
                            <option value="plastic">Plastic</option>
                            <option value="polythene">Polythene</option>
                            <option value="electronic">Electronic</option>
                            <option value="can">Can</option>
                        </select>
                    </div>

                    <br>

                <div class="modal-footer bg-success">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancle</button>
            
                    <button name="submit" type="submit" class="btn btn-primary">Save</button>
                </div>

          </form>
        </div>   

    </div>

  </div>
</div>


