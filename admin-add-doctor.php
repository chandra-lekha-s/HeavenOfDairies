<?php 
$conn=mysqli_connect('localhost','root','','dms');
// $d_date = date("Y-m-d H:i:s"); 

// $d_date=date("Y-m-d h:i:s a",time());
// echo $d_date;

// Add Code

if(isset($_POST['add-doctor'])){
	$d_name=mysqli_real_escape_string($conn,$_POST['d_name']);
	$d_contact=mysqli_real_escape_string($conn,$_POST['d_contact']);
	$d_email=mysqli_real_escape_string($conn,$_POST['d_email']);
	$d_address=mysqli_real_escape_string($conn,$_POST['d_address']);
    $d_password=mysqli_real_escape_string($conn,$_POST['d_contact']);
    $d_date=date("Y-m-d H:i:s",time());
    $d_file=$_FILES['d_img']['name'];

	// $header1='From: ';
	// $msg1='Contact details:';
	// $msg2='Name: ';
	// $msg3='Phno.: ';
	// $msg4='email: ';
	// $msg=$msg1."\n".$msg2.$d_name."\n".$msg3.$d_contact."\n".$msg4.$d_email;

	// $to="fkitchendiaries@gmail.com";
	// $subject="HEAVEN OF DAIRIES";
	// $query=$d_password."\n\n".$msg;
	// $header=$header1." ".$d_email;
	
	// echo " TO : ";
	// echo $to ;echo "  **********  SUBJECT : ";
	// echo $subject ;echo " ************  QUERY : ";
	// echo $query ;echo " ********** HEADER : ";
	// echo $header ;echo " OVER ";

	// if(mail($to,$subject,$query,$header)){
	// 	echo "DONE";
	// }else{
	// 	echo "ERROR";
	// }

	$sql= "INSERT INTO doctor_details (d_name,d_contact,d_address,d_email,d_password,d_img,d_date) VALUES('$d_name','$d_contact','$d_address','$d_email','$d_password','$d_file','$d_date') ";
	if(mysqli_query($conn,$sql)){
        $img_upload_path='assets/img/'.$d_file;
		move_uploaded_file($_FILES['d_img']['tmp_name'], $img_upload_path);
		header('Location:admin-register-doctor.php');
	}else{
		echo "THERE WAS AN ERROR";
	}
}else{
	header('Location:admin-register-doctor.php');
}

// Delete Code

if(isset($_GET['d_id'])){
	$id=mysqli_real_escape_string($conn,$_GET['d_id']);
	$sql= "DELETE FROM doctor_details WHERE doctor_id='$id' ";
	$result=mysqli_query($conn,$sql);
	if($result){
		sleep(2);
		header('Location:admin-register-doctor.php');
	}else{
		echo "THERE WAS AN ERROR".mysqli_error($conn);
	}
}else{
	echo mysqli_error($conn);
}


// Edit Code

if(isset($_POST['editNow'])){
	$d_name=mysqli_real_escape_string($conn,$_POST['NewName']);
	$d_contact=mysqli_real_escape_string($conn,$_POST['NewContact']);
	$d_img_old=mysqli_real_escape_string($conn,$_POST['Dimg']);
	$d_email=mysqli_real_escape_string($conn,$_POST['NewEmail']);
	$d_address=mysqli_real_escape_string($conn,$_POST['NewAddress']);
	$id=mysqli_real_escape_string($conn,$_POST['d_id']);


	$file=$_FILES['NewImg']['name'];

	
	if($_POST['Dname']!=$_POST['NewName']){
		$sql= "UPDATE doctor_details SET d_name='$d_name' WHERE doctor_id='$id' ";
		$result=mysqli_query($conn,$sql);
	}
	if($_POST['Dcontact']!=$_POST['NewContact']){
		$sql= "UPDATE doctor_details SET d_contact='$d_contact' WHERE doctor_id='$id' ";
		$result=mysqli_query($conn,$sql);
	}
	if($_POST['Demail']!=$_POST['NewEmail']){
		$sql= "UPDATE doctor_details SET d_email='$d_email' WHERE doctor_id='$id' ";
		$result=mysqli_query($conn,$sql);
	}
	if($_POST['Daddress']!=$_POST['NewAddress']){
		$sql= "UPDATE doctor_details SET d_address='$d_address' WHERE doctor_id='$id' ";
		$result=mysqli_query($conn,$sql);
	} 
	if($file){
		$img_upload_path='assets/img/'.$file;
		move_uploaded_file($_FILES['NewImg']['tmp_name'], $img_upload_path);
		$sql= "UPDATE doctor_details SET d_img='$file' WHERE doctor_id='$id' ";
		$result=mysqli_query($conn,$sql);
	}else{
			$sql= "UPDATE doctor_details SET d_img='$d_img_old' WHERE doctor_id='$id' ";
			$result=mysqli_query($conn,$sql);
	}
	header('Location:admin-register-doctor.php');	
}
elseif(isset($_POST['closeNow'])){
   header('Location:admin-register-doctor.php');
}
else{
	   echo "error".mysqli_error($conn);
   }

mysqli_close($conn);
?>