<?php 
$conn=mysqli_connect('localhost','root','','dms');

// Add Code

if(isset($_POST['add-seller'])){
	$name=mysqli_real_escape_string($conn,$_POST['S_name']);
	$contact=mysqli_real_escape_string($conn,$_POST['S_contact']);
	$address=mysqli_real_escape_string($conn,$_POST['S_address']);
	$email=mysqli_real_escape_string($conn,$_POST['S_email']);
	$sql= "INSERT INTO seller_details (seller_name,seller_contact,seller_email,seller_address) VALUES('$name','$contact','$email','$address')";
	if(mysqli_query($conn,$sql)){
		header('Location:admin-register-seller.php');
	}else{
		echo "THERE WAS AN ERROR";
	}
}else{
	header('Location:admin-register-seller.php');
}

// Delete Code

if(isset($_GET['s_id'])){
	$id=mysqli_real_escape_string($conn,$_GET['s_id']);
	$sql= "DELETE FROM seller_details WHERE seller_id='$id' ";
	$result=mysqli_query($conn,$sql);
	if($result){
		sleep(2);
		header('Location:admin-register-seller.php');
	}else{
		echo "THERE WAS AN ERROR".mysqli_error($conn);
	}
}else{
	echo mysqli_error($conn);
}


// Edit Code

if(isset($_POST['editNow'])){
	$s_name=mysqli_real_escape_string($conn,$_POST['NewName']);
	$s_contact=mysqli_real_escape_string($conn,$_POST['NewContact']);
	$s_email=mysqli_real_escape_string($conn,$_POST['NewEmail']);
	$s_address=mysqli_real_escape_string($conn,$_POST['NewAddress']);

	$id=mysqli_real_escape_string($conn,$_POST['s_id']);

	if($_POST['Cdob']!=$_POST['NewName']){
		$sql= "UPDATE seller_details SET seller_name='$s_name' WHERE seller_id='$id' ";
		$result=mysqli_query($conn,$sql);
	}
	if($_POST['Cdoa']!=$_POST['NewContact']){
		$sql= "UPDATE seller_details SET seller_contact='$s_contact' WHERE seller_id='$id' ";
		$result=mysqli_query($conn,$sql);
	}
	if($_POST['SellerId']!=$_POST['NewEmail']){
		$sql= "UPDATE seller_details SET seller_email='$s_email' WHERE seller_id='$id' ";
		$result=mysqli_query($conn,$sql);
	}
	if($_POST['Cbreed']!=$_POST['NewAddress']){
		$sql= "UPDATE seller_details SET seller_address='$s_address' WHERE seller_id='$id' ";
		$result=mysqli_query($conn,$sql);
	}
	
	header('Location:admin-register-seller.php');	
}
elseif(isset($_POST['closeNow'])){
   header('Location:admin-register-seller.php');
}
else{
	   echo "error".mysqli_error($conn);
   }


mysqli_close($conn);
?>

mysqli_close($conn);
?>