<?php 

// connect to db


$conn=mysqli_connect('localhost','root','','dms');
// $sql= "SELECT * FROM products ";

if(isset($_GET['p_id'])){
	$id=mysqli_real_escape_string($conn,$_GET['p_id']);
	$sql= "SELECT * FROM plans WHERE plan_id='$id' ";
	$result=mysqli_query($conn,$sql);
	$outputs=mysqli_fetch_assoc($result);
}
mysqli_free_result($result);
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
<title>Plans</title>
  
  <?php include ('admin-links.php'); ?> 
</head>

<body>

  
  <?php include ('admin-header.php'); ?>  

  <!-- *****************************       A C T U A L    C O N T E N T      ************************* -->

  <main id="main" class="main">

    

        
          </div>

        </div><!-- End Left side columns -->

    <section>
        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                
                    <!-- TABLE STARTS FROM HERE -->
                
                    <div class="card">
                        <div class="card-body">
                        <h5 class="card-title" >EDIT PLAN</h5>   
                        
                        <div style="margin-top:100px;">
                            <form  class="editForm" method="POST" action="admin-add-plan.php" enctype="multipart/form-data">
                                <input type="hidden" name="p_id" value=" <?php echo htmlspecialchars($outputs['plan_id']) ?>">
                                <input type="hidden" name="p_duration" value=" <?php echo htmlspecialchars($outputs['plan_duration']) ?>">
                                <input type="hidden" name="p_discount" value=" <?php echo htmlspecialchars($outputs['plan_discount']) ?>">
                                <input type="hidden" name="p_days" value="<?php echo htmlspecialchars($outputs['plan_days']) ?>">

                                <table>
                                    <tr>
                                        <th ><label>Plan type : </label>
                                        </th>
                                        <td><input type="text" name="NewDuration" value="<?php echo htmlspecialchars($outputs['plan_duration']) ?> ">
                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <th><label>Discount : </label>
                                        </th>
                                        <td><input type="text" name="NewDiscount" value="<?php echo htmlspecialchars($outputs['plan_discount']) ?> ">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><label>Duration : </label>
                                        </th>
                                        <td><input type="text" name="NewDays" value="<?php echo htmlspecialchars($outputs['plan_days']) ?> ">
                                        </td>
                                    </tr>
                                    
                                </table>
                                <br><br>
                                <div style="margin-left:25%;" >
				                    <button name="closeNow" >CANCEL</button>
                                    <button type="submit" name="editNow" >APPLY</button>
                                </div>
                            </form>

                        </div>

                        </div>
                    </div>  
            
                    
                </div>
            </div> 
        </section>
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