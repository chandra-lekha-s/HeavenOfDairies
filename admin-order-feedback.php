<?php 

// connect to db
$conn=mysqli_connect('localhost','root','','dms');

// Delete code

if(isset($_GET['fs_id'])){
	$id=mysqli_real_escape_string($conn,$_GET['fs_id']);
	$sql= "DELETE FROM feedback_support WHERE fs_id='$id' ";
	$result=mysqli_query($conn,$sql);
	if($result){
		sleep(2);
		header('Location:admin-order-feedback.php');
	}else{
		echo "THERE WAS AN ERROR".mysqli_error($conn);
	}
}else{
	echo mysqli_error($conn);
}

$sql= "SELECT * FROM feedback_support WHERE fs_type='feedback' ";
$result=mysqli_query($conn,$sql);
$outputs=mysqli_fetch_all($result,MYSQLI_ASSOC);
mysqli_free_result($result);
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
<title>Feedbacks</title>
  
  <?php include ('admin-links.php'); ?> 
</head>

<body>

  
  <?php include ('admin-header.php'); ?> 




  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Feedbacks</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Order management</li>
          <li class="breadcrumb-item active">Feedbacks</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

        


          </div>

        </div><!-- End Left side columns -->

    <section>
        
            <!-- TABLE STARTS FROM HERE -->
        
            <div class="card">
                <div class="card-body">
                  <h5 class="card-title">FEEDBACKS</h5>
    
                  <!-- Table with hoverable rows -->
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Customer ID</th>
                        <!-- <th scope="col">Customer email</th> -->
                        <th scope="col">Date</th>
                        <th scope="col">Feedback</th>
                        <th scope="col">Product</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                                            
                    <?php foreach ($outputs as $output) :  ?>
                        <tr>
                            <th scope="row"><?php echo htmlspecialchars($output['fs_id']); ?></th>
                            <td><?php echo htmlspecialchars($output['customer_id']); ?></td>
                            <td><?php echo htmlspecialchars($output['date_of_fs']); ?></td>
                            <td><?php echo htmlspecialchars($output['fs_description']); ?></td>
                            <td><?php echo htmlspecialchars($output['pro_name']); ?></td>
                            <td>
                            <a href="admin-order-feedback.php?fs_id=<?php echo htmlspecialchars($output['fs_id']) ?>"><i class="ri-delete-bin-5-fill" style="color: red;" data-bs-toggle="modal" data-bs-target="#deleteFeedback"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>

                    </tbody>
                  </table>
                  <!-- End Table with hoverable rows -->

                  <!-- Vertically centered Modal -->
          
              <div class="modal fade" id="deleteFeedback" tabindex="-1" >
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Kindly wait until the feedback is deleted</p>                 
                    </div>
                    <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                  </div>
                </div>
              </div><!-- End Vertically centered Modal-->

    
                </div>
              </div>
    </section>

    

  </main><!-- End #main -->





  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>