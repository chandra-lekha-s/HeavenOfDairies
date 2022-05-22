<?php 

// connect to db
$conn=mysqli_connect('localhost','root','','dms');
$sql= "SELECT * FROM products ";
$result=mysqli_query($conn,$sql);
$outputs=mysqli_fetch_all($result,MYSQLI_ASSOC);
mysqli_free_result($result);
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head><title>Products</title>
  
  <?php include ('admin-links.php'); ?> 
</head>

<body>

  
  <?php include ('admin-header.php'); ?> 

  <main id="main" class="main">

<div class="pagetitle">
  <h1>Products</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.php">Home</a></li>
      <li class="breadcrumb-item active">products</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

    
      </div>

    </div><!-- End Left side columns -->

  <section>
    <section class="section">
      <div class="row">
        <div class="col-lg-12">
        
            <!-- TABLE STARTS FROM HERE -->
        
            <div class="card">
                <div class="card-body">
                  <h5 class="card-title" style="display:none;">OUR PRODUCTS</h5>         
                  <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#addProduct" >Add</button>
              <br><br>
              <br>
                

            <?php foreach ($outputs as $output): ?>
                <div class="small-cards">
                  <img src="assets/img/<?php echo htmlspecialchars($output['pro_img']); ?>">
                  <p><?php echo htmlspecialchars($output['pro_name']); ?> ( <?php echo htmlspecialchars($output['pro_type']); ?> )</p>
                  <p>&#8377; <?php echo htmlspecialchars($output['pro_price']); ?> / <?php echo htmlspecialchars($output['pro_qty']); ?></p>
                  <p><?php echo htmlspecialchars($output['pro_status']); ?></p>
                  <a href="admin-edit-product.php?p_id=<?php echo htmlspecialchars($output['product_id']) ?>"><button name="edit-product" >Edit</button> </a>
                  <a href="admin-add-product.php?p_id=<?php echo htmlspecialchars($output['product_id']) ?>" ><button  data-bs-toggle="modal" data-bs-target="#deleteProduct">Remove</button></a>
						    </div>
            <?php endforeach ?>
                 
        </div>
    </div>

                  <!-- Vertically centered Modal --> 
      <div class="modal fade" id="addProduct" tabindex="-1" > 
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">New Product's details</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                      <form method="POST" action="admin-add-product.php" enctype="multipart/form-data" class="add_form" name="addProductForm" onsubmit="return validateAddProduct()">
                          
                          <input type="text" name="p_name" placeholder="Product name"><br>
                          <span name="constraint">Invalid name</span><br>
                          <input type="number" step="0.01" name="p_price" placeholder="Product price"><br>
                          <span name="constraint">Invalid price</span><br>
                          <input type="text" name="p_qty" placeholder="Product Quantity"><br>
                          <span name="constraint">Invalid product quantity</span><br>
                          
                          <select name="p_type" placeholder="Product type"  required>
								            <option style="background-color: grey;color:white;"  value="" disabled selected >Product type</option>
								            <option value="Milk">Milk</option>
								            <option value="Curd">Curd</option>
                            <option value="Paneer">Paneer</option>
								            <option value="Cheese">Cheese</option>
								            <option value="Butter">Butter</option>
                          <br><span name="constraint">Invalid product type</span><br><br>
                          <!-- <input type="text" name="p_type" placeholder="Product type"><br>
                          <span name="constraint">Invalid product type</span><br> -->
                          
                          <label>Upload product image : </label><br>
                           <input type="file" name="p_img" placeholder="Product Image" required style="margin-top:20px"><br>
                          <span name="constraint">Invalid product image</span><br> 
                          

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" name="add-product">Add</button>
                        </div>
                      </form>

                    </div>
                    
                  </div>
                </div>
              </div><!-- End Vertically centered Modal-->

              <!-- Vertically centered Modal -->
          
              <div class="modal fade" id="deleteProduct" tabindex="-1" >
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        <p>Kindly wait until the product is deleted</p>                 
                    </div>

                    <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    
                    
                  </div>
                </div>
              </div><!-- End Vertically centered Modal-->


            </section>
          </div>
        </div> 
    </section>

  </main><!-- End #main -->

    

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

  <script>

    let validateAddProduct =()=>{
      let span=document.getElementsByName("constraint");
      let p_name = document.forms.addProductForm.p_name.value.trim();
      let p_price = document.forms.addProductForm.p_price.value.trim();
      let p_type = document.forms.addProductForm.p_type.value.trim();
      let p_qty = document.forms.addProductForm.p_qty.value.trim();

      let invalid=0;
      
      if (p_name == "") {
          span[0].style.display="inline";invalid++;
      }else{
        span[0].style.display="none";
      }
      if (p_price == "") {
          span[1].style.display="inline";invalid++;
      }else{
        span[1].style.display="none";
      }
      if (p_type == "") {
          span[2].style.display="inline";invalid++;
      }else{
        span[2].style.display="none";
      }
      if (p_qty == "" ) {
          span[3].style.display="inline";invalid++;
      }else{
        span[3].style.display="none";
      }

      if(invalid==0)
        return true;
      else
        return false;
      
    }
  </script>

</body>

</html>