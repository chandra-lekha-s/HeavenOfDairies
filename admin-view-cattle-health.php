<?php 

// connect to db
$conn=mysqli_connect('localhost','root','','dms');
$sql= "SELECT * FROM cattle_health_history ";
$result=mysqli_query($conn,$sql);
$outputs=mysqli_fetch_all($result,MYSQLI_ASSOC);
mysqli_free_result($result);
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Cattle health</title>
  
  <?php include ('admin-links.php'); ?> 
</head>

<body>

  
  <?php include ('admin-header.php'); ?> 


  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Cattle health history</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Views</li>
          <li class="breadcrumb-item active">Cattle health history</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

        


          </div>

        </div><!-- End Left side columns -->

    <section>
        
            <!-- TABLE STARTS FROM HERE -->
        
            <div class="card">
                <div class="card-body">
                  <h5 class="card-title"> CATTLE HEALTH HISTORY</h5>
    
                  <!-- Table with hoverable rows -->
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th scope="col">Date</th>
                        <th scope="col">Cattle ID</th>
                        <th scope="col">Health issue</th>
                        <th scope="col">Description</th>
                        <th scope="col">Doctor ID</th>
                      </tr>
                    </thead>
                    <tbody>
                      
                    <?php foreach ($outputs as $output) :  ?>
                        <tr>
                            <th scope="row"><?php echo htmlspecialchars($output['date_of_consult']); ?></th>
                            <td><?php echo htmlspecialchars($output['cattle_id']); ?></td>
                            <td><?php echo htmlspecialchars($output['h_issue']); ?></td>
                            <td><?php echo htmlspecialchars($output['h_description']); ?></td>
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