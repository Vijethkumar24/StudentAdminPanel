<?php 

require_once './config/config.php';

if(isset($_GET['id']))
{
$id=$_GET['id'];
$sql="DELETE FROM student WHERE student_id=$id";
$result=mysqli_query($con,$sql);
if($result==true)
{
    echo '<script type="text/JavaScript"> 
    alert("Student Deleted Sucessfully");
    </script>';
}
else{
    echo '<script type="text/JavaScript"> 
    alert("Error");
    </script>';
}
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Bootstrap User Management Data Table</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="student.css"/>
<script>
$(document).ready(function(){
	$('[data-toggle="tooltip"]').tooltip();
});
</script>
</head>
<body>
<div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-5">
                        <h2>Student <b>Management</b></h2>
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Student Name</th>		
                        <th>Student Email</th>
                        <th>Student Phone</th>
                        <th>Student Dept</th>
                        <th>Student Creation</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                        <?php 
                                $sql="SELECT * from student";

                                $result=mysqli_query($con,$sql);

                                if(isset($result))
                                {
                                    $i=1;
                                    while($rowData=mysqli_fetch_assoc($result))
                                    {

                                        echo "<tr>";
                                        echo "<td>".$i."</td>";
                                        echo "<td><a href=><img src=./fp.webp width=50px height=50px class=avatar alt=Avatar></a>".$rowData['student_name']."</td>";
                                        echo "<td>".$rowData['student_email']."</td>";                        
                                        echo "<td>".$rowData['student_phone']."</td>";
                                        echo "<td>".$rowData['student_department']."</td>"; 
                                        echo "<td>".$rowData['student_dateCreation']."</td>"; 
                       echo "<td><span style='color:green;'class=status text-success>&bull;</span>".$rowData['student_status']."</td>";
                       echo "<td>
                            <a href='student_edit.php?id=$rowData[student_id]' class=settings title=Settings data-toggle=tooltip><i class=material-icons>&#xE8B8;</i></a>
                            <a href='?id=$rowData[student_id]'.class=delete title=Delete data-toggle=tooltip><i class=material-icons style='color:red';>&#xE5C9;</i></a>
                        </td>";
                    echo "</tr>";
                                    }
                                }

                    ?>
               
                </tbody>
            </table>
            
        </div>
    </div>
</div>     
</body>
</html>