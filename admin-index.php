<?php 

// connect to db
$conn=mysqli_connect('localhost','root','','dms');

$sql1= "SELECT * FROM cattle_details ";
$sql2= "SELECT * FROM doctor_details ";
$sql3= "SELECT * FROM seller_details ";
$sql4= "SELECT * FROM customer_login ";
$sql5= "SELECT * FROM plans ";
$sql6= "SELECT * FROM products ";
$sql7= "SELECT * FROM vaccine_details ";
$sql8= "SELECT * FROM feedback_support where fs_type='feedback' ";
$sql9= "SELECT * FROM feedback_support where fs_type='support' ";
$sql10= "SELECT * FROM farm_visit ";
$sql11= "SELECT * FROM food_plan ";

$result1=mysqli_query($conn,$sql1);
$result2=mysqli_query($conn,$sql2);
$result3=mysqli_query($conn,$sql3);
$result4=mysqli_query($conn,$sql4);
$result5=mysqli_query($conn,$sql5);
$result6=mysqli_query($conn,$sql6);
$result7=mysqli_query($conn,$sql7);
$result8=mysqli_query($conn,$sql8);
$result9=mysqli_query($conn,$sql9);
$result10=mysqli_query($conn,$sql10);
$result11=mysqli_query($conn,$sql11);

// $result = mysql_query("SELECT * FROM table");
$outputs1 = mysqli_num_rows($result1);

// $outputs1=mysqli_fetch_all($result1,MYSQLI_ASSOC);
$outputs2=mysqli_num_rows($result2);
$outputs3=mysqli_num_rows($result3);
$outputs4=mysqli_num_rows($result4);
$outputs5=mysqli_num_rows($result5);
$outputs6=mysqli_num_rows($result6);
$outputs7=mysqli_num_rows($result7);
$outputs8=mysqli_num_rows($result8);
$outputs9=mysqli_num_rows($result9);
$outputs10=mysqli_num_rows($result10);
$outputs11=mysqli_num_rows($result11);

mysqli_free_result($result1);
mysqli_free_result($result2);
mysqli_free_result($result3);
mysqli_free_result($result4);
mysqli_free_result($result5);
mysqli_free_result($result6);
mysqli_free_result($result7);
mysqli_free_result($result8);
mysqli_free_result($result9);
mysqli_free_result($result10);
mysqli_free_result($result11);

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <title>Dashboard - Heaven of Dairies</title>
  
  <?php include ('admin-links.php'); ?> 
</head>

<body>

  
  <?php include ('admin-header.php'); ?> 


  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->


    <div class="card">
                <div class="card-body">
                  <h5 class="card-title" >Overview</h5><br><br><br>  
  
            <div class="admin-cards" >
              <p style="font-size:80px;"><?php echo $outputs1 ?></p><p style="font-size:25px;line-height:0px;">Cattles</p>
            </div>
            <div class="admin-cards" >
              <p style="font-size:80px;"><?php echo $outputs2 ?></p><p style="font-size:25px;line-height:0px;">Doctors</p>
            </div>
            <div class="admin-cards" >
              <p style="font-size:80px;"><?php echo $outputs3 ?></p><p style="font-size:25px;line-height:0px;">Sellers</p>
            </div>
            <div class="admin-cards" >
              <p style="font-size:80px;"><?php echo $outputs4 ?></p><p style="font-size:25px;line-height:0px;">Customers</p>
            </div>
            <div class="admin-cards" >
              <p style="font-size:80px;"><?php echo $outputs5 ?></p><p style="font-size:25px;line-height:0px;">Offer plans</p>
            </div>
            <div class="admin-cards" >
              <p style="font-size:80px;"><?php echo $outputs6 ?></p><p style="font-size:25px;line-height:0px;">Products</p>
            </div>
            <div class="admin-cards" >
              <p style="font-size:80px;"><?php echo $outputs7 ?></p><p style="font-size:25px;line-height:0px;">Vaccines</p>
            </div>
            <div class="admin-cards" >
              <p style="font-size:80px;"><?php echo $outputs8 ?></p><p style="font-size:25px;line-height:0px;">Feedbacks</p>
            </div>
            <div class="admin-cards" >
              <p style="font-size:80px;"><?php echo $outputs9 ?></p><p style="font-size:25px;line-height:0px;">Support</p>
            </div><div class="admin-cards" >
              <p style="font-size:80px;"><?php echo $outputs10 ?></p><p style="font-size:25px;line-height:0px;">Farm visits</p>
            </div><div class="admin-cards" >
              <p style="font-size:80px;"><?php echo $outputs11 ?></p><p style="font-size:25px;line-height:0px;">Food plans</p>
            </div>


        </div>
      </div>  

      

         

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <!-- <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ 
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </footer><!-- End Footer --> 


       
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