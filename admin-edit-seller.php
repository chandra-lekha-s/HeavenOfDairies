<?php 

// connect to db

$conn=mysqli_connect('localhost','root','','dms');
// $sql= "SELECT * FROM seller_details ";

if(isset($_GET['s_id'])){
	$id=mysqli_real_escape_string($conn,$_GET['s_id']);
	$sql= "SELECT * FROM seller_details WHERE seller_id='$id' ";
	$result=mysqli_query($conn,$sql);
	$outputs=mysqli_fetch_assoc($result);
}
mysqli_free_result($result);
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
<title>seller-edit</title>
  
  <?php include ('admin-links.php'); ?> 
</head>

<body>

  
  <?php include ('admin-header.php'); ?>  

  <!-- *****************************       A C T U A L    C O N T E N T      ************************* -->

  <main id="main" class="main">

    <section>
        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                
                    <!-- TABLE STARTS FROM HERE -->
                
                    <div class="card">
                        <div class="card-body">
                        <h5 class="card-title" >EDIT SELLER DETAILS</h5>        
                        
                        <div style="margin-top:100px;">
                            <form  class="editForm" method="POST" action="admin-add-seller.php" enctype="multipart/form-data">
                                <input type="hidden" name="s_id" value=" <?php echo htmlspecialchars($outputs['seller_id']) ?>">
                                <input type="hidden" name="Sname" value=" <?php echo htmlspecialchars($outputs['seller_name']) ?>">
                                <input type="hidden" name="Scontact" value=" <?php echo htmlspecialchars($outputs['seller_contact']) ?>">
                                <input type="hidden" name="Semail" value="<?php echo htmlspecialchars($outputs['seller_email']) ?>">
                                <input type="hidden" name="Saddress" value="<?php echo htmlspecialchars($outputs['seller_address']) ?>">
                              
                                <table>
                                    <tr>
                                        <th ><label>Name : </label>
                                        </th>
                                        <td><input type="text" name="NewName" value="<?php echo htmlspecialchars($outputs['seller_name']) ?> ">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><label>Contact number : </label>
                                        </th>
                                        <td><input type="text" name="NewContact" value="<?php echo htmlspecialchars($outputs['seller_contact']) ?> ">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><label>Email ID : </label>
                                        </th>
                                        <td><input type="text" name="NewEmail" value="<?php echo htmlspecialchars($outputs['seller_email']) ?> ">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><label>Address : </label>
                                        </th>
                                        <td><input type="text" name="NewAddress" value="<?php echo htmlspecialchars($outputs['seller_address']) ?> ">
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