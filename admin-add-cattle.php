<?php 
$conn=mysqli_connect('localhost','root','','dms');

// Add Code

if(isset($_POST['add-cattle'])){
	$c_dob=mysqli_real_escape_string($conn,$_POST['c_dob']);
	$c_doa=mysqli_real_escape_string($conn,$_POST['c_doa']);
	$c_breed=mysqli_real_escape_string($conn,$_POST['c_breed']);
	$seller_id=mysqli_real_escape_string($conn,$_POST['seller_id']);
	// $file=$_FILES['image']['name'];
	$sql= "INSERT INTO cattle_details (c_dob,c_doa,c_breed,seller_id) VALUES('$c_dob','$c_doa','$c_breed','$seller_id')";
	if(mysqli_query($conn,$sql)){
		header('Location:admin-register-cattle.php');
	}else{
		echo "THERE WAS AN ERROR";
	}
}else{
	header('Location:admin-register-cattle.php');
}

// Delete Code

if(isset($_GET['c_id'])){
	$id=mysqli_real_escape_string($conn,$_GET['c_id']);
	$sql= "DELETE FROM cattle_details WHERE cattle_id='$id' ";
	$result=mysqli_query($conn,$sql);
	if($result){
		sleep(2);
		header('Location:admin-register-cattle.php');
	}else{
		echo "THERE WAS AN ERROR".mysqli_error($conn);
	}
}else{
	echo mysqli_error($conn);
}

// Edit Code

if(isset($_POST['editNow'])){
	$c_dob=mysqli_real_escape_string($conn,$_POST['NewDob']);
	$c_doa=mysqli_real_escape_string($conn,$_POST['NewDoa']);
	$seller_id=mysqli_real_escape_string($conn,$_POST['NewSellerId']);
	$c_breed=mysqli_real_escape_string($conn,$_POST['NewBreed']);

	$id=mysqli_real_escape_string($conn,$_POST['c_id']);


	if($_POST['Cdob']!=$_POST['NewDob']){
		$sql= "UPDATE cattle_details SET c_dob='$c_dob' WHERE cattle_id='$id' ";
		$result=mysqli_query($conn,$sql);
	}
	if($_POST['Cdoa']!=$_POST['NewDoa']){
		$sql= "UPDATE cattle_details SET c_doa='$c_doa' WHERE cattle_id='$id' ";
		$result=mysqli_query($conn,$sql);
	}
	if($_POST['SellerId']!=$_POST['NewSellerId']){
		$sql= "UPDATE cattle_details SET seller_id='$seller_id' WHERE cattle_id='$id' ";
		$result=mysqli_query($conn,$sql);
	}
	if($_POST['Cbreed']!=$_POST['NewBreed']){
		$sql= "UPDATE cattle_details SET c_breed='$c_breed' WHERE cattle_id='$id' ";
		$result=mysqli_query($conn,$sql);
	}
	
	header('Location:admin-register-cattle.php');	
}
elseif(isset($_POST['closeNow'])){
   header('Location:admin-register-cattle.php');
}
else{
	   echo "error".mysqli_error($conn);
   }


mysqli_close($conn);
?>