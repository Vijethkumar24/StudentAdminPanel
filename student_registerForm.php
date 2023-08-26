<?php
 require_once './config/config.php';
  if(isset($_POST['submit']))
  {
    $studentName=$_POST['sName'];
    $studentEmail=$_POST['sEmail'];
    $studentPhone=$_POST['sNo'];
    $studentDept=$_POST['sDept'];
    $studentPassword=$_POST['sPass'];
    $studentConfirmPass=$_POST['sRePass'];
    date_default_timezone_set('Asia/Kolkata');
    $status='ACTIVE';
    $time=date('Y-m-d H:i:s');

    if($studentPassword==$studentConfirmPass)
    {
      $sql="INSERT INTO student(student_name,student_email,student_phone,student_department,student_password,student_confirmPass,student_status,student_dateCreation)VALUES('$studentName','$studentEmail','$studentPhone','$studentDept','$studentPassword','$studentConfirmPass','$status',NOW())";
    $result=mysqli_query($con,$sql);
    if($result)
    {
      echo '<script type="text/JavaScript"> 
      alert("Registration Successful");
      </script>';
    }
    }
    else echo '<script type="text/JavaScript"> 
    alert("Password Did Not Match");
    </script>';
  }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">

    </script>
</head>
<body>
    <section class="vh-100 bg-image"
  style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Registration Form</h2>

              <form method="post">
                <div class="form-outline mb-4">
                  <input type="text" id="form3Example1cg" name="sName" class="form-control form-control-lg" placeholder="Enter Your Name:" />
                </div>

                <div class="form-outline mb-4">
                  <input type="email" id="form3Example3cg" class="form-control form-control-lg"  placeholder="Enter Your Email:" name="sEmail"/>
               
                </div>
                <div class="form-outline mb-4">
                    <input type="tel" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" id="form3Example4cdg" class="form-control form-control-lg" placeholder="Enter Your Phone No:" name="sNo" maxlength="12"/>
                  </div>

                <div class="form-outline mb-4">
            <select id="form3Example4cdg" name="sDept" class="form-control form-control-lg"style="color:rgba(40, 40, 42, 0.8);" >
                <option value="" selected>Choose An Branch:</option>
                <option value="CSE">CSE</option>
                <option value="ISE">ISE</option>
                <option value="ECE">ECE</option>
            </select>
                </div>
                <div class="form-outline mb-4">
                    <input type="password" id="form3Example4cdg" class="form-control form-control-lg" placeholder="Enter Your Password:" name="sPass"/>
                  </div>

                <div class="form-outline mb-4">
                  <input type="password" id="form3Example4cdg" class="form-control form-control-lg" placeholder="Re-Enter Your Password:" name="sRePass"/>
                </div>


                <div class="d-flex justify-content-center">
                  <input type="submit" value="Register" name="submit"
                    class="btn btn-success btn-block btn-lg gradient-custom-4 text-body"/>
                </div>

                <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="#!"
                    class="fw-bold text-body"><u>Login here</u></a></p>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

</body>
</html>