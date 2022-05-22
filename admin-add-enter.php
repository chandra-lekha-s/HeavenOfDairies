<?php 
$conn=mysqli_connect('localhost','root','','dms');

if(isset($_POST['add-activity'])){

	$today=mysqli_real_escape_string($conn,$_POST['entry_date']);
    $cattle_id=$_POST['cattle_id'];
    $milk_qty=$_POST['milk_qty'];


    for ($x = 0; $x < count($cattle_id); $x++) {
        echo "<script>console.log('Debug id: " . $cattle_id[$x] . " milk " . $milk_qty[$x] . "' );</script>";
        $id=$cattle_id[$x];
        $qty=$milk_qty[$x];
        echo ($id);
        echo " ";
        echo ($qty);
        $sql= "INSERT INTO cattle_daily_activity (date_of_record,cattle_id,milk_produced) VALUES('$today','$id','$qty')";
        (mysqli_query($conn,$sql));  
      }

    header('Location:admin-activity-view.php');
    // foreach($cattle_id as $id):
	// $sql= "INSERT INTO cattle_details (date_of_record,cattle_id,milk_produced) VALUES('$today','$c_doa','$c_breed','$c_seller_id')";
    // mysqli_query($conn,$sql);

	// if(mysqli_query($conn,$sql)){
	// 	header('Location:admin-activity-view.php');
	// }else{
	// 	echo "THERE WAS AN ERROR";
	// }
}else{
	header('Location:admin-activity-entry.php');
}



// $cattle_id=array(mysqli_real_escape_string($conn,$_POST['cattle_id']));
	// $milk_qty=mysqli_real_escape_string($conn,$_POST['milk_qty']);

    // echo "<script>console.log('Debug Objects: " . $today . "' );</script>";

    // foreach($cattle_id as $id):
    // echo "<script>console.log('Debug Objects: " . $id . "' );</script>";
	// endforeach;

    // foreach($milk_qty as $qty):
    //     echo "<script>console.log('Debug Objects: " . $qty . "' );</script>";
    // endforeach;

    // $multia=array(
    //     array($cattle_id),
    //     array($milk_qty)
    // );

    // echo "<script>console.log('Debug Objects: " . $multia[0][0] . "' );</script>";
    // foreach($multia as $mul):
    //     foreach($mul as $m):
    //     echo "<script>console.log('Debug Objects: " $m "' );</script>";
    // endforeach;
    // endforeach;

    // $str=implode(',', $cattle_id);
    // echo "<script>console.log('Debug str: " . $str . "' );</script>";

    ?>