<?php
session_start();
include_once 'connection.php';


//register
if(isset($_POST['register'])){

	  $username = $_POST['username'];
	  
	  $businessName = $_POST['businessName'];
	  $location = $_POST['location'];
	  $contact = $_POST['contact'];
	  $email = $_POST['email'];
	  $password = $_POST['password'];
	  $confirmPassword = $_POST['confirmPassword'];

	  if ($password == $confirmPassword) {
	  	// code...
		$query="INSERT INTO clients (username, businessName, location, contact, email, password)
				VALUES('$username', '$businessName', '$location', '$contact', '$email', '$password');";
		$query_run=mysqli_query($conn,$query);
		if($query_run){

		$_SESSION['username']=$row['username'];
		header('Location: index.php');
		}else{
		$_SESSION['status']='Error ...';
		header('Location: register.php');
	  }
	  
    }else{
		$_SESSION['status']='Password missmatch';
		header('Location: register.php');
    }
}



//login
if(isset($_POST['login'])){

	  $username=$_POST['username'];
	  $password=$_POST['password'];
	  $query="SELECT * FROM clients WHERE username='$username' AND password='$password';";
	  $query_run=mysqli_query($conn,$query);
	  $row=mysqli_fetch_assoc($query_run);
	   if($row){

	      $_SESSION['username']=$row['username'];
	      $_SESSION['location']=$row['location'];
	      $_SESSION['contact']=$row['contact'];
		  $_SESSION['id']=$row['id'];

	      header('Location: client/index.php');
		}else{
		$_SESSION['status']='Invalid Credentials';
	 	header('Location: index.php');
    }
    
}



//make request
if (isset($_POST['request'])) {
   # code...
     $name=$_POST['name'];
     $category=$_POST['category'];
     $description=$_POST['description'];
     $price=$_POST['price'];
     $weight=$_POST['weight'];
     $quantity=$_POST['quantity'];


     $img_name=$_FILES['imglink']['name'];
     $img_size=$_FILES['imglink']['size'];
     $img_tmp=$_FILES['imglink']['tmp_name'];
      
     $directory='uploads/';
     $target_file=$directory.$img_name;
    

     $supplierName=$_SESSION['username'];
     $contact =$_SESSION['contact'];
     $location=$_SESSION['location'];
     // $sql ="SELECT * FROM clients WHERE username =$supplierName ;";
     // $run = mysqli_query($conn,$sql);
     // $row = mysqli_fetch_assoc($run);
     // if($row){
     // 	 $contact=$row['contact'];
     // 	 $location=$row['location'];
     



	       
     if (file_exists($target_file)) {
       # code...
       echo "<script type='text/JavaScript'> alert('Image file already exist please try another with a different one')</script>";
        $_SESSION['status']="Image file already exist...";
             header('Location: client/add_request.php');
     }elseif ($img_size>2097152) {
       # code...
       echo "<script type='text/JavaScript'> alert('Image size is greater than 2MB please use a smaller size..')</script>";
     }else{
       // move_uploaded_file($img_name, $img_tmp);
        move_uploaded_file($img_tmp, $target_file);
       $query="INSERT INTO waste (name, category, discription, price, weight, quantity,imagelink,supplierName, contact, location)
        VALUES('$name','$category','$description','$price','$weight','$quantity','$target_file','$supplierName','$contact','$location');";
       $query_run=mysqli_query($conn,$query);
           if ($query_run) {            
             $_SESSION['success']="Request Made successful...";
             header('Location: client/add_request.php');
           }else{
             $_SESSION['success']="SORRY an error ocoured... Try again";
             header('Location: client/add_request.php');
           }
       }
  	
 }


//delete waste
 if (isset($_POST['delete_waste'])) {
  	# code...
  	$delete_id=$_POST['delete_id'];
  	$sql="DELETE FROM waste WHERE id ='$delete_id';";
  	$query=mysqli_query($conn,$sql);

  		if ($query) {
  			# code...
  			$_SESSION['success']='Record DELETED Successfully';
  			header('Location: client/add_request.php');
  		}else{
  			$_SESSION['status']='Error Record NOT Deleted';
  			header('Location: client/add_request.php');
  		}

  }








// ===========ADMIN============



//admin login
if(isset($_POST['adminLogin'])){

	  $username=$_POST['username'];
	  $password=$_POST['password'];
	  $query="SELECT * FROM admins WHERE username = '$username' AND password = '$password';";
	  $query_run=mysqli_query($conn,$query);
	  $row=mysqli_fetch_assoc($query_run);
	   if($row){

	      $_SESSION['username']=$row['username'];
	      header('Location: admin/index.php');
		}else{
		$_SESSION['status']='Invalid Credentials';
	 	header('Location: admin_login.php');
    }
    
}




//driver
if(isset($_POST['driver'])){

	  $name = $_POST['name'];
	  $contact = $_POST['contact'];
	  $carNumber = $_POST['carNumber'];
	  $carType = $_POST['carType'];
	  $carColor = $_POST['carColor'];
	  

		$query="INSERT INTO drivers (name, contact, carNumber, carType, carColor)
				VALUES('$name', '$contact', '$carNumber', '$carType', '$carColor');";
		$query_run=mysqli_query($conn,$query);
		if($query_run){

		$_SESSION['success']=$row['name'].'Added';
		header('Location: admin/waste_drivers.php');
		}else{
		$_SESSION['status']='Error ...';
		header('Location: admin/waste_drivers.php');
		}
	 
}



//delete driver
 if (isset($_POST['delete_driver'])) {
  	# code...
  	$delete_id=$_POST['delete_id'];
  	$sql="DELETE FROM drivers WHERE id ='$delete_id';";
  	$query=mysqli_query($conn,$sql);

  		if ($query) {
  			# code...
  			$_SESSION['success']='Record DELETED Successfully';
  			header('Location:admin/recycler.php');
  		}else{
  			$_SESSION['status']='Error Record NOT Deleted';
  			header('Location:admin/recycler.php');
  		}

  }






// insert recycler
if(isset($_POST['recycler'])){

	  $name = $_POST['name'];
	  $contact = $_POST['contact'];
	  $location = $_POST['location'];
	  

		$query="INSERT INTO recyclers (name, contact, location)
				VALUES('$name', '$contact', '$location');";
		$query_run=mysqli_query($conn,$query);
		if($query_run){

		$_SESSION['success']=$row['name'].' was added Successfully';
		header('Location: admin/recycler.php');
		}else{
		$_SESSION['status']='Error ...';
		header('Location: admin/recycler.php');
		}
	 
}




//delete recycler

 if (isset($_POST['delete_recycler'])) {
  	# code...
  	$delete_id=$_POST['delete_id'];
  	$sql="DELETE FROM recyclers WHERE id ='$delete_id';";
  	$query=mysqli_query($conn,$sql);

  		if ($query) {
  			# code...
  			$_SESSION['success']='Record DELETED Successfully';
  			header('Location:admin/recycler.php');
  		}else{
  			$_SESSION['status']='Error Record NOT Deleted';
  			header('Location:admin/recycler.php');
  		}

  }







// fdfhggjhvjhbjkn

  if (isset($_POST['send_notification'])) {
	# code...
	  $amount=$_POST['amount'];
	  $dirverName=$_POST['driverName'];//selling mistake
	  $carNumber=$_POST['carNumber'];
	  $contact=$_POST['contact'];
	  $waste=$_POST['category'];
	  $quantity=$_POST['quantity'];
 
	  $status=1;
 
	  $clientid=$_POST['clientid'];
	  $contact =$_SESSION['contact'];
	  $location=$_POST['supplierName'];

	 	  
	$query="INSERT INTO paste (amount, dirverName, carNumber, price, waste, quantity,status,clientid, contact, location)
	VALUES('$amount','$dirverName','$carNumber','$contact','$waste','$quantity','$status','$clientid','$contact','$location');";
	$query_run=mysqli_query($conn,$query);
	if ($query_run) {            
		$_SESSION['success']="Request Made successful...";
		header('Location: admin/notification.php');
	}else{
		$_SESSION['success']="SORRY an error ocoured... Try again";
		header('Location: admin/notification.php');
	}
		
	   
  }
 

//insert send_notification
if(isset($_POST['send_notificationq'])){

	  $amount = $_POST['amount'];
	  $dirverName = $_POST['dirverName'];
	  $carNumber = $_POST['carNumber'];
	  $contact = $_POST['contact'];
	  $category = $_POST['category'];
	  $quantity = $_POST['quantity'];
	  $ps = 1;
	  $ms=1;
	  

		$sql="INSERT INTO clientnotification (amount, dirverName, carNumber, contact, category, quantity,processStatus,messageStatus)
				VALUES('$amount', '$dirverName', '$carNumber', '$contact', '$category', '$quantity','$ps','$ms' );";
		$query_run=mysqli_query($conn,$sql);
		if($query_run){

		$_SESSION['success']=' was added Successfully';
		header('Location: admin/notification.php');
		}else{
		$_SESSION['status']=mysqli_connect_error();
		header('Location: admin/notification.php');
		}
	 
}





if(isset($_POST['deleteSupplier'])){
    include 'methods.php';
    $delete_id=$_POST['delete_id'];
    deleteFrom("admins",$delete_id, 'admin/waste_suppliers.php');
}



// ==========functions==========






if (isset($_POST['logout'])) {
    
    unset($_SESSION['username']);
    session_destroy();
    header('Location:index.php');
}





?>