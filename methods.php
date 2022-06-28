<?php



function numberOf($tableName, $item){
	include "connection.php";
    $sql="SELECT * FROM $tableName;";
    $query=mysqli_query($conn,$sql);
      if ($count=mysqli_num_rows($query)) {
          
          echo "<div class='h5 mb-0 font-weight-bold text-gray-800'>".$count." $item</div>";            
      }else{
        echo "<div class='h5 mb-0 font-weight-bold text-gray-800'> 0".$item." </div>";
      }
}




function notify(){
    include "connection.php";
    $sql="SELECT * FROM notifications WHERE status = 0";
    $query = mysqli_query($conn,$sql);
    $count = mysqli_num_rows($query);

    echo '<span class="badge badge-danger badge-counter">'. $count.'</span>';
}





function deleteFrom($tableName,$delete_id, $returnPage){
    include "connection.php";
    
        
        $sql="DELETE FROM $tableName WHERE id ='$delete_id';";
        $query=mysqli_query($conn,$sql);
  
            if ($query) {
                # code...
                $_SESSION['success']='Student record DELETED Successfully';
                header('Location: '.$returnPage);
            }else{
                $_SESSION['status']='Error Record NOT Deleted';
                header('Location: '.$returnPage);
            }
  
    
}


?>