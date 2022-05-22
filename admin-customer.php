<?php 

// connect to db
$conn=mysqli_connect('localhost','root','','dms');
$sql= "SELECT * FROM customer_login ";
$result=mysqli_query($conn,$sql);
$outputs=mysqli_fetch_all($result,MYSQLI_ASSOC);
mysqli_free_result($result);
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
<title>Customers</title>
  
  <?php include ('admin-links.php'); ?> 
</head>

<body>
  
  <?php include ('admin-header.php'); ?> 

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Customer </h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Customer</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

        


          </div>

        </div><!-- End Left side columns -->

    <section>
        
            <!-- TABLE STARTS FROM HERE -->
        
            <div class="card">
                <div class="card-body">
                  <h5 class="card-title"> CUSTOMER DETAILS</h5>
    
                  <!-- Table with hoverable rows -->
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Contact</th>
                        <th scope="col">Email</th>
                        <th scope="col">Address</th>
                        <th scope="col">Area</th>
                        <th scope="col">Zipcode</th>
                        <th scope="col">Date of Joining</th>
                      </tr>
                    </thead>
                    <tbody>

                    <?php foreach ($outputs as $output) :  ?>
                        <tr>
                            <th scope="row"><?php echo htmlspecialchars($output['customer_id']); ?></th>
                            <td><?php echo htmlspecialchars($output['c_name']); ?></td>
                            <td><?php echo htmlspecialchars($output['c_contact']); ?></td>
                            <td><?php echo htmlspecialchars($output['c_email']); ?></td>
                            <td><?php echo htmlspecialchars($output['c_address']); ?></td>
                            <td><?php echo htmlspecialchars($output['c_area']); ?></td>
                            <td><?php echo htmlspecialchars($output['c_zipcode']); ?></td>
                            <td><?php echo htmlspecialchars($output['c_date_of_record']); ?></td>
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