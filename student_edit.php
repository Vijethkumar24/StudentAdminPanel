<?php
 require_once './config/config.php';
  $id=$_GET['id'];
  $sql="SELECT * FROM student WHERE student_id=$id";
  $result=mysqli_query($con,$sql);
 $rowData=mysqli_fetch_assoc($result);
if (isset($_POST['submit'])) {
    $name = $_POST['sName'];
    $dept = $_POST['sDept'];
    $email = $_POST['sEmail'];
    $status = $_POST['status'];
    $query = "UPDATE student SET student_name='$name',student_email='$email',student_status='$status',student_department='$dept' WHERE student_id=$id";
    if (mysqli_query($con, $query)) {
        echo "<script>alert('update successful');</script>";
    }
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
                  <input type="text" id="form3Example1cg" name="sName" class="form-control form-control-lg" value="<?php echo $rowData['student_name']; ?>"  />
                </div>

                <div class="form-outline mb-4">
                  <input type="email" id="form3Example3cg" class="form-control form-control-lg"  value="<?php echo $rowData['student_email']; ?>" name="sEmail"/>
               
                </div>
                <div class="form-outline mb-4">
                    <input type="tel" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" id="form3Example4cdg" class="form-control form-control-lg" value="<?php echo $rowData['student_phone']; ?>" name="sNo"/>
                  </div>

                <div class="form-outline mb-4">
            <select id="form3Example4cdg" name="sDept" class="form-control form-control-lg"style="color:rgba(40, 40, 42, 0.8);" >
            <option value="">Choose</option>
                        <option value="CSE" <?php if ($rowData['student_department'] == 'CSE') {
                                                echo 'selected';
                                            } ?>>CSE</option>
                        <option value="ISE" <?php if ($rowData['student_department'] == 'ISE') {
                                                echo 'selected';
                                            } ?>>ISE</option>
                        <option value="ECE" <?php if ($rowData['student_department'] == 'ECE') {
                                                echo 'selected';
                                            } ?>>ECE</option>
            </select>
                </div>
                <div class="form-outline mb-4">
            <select id="form3Example4cdg" name="status" class="form-control form-control-lg"style="color:rgba(40, 40, 42, 0.8);" >
            <option value="">Choose</option>
                        <option value="ACTIVE" <?php if ($rowData['student_status'] == 'ACTIVE') {
                                                    echo 'selected';
                                                } ?>>ACTIVE</option>
                        <option value="INACTIVE" <?php if ($rowData['student_status'] == 'INACTIVE') {
                                                        echo 'selected';
                                                    } ?>>INACTIVE</option>
            </select>
                </div>
                
                <div class="d-flex justify-content-center">
                  <input type="submit" value="Register" name="submit"
                    class="btn btn-success btn-block btn-lg gradient-custom-4 text-body"/>
                </div>


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