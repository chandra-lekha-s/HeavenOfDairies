<?php 

// connect to db
$conn=mysqli_connect('localhost','root','','dms');
$sql= "SELECT * FROM seller_details ";
$result=mysqli_query($conn,$sql);
$outputs=mysqli_fetch_all($result,MYSQLI_ASSOC);
mysqli_free_result($result);
mysqli_close($conn);
// print_r($outputs);
?>

<!DOCTYPE html>
<html lang="en">

<head>
<title>Sellers</title>
  
  <?php include ('admin-links.php'); ?> 
</head>

<body>

  
  <?php include ('admin-header.php'); ?> 




  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Seller details</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Register</li>
          <li class="breadcrumb-item active">Seller details</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

        


          </div>

        </div><!-- End Left side columns -->

    <section>
        
            
                  <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">SELLER DETAILS</h5>
              
              <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#addSeller" >Add</button>
              <br><br>

              <!-- Table with stripped rows -->
              <br>
              <table class="table datatable">
                <thead>
                  <tr>
                  <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Contact</th>
                        <th scope="col">Email</th>
                        <!-- <th scope="col">Registered</th> -->
                        <th scope="col">Address</th>
                        <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>
                <?php foreach ($outputs as $output) :  ?>
                      <tr>
                        <th scope="row"><?php echo htmlspecialchars($output['seller_id']); ?></th>
                        <td><?php echo htmlspecialchars($output['seller_name']); ?></td>
                        <td><?php echo htmlspecialchars($output['seller_contact']); ?></td>
                        <td><?php echo htmlspecialchars($output['seller_email']); ?></td>
                        <td><?php echo htmlspecialchars($output['seller_address']); ?></td>
                        
                        <td>
                        <a href="admin-edit-seller.php?s_id=<?php echo htmlspecialchars($output['seller_id']) ?>"  ><i class="ri-edit-2-fill" style="color: blue;"></i> </a>
                        <a href="admin-add-seller.php?s_id=<?php echo htmlspecialchars($output['seller_id']) ?>"  ><i class="ri-delete-bin-5-fill" style="color: red;"  data-bs-toggle="modal" data-bs-target="#deleteSeller"></i></a></td>
                      </tr>
                      
                    <?php endforeach; ?>
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

          <!-- Vertically centered Modal -->
          
              <div class="modal fade" id="addSeller" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">New seller's details</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                      <form method="POST" action="admin-add-seller.php" enctype="multipart/form-data" class="add_form" name="addSellerForm" onsubmit="return validateAddSeller()">
                          <input type="text" name="S_name" placeholder="Seller's name"><br>
                          <span name="constraint">Invalid name</span><br>
                          <input type="number" name="S_contact" placeholder="Seller's contact number"><br>
                          <span name="constraint">Invalid contact number</span><br>
                          <input type="text" name="S_email" placeholder="Seller's email"><br>
                          <span name="constraint">Invalid email</span><br>
                          <input type="text" name="S_address" placeholder="Seller's address"><br>
                          <span name="constraint">Invalid address</span><br>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" name="add-seller">Add</button>
                        </div>
                      </form>

                    </div>
                    
                  </div>
                </div>
              </div><!-- End Vertically centered Modal-->


              <!-- Vertically centered Modal -->
          
              <div class="modal fade" id="deleteSeller" tabindex="-1">
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

  <script>

    let validateAddSeller =()=>{
      let span=document.getElementsByName("constraint");
      let s_name = document.forms.addSellerForm.S_name.value.trim();
      let s_contact = document.forms.addSellerForm.S_contact.value.trim();
      let s_email = document.forms.addSellerForm.S_email.value.trim();
      let s_address = document.forms.addSellerForm.S_address.value.trim();

      let invalid=0;
      
      if (s_name == "" || s_name.length<3 || s_name.length>7) {
          span[0].style.display="inline";invalid++;
      }else{
        span[0].style.display="none";
      }
      if (s_contact == "" || s_contact.length<10 || s_contact.length>10) {
          span[1].style.display="inline";invalid++;
      }else{
        span[1].style.display="none";
      }
      if (s_email == "" || s_email.length<13 || s_mail.length>60) {
          span[2].style.display="inline";invalid++;
      }else{
        span[2].style.display="none";
      }
      if (s_address == "" || s_address.length<10 || s_address.length>255) {
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