<?php 

// connect to db

$conn=mysqli_connect('localhost','root','','dms');
// $sql= "SELECT * FROM seller_details ";

if(isset($_GET['c_id'])){
	$id=mysqli_real_escape_string($conn,$_GET['c_id']);
	$sql= "SELECT * FROM cattle_details WHERE cattle_id='$id' ";

    $sql1="SELECT seller_id from seller_details";
    $result1=mysqli_query($conn,$sql1);
	$outputs1=mysqli_fetch_array($result1);

	$result=mysqli_query($conn,$sql);
	$outputs=mysqli_fetch_assoc($result);
}
mysqli_free_result($result1);
mysqli_free_result($result);
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
<title>Cattle-edit</title>
  
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
                        <h5 class="card-title" >EDIT CATTLE DETAILS</h5>        
                        
                        <div style="margin-top:100px;">
                            <form  class="editForm" method="POST" action="admin-add-cattle.php" enctype="multipart/form-data">
                                <input type="hidden" name="c_id" value=" <?php echo htmlspecialchars($outputs['cattle_id']) ?>">
                                <input type="hidden" name="Cdob" value=" <?php echo htmlspecialchars($outputs['c_dob']) ?>">
                                <input type="hidden" name="Cdoa" value=" <?php echo htmlspecialchars($outputs['c_doa']) ?>">
                                <input type="hidden" name="SellerId" value="<?php echo htmlspecialchars($outputs['seller_id']) ?>">
                                <input type="hidden" name="Cbreed" value="<?php echo htmlspecialchars($outputs['c_breed']) ?>">
                              
                                <table>
                                    <tr>
                                        <th ><label>Date of birth : </label>
                                        </th>
                                        <td><input type="text" name="NewDob" value="<?php echo htmlspecialchars($outputs['c_dob']) ?> ">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><label>Date of adoption : </label>
                                        </th>
                                        <td><input type="text" name="NewDoa" value="<?php echo htmlspecialchars($outputs['c_doa']) ?> ">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><label>Seller ID : </label>
                                        </th>
                                        <td><input type="text" name="NewSellerId" value="<?php echo htmlspecialchars($outputs['seller_id']) ?> ">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><label>Breed : </label>
                                        </th>
                                        <td><input type="text" name="NewBreed" value="<?php echo htmlspecialchars($outputs['c_breed']) ?> ">
                                        </td>
                                    </tr>
                                    
                                </table>
                                <br><br>
                                <div style="margin-left:25%;" >
				                    <button name="closeNow" >CANCEL</button>
                                    <button type="submit" name="editNow" >APPLY</button>
                                </div>
                            </form>
                        <p> 
                        
                        <?php foreach($outputs1 as $out): 
                        echo htmlspecialchars($out);
                        echo " ";
                        endforeach;
                        ?>

                        </p>

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