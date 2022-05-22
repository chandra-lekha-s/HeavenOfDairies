<?php 

// connect to db
$conn=mysqli_connect('localhost','root','','dms');
$sql= "SELECT * FROM doctor_details ";
$result=mysqli_query($conn,$sql);
$outputs=mysqli_fetch_all($result,MYSQLI_ASSOC);
mysqli_free_result($result);
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
<title>Doctors</title>
  
  <?php include ('admin-links.php'); ?> 
</head>

<body>

  
  <?php include ('admin-header.php'); ?> 




  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Doctor details</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Register</li>
          <li class="breadcrumb-item active">Doctor details</li>
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
                  <h5 class="card-title"> DOCTOR DETAILS</h5>
    
                  <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#addDoctor" >Add</button>
              <br><br><br>
                  <!-- Table with hoverable rows -->
                  <table class="table datatable">
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Contact</th>
                        <th scope="col">Email</th>
                        <th scope="col">Address</th>
                        <th scope="col">Date of Joining</th>
                        <th scope="col">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      
                      <?php foreach ($outputs as $output) :  ?>
                        <tr>
                            <th scope="row"><?php echo htmlspecialchars($output['doctor_id']); ?></th>
                            <td><?php echo htmlspecialchars($output['d_name']); ?></td>
                            <td><?php echo htmlspecialchars($output['d_contact']); ?></td>
                            <td><?php echo htmlspecialchars($output['d_email']); ?></td>
                            <td><?php echo htmlspecialchars($output['d_address']); ?></td>
                            <td><?php echo htmlspecialchars($output['d_date']); ?></td>
                            <td>
                            <a href="admin-edit-doctor.php?d_id=<?php echo htmlspecialchars($output['doctor_id']) ?>" ><i class="ri-edit-2-fill"style="color: blue;" ></i> </a>
                            <a href="admin-add-doctor.php?d_id=<?php echo htmlspecialchars($output['doctor_id']) ?>" ><i class="ri-delete-bin-5-fill" style="color: red;" data-bs-toggle="modal" data-bs-target="#deleteDoctor"></i></a></td>
                        </tr>
                    <?php endforeach; ?>

                    </tbody>
                  </table>
                  <!-- End Table with hoverable rows -->
    
                </div>
              </div>

              <!-- Vertically centered Modal --> 
              <div class="modal fade" id="addDoctor" tabindex="-1" > 
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Doctor's details</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                      <form method="POST" action="admin-add-doctor.php" enctype="multipart/form-data" class="add_form" name="addDoctorForm" onsubmit="return validateAddDoctor()">
                          <input type="text" name="d_name" placeholder="Name"><br>
                          <span name="constraint">Invalid name</span><br>
                          <input type="number" name="d_contact" placeholder="Contact number"><br>
                          <span name="constraint">Invalid contact number</span><br>
                          <input type="text" name="d_email" placeholder="Email"><br>
                          <span name="constraint">Invalid email</span><br>
                          <input type="text" name="d_address" placeholder="Address"><br>
                          <span name="constraint">Invalid address</span><br>
                          <label>Upload doctor's image : </label><br>
                          <input type="file" name="d_img" placeholder="Image" required><br>
                          <span name="constraint">Invalid image</span><br>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" name="add-doctor">Add</button>
                        </div>
                      </form>

                    </div>
                    
                  </div>
                </div>
              </div><!-- End Vertically centered Modal-->


              <!-- Vertically centered Modal -->
          
              <div class="modal fade" id="deleteDoctor" tabindex="-1" >
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        <p>Kindly wait until the record is deleted</p>                 
                    </div>

                    <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    
                    
                  </div>
                </div>
              </div><!-- End Vertically centered Modal-->
              </div>
                      </div> 
                      </section>
                      </div>
                      </div> 
    </section>

    <section>

        <div class="card">
            <div class="card-body">
              <h5 class="card-title">OUR DOCTORS</h5><br><br><br>

              <?php foreach ($outputs as $output) :  ?>
                <div class="small-cards">
                  <img src="assets/img/<?php echo htmlspecialchars($output['d_img']); ?>">
                  <p style="text-align:center;font-size:20px;font-weight:600;"><?php echo htmlspecialchars($output['d_name']); ?> </p>
                  <p style="text-align:center;font-size:15px;font-weight:400;">( <?php echo htmlspecialchars($output['doctor_id']); ?> )</p>
              	</div>
              <?php endforeach; ?>

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
    let openAddElements =()=>{
	    // let page1 = document.getElementById("addmain1");
	    // page1.style.display="block";
      console.log("HELLP");
    }
    

    let validateAddDoctor =()=>{
      let span=document.getElementsByName("constraint");
      let d_address = document.forms.addDoctorForm.d_address.value.trim();
      let d_name = document.forms.addDoctorForm.d_name.value.trim();
      let d_contact = document.forms.addDoctorForm.d_contact.value.trim();
      let d_email = document.forms.addDoctorForm.d_email.value.trim();

      let invalid=0;
      
      if (d_name == "") {
          span[0].style.display="inline";invalid++;
      }else{
        span[0].style.display="none";
      }
      if (d_contact == "") {
          span[1].style.display="inline";invalid++;
      }else{
        span[1].style.display="none";
      }
      if (d_email == "" ) {
          span[2].style.display="inline";invalid++;
      }else{
        span[2].style.display="none";
      }
      if (d_address == "") {
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