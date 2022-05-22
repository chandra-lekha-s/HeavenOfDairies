<?php 

// connect to db


$conn=mysqli_connect('localhost','root','','dms');

if(isset($_GET['d_id'])){
	$id=mysqli_real_escape_string($conn,$_GET['d_id']);
	$sql= "SELECT * FROM doctor_details WHERE doctor_id='$id' ";
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
                        <h5 class="card-title" >EDIT DOCTOR DETAILS</h5>        
                        
                        <div style="margin-top:100px;">
                            <form  class="editForm" method="POST" action="admin-add-doctor.php" enctype="multipart/form-data">
                                <input type="hidden" name="d_id" value=" <?php echo htmlspecialchars($outputs['doctor_id']) ?>">
                                <input type="hidden" name="Dname" value=" <?php echo htmlspecialchars($outputs['d_name']) ?>">
                                <input type="hidden" name="Dcontact" value=" <?php echo htmlspecialchars($outputs['d_contact']) ?>">
                                <input type="hidden" name="Demail" value="<?php echo htmlspecialchars($outputs['d_email']) ?>">
                                <input type="hidden" name="Daddress" value="<?php echo htmlspecialchars($outputs['d_address']) ?>">
                                <input type="hidden" name="Dimg" value="<?php echo htmlspecialchars($outputs['d_img']) ?>">

                                <table>
                                    <tr>
                                        <th ><label>Name : </label>
                                        </th>
                                        <td><input type="text" name="NewName" value="<?php echo htmlspecialchars($outputs['d_name']) ?> ">
                                        </td>
                                        <th rowspan="5"><img src="assets/img/<?php echo htmlspecialchars($outputs['d_img']) ?>" width=400 >
                                        </th>
                                    </tr>
                                    <tr>
                                        <th><label>Contact number : </label>
                                        </th>
                                        <td><input type="text" name="NewContact" value="<?php echo htmlspecialchars($outputs['d_contact']) ?> ">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><label>Email : </label>
                                        </th>
                                        <td><input type="text" name="NewEmail" value="<?php echo htmlspecialchars($outputs['d_email']) ?> ">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><label>Address : </label>
                                        </th>
                                        <td><input type="text" name="NewAddress" value="<?php echo htmlspecialchars($outputs['d_address']) ?> ">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><label >Upload new image (Optional):</label></th>
                                        <td><input type="file" name="NewImage" value="<?php echo htmlspecialchars($outputs['d_img'])?>" ></td>
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