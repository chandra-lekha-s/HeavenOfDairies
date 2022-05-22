<?php 
$conn=mysqli_connect('localhost','root','','dms');

// Add Code

if(isset($_POST['add-plan'])){
	$plan_duration=mysqli_real_escape_string($conn,$_POST['p_duration']);
	$plan_discount=mysqli_real_escape_string($conn,$_POST['p_discount']);
	$plan_days=mysqli_real_escape_string($conn,$_POST['p_days']);

	$sql= "INSERT INTO plans (plan_duration,plan_discount,plan_days) VALUES('$plan_duration','$plan_discount','$plan_days') ";
	if(mysqli_query($conn,$sql)){
		header('Location:admin-plans.php');
	}else{
		echo "THERE WAS AN ERROR";
	}
}else{
	header('Location:admin-plans.php');
}

// Delete Code

if(isset($_GET['p_id'])){
	$id=mysqli_real_escape_string($conn,$_GET['p_id']);
	$sql= "DELETE FROM plans WHERE plan_id='$id' ";
	$result=mysqli_query($conn,$sql);
	if($result){
		sleep(2);
		header('Location:admin-plans.php');
	}else{
		echo "THERE WAS AN ERROR".mysqli_error($conn);
	}
}else{
	echo mysqli_error($conn);
}


// Edit Code

if(isset($_POST['editNow'])){
	$p_duration=mysqli_real_escape_string($conn,$_POST['NewDuration']);
	$p_days=mysqli_real_escape_string($conn,$_POST['NewDays']);
	$p_discount=mysqli_real_escape_string($conn,$_POST['NewDiscount']);
	$id=mysqli_real_escape_string($conn,$_POST['p_id']);


	if($_POST['p_duration']!=$_POST['NewDuration']){
		$sql= "UPDATE plans SET plan_duration='$p_duration' WHERE plan_id='$id' ";
		$result=mysqli_query($conn,$sql);
	}
	if($_POST['p_days']!=$_POST['NewDays']){
		$sql= "UPDATE plans SET plan_days='$p_days' WHERE plan_id='$id' ";
		$result=mysqli_query($conn,$sql);
	}
	if($_POST['p_discount']!=$_POST['NewDiscount']){
		$sql= "UPDATE plans SET plan_discount='$p_discount' WHERE plan_id='$id' ";
		$result=mysqli_query($conn,$sql);
	}
	
	header('Location:admin-plans.php');	
}
elseif(isset($_POST['closeNow'])){
   header('Location:admin-plans.php');
}
else{
	   echo "error".mysqli_error($conn);
   }



mysqli_close($conn);
?>