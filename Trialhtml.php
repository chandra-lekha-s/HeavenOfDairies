<?php 

// connect to db
$conn=mysqli_connect('localhost','root','','dms');
$sql= "SELECT * FROM seller_details ";
$result=mysqli_query($conn,$sql);
$outputs=mysqli_fetch_all($result,MYSQLI_ASSOC);
mysqli_free_result($result);
mysqli_close($conn);
// print_r($outputs);

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Desserts</title>
	<!-- <link rel="stylesheet" type="text/css" href="default.css?v=</?php echo time();?>"> -->
	<!-- <link rel="stylesheet" type="text/css" href="dessertscss.css?v=</?php echo time();?>"> -->
	<!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cambay"> -->
</head>
<body>
	
			
	<section >
		<p >Desserts</p>
		<?php foreach ($outputs as $output) :  ?>
					<div>
						<p> <?php echo htmlspecialchars($output['seller_id']); ?> </p>
						<p><?php echo htmlspecialchars($output['seller_name']);?></p>
						<p><?php echo  htmlspecialchars($output['seller_contact']) ; ?></p>
						<p> <?php echo htmlspecialchars($output['seller_address']);?></p>
						<p><?php echo  htmlspecialchars($output['seller_email']) ; ?></p>
					</div>
		<?php endforeach; ?>
	</section>


	
 
</body>
</html>