<?php 

// connect to db
$conn=mysqli_connect('localhost','root','','dms');
$sql= "SELECT * FROM plans ";
$result=mysqli_query($conn,$sql);
$outputs=mysqli_fetch_all($result,MYSQLI_ASSOC);
mysqli_free_result($result);
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
<title>Plans</title>
  
  <?php include ('admin-links.php'); ?> 
</head>

<body>

  
  <?php include ('admin-header.php'); ?>  

  <!-- *****************************       A C T U A L    C O N T E N T      ************************* -->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Plans</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">plans</li>
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
                  <h5 class="card-title" >OFFERED PLANS</h5>         
                  <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#addPlans" >Add</button>
                <br><br><br>       
  
        <?php foreach ($outputs as $output): ?>
            <div class="small-cards">
						  <h2 style="color:white;text-align:center;"><?php echo htmlspecialchars($output['plan_duration']); ?></h2><br>
              <p>Discount : <?php echo htmlspecialchars($output['plan_discount']); ?> % </p>
              <p>Duration : <?php echo htmlspecialchars($output['plan_days']);?> days </p><br>
              <a href="admin-edit-plan.php?p_id=<?php echo htmlspecialchars($output['plan_id']) ?>" ><button name="edit">Edit</button> </a>
              <a href="admin-add-plan.php?p_id=<?php echo htmlspecialchars($output['plan_id']) ?>" ><button  data-bs-toggle="modal" data-bs-target="#deletePlan" >Remove</button></a>
						</div>
        <?php endforeach ?>

        </div>
      </div>  
       <!-- Vertically centered Modal --> 
       <div class="modal fade" id="addPlans" tabindex="-1" > 
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">New Product's details</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                      <form method="POST" action="admin-add-plan.php" enctype="multipart/form-data" class="add_form" name="addPlanForm" onsubmit="return validateAddPlan()">
                          <input type="text" name="p_duration" placeholder="Plan type"><br>
                          <span name="constraint">Invalid plan type</span><br>
                          <input type="number" step="0.01" name="p_discount" placeholder="Product discount"><br>
                          <span name="constraint">Invalid plan discount</span><br>
                          <input type="number" name="p_days" placeholder="Plan duration in days"><br>
                          <span name="constraint">Invalid plan duration</span><br>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" name="add-plan">Add</button>
                        </div>
                      </form>

                    </div>
                    
                  </div>
                </div>
              </div><!-- End Vertically centered Modal-->

              <!-- Vertically centered Modal -->
          
              <div class="modal fade" id="deletePlan" tabindex="-1" >
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        <p>Kindly wait until the product is deleted</p>                 
                    </div>

                    <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    
                    
                  </div>
                </div>
              </div><!-- End Vertically centered Modal--> 
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

    let validateAddPlan =()=>{
      let span=document.getElementsByName("constraint");
      let p_duration = document.forms.addPlanForm.p_duration.value.trim();
      let p_discount = document.forms.addPlanForm.p_discount.value.trim();
      let p_days = document.forms.addPlanForm.p_days.value.trim();

      let invalid=0;
      
      if (p_duration == "") {
          span[0].style.display="inline";invalid++;
      }else{
        span[0].style.display="none";
      }
      if (p_discount == "") {
          span[1].style.display="inline";invalid++;
      }else{
        span[1].style.display="none";
      }
      if (p_days == "") {
          span[2].style.display="inline";invalid++;
      }else{
        span[2].style.display="none";
      }

      if(invalid==0)
        return true;
      else
        return false;
      
    }
  </script>


</body>
</html>