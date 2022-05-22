<?php
$conn=mysqli_connect('localhost','root','','dms');

// $sql= "SELECT * FROM products ";
// $result=mysqli_query($conn,$sql);
// $outputs=mysqli_fetch_all($result,MYSQLI_ASSOC);

if(isset($_POST['updatestock'])){

$p_id=$_POST['product_id'];
$p_stock=$_POST['pro_stocks'];


for ($x = 0; $x < count($p_id); $x++) {
    echo "<script>console.log('Debug id: " . $p_id[$x] . " milk " . $p_stock[$x] . "' );</script>";
    $id=$p_id[$x];
    $stock=$p_stock[$x];
    echo ($id);
    echo " ";
    echo ($stock);
    $sql= "UPDATE products SET pro_stocks='$stock' WHERE product_id='$id' ";
	$result=mysqli_query($conn,$sql);
	
    // $sql= "INSERT INTO products (date_of_record,cattle_id,milk_produced) VALUES('$today','$id','$qty')";
    // (mysqli_query($conn,$sql));  
  }

header('Location:admin-stocks.php');
}else{
header('Location:admin-stocks.php');
}

?>