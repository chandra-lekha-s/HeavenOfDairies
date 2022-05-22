<?php 

// connect to db
$conn=mysqli_connect('localhost','root','','dms');
$sql= "SELECT * FROM cattle_daily_activity ORDER BY date_of_record DESC ";
$result=mysqli_query($conn,$sql);
$outputs=mysqli_fetch_all($result,MYSQLI_ASSOC);
mysqli_free_result($result);
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
<title>Activity</title>
  
  <?php include ('admin-links.php'); ?> 
</head>

<body>

  
  <?php include ('admin-header.php'); ?>  


  <!-- *****************************       A C T U A L    C O N T E N T      ************************* -->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Cattle daily activity</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Cattle daily activity</li>
          <li class="breadcrumb-item active">view</li>
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
                  <h5 class="card-title"> Cattle daily activity</h5>
                    <br><br><br>
                  <!-- Table with hoverable rows -->
                  <table class="table datatable">
                    <thead>
                      <tr>
                        <td scope="col"><b>Date</b></td>
                        <td scope="col"><b>Cattle ID</b></td>
                        <td scope="col"><b>Milk produced</b></td>
                      </tr>
                    </thead>
                    <tbody>

                      <?php foreach ($outputs as $output) :  ?>
                        <tr>
                            <td scope="row"><?php echo htmlspecialchars($output['date_of_record']); ?></td>
                            <td><?php echo htmlspecialchars($output['cattle_id']); ?></td>
                            <td><?php echo htmlspecialchars($output['milk_produced']); ?> ltr</td>
                        </tr>
                    <?php endforeach; ?>

                    </tbody>
                  </table>
                  <!-- End Table with hoverable rows -->
    
                </div>
              </div>
            </section>
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