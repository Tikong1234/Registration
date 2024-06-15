<?php 
include 'connect.php';

$id = $_GET['id'];
if(isset($_POST['submit'])){
    $lname=$_POST['lname'];
    $fname=$_POST['fname'];
    $mname=$_POST['mname'];
    $homeAdd=$_POST['homeAdd'];
    $presentAdd=$_POST['presentAdd'];
    $contact=$_POST['contact'];
    $sex=$_POST['sex'];
    $dateOfbirth=$_POST['dateOfbirth'];
    $email=$_POST['email'];
    $placeOfbirth=$_POST['placeOfbirth'];
    $civilstatus=$_POST['civilstatus'];
    $elementary=$_POST['elementary'];
    $elemgraduated=$_POST['elemgraduated'];
    $highschool=$_POST['highschool'];
    $highgraduated=$_POST['highgraduated'];
    $shs=$_POST['shs'];
    $shsgraduate=$_POST['shsgraduated'];
    $track_strand=$_POST['track_strand'];
    $completename=$_POST['completename'];
    $datesigned=$_POST['datesigned'];
    $course=$_POST['course'];

    $sql="UPDATE `registration` SET `lname`='$lname',`fname`='$fname',`mname`='$mname',`homeAdd`='$homeAdd',`presentAdd`='$presendtAdd',`contact`='$contact',`sex`='$sex',`dateOfbirth`='$dateOfbirth',`email`='$email',`placeOfbirth`='$placeOfbirth',`civilstatus`='$civilstatus',`elementary`='$elementary',`elemgraduated`='$elemgraduated',`highschool`='$highschool',`highgraduated`='$highgraduated',`shs`='$shs',`shsgraduated`='$shsgraduated',`track_strand`='$track_strand',`completename`='$completename',`datesigned`='$datesigned',`course`='$course' WHERE id= $id";
    $result=mysqli_query($conn, $sql);

    if($result){
        header("location: index.php?msg=Record Updated successfully"); 
    }else{

        echo "Failed" . mysqli_error($conn);
    }
}


?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Simple crud operation </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="bootstrap-5.3.0-dist/css/bootstrap.min.css" rel="stylesheet">
</head>
  <body>
    <div class="container my-5">
        <?php 
        
        $sql = "SELECT * FROM `student_info` WHERE id = $id LIMIT 1";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        ?>
        <form method="POST">
  <div class="form-group">
    <label >Last Name:</label>
    <input type="text" class="form-control" name="lname" value="<?php echo $row['lname'];?>" >    
  </div>
  <div class="form-group">
    <label >First Name:</label>
    <input type="text" class="form-control" name="fname" value="<?php echo $row['fname'];?>" >    
  </div>
  <div class="form-group">
    <label >Middle Name:</label>
    <input type="text" class="form-control" name="mname" value="<?php echo $row['mname'];?>" >    
  </div>
   <div class="form-group">
    <label >Home Address:</label>
    <input type="text" class="form-control" value="<?php echo $row['homeAdd'];?>" name="homeAdd" >    
  </div>
  <div class="form-group">
    <label >Present Address:</label>
    <input type="text" class="form-control" name="presentAdd" value="<?php echo $row['presentAdd'];?>" >    
  </div>
  <div class="form-group">
    <label >Contact:</label>
    <input type="text" class="form-control" name="contact" value="<?php echo $row['contact'];?>" >    
  </div>
  <div class="form-group">
    <label >Sex:</label>
    <input type="text" class="form-control" name="sex" value="<?php echo $row['sex'];?>" >    
  </div>
  <div class="form-group">
    <label >Date Of Birth:</label>
    <input type="text" class="form-control" name="dateOfbirth" value="<?php echo $row['dateOfbirth'];?>" >    
  </div>
   <div class="form-group">
    <label >Email:</label>
    <input type="email" class="form-control" value="<?php echo $row['email'];?>" name="email" >    
  </div>
   <div class="form-group">
    <label >Place Of Birth:</label>
    <input type="text" class="form-control" value="<?php echo $row['placeOfbirth'];?>" name="placeOfbirth" >    
  </div>
  <div class="form-group">
    <label >Civil Status:</label>
    <input type="text" class="form-control" name="civilstatus" value="<?php echo $row['civilstatus'];?>" >    
  </div>
  <div class="form-group">
    <label >Elementary:</label>
    <input type="text" class="form-control" name="elementary" value="<?php echo $row['elementary'];?>" >    
  </div>
  <div class="form-group">
    <label >Elementary Graduated:</label>
    <input type="text" class="form-control" name="elemgraduated" value="<?php echo $row['elemgraduated'];?>" >    
  </div>
  <div class="form-group">
    <label >High School:</label>
    <input type="text" class="form-control" name="highschool" value="<?php echo $row['highschool'];?>" >    
  </div>
  <div class="form-group">
    <label >SHS:</label>
    <input type="text" class="form-control" name="shs" value="<?php echo $row['shs'];?>" >    
  </div>
  <div class="form-group">
    <label >SHS Graduated:</label>
    <input type="text" class="form-control" name="shsgraduated" value="<?php echo $row['shsgraduated'];?>" >    
  </div>
  <div class="form-group">
    <label >Track and Strand:</label>
    <input type="text" class="form-control" name="track_strand" value="<?php echo $row['track_strand'];?>" >    
  </div>
  <div class="form-group">
    <label >completename:</label>
    <input type="text" class="form-control" name="completename" value="<?php echo $row['completename'];?>" >    
  </div>
  <div class="form-group">
    <label >Date Signed:</label>
    <input type="text" class="form-control" name="datesigned" value="<?php echo $row['datesigned'];?>" >    
  </div>
  <div class="form-group">
    <label >Course to Enrolled:</label>
    <input type="text" class="form-control" name="course" value="<?php echo $row['course'];?>" >    
  </div>
<br>
  <button type="submit" class="btn btn-primary" name="submit">Update</button>
  <button type="button" class="btn btn-secondary" onclick="cancel()">Cancel</button>
</form>
    </div>

    
  </body>
  <script>
     function cancel() {
            
            window.location.href = 'index.php';
        }
    </script>
  <script src="bootstrap-5.3.0-dist/js/bootstrap.bundle.min.js"></script>
</html>