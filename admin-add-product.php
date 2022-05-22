<?php 
$conn=mysqli_connect('localhost','root','','dms');

// Add Code

if(isset($_POST['add-product'])){
	$p_name=mysqli_real_escape_string($conn,$_POST['p_name']);
	$p_price=mysqli_real_escape_string($conn,$_POST['p_price']);
	$p_type=mysqli_real_escape_string($conn,$_POST['p_type']);
	$p_qty=mysqli_real_escape_string($conn,$_POST['p_qty']);
	$p_file=$_FILES['p_img']['name'];
	$sql= "INSERT INTO products (pro_name,pro_price,pro_type,pro_qty,pro_img) VALUES('$p_name','$p_price','$p_type','$p_qty','$p_file')";
	if(mysqli_query($conn,$sql)){
        $img_upload_path='assets/img/'.$p_file;
		move_uploaded_file($_FILES['p_img']['tmp_name'], $img_upload_path);
		header('Location:admin-products.php');
	}else{
		echo "THERE WAS AN ERROR";
	}
}else{
	header('Location:admin-products.php');
}

// Delete Code

if(isset($_GET['p_id'])){
	$id=mysqli_real_escape_string($conn,$_GET['p_id']);
	$sql= "DELETE FROM products WHERE product_id='$id' ";
	$result=mysqli_query($conn,$sql);
	if($result){
		sleep(2);
		header('Location:admin-products.php');
	}else{
		echo "THERE WAS AN ERROR".mysqli_error($conn);
	}
}else{
	echo mysqli_error($conn);
}

// Edit Code

if(isset($_POST['editNow'])){
	$pro_name=mysqli_real_escape_string($conn,$_POST['NewName']);
	$pro_price=mysqli_real_escape_string($conn,$_POST['NewPrice']);
	$pro_img_old=mysqli_real_escape_string($conn,$_POST['Pimg']);
	$pro_qty=mysqli_real_escape_string($conn,$_POST['NewQty']);
	$pro_type=mysqli_real_escape_string($conn,$_POST['NewType']);
	$pro_status=mysqli_real_escape_string($conn,$_POST['NewStatus']);
	$id=mysqli_real_escape_string($conn,$_POST['p_id']);


	$file=$_FILES['NewImg']['name'];


	if($_POST['Pprice']!=$_POST['NewPrice']){
		$sql= "UPDATE products SET pro_price='$pro_price' WHERE product_id='$id' ";
		$result=mysqli_query($conn,$sql);
	}
	if($_POST['Pname']!=$_POST['NewName']){
		$sql= "UPDATE products SET pro_name='$pro_name' WHERE product_id='$id' ";
		$result=mysqli_query($conn,$sql);
	}
	if($_POST['Pqty']!=$_POST['NewQty']){
		$sql= "UPDATE products SET pro_qty='$pro_qty' WHERE product_id='$id' ";
		$result=mysqli_query($conn,$sql);
	}
	if($_POST['Ptype']!=$_POST['NewType']){
		$sql= "UPDATE products SET pro_type='$pro_type' WHERE product_id='$id' ";
		$result=mysqli_query($conn,$sql);
	}
	if($_POST['Pstatus']!=$_POST['NewStatus']){
			$sql= "UPDATE products SET pro_status='$pro_status' WHERE product_id='$id' ";
			$result=mysqli_query($conn,$sql);
	} 
	if($file){
		$img_upload_path='assets/img/'.$file;
		move_uploaded_file($_FILES['NewImg']['tmp_name'], $img_upload_path);
		// $id=mysqli_real_escape_string($conn,$_POST['p_id']);
		$sql= "UPDATE products SET pro_img='$file' WHERE product_id='$id' ";
		$result=mysqli_query($conn,$sql);
	}else{
			$sql= "UPDATE products SET pro_img='$pro_img_old' WHERE product_id='$id' ";
			$result=mysqli_query($conn,$sql);
	}
	header('Location:admin-products.php');	
}
elseif(isset($_POST['closeNow'])){
   header('Location:admin-products.php');
}
else{
	   echo "error".mysqli_error($conn);
   }


mysqli_close($conn);

?>