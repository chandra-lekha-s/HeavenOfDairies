<?php 

// connect to db
$conn=mysqli_connect('localhost','root','','dms');
$sql= "SELECT * FROM products ";
$result=mysqli_query($conn,$sql);
$outputs=mysqli_fetch_all($result,MYSQLI_ASSOC);
mysqli_free_result($result);
mysqli_close($conn);

$p_id = array();
$p_name = array();
$p_stock = array();
foreach($outputs as $output):
    array_push($p_id,$output['product_id']);
    array_push($p_name,$output['pro_name']);
    array_push($p_stock,$output['pro_stocks']);
endforeach; 
           
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Activity</title>  
  <?php include ('admin-links.php'); ?> 
</head>

<body>
  
  <?php include ('admin-header.php'); ?> 


  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Product Stocks</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Stocks</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->


    <section>
        
            <!-- TABLE STARTS FROM HERE -->
        
            <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Product Stocks</h5>
                  <button type="button" class="btn btn-outline-success" onclick=enableUpdate(); >Update stocks</button>
              <br><br><br>

                  <form class="row g-3" method="POST" action="admin-add-stocks.php" name="updateStock" >
                    <div>
                    
                    <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Product ID</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Stock</th>
                  </tr>
                </thead>
                <tbody>
                <?php for ($i = 0; $i < count($p_id); $i++) {?>
                  <tr>
                    <th scope="row"><input type="number" class="form-control" name="product_id[]"  value="<?php echo ($p_id[$i]) ?>" readOnly></th>
                    <td><input type="text" class="form-control"  value="<?php echo ($p_name[$i]) ?>" readOnly></td>
                    <td><input type="number" step="0.01" class="form-control " id="pro<?php echo $i?>" name="pro_stocks[]" value="<?php echo ($p_stock[$i]) ?>" required  readOnly ></td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
              <!-- End Default Table Example -->

                      <!-- ADD FOR EACH LOOP -->

                      
                    <!-- <?php for ($i = 0; $i < count($p_id); $i++) {?>
                      <div class="col-md-6">
                        <input type="number" class="form-control" name="product_id[]"  value="<?php echo ($p_id[$i]) ?>" readonly>
                      </div>
                      <div class="col-md-6">
                        <input type="text" class="form-control"  value="<?php echo ($p_name[$i]) ?>" readonly>
                      </div>
                      <div class="col-md-6">
                        <input type="number" step="0.01" class="form-control" name="pro_stocks[]" value="<?php echo ($p_stock[$i]) ?>" required readOnly >
                      </div><br>
                      <?php } ?> -->
                      
                                          
                      <div class="text-center">
                        <button type="submit" class="btn btn-primary" name="updatestock" disabled>Update</button>
                        <button type="reset" class="btn btn-secondary "  name="reset" disabled>Reset</button>
                      </div> 
                  </form><!-- End Multi Columns Form -->
    
                  
    
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

  <script>
    let enableUpdate =()=>{
   let btn1 = document.forms.updateStock.updatestock;
   let btn2 = document.forms.updateStock.reset;
   let stock = document.getElementById("pro0");
   btn1.disabled = false;
   btn2.disabled = false;
   stock.readOnly=true;
   console.log(stock.readOnly);
   <?php for ($i = 0; $i < count($p_id); $i++) { ?>
        document.getElementById("pro<?php echo $i?>").readOnly=false;
   <?php } ?>
  
  }
  </script>

</body>
</html>