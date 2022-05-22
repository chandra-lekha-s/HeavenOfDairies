<?php 

// connect to db
$conn=mysqli_connect('localhost','root','','dms');
$sql= "SELECT * FROM cattle_details ";
$result=mysqli_query($conn,$sql);
$outputs=mysqli_fetch_all($result,MYSQLI_ASSOC);
mysqli_free_result($result);
mysqli_close($conn);

$c_id = array();
foreach($outputs as $output):
    array_push($c_id,$output['cattle_id']);
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
      <h1>Cattle Daily activity</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Cattle daily activity</li>
          <li class="breadcrumb-item active">Enter data</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

        


          </div>

        </div><!-- End Left side columns -->

    <section>
        
            <!-- TABLE STARTS FROM HERE -->
        
            <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Cattle daily activity</h5><br><br><br><br>
    
                  <form class="row g-3" method="POST" action="admin-add-enter.php" >

                        <div class="row mb-3">
                          <label for="inputDate" class="col-sm-2 col-form-label">Date</label>
                          <div class="col-sm-10">
                            <input type="date" name="entry_date" class="form-control" required>
                          </div>
                        </div>

                      <div class="col-md-6">
                        <label class="form-label">Cattle ID</label>
                      </div>

                      <div class="col-md-6">
                        <label class="form-label">Milk quantity produced</label>
                      </div>

                      <!-- ADD FOR EACH LOOP -->

                      <?php foreach( $c_id as $id) : ?>
                      <div class="col-md-6">
                        <input type="number" class="form-control" name="cattle_id[]"  value="<?php echo ($id) ?>" readonly>
                      </div>
                      <div class="col-md-6">
                        <input type="number" step="0.01" class="form-control" name="milk_qty[]" required >
                      </div>
                      <?php endforeach ?>
                      
                                          
                      <div class="text-center">
                        <button type="submit" class="btn btn-primary" name="add-activity" >Submit</button>
                        <button type="reset" class="btn btn-secondary" >Reset</button>
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

</body>
</html>