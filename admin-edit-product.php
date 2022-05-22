<?php 

// connect to db


$conn=mysqli_connect('localhost','root','','dms');

if(isset($_GET['p_id'])){
	$id=mysqli_real_escape_string($conn,$_GET['p_id']);
	$sql= "SELECT * FROM products WHERE product_id='$id' ";
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
                        <h5 class="card-title" >EDIT PRODUCT</h5>        
                        
                        <div style="margin-top:100px;">
                            <form  class="editForm" method="POST" action="admin-add-product.php" enctype="multipart/form-data">
                                <input type="hidden" name="p_id" value=" <?php echo htmlspecialchars($outputs['product_id']) ?>">
                                <input type="hidden" name="Pname" value=" <?php echo htmlspecialchars($outputs['pro_name']) ?>">
                                <input type="hidden" name="Pprice" value=" <?php echo htmlspecialchars($outputs['pro_price']) ?>">
                                <input type="hidden" name="Pqty" value="<?php echo htmlspecialchars($outputs['pro_qty']) ?>">
                                <input type="hidden" name="Ptype" value="<?php echo htmlspecialchars($outputs['pro_type']) ?>">
                                <input type="hidden" name="Pimg" value="<?php echo htmlspecialchars($outputs['pro_img']) ?>">
                                <input type="hidden" name="Pstatus" value="<?php echo htmlspecialchars($outputs['pro_status']) ?>">

                                <table>
                                    <tr>
                                        <th ><label>Product name : </label>
                                        </th>
                                        <td><input type="text" name="NewName" value="<?php echo htmlspecialchars($outputs['pro_name']) ?> ">
                                        </td>
                                        <th rowspan="6"><img src="assets/img/<?php echo htmlspecialchars($outputs['pro_img']) ?>" width=400 >
                                        </th>
                                    </tr>
                                    <tr>
                                        <th><label>Product type : </label>
                                        </th>
                                        <td><select name="NewType"  required>
								            <option style="background-color: grey;" selected value="<?php echo htmlspecialchars($outputs['pro_type']) ?>"><p style="color:grey">Previously Selected <?php echo htmlspecialchars($outputs['pro_type']) ?></p></option>
								            <option value="Milk">Milk</option>
								            <option value="Curd">Curd</option>
                                            <option value="Paneer">Paneer</option>
								            <option value="Cheese">Cheese</option>
								            <option value="Butter">Butter</option>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><label>Product price : </label>
                                        </th>
                                        <td><input type="text" name="NewPrice" value="<?php echo htmlspecialchars($outputs['pro_price']) ?> ">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><label>Product quantity : </label>
                                        </th>
                                        <td><input type="text" name="NewQty" value="<?php echo htmlspecialchars($outputs['pro_qty']) ?> ">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><label>Product status : </label>
                                        </th>
                                        <td>
                                        <select name="NewStatus"  required>
								            <option style="background-color: grey;" selected value="<?php echo htmlspecialchars($outputs['pro_status']) ?>"><p style="color:grey">Previously Selected <?php echo htmlspecialchars($outputs['pro_status']) ?></p></option>
								            <option value="Available">Available</option>
								            <option value="Unavailable">Unavailable</option>
							            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><label >Upload new image (Optional):</label></th>
                                        <td><input type="file" name="NewImg" value="<?php echo htmlspecialchars($outputs['pro_img'])?>" ></td>
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