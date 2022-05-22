<?php 

// connect to db
$conn=mysqli_connect('localhost','root','','dms');
$sql= "SELECT * FROM vaccine_monitoring ";
$result=mysqli_query($conn,$sql);
$outputs=mysqli_fetch_all($result,MYSQLI_ASSOC);
mysqli_free_result($result);
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
<title>Vaccine monitor</title>
<?php include ('admin-links.php'); ?> 
</head>

<body>

  
<?php include ('admin-header.php'); ?> 


  <!-- *****************************       A C T U A L    C O N T E N T      ************************* -->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Vaccine monitoring</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Views</li>
          <li class="breadcrumb-item active">Vaccine monitoring</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

        
          </div>

        </div><!-- End Left side columns -->

    <section>
        
            <!-- TABLE STARTS FROM HERE -->
        
            <div class="card">
                <div class="card-body">
                  <h5 class="card-title"> CATTLE VACCINE MONITORING</h5>
    
                  <!-- Table with hoverable rows -->
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Vaccine ID</th>
                        <th scope="col">Cattle ID</th>
                        <th scope="col">Dose 1</th>
                        <th scope="col">Dose 2</th>
                        <th scope="col">Vaccine Status</th>
                        <th scope="col">Doctor ID</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($outputs as $output) :  ?>
                        <tr>
                            <th scope="row"><?php echo htmlspecialchars($output['vm_id']); ?></th>
                            <td><?php echo htmlspecialchars($output['vaccine_id']); ?></td>
                            <td><?php echo htmlspecialchars($output['cattle_id']); ?></td>
                            <td><?php echo htmlspecialchars($output['dose1_date']); ?></td>
                            <td><?php echo htmlspecialchars($output['dose2_date']); ?></td>
                            <td><?php echo htmlspecialchars($output['vaccine_status']); ?></td>
                            <td><?php echo htmlspecialchars($output['doctor_id']); ?></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                  </table>
                  <!-- End Table with hoverable rows -->
    
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