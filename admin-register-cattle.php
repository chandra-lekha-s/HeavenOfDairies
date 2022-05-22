<?php 

// connect to db
$conn=mysqli_connect('localhost','root','','dms');
$sql1= "SELECT * FROM cattle_details ";
$sql2="SELECT  * FROM seller_details";
$result1=mysqli_query($conn,$sql1);
$result2=mysqli_query($conn,$sql2);
$outputs1=mysqli_fetch_all($result1,MYSQLI_ASSOC);
$outputs2=mysqli_fetch_all($result2,MYSQLI_ASSOC);
mysqli_free_result($result1);
mysqli_free_result($result2);
mysqli_close($conn);

$s_id = array();
foreach($outputs2 as $output):
    array_push($s_id,$output['seller_id']);
endforeach; 
           
?>
<!-- <?php print_r($s_id);?> -->

<!DOCTYPE html>
<html lang="en">

<head>
<title>Cattle</title>
  
  <?php include ('admin-links.php'); ?> 
</head>

<body>

  <?php include ('admin-header.php'); ?> 

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Cattle details</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Register</li>
          <li class="breadcrumb-item active">Cattle details</li>
        
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
                  <h5 class="card-title"> CATTLE DETAILS</h5>

                  <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#addCattle" >Add</button>
              <br><br>
              <br>
                  <!-- Table with hoverable rows -->
                  <table class="table datatable">
                    <thead>
                      <tr>
                        <th scope="col">Cattle ID</th>
                        <th scope="col">DOB</th>
                        <th scope="col">DOA</th>
                        <th scope="col">Seller ID</th>
                        <th scope="col">Breed</th>
                        <th scope="col">Actions</th>
                      </tr>
                    </thead>
                    <tbody>

                      <?php foreach ($outputs1 as $output) :  ?>
                        <tr>
                            <th scope="row"><?php echo htmlspecialchars($output['cattle_id']); ?></th>
                            <td><?php echo htmlspecialchars($output['c_dob']); ?></td>
                            <td><?php echo htmlspecialchars($output['c_doa']); ?></td>
                            <td><?php echo htmlspecialchars($output['seller_id']); ?></td>
                            <td><?php echo htmlspecialchars($output['c_breed']); ?></td>
                            <td>
                              <a href="admin-edit-cattle.php?c_id=<?php echo htmlspecialchars($output['cattle_id']) ?>"><i class="ri-edit-2-fill"style="color: blue;" ></i></a>
                              <a href="admin-add-cattle.php?c_id=<?php echo htmlspecialchars($output['cattle_id']) ?>"  ><i class="ri-delete-bin-5-fill" style="color: red;"  data-bs-toggle="modal" data-bs-target="#deleteCattle"></i></a>
                          </td>
                        </tr>
                    <?php endforeach; ?>

                    </tbody>
                  </table>
                  <!-- End Table with hoverable rows -->
                 
                  
                  
    
                </div>
              </div>

              
    <!-- Vertically centered Modal --> 
              <div class="modal fade" id="addCattle" tabindex="-1" > 
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">New cattle's details</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                      <form method="POST" action="admin-add-cattle.php" enctype="multipart/form-data" class="add_form" name="addCattleForm" onsubmit="return validateAddCattle()">
                          <label>Date of cattle's birth: </label><br>
                          <input type="date" name="c_dob" ><br>
                          <span name="constraint">Invalid name</span><br>
                          <label>Date of cattle adoption: </label><br>
                          <input type="date" name="c_doa" ><br>
                          <span name="constraint">Invalid valid date of adoption</span><br>
                          <input type="text" name="c_breed" placeholder="Cattle breed"><br>
                          <span name="constraint">Invalid cattle breed</span><br>
                          <input type="text" name="c_seller_id" placeholder="Seller's id"><br>
                          <span name="constraint">Invalid seller ID</span><br>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" name="add-cattle">Add</button>
                        </div>
                      </form>

                    </div>
                    
                  </div>
                </div>
              </div><!-- End Vertically centered Modal-->


              <!-- Vertically centered Modal -->
          
              <div class="modal fade" id="deleteCattle" tabindex="-1" >
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
    

    let validateAddCattle =()=>{
      let span=document.getElementsByName("constraint");
      let c_dob = document.forms.addCattleForm.c_dob.value.trim();
      let c_doa = document.forms.addCattleForm.c_doa.value.trim();
      let c_breed = document.forms.addCattleForm.c_breed.value.trim();
      let c_seller_id = document.forms.addCattleForm.c_seller_id.value.trim();

      let invalid=0;
      
      if (c_dob == "") {
          span[0].style.display="inline";invalid++;
      }else{
        span[0].style.display="none";
      }
      if (c_doa == "") {
          span[1].style.display="inline";invalid++;
      }else{
        span[1].style.display="none";
      }
      if (c_breed == "") {
          span[2].style.display="inline";invalid++;
      }else{
        span[2].style.display="none";
      }
      if (c_seller_id == "" ) {
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